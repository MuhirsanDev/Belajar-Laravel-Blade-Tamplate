<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfTest extends TestCase
{
    public function testIF(){
        $this->view("if", ["hobbies" => []])
    ->assertSeeText("I don't have any hobbies!", false);

    $this->view("if", ["hobbies" => ["Coding"]])
    ->assertSeeText("I have one hobbies!");

    $this->view("if", ["hobbies" => ["Coding", "Reading"]])
    ->assertSeeText("I have multiple hobbies!");
    }
    
}
