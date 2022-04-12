<?php

namespace App\Observers;

use App\Applicant;
use Illuminate\Support\Facades\Mail;

class ApplicantObserver
{
    /**
     * Handle the applicant "created" event.
     *
     * @param Applicant $applicant
     * @return void
     */
    public function created(Applicant $applicant)
    {
        Mail::raw('Your application has been submitted!', function ($message) use ($applicant) {
            $message
                ->to($applicant->email)
                ->subject('Application Submitted');
        });
    }

    /**
     * Handle the applicant "updated" event.
     *
     * @param Applicant $applicant
     * @return void
     */
    public function updated(Applicant $applicant)
    {
        Mail::raw('Your application has been updated!', function ($message) use ($applicant) {
            $message
                ->to($applicant->email)
                ->subject('Application Updated');
        });
    }
}
