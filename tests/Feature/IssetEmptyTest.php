<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetEmpty()
    {
        $this->view("isset-empty", [])
            ->assertDontSeeText("Hello")
            ->assertSeeText("I don't have hobbies.", false);

        $this->view("isset-empty", ["name" => "Rahmat"])
            ->assertSeeText("Hello, my name is Rahmat", false)
            ->assertSeeText("I don't have hobbies.", false);

        $this->view("isset-empty", ["name" => "Rahmat", "hobbies" => ["Coding"]])
            ->assertSeeText("Hello, my name is Rahmat", false)
            ->assertDontSeeText("I don't have hobbies.", false);
    }
}
