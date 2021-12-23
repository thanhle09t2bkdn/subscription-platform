<?php

namespace App\Jobs\Posts;

use App\Models\Subscription;
use App\Models\User;
use App\Services\EmailService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NotificationToSubscribersJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $post;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($post)
    {
        $this->post = $post;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $post = $this->post;

        Subscription::where('url', $post['url'])->select(['id', 'email', 'url'])->chunkById(50, function ($records) use ($post) {
            foreach ($records as $record) {
                resolve(EmailService::class)->send($record->email, $post->title, $post->description);
            }
        });
    }
}
