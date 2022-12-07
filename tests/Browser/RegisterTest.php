<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testItIsPossibleToRegisteredUser()
    {
        $email = 'toto@titi.com';
        $password = 'totoisthebest';
        $name = 'Toto';
        $firstname = 'Titi';

        $this->browse(function (Browser $browser) use ($password,$email,$name,$firstname){
            $browser->visit('/')
                ->clickLink('Connexion')
                ->assertSee('CONNEXION À VOTRE COMPTE')
                ->assertUrlIs('http://tecweb.test/fr/user/login')
                ->clickLink('Je n\'ai pas de compte')
                ->assertUrlIs('http://tecweb.test/fr/user/register')
                ->type('@name', $name)
                ->type('@firstname', $firstname)
                ->type('@email', $email)
                ->type('@password', $password)
                ->click('@register-submit')
                ->assertUrlIs('http://tecweb.test/')
                ->assertSeeIn('@logged-user-name',$firstname.' '.$name);
        });
    }
}
