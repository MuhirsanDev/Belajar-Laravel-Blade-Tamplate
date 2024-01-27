<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SwichTest extends TestCase
{
    public function testSwich(){
        $this->view("swich", ["value" => "A"])
        ->assertSeeText("Memuaskan");

        $this->view("swich", ["value" => "B"])
        ->assertSeeText("Bagus");

        $this->view("swich", ["value" => "C"])
        ->assertSeeText("Cukup");

        $this->view("swich", ["value" => "D"])
        ->assertSeeText("Tidak lulus");
    }
}
