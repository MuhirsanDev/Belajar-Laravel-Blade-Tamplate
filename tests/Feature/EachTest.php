<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach(){
        $this->view("each", ["users" => [
            [
                "name" => "Ican",
                "hobbies" => ["Coding", "Gaming"]
            ],
            [
                "name" => "Muhirsan",
                "hobbies" => ["Coding", "Gaming"]
            ]
        ]])

        ->assertSeeInOrder([".red", "Ican", "Coding", "Gaming", "Muhirsan", "Coding", "Gaming"]);

    }
}
