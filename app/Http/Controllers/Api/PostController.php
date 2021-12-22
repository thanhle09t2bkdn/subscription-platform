<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\ApiController;
use App\Http\Requests\Posts\PostCreateRequest;
use App\Repositories\PostRepository;
use App\Services\EmailService;

class PostController extends ApiController
{
    /**
     * Repository
     *
     * @var PostRepository
     */
    private $postRepository;
    private $emailService;

    /**
     * Constructor.
     *
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository, EmailService $emailService)
    {
        $this->postRepository = $postRepository;
        $this->emailService = $emailService;
    }
    public function store(PostCreateRequest $request)
    {
        $this->emailService->send('thanhle09t2bkdn@gmail.com', 'test', 'test');
        return $this->successResponse('test');
    }
}
