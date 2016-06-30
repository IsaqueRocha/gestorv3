<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = App\User::find(1);

        $this->actingAs($user)
             ->withSession(['foo' => 'bar'])
             ->visit('/projects')
             ->see('Painel Administrativo')
             ->click('Gerenciar Usuários')
             ->seePageIs('/users');

    }
}
