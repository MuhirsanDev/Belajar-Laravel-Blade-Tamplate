<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class unlessTest extends TestCase
{
    public function testUnless()
    {
        $this->view("unless", ["IsAdmin" => True])
            ->assertDontSeeText("You are not admin");

        $this->view("unless", ["IsAdmin" => False])
            ->assertSeeText("You are not admin");
    }
}
