<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalendarTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Calendar_feature1()
    {
        $response = $this->get('/calendar');

        $response->assertStatus(200);

        $response = $this->get('/calendar/4/1/1959');

        $response->assertStatus(200);

    }

    public function test_Calendar_feature2()
    {
        $this->assertDatabaseHas('calendars', [
            'month' => 10,
            'type' => 'iste'
        ] );
    }
}
