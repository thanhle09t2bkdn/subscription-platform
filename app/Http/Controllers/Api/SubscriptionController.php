<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\ApiController;
use App\Http\Requests\Subscriptions\SubscriptionCreateRequest;
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

    /**
     * Create Subscription
     *
     * @param SubscriptionCreateRequest $request
     *
     * @return mixed
     */
    public function store(SubscriptionCreateRequest $request)
    {
        $data = $request->only(['email', 'url']);

        $subscriptions = $this->subscriptionRepository->create($data);

        return $this->successResponse($subscriptions);
    }
}
