<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // immediate pinsetter maintenance
        $response = $this->json('POST', 'api/janitor/pinsetter/maintenance/immediate', ['lane_number' => 1]);
        $response->assertStatus(200);

        // scheduled pinsetter maintenance
        $response = $this->json('POST', 'api/janitor/pinsetter/maintenance/scheduled', ['lane_number' => 3, 'maintenance_datetime' => '2018-04-01 08:13:00']);
        $response->assertStatus(200);

        // clean cafeteria tables
        $response = $this->json('POST', 'api/janitor/cafeteria/cleaning/tables', ['table_number' => 5]);
        $response->assertStatus(204);

        // next maintenance schedule
        $response = $this->get('next-maintenance-date');
        $this->assertContains('Next maintenance date is: 2050-01-01 00:00:00', $response->getContent());
        $response->assertStatus(200);

        // dd(json_decode($response->getContent())->message);
    }
}
