<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
uses(RefreshDatabase::class);

it('sets the lang attribute of the main page according to the url locale segment ', function () {
    $locale = 'fr';

    $response = $this->get('/'.$locale);
    $this->assertTrue(app()->getLocale() === $locale);
    $response->assertSee('lang="'.$locale.'"',false);
});

it('redirects to the browser\'s preferred language if there is no locale in the url', function () {

    $locale = '';
    $response = $this->get('/'.$locale);
    $response->assertRedirect('/'.substr(Request::server('HTTP_ACCEPT_LANGUAGE'), 0, 2));
});
