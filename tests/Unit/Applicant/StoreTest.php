<?php

namespace Tests\Unit\Applicant;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StoreTest extends TestCase
{
    use RefreshDatabase;

    public function testStore()
    {
        $this->post('/applicants/', [
            'email' => 'test@test.com',
            'position' => 'PHP Developer',
            'level' => 'Senior',
        ]);

        $this->assertDatabaseHas('applicants', [
            'id' => 1,
            'email' => 'test@test.com',
            'position' => 'PHP Developer',
            'level' => 'Senior',
        ]);
    }
}
