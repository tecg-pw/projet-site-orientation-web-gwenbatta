<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Support\Str;

uses(RefreshDatabase::class);

test('There is a messsage of success when user register', function () {
    $name = 'Titi';
    $firstname = 'Tristan';
    $email = 'titi@gmail.com';
    $password = 'azerty123';
    $this->seed([\Database\Seeders\StatusSeeder::class, \Database\Seeders\StatusTranslationSeeder::class]);

    $response = $this->post('/'.app()->getLocale().'/register', ['name' => $name,
        "firstname" => $firstname,
        'email' => $email,
        'email_verified_at' => now(),
        'password' => password_hash($password, PASSWORD_DEFAULT), // password
        'remember_token' => Str::random(10),
        "slug" => \Str::slug($firstname . $name),
        "avatar" => 'https://placehold.jp/276x276.png',
        'avatars' => json_encode(''),
        'srcset' => json_encode(''),
        "back_image" => 'https://placehold.jp/1920x550.png',
        "back_images" => json_encode(''),
        'srcset_back' => json_encode(''),
        "is_admin" => 1,
        "newsletter" => 0,
        "status_id" => 1]);
    $response->assertRedirect('/'.app()->getLocale())->assertSessionHas('success');

});

test('There is a messsage of success when user login ', function () {
    $name = 'Titi';
    $firstname = 'Tristan';
    $email = 'titi@gmail.com';
    $password = 'azerty123';
    $this->seed([\Database\Seeders\StatusSeeder::class, \Database\Seeders\StatusTranslationSeeder::class]);
    $user = User::create([
        'name' => $name,
        "firstname" => $firstname,
        'email' => $email,
        'email_verified_at' => now(),
        'password' => password_hash($password, PASSWORD_DEFAULT), // password
        'remember_token' => Str::random(10),
        "slug" => \Str::slug($firstname . $name),
        "avatar" => 'https://placehold.jp/276x276.png',
        'avatars' => json_encode(''),
        'srcset' => json_encode(''),
        "back_image" => 'https://placehold.jp/1920x550.png',
        "back_images" => json_encode(''),
        'srcset_back' => json_encode(''),
        "is_admin" => 0,
        "newsletter" => 0,
        "status_id" => 1
    ]);

    $response = $this->post('/'.app()->getLocale().'/login',['email'=>$email, 'password'=>$password]);
    $response->assertRedirect('/'.app()->getLocale())->assertSessionHas('success');
});

test('There is a message of success edit profil', function () {

    $name = 'Titi';
    $firstname = 'Tristan';
    $this->seed([\Database\Seeders\StatusSeeder::class, \Database\Seeders\StatusTranslationSeeder::class]);
    $user = User::create([
        'name' => $name,
        "firstname" => $firstname,
        'email' => fake()->unique()->safeEmail(),
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        "slug" => \Str::slug($firstname . $name),
        "avatar" => 'https://placehold.jp/276x276.png',
        'avatars' => json_encode(''),
        'srcset' => json_encode(''),
        "back_image" => 'https://placehold.jp/1920x550.png',
        "back_images" => json_encode(''),
        'srcset_back' => json_encode(''),
        "is_admin" => 0,
        "newsletter" => 0,
        "status_id" => 1
    ]);
    $new_name = 'Toto';

    actingAs($user)
        ->post('/'.app()->getLocale().'/user/modify', ['name'=>$new_name, 'firstname'=>$user->firstname,'status_id'=>$user->status_id, 'email'=>$user->email])
        ->assertRedirect('/'.app()->getLocale().'/user/profile')->assertSessionHas('status');
});

it('is possible for a person to send a contact message ', function () {
    $name = 'Titi';
    $firstname = 'Toto';
    $email = 'titi@toto.be';
    $subject = fake()->sentence(5);
    $message = fake()->sentence(10);

    $response = $this->post('/'.app()->getLocale().'/contact/student', ['name'=>$name, 'firstname'=>$firstname,'email'=>$email,'subject'=>$subject,'message'=>$message]);
    $response->assertRedirect('/'.app()->getLocale().'/contact/student')->assertSessionHas('success');
});

it('is possible for an agencies to send a placement', function () {

    $name = 'Titi';
    $name_supervisor = 'Toto';
    $email = 'titi@toto.be';
    $subject = fake()->sentence(5);
    $message = fake()->sentence(10);

    $response = $this->post('/'.app()->getLocale().'/contact/agency', ['name'=>$name, 'name_supervisor'=>$name_supervisor,'email'=>$email,'subject'=>$subject,'message'=>$message]);
    $response->assertRedirect('/'.app()->getLocale().'/contact/agency')->assertSessionHas('success');
});
