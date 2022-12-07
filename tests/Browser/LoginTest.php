<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testItIsPossibleToLoginForARegisteredUser()
    {
        $email = 'toto@titi.com';
        $password = 'totoisthebest';
        $toto = User::create([
            'name' => 'Toto',
            'firstname' => 'Titi',
            'slug' => 'toto-titi',
            'email' => $email,
            'isAdmin' => true,
            'password' => bcrypt($password),
        ]);

        $this->browse(function (Browser $browser) use ($password, $email,$toto) {
            $browser->visit('/')
                ->clickLink('Connexion')
                ->assertSee('CONNEXION À VOTRE COMPTE')
                ->assertUrlIs('http://tecweb.test/fr/user/login')
                ->type('@email-field', $email)
                ->type('@password-field', $password)
                ->click('@submit-credentials')
                ->assertUrlIs('http://tecweb.test/')
                ->assertSeeIn('@logged-user-name',$toto->firstname.' '.$toto->name);
        });
    }
}
