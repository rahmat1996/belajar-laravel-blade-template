<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get("/hello")->assertStatus(200)
            ->assertSeeText("Laravel");
    }

    public function testHelloWorld()
    {
        $this->get("/world")->assertStatus(200)
            ->assertSeeText("World");
    }

    public function testHelloView()
    {
        $this->view("hello", ["name" => "Laravel"])->assertSeeText("Laravel");
    }

    public function testHelloWorldView()
    {
        $this->view("hello.world", ["name" => "World"])->assertSeeText("World");
    }

}
