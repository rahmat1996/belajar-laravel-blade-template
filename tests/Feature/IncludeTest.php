<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view('include', [])
            ->assertSeeText("Belajar Laravel Blade Template")
            ->assertSeeText("Selamat Datang di Web")
            ->assertSeeText("Meow!");

        $this->view('include', ["title" => "Rahmat"])
            ->assertSeeText("Rahmat")
            ->assertSeeText("Selamat Datang di Web")
            ->assertSeeText("Meow!");
    }

    
}
