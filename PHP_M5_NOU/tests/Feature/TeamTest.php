<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class TeamTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function team_can_be_created()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/teams'/*, ['id'=>'1', 'name'=>'TestTeam', 'city'=>'TestCity', 'stadium'=>'TestStadium', 'color'=>'TestColor', 'created_at'=>'now()', 'updated_at'=>'now()']*/);

        $response->assertOk();
    }
}
