<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TemplateInheritanceTest extends TestCase
{
    // public function testParent(){
    //     $this->view("child", [])
    //     ->assertSeeText("Nama Aplikasi")
    //     ->assertSeeText("Deskripsi Header")
    //     ->assertSeeText("Ini adalah halaman utama");
    // }

    public function testParentInheritanceWithOutOveride(){
        $this->view("child", [])
        ->assertSeeText("Nama Aplikasi")
        ->assertSeeText("Default Header")
        ->assertSeeText("Default Content")
        ->assertDontSeeText("Deskripsi Header")
        ->assertDontSeeText("Ini adalah halaman utama");
    }
}
