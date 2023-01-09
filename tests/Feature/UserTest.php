<?php
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

uses(RefreshDatabase::class);


it('is not possible for a guest user to access the dashboard',function (){

    $response = $this->get('/nova/dashboard');
    $response->assertRedirectToRoute('login');
});

it('is possible for a authenticated user to access the dashboard',function (){

    $first_name = 'Nuno';
    $last_name = 'Maduro';
    $name = 'nunomaduro';
    $email = 'nunomaduro@laravel.com';
    $password = bcrypt('change_this');

    $user= User::create(compact('first_name','last_name','name','email','password'));

    actingAs($user)
        ->get('/dashboard')
        ->assertSee('<h1>Dashboard</h1>',false);
});
