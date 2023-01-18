<?php

use App\Models\Offer;
use App\Models\OfferTranslation;
use App\Models\Partner;
use App\Models\PartnerTranslation;
use App\Models\People;
use App\Models\PersonTranslation;
use App\Models\Subject;
use App\Models\Tuto;
use App\Models\TutoTranslation;

use App\Models\User;
use Database\Seeders\StatusSeeder;
use Database\Seeders\StatusTranslationSeeder;
use Database\Seeders\TagSeeder;
use Database\Seeders\TagTranslationSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('There is results matches to the sort by in tuto view', function () {
    Tuto::factory()->create();
    $tutoTranslation = TutoTranslation::factory()->create(['languages'=>'css','created_at'=>'2023-01-18 17:41:13']);
    $language = 'css';
    $date = '2023-01-18 17:41:13';

    $this->get('/'.app()->getLocale().'/technical/tuto?date='.$date.'&languages='.$language);
    expect($tutoTranslation->languages)->toEqual($language)
        ->and($tutoTranslation->created_at)->toEqual($date);
});

test('There is results matches to the sort by in bottin view', function () {
     People::factory()->create();
    $peopleTranslation = PersonTranslation::factory()->create(['status'=>'student','begin'=>'2023-01-18 17:41:13', 'end'=>'2023-01-18 17:41:13']);
    $status = 'student';
    $date = '2023-01-18 17:41:13';

    $this->get('/'.app()->getLocale().'/technical/tuto?date='.$date.'&status='.$status);
    expect($peopleTranslation->status)->toEqual($status)
        ->and($peopleTranslation->begin)->toEqual($date);
});

test('There is results matches to the sort by in partner view', function () {
    $name = 'léonard web solutions';
    Partner::factory()->create(['id'=>1]);
    $partnerTranslation = PartnerTranslation::create([
        "name" => $name,
        "slug" => Str::slug($name),
        "mail" =>  fake()->unique()->safeEmail(),
        "logo" => "",
        "adresse" => "rue des Anges 14",
        "locality"=>"verviers",
        "locality_number" => 4800,
        "description" => fake()->sentence(12),
        "partner_id" => 1,
        "site_link" => "",
        "link_facebook" => "",
        "link_linkedin" => "",
        "link_instagram" => "",
        "locale" => "fr",
        ]);
    $city = 'verviers';

    $this->get('/'.app()->getLocale().'/entreprise/partner?agency='.$name.'&locality='.$city);
    expect($partnerTranslation->locality)->toEqual($city)
        ->and($partnerTranslation->name)->toEqual($name);
});

test('There is results matches to the sort by in offer view', function () {

    $name = 'léonard web solutions';
    Partner::factory()->create(['id'=>1]);
    $partnerTranslation = PartnerTranslation::create([
        "name" => $name,
        "slug" => Str::slug($name),
        "mail" =>  fake()->unique()->safeEmail(),
        "logo" => "",
        "adresse" => "rue des Anges 14",
        "locality"=>"verviers",
        "locality_number" => 4800,
        "description" => fake()->sentence(12),
        "partner_id" => 1,
        "site_link" => "",
        "link_facebook" => "",
        "link_linkedin" => "",
        "link_instagram" => "",
        "locale" => "fr",
    ]);
    Offer::factory()->create(['partner_id'=>1]);
    $offerTranslation = OfferTranslation::factory()->create(['name'=>'webdesigner']);
    $name = 'webdesigner';
    $name_partner = 'léonard web solutions';

    $this->get('/'.app()->getLocale().'/entreprise/internship?agency=all&jobs='.$name);
    expect($offerTranslation->name)->toEqual($name)
        ->and($partnerTranslation->name)->toEqual($name_partner);
});

test('There is results matches to the sort by in forum', function () {
    $name = 'Titi';
    $firstname = 'Tristan';
    $this->seed([StatusSeeder::class, StatusTranslationSeeder::class, TagSeeder::class, TagTranslationSeeder::class]);
    User::create([
        'name' => $name,
        "firstname" => $firstname,
        'email' => fake()->unique()->safeEmail(),
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        "slug" => Str::slug($firstname . $name),
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
    $subject = Subject::factory()->create(['tag_id'=>1,'resolved'=>false, 'created_at'=>'2023-01-18 17:41:13']);
    $tag = 1;
    $status = false;
    $year = '2023-01-18 17:41:13';

    $this->get('/'.app()->getLocale().'/forum/index?status='.$status.'&tags='.$tag);
    expect($subject->tag_id)->toEqual($tag)
        ->and($subject->resolved)->toEqual($status)
        ->and($subject->created_at)->toEqual($year);
});
