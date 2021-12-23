<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\ApiController;
use App\Http\Requests\Posts\PostCreateRequest;
use App\Jobs\Posts\NotificationToSubscribersJob;
use App\Repositories\PostRepository;

class PostController extends ApiController
{
    /**
     * Repository
     *
     * @var PostRepository
     */
    private $postRepository;

    /**
     * Constructor.
     *
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * Create post
     *
     * @param PostCreateRequest $request
     *
     * @return mixed
     */
    public function store(PostCreateRequest $request)
    {
        $data = $request->only(['title', 'description', 'url']);

        $post = $this->postRepository->create($data);

        dispatch(new NotificationToSubscribersJob($post))->onQueue('subscriber-job');

        return $this->successResponse($post);
    }
}
