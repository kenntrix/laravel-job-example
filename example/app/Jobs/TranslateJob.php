<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\Job;

class TranslateJob implements ShouldQueue
{
    use Queueable, Dispatchable, InteractsWithQueue, serializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public Job $jobListing)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        logger('Translating' . $this->jobListing->title . 'to Spanish');
        // AI::translate($this->jobListing->description, 'spanish');
    }
}
