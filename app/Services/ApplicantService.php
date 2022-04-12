<?php

namespace App\Services;

use App\Applicant;
use App\Http\Requests\Applicant\StoreRequest;
use App\Http\Requests\Applicant\UpdateRequest;
use App\Repositories\ApplicantRepository;

class ApplicantService
{
    private $applicantRepo;

    /**
     * @param ApplicantRepository $applicantRepo
     */
    public function __construct(ApplicantRepository $applicantRepo)
    {
        $this->applicantRepo = $applicantRepo;
    }

    /**
     * @param StoreRequest $request
     * @return void
     */
    public function store(StoreRequest $request)
    {
        $this->applicantRepo->create($request->toArray());
    }

    /**
     * @param UpdateRequest $request
     * @param Applicant $applicant
     * @return void
     */
    public function update(UpdateRequest $request, Applicant $applicant)
    {
        $this->applicantRepo->update($request->toArray(), $applicant);
    }

    /**
     * @param Applicant $applicant
     * @return void
     */
    public function destroy(Applicant $applicant)
    {
        $this->applicantRepo->destroy($applicant);
    }
}
