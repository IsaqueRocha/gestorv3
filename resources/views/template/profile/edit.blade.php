@extends('app')
@section('content')

<!-- CABEÇALHO -->
<section class="content-header">
    <h1>
        Editar Perfil
        <small>{{ $user->name }}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="#"><i class="fa fa-group"></i> Perfil </a></li>
        <li class="active"><i class="fa fa-edit"></i> Editar</li>
    </ol>
</section>
<!-- FIM CABEÇALHO -->

<!-- BOX DO USUÁRIO -->
<section class="content">
    <div class="row">
        <section class="col-md-12">
            <div class="box box-ldi">
                <div class="box-body">
                    <!-- <div class="row"> -->
                    @include('errors._errors')

                    <!-- FORMULÁRIO DE INSERÇÃO-->
                    <form name="adicionarUsuario" role="form" action="{{ url('/users/'.$user->id )}}" method="post" id="adicionarUsuario">
                        {!! csrf_field() !!}
                        {{ method_field('PUT') }}
                        @include('template.user._form')
                    </form>
                    <div class="row">
                        <div class="col-md-12" style="margin-top:15px;text-align:right;">
                            <!--BOTÕES-->
                            <button class="btn btn-success" form="adicionarUsuario" value="Enviar">Salvar</button>
                            <button class="btn btn-default" value="Cancelar" onclick="cancelEdit();">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection

@section('script')
<meta name="_token" content="{!! csrf_token() !!}" />
@endsection
