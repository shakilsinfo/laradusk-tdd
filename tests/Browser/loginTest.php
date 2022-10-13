<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;

class loginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    /** @test */
    public function a_user_cannot_login_with_invalid_credentials()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'superadmin@gmail.com')
                    ->type('password', 'wrong-password')
                    ->screenshot('filename')
                    ->press('#btn_signin > #btn_signin_text')
                    ->pause(5000)
                    ->assertPathIs('/login')
                    ->assertSee('Credentials Invalid! Please try with correct username or password');
        });
    }
    public function a_user_can_login()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('Returning Customer')
                    ->type('email', 'superadmin@gmail.com')
                    ->type('password', 'ebsl6405')
                    ->screenshot('filename')
                    ->press('#btn_signin > #btn_signin_text')
                    ->pause(5000)
                    ->assertPathIs('/');
        });
    }
}
