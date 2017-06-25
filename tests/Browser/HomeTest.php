<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HomeTest extends DuskTestCase
{
    
    /**
     * test que verifica que el usuario ve correcteamente la home
     */
    public function test_view_home()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Inicio')
                    ->assertSee('Biografia')
                    ->assertSee('Foro');       
        });

    }

}
