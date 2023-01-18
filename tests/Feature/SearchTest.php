<?php

use App\Models\Tuto;
use App\Models\TutoTranslation;

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('There is results matches to the search global term', function () {
    $tuto = Tuto::factory()->create();
    $tutoTranslation = TutoTranslation::factory()->create(['name'=>'Froggy']);
    $term = 'frog';

    $response = $this->get('/'.app()->getLocale().'/search?search_bar='.$term);
    expect($tutoTranslation->name)->toMatch('/^'.$term.'.*$/i');
});




