<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AccountsTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->visit('/auth/login')->see('Iniciar sesión');
    }
    public function testMakeLogin()
    {
        $this->visit('/auth/login')
            ->type('carlosaguilarnet@gmail.com', 'email')
            ->type('devtest', 'password')
            ->press('login')
            ->seePageIs('/');
    }
    public function testListAccounts()
    {
        $this->visit('/auth/login')
            ->type('carlosaguilarnet@gmail.com', 'email')
            ->type('devtest', 'password')
            ->press('login')
            ->seePageIs('/');
        $this->visit('/accounts')
            ->see('Administración de Cuentas')
            ->dontSee('Usados')
            ->click('Nueva cuenta')
            ->seePageIs('/accounts/create');
    }
    public function testCreateNewAccount()
    {
        $this->visit('/auth/login')
            ->type('carlosaguilarnet@gmail.com', 'email')
            ->type('devtest', 'password')
            ->press('login')
            ->seePageIs('/');
        $this->visit('/accounts/create')
            ->type('Test1', 'first_name')
            ->type('Last1', 'last_name')
            ->type('test@asr.com', 'email')
            ->select('3', 'type_account')
            ->press('create')
            ->seePageIs('/accounts/create');
    }
}
