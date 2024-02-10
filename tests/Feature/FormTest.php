<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", [
            "user" => [
                "premium" => true,
                "name" => "Rahmat",
                "admin" => true
            ]
        ])
            ->assertSee("checked")
            ->assertSee("Rahmat")
            ->assertDontSee("readonly");

        $this->view("form", [
            "user" => [
                "premium" => false,
                "name" => "Rahmat",
                "admin" => false
            ]
        ])
            ->assertDontSee("checked")
            ->assertSee("Rahmat")
            ->assertSee("readonly");
    }
}
