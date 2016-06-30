@extends('app')
@section('content')
<!-- CABEÇALHO -->
<section class="content-header">
    <h1>
        Gerenciar Projetos
        <small>Marcos</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url('/') !!}"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="{!! url('/projects') !!}"><i class="fa fa-tasks"></i> Gerenciar Projetos</a></li>
        <li class="active"><i class="fa fa-flag"></i> Marcos</li>
    </ol>
    <input type="hidden" name="project_id" value="{{ $project->id }}" id="project_id">
</section>
<!-- FIM CABEÇALHO -->

<!--  -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-curso {{ $project->course->tinyname }}">
                <div class="box-header" data-toggle="collapse" data-target="#cabecalho" style="cursor:pointer;">
                    <h3 class="box-title">{{ $project->title }}</h3>
                </div>
                <div id="cabecalho" class="box-body collapse in">
                    <div class="row">
                        <ul style="list-style:none;padding:0;">
                            <div class="col-md-4">
                                <li><b>Nome do projeto:</b> {{ $project->title }}</li>
                                <li><b>Professor:</b> {{ $project->teacher->name }}</li>
                                <li><b>Curso:</b> {{ $project->course->name }}</li>
                            </div>
                            <div class="col-md-4">
                                <li><b>Início</b> {{ $project->start->format('d/m/Y') }}</li>
                                <li><b>Prazo:</b> {{ $project->deadline->format('d/m/Y') }}</li>
                                <li><b>Apoio:</b>
                                    @foreach($project->users as $user)
                                    {{ $user->name }} /
                                    @endforeach
                                </li>
                            </div>
                            <div class="col-md-4">
                                <li><b>Composição:</b>
                                    @foreach($project->types as $type )
                                    {{ $type->name }} /
                                    @endforeach
                                </li>
                            </div>
                        </ul>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div class="col-md-4">
                            <div><b>Situação:</b></div>
                            <div>{{$project->status->name }}</div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top:10px;">
        <div class="col-md-12">
            <div style="border-top:1px solid #ccc;margin-bottom:10px;"></div>
        </div>
    </div>

    <div class="row composicaoProjeto">
        <div class="col-md-12" style="margin-bottom:15px;"><h4>Composição do projeto</h4></div>

        @if($project->hasType(1)){{-- Livro Digital --}}
            @include('template.project.mark.digital')
        @endif

        @if($project->hasType(2)) {{-- Livro Impresso --}}
            @include('template.project.mark.impress')
        @endif

        @if($project->hasType(3)) {{-- Moodle --}}
            @include('template.project.mark.moodle')
        @endif

        @if($project->hasType(4)) {{-- Vídeo --}}
            @include('template.project.mark.video')
        @endif

        @if($project->hasType(5)){{-- Web --}}
            @include('template.project.mark.web')
        @endif

        @if($project->hasType(6)){{-- Interativo --}}
            @include('template.project.mark.interactive')

        @endif
    </div>
</section>

@include('template.project.mark.web_modal')

@include('template.project.mark.interactive_modal')

@include('template.project.mark.video_modal')

@include('template.project.mark.impress_modal')

@include('template.project.mark.digital_modal')

@include('template.project.mark.moodle_modal')

@endsection

@section('script')
    <meta name="_token" content="{!! csrf_token() !!}" />
    <script src="{{ asset('assets/dist/js/ajax-mark.js') }}" charset="utf-8"></script>
@endsection
