<?php

namespace App\Services;

use App\Applicant;
use Illuminate\Support\Facades\Mail;

class SubscriptionList
{
    private $applicant;

    /**
     * @param Applicant $applicant
     */
    public function __construct(Applicant $applicant)
    {
        $this->applicant = $applicant;
    }

    /**
     * @return void
     */
    public function sendEmail()
    {
        $emails = $this->applicant->pluck('email')->toArray();

        if (!empty($emails)) {
            Mail::raw('This is a subscription mail!', function ($message) use ($emails) {
                $message
                    ->to($emails)
                    ->subject('Subscription Mail');
            });
        }
    }
}
