<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testform(){
        $this->view("form", ["user" => [
            "premium" => true,
            "name" => "Ican",
            "admin" => "true"
        ]])
        
        ->assertSee("checked")
        ->assertSee("Ican")
        ->assertDontSee("readonly");



        
        $this->view("form", ["user" => [
            "premium" => false,
            "name" => "Ican",
            "admin" => false
        ]])
        
        ->assertDontSee("checked")
        ->assertSee("Ican")
        ->assertSee("readonly");
    }
}
