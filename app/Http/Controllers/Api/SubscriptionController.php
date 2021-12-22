<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\ApiController;
use App\Http\Requests\Subscriptions\SubscriptionRequest;
use App\Repositories\SubscriptionRepository;

class SubscriptionController extends ApiController
{
    /**
     * Repository
     *
     * @var SubscriptionRepository
     */
    private $subscriptionRepository;

    /**
     * Constructor.
     *
     * @param SubscriptionRepository $subscriptionRepository
     */
    public function __construct(SubscriptionRepository $subscriptionRepository)
    {
        $this->subscriptionRepository = $subscriptionRepository;
    }
    public function store(SubscriptionRequest $request)
    {
        return $this->successResponse('test');
    }
}
