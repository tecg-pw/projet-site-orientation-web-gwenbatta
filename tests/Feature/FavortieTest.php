<?php
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Support\Str;

uses(RefreshDatabase::class);

it(' is possible for an authenticated user to put/remove tutos on favorite', function () {

    $tuto = \App\Models\Tuto::factory()->create();
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

    actingAs($user)
    ->post('/'.app()->getLocale().'/technical/tuto/favorite/'.$tuto->id)
    ->assertRedirect('/');
});
