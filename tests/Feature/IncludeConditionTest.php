<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeCondition()
    {
        $this->view('include-condition', ["user" => [
            "name" => "Rahmat",
            "owner" => true
        ]])
            ->assertSeeText("Selamat Datang Owner")
            ->assertSeeText("Untuk melihat laporan penjualan, silahkan buka menu laporan")
            ->assertSeeText("Selamat Datang Rahmat");

        $this->view('include-condition', ["user" => [
            "name" => "Rahmat",
            "owner" => false
        ]])
            ->assertDontSeeText("Selamat Datang Owner")
            ->assertDontSeeText("Untuk melihat laporan penjualan, silahkan buka menu laporan")
            ->assertSeeText("Selamat Datang Rahmat");
    }
}
