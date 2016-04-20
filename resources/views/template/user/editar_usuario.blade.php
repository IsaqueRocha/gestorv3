@extends('app')
@section('content')

<!-- CABEÇALHO -->
<section class="content-header">
    <h1>
        Gerenciar Usuários
        <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="#"><i class="fa fa-group"></i> Gerenciar Usuários</a></li>
        <li class="active"><i class="fa fa-plus-circle"></i> Editar</li>
    </ol>
</section>
<!-- FIM CABEÇALHO -->

<!-- BOX DO USUÁRIO -->
<section class="content">
    <div class="row">
        <section class="col-md-12">
            <div class="box box-ldi">
                <div class="box-body">
                    <div class="row">
                        @include('template.user._errors')

                        <!-- FORMULÁRIO DE INSERÇÃO-->
                        <form name="adicionarUsuario" role="form" action="{{ url('/users/'.$user->id )}}" method="post" id="adicionarUsuario">
                            {!! csrf_field() !!}
                            {{ method_field('PUT') }}
                            @include('template.user._form')
                        </form>

                        <form name="deletarUsuario" role="form" action="{{ url('/users/'.$user->id) }}" method="post" id="deletarUsuario">
                            {!! csrf_field() !!}
                            {{ method_field('DELETE') }}
                        </form>

                        <form class="" action="index.html" method="post">

                        </form>

                        <div class="col-md-12" style="margin-top:15px;text-align:right;">
                            <!--BOTÕES-->
                            <button class="btn btn-success" type="submit" form="adicionarUsuario" value="Enviar">Salvar</button>
                            <button class="btn btn-danger" value="Excluir" onclick="deleteUser(event);">Excluir</button>
                            <button class="btn btn-warning" type="submit" form="" value="Desativar" onclick="disableUser({{ $user->id }});" >Desativar</button>
                            <button class="btn btn-default" value="Cancelar" onclick="cancelEdit();">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection
