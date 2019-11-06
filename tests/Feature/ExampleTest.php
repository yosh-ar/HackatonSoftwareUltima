<?php

namespace Tests\Feature;

<<<<<<< HEAD
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
>>>>>>> origin/Arturo

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
