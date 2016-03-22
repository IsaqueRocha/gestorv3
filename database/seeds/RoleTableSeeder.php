<?php

use Illuminate\Database\Seeder;
use App\User;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin          = Defender::createRole('Admin');
        $roleCoordenador    = Defender::createRole('Coordenador');
        $roleTecnico        = Defender::createRole('Técnico');
        $roleEstagiario     = Defender::createRole('Estagiário');

        $permission = Defender::createPermission('user.create', 'Criar Usuário');
        $roleAdmin->attachPermission($permission);

        $permission = Defender::createPermission('user.update', 'Atualizar Usuário');
        $roleAdmin->attachPermission($permission);

        $permission = Defender::createPermission('user.destroy', 'Apagar Usuário');
        $roleAdmin->attachPermission($permission);

    }
}
