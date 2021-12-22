<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\ApiController;
use App\Http\Requests\Posts\PostCreateRequest;
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
    public function store(PostCreateRequest $request)
    {
        return $this->successResponse('test');
    }
}
