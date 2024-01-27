<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetAndEmpty()
    {
        $this->view("isset-empty", [])
            ->assertDontSeeText("Hello")
            ->assertSeeText("I don't have hobbies", false);


        $this->view("isset-empty", ["name" => "Ican"])
            ->assertSeeText("Hello, my name is Ican", false)
            ->assertSeeText("I don't have hobbies", false);


        $this->view("isset-empty", ["name" => "Ican", "hobbies" => ["Soccer"]])
            ->assertSeeText("Hello, my name is Ican")
            ->assertDontSeeText("I don't have hobbies", false);
    }
}
