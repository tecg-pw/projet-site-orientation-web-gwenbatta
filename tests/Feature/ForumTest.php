<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Support\Str;

uses(RefreshDatabase::class);

it('is not possible for guest to create a subject on forum', function () {

    $response = $this->get('/'.app()->getLocale().'/forum/question');
    $response->assertRedirect('/'.app()->getLocale(). '/user/login');
});

it('is not possible for guest added a like on forum question', function () {

    $question = 'faut-il-etre-bon-en-math-pour-savoir-coder';
    $comment = 3;
    $this->get('/'.app()->getLocale().'/forum/show/'.$question);
    $response = $this->post('/'.app()->getLocale().'/forum/show/'.$question.'/comment/like/'.$comment);
    $response->assertRedirect('/'.app()->getLocale(). '/user/login');
});

it('is not possible for an authentificated user to see the form to create a subject on forum', function () {
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
    ->get('/'.app()->getLocale().'/forum/question')
    ->assertSee('<label class="text-green-500  text-lg xl:text-2xl 2xl:text-3xl" for="subject">Question</label>',false);
});

it('is not possible for an authentificated user to create a subject on forum', function () {
    $name = 'Titi';
    $firstname = 'Tristan';
    $subject = 'test-question';
    $description = fake()->paragraph();
    $this->seed([\Database\Seeders\StatusSeeder::class, \Database\Seeders\StatusTranslationSeeder::class, \Database\Seeders\TagSeeder::class,\Database\Seeders\TagTranslationSeeder::class]);
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
        ->post('/'.app()->getLocale().'/subject',['subject'=>$subject,'description'=>$description,'tag_id'=>1])
        ->assertSee($subject);

});

it('is not possible for an authentificated user to edit a subject on forum', function () {
    $name = 'Titi';
    $firstname = 'Tristan';
    $subject_new = 'test-question';
    $description = fake()->sentence(2);
    $this->seed([\Database\Seeders\StatusSeeder::class, \Database\Seeders\StatusTranslationSeeder::class, \Database\Seeders\TagSeeder::class,\Database\Seeders\TagTranslationSeeder::class]);
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
    $subject = \App\Models\Subject::factory()->create();

    actingAs($user)
        ->post('/'.app()->getLocale().'/modify/'.$subject->slug,['subject'=>$subject_new,'description'=>$description,'tag_id'=>1])
        ->assertSee($subject_new);

});


it('is not possible for an authentificated user to create a comment on forum', function () {
    $name = 'Titi';
    $firstname = 'Tristan';
    $content = fake()->paragraph();
    $this->seed([\Database\Seeders\StatusSeeder::class, \Database\Seeders\StatusTranslationSeeder::class, \Database\Seeders\TagSeeder::class,\Database\Seeders\TagTranslationSeeder::class]);
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
    $subject = \App\Models\Subject::factory()->create();

    actingAs($user)
        ->post('/'.app()->getLocale().'/forum/show/'.$subject->slug,['content'=>$content])
        ->assertRedirect('/'.app()->getLocale().'/forum/show/'.$subject->slug);

});

it('is not possible for an authentificated user to edit a comment on forum', function () {
    $name = 'Titi';
    $firstname = 'Tristan';
    $content = fake()->paragraph();
    $this->seed([\Database\Seeders\StatusSeeder::class, \Database\Seeders\StatusTranslationSeeder::class, \Database\Seeders\TagSeeder::class,\Database\Seeders\TagTranslationSeeder::class]);
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
    $subject = \App\Models\Subject::factory()->create();
    $comment = \App\Models\Comment::factory()->create();

    actingAs($user)
        ->post('/'.app()->getLocale().'/forum/show/'.$subject->slug.'/comment/'.$comment->id, ['content'=>$content])
        ->assertRedirect('/'.app()->getLocale().'/forum/show/'.$subject->slug);

});

it('is not possible for an authentificated user to delete a subject on forum', function () {
    $name = 'Titi';
    $firstname = 'Tristan';
    $description = fake()->paragraph();
    $this->seed([\Database\Seeders\StatusSeeder::class, \Database\Seeders\StatusTranslationSeeder::class, \Database\Seeders\TagSeeder::class,\Database\Seeders\TagTranslationSeeder::class]);
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
    $subject = \App\Models\Subject::factory()->create();

    actingAs($user)
        ->post('/'.app()->getLocale().'/forum/subject/destroy/'.$subject->id)
        ->assertRedirect('/'.app()->getLocale().'/forum/index');

});

it('is not possible for an authentificated user to delete a comment on forum', function () {
    $name = 'Titi';
    $firstname = 'Tristan';
    $description = fake()->paragraph();
    $this->seed([\Database\Seeders\StatusSeeder::class, \Database\Seeders\StatusTranslationSeeder::class, \Database\Seeders\TagSeeder::class,\Database\Seeders\TagTranslationSeeder::class]);
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
    $subject = \App\Models\Subject::factory()->create();
    $comment = \App\Models\Comment::factory()->create();

    actingAs($user)
        ->post('/'.app()->getLocale().'/forum/show/'.$subject->slug.'/comment/destroy/'.$comment->id)
        ->assertRedirect('/'.app()->getLocale().'/forum/show/'.$subject->slug);
});
