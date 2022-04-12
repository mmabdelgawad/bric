<?php

namespace App\Console\Commands;

use App\Services\SubscriptionList;
use Illuminate\Console\Command;

class SendSubscriptionMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscription:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send and mail to subscribers';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(SubscriptionList $subscriptionList)
    {
        $subscriptionList->sendEmail();
    }
}
