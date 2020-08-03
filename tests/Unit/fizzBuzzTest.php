<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class fizzBuzzTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testFizzBuzzAPICall()
    {
        $response = $this->get('/api/v1/fizzbuzz');
        $response->assertStatus(200);
        dd($response->getData(true));
    }
}
