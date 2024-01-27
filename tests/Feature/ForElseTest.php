<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForElseTest extends TestCase
{
    public function testForElse(){
        $this->view("forelse", ["hobbies" => []])
        ->assertSee("Tidak punya hobby");

        $this->view("forelse", ["hobbies" => ["Coding", "Gaming"]])
        ->assertSee("Coding")
        ->assertSee("Gaming");
    }
}
