<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
	 
    function it_loads_the_users_with_nickname(){
		$this->get('/saludo/gerrard/capashen')
			->assertStatus(200)
			->assertSee('Bienvenido Gerrard, tu apodo es Capashen');
    }
	
	/** @test */
	 
    function it_loads_the_users_without_nickname(){
		$this->get('/saludo/gerrard')
			->assertStatus(200)
			->assertSee('Bienvenido Gerrard');
    }
}
