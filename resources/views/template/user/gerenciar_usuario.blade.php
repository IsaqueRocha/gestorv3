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
                                    <a data-toggle="collapse" data-parent="#accordion" href="#usuario{{$user->id}}">
                                        <i class="fa fa-plus-circle" title="Expandir"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="usuario{{$user->id}}" class="panel-collapse collapse">
                                <td colspan="5">
                                    <!-- DADOS DO USUÁRIO -->
                                    <div class="box-body dados-usuario">

                                        <div class="col-md-6">
                                            <label>Nome:</label> <span>{{ $user->name }}</span> <br/>
                                            <label>E-mail: </label> <span>{{ $user->email }}</span> <br/>
                                            <label>CPF: </label> <span>{{ $user->cpf }}</span> <br/>
                                            <label>Telefone: </label> <span>{{ $user->phone }}</span> <br/>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Endereço: </label> <span>{{ $user->address }}</span> <br/>
                                            <label>Função: </label> <span>{{ $user->role }}</span> <br/>
                                            <label>Área de atuação: </label> <span>{{ $user->area }}</span> <br/>
                                            <label>Entrada: </label> <span>{{ $user->entrance_date->format('d/m/Y') }}</span> <br/>
                                        </div>

                                    </div>
                                    <!-- FIM DADOS DO USUÁRIO -->                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</section>
<!-- FIM TABELA - LISTA DE USUÁRIOS -->

@endsection
