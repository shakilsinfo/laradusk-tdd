<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use App\Models\User;
class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        //$user = User::factory()->create();
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertPathIs('/login');
        });
    }
}
