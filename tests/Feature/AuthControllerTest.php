<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Faker\Generator;

class AuthControllerTest extends TestCase
{
	use DatabaseTransactions;
    
    public function testRegister() {
    	$user = factory(\App\User::class)->make();

    	$data = [
    		'name' => $user->name,
    		'email' => $user->email,
    		'password' => bcrypt('secret')
    	];
	
    	$response = $this->call('POST', '/api/register', $data);   	
    	
        $response
				->assertStatus(200)
				->assertJson([
					'status' => true,
				]);

    }
    
}
