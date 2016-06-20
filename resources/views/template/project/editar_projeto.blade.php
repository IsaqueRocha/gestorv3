@extends('app')
@section('content')
<!-- CABEÇALHO -->
<section class="content-header">
    <h1>
        Gerenciar Projetos
        <small>Editar projeto</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url('/') !!}"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="{!! url('/projects') !!}"><i class="fa fa-tasks"></i> Gerenciar Projetos</a></li>
        <li class="active"><i class="fa fa-plus-circle"></i> Editar</li>
    </ol>
</section>
<!-- FIM CABEÇALHO -->

<!-- ADICIONAR USUÁRIO -->
<section class="content">
    <div class="row">
        <section class="col-md-12">
            <div class="box box-ldi">
                <div class="box-body">
                    <form id="editarProjeto" class="" action="{{ url('/projects/'.$project->id)}}" method="POST">
                        {!! csrf_field() !!}
                        {{ method_field('PUT') }}
                        @include('template.project._project_form')
                    </form>
                    <div class="row">
                        <div class="col-md-12" style="margin-top:15px;text-align:right;">
                            <!--BOTÕES-->
                            <button class="btn btn-success" type="submit" form="editarProjeto" value="Enviar">Salvar</button>
                            <a href="{!! url('/projects') !!}">
                                <button class="btn btn-default" type="button" value="Cancelar">Cancelar</button>
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
