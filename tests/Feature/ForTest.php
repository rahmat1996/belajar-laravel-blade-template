<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForTest extends TestCase
{
    public function testFor()
    {
        $this->view("for", ["limit" => 10])
            ->assertSeeText("1")
            ->assertSeeText("5")
            ->assertSeeText("10");
    }

    public function testForeach()
    {
        $this->view("foreach", ["hobbies" => ["Coding", "Gaming"]])
            ->assertSeeText("Coding")
            ->assertSeeText("Gaming");
    }

    public function testForElse()
    {
        $this->view("forelse", ["hobbies" => []])
            ->assertSeeText("Tidak Punya Hobby");

        $this->view("forelse", ["hobbies" => ["Coding", "Gaming"]])
            ->assertSeeText("Coding")
            ->assertSeeText("Gaming");
    }
}
