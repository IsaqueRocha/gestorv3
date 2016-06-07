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
        //Funções de usuário
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

        //Áreas de Usuáregistros
        $roleMaster         =   Defender::createRole('Master');
        $roleGerencia       =   Defender::createRole('Gerência');
        $roleVideo          =   Defender::createRole('Vídeo');
        $roleDiagramacao    =   Defender::createRole('Diagramação');
        $roleIlustracao     =   Defender::createRole('Ilustração');
        $roleWeb            =   Defender::createRole('Web');


    }
}
