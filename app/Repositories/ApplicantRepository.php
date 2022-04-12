<?php

namespace App\Repositories;

use App\Applicant;

class ApplicantRepository
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
     * @param array $attributes
     * @return void
     */
    public function create(array $attributes)
    {
        $this->applicant->create($attributes);
    }

    /**
     * @param array $attributes
     * @param Applicant $applicant
     * @return void
     */
    public function update(array $attributes, Applicant $applicant)
    {
        $applicant->update($attributes);
    }

    /**
     * @param Applicant $applicant
     * @return void
     * @throws \Exception
     */
    public function destroy(Applicant $applicant)
    {
        $applicant->delete();
    }
}
