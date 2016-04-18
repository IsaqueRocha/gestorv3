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

                        <!-- FORMULÁRIO -->
                        <form role="form" action="" method="POST" id="adicionarUsuario">
                            {!! csrf_field() !!}
                            @include('template.user._form')
                        </form>

                        <div class="col-md-12" style="margin-top:15px;text-align:right;">
                            <!--BOTÕES-->
                            <button class="btn btn-success" type="submit" form="adicionarUsuario" value="Enviar">Salvar</button>
                            <button class="btn btn-danger" type="submit" form="adicionarUsuario" value="Excluir">Excluir</button>
                            <button class="btn btn-warning" type="submit" form="adicionarUsuario" value="Desativar">Desativar</button>
                            <button class="btn btn-default" type="submit" form="adicionarUsuario" value="Cancelar">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection