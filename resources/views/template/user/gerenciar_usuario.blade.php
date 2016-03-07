@extends('app')
@section('content')

<!-- CABEÇALHO -->
<section class="content-header">
    <h1>
        Gerenciar Usuários
        <small>Painel Administrativo</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active">Gerenciar Usuários</li>
    </ol>
</section>
<!-- FIM CABEÇALHO -->

<!-- TABELA - LISTA DE USUÁRIOS -->
<section class="content">
    <div class="row">
        <section class="col-md-12 connectedSortable ui-sortable">
            <div class="box box-ldi">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <i class="fa fa-users"></i> Lista de usuários
                    </h3>
                    <div class="box-tools pull-right">
                        <a href="{!! url('/users/create') !!}" class="botao-adicionar-usuario" title="Novo usuário">
                        <button class="btn btn-sm btn-ldi">Novo</button>
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Usuário</th>
                                <th>Função</th>
                                <th>Área</th>
                                <th style="width:40px"><i class="fa fa-edit" title="Editar"></i></th>
                                <th style="width:40px"><i class="fa fa-plus-circle" title="Expandir"></i></th>
                            </tr>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->area }}</td>
                                <td>
                                    <a href="{!! url('/users/'.$user->id.'/edit') !!}">
                                        <i class="fa fa-edit" title="Editar"></i>
                                    </a>
                                </td>
                                <td>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#usuario">
                                        <i class="fa fa-plus-circle" title="Expandir"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="usuario" class="panel-collapse collapse">
                                <td colspan="5">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> 
        </section>
    </div>
</section>
<!-- FIM TABELA - LISTA DE USUÁRIOS -->

@endforeach
@endsection
