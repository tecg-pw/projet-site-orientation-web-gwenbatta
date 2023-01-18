<?php

it('is possible for a person to send a contact message ', function () {
    $name = 'Titi';
    $firstname = 'Toto';
    $email = 'titi@toto.be';
    $subject = fake()->sentence(5);
    $message = fake()->sentence(10);

    $response = $this->post('/'.app()->getLocale().'/contact/student', ['name'=>$name, 'firstname'=>$firstname,'email'=>$email,'subject'=>$subject,'message'=>$message]);
    $response->assertRedirect('/'.app()->getLocale().'/contact/student');
});

it('is possible for an agencies to send a placement', function () {

    $name = 'Titi';
    $name_supervisor = 'Toto';
    $email = 'titi@toto.be';
    $subject = fake()->sentence(5);
    $message = fake()->sentence(10);

    $response = $this->post('/'.app()->getLocale().'/contact/agency', ['name'=>$name, 'name_supervisor'=>$name_supervisor,'email'=>$email,'subject'=>$subject,'message'=>$message]);
    $response->assertRedirect('/'.app()->getLocale().'/contact/agency');
});
