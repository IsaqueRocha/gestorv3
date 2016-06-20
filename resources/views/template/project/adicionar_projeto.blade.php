@extends('app')
@section('content')
<!-- CABEÇALHO -->
<section class="content-header">
    <h1>
        Gerenciar Projetos
        <small>Adicionar novo</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url('/') !!}"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="{!! url('/projects') !!}"><i class="fa fa-tasks"></i> Gerenciar Projetos</a></li>
        <li class="active"><i class="fa fa-plus-circle"></i> Adicionar</li>
    </ol>
</section>
<!-- FIM CABEÇALHO -->

<!-- ADICIONAR USUÁRIO -->
<section class="content">
    <div class="row">
        <section class="col-md-12">
            <div class="box box-ldi">
                <div class="box-body">
                    @include('errors._errors')
                    <form role="form" id="adicionarProjeto" action="{{ url('/projects/create') }}" method="POST">
                        {!! csrf_field() !!}
                        @include('template.project._project_form')
                    </form>
                    <div class="row">
                        <div class="col-md-12" style="margin-top:15px;text-align:right;">
                            <!--BOTÕES-->
                            <button class="btn btn-success" type="submit" form="adicionarProjeto" value="Enviar">Enviar</button>
                            <a href="{{ url('/projects') }}">
                                <button class="btn btn-default" value="Cancelar" >Cancelar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('template.project._modal_teacher')
    </div>
</section> <!-- FIM ADICIONAR USUÁRIO -->
@endsection
