<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * Class FixerIOTest
 */
class FixerIOTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_convert_without_parameters()
    {
        // TODO: This is not configured jet

        $response = $this->get('/api/convert',
            [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . env('INTERNAL_USER_API_TOKEN')
            ]
        );

        $response->assertStatus(401);
    }
}
