@extends('app')
@section('head')
<style media="screen">
    #usertable_filter{
        display: none;
    }

    .details-control {
        cursor: pointer;
    }
    tr.shown td.details-control {
    }
</style>
@endsection
@section('content')

<!-- CABEÇALHO -->
<section class="content-header">
    <h1>
        Gerenciar Usuários
        <small>Painel Administrativo</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url('/') !!}"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active"><i class="fa fa-group"></i> Gerenciar Usuários</li>
    </ol>
</section>
<!-- FIM CABEÇALHO -->

<!-- TABELA - LISTA DE USUÁRIOS -->
<section class="content">
    <div class="row">
        <section class="col-md-12 connectedSortable ui-sortable">
            <div class="box box-ldi">
                <div class="box-header">
                    <div>
                        <h3 class="box-title">
                            <i class="fa fa-users"></i> Lista de usuários
                        </h3>
                    </div>
                    <hr>
                    <div>
                        <div class="box-tools">
                            <div class="form-group acoes">
                                <form id="areas">
                                    <div class="rotulo">
                                        Área:
                                    </div>
                                    <!-- <select class="form-control input-sm" onchange="filterArea('{{ env('URL') }}', this.value );"> -->
                                    <select id="selectarea" class="form-control input-sm">
                                        <option value="" >Todos</option>
                                        <option value="Web">Web</option>
                                        <option value="Vídeo">Vídeo</option>
                                        <option value="Diagramação">Diagramação</option>
                                        <option value="Ilustração">Ilustração</option>
                                    </select>
                                </form>

                            </div>

                            <div class="form-group acoes">
                                <form id="roles" method="get">
                                    <div class="rotulo">
                                        Função:
                                    </div>
                                    <select id="selectrole" class="form-control input-sm">
                                        <option value="">Todos</option>
                                        <option value="Estagiário">Estagiário</option>
                                        <option value="Técnico">Técnico</option>
                                        <option value="Coordenador">Coordenador</option>
                                    </select>
                                </form>
                            </div>

                            <div class="input-group pesquisar-projeto acoes">
                                <input id="filter_global" type="text" name="table_search" class="form-control input-sm" style="width: 150px;position:initial;" placeholder="Buscar usuário">
                                <span class="input-group-btn" style="width: auto;position:absolute;right:0;">
                                    <button class="btn btn-sm btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>

                            <div class="acoes">
                                <a href="{{ url('/users/create')}}" title="Novo usuário">
                                    <button class="btn btn-sm btn-success">Novo</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <table id="usertable" class="table table-bordered table-hover table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Função</th>
                                <th>Área</th>
                                <th class="icone"></th>
                                <th class="icone"></th>
                            </tr>
                        </thead>
                    </table>
                </div>
        </section>
    </div>
</section>
<!-- FIM TABELA - LISTA DE USUÁRIOS -->

@endsection
@section('script')
<script type="text/javascript" src="{{ asset('assets/dist/js/ajax-user.js')}}"></script>
<meta name="_token" content="{!! csrf_token() !!}" />
@endsection
