@extends('app')
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
                                    <select id="selectarea" class="form-control input-sm"65>
                                        <option value="todos">Todos</option>
                                        <option value="web">Web</option>
                                        <option value="video">Vídeo</option>
                                        <option value="diagramacao">Diagramação</option>
                                    </select>
                                </form>

                            </div>

                            <div class="form-group acoes">
                                <form id="roles" method="get">
                                    <div class="rotulo">
                                        Função:
                                    </div>
                                    <select id="selectrole" class="form-control input-sm">
                                        <option value="todos">Todos</option>
                                        <option value="estagiario">Estagiário</option>
                                        <option value="tecnico">Técnico</option>
                                        <option value="coordenador">Coordenador</option>
                                    </select>
                                </form>
                            </div>

                            <div style="display:none;" class="input-group pesquisar-projeto acoes">
                                <input type="text" name="table_search" class="form-control input-sm" style="width: 150px;position:initial;" placeholder="Buscar usuário">
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
                <div class="box-body">
                    <table id="usertable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Usuário</th>
                                <th>Função</th>
                                <th>Área</th>
                                <th class="icone"></th>
                                <th class="icone"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->area }}</td>
                                <td class="icone">
                                    <a href="{!! url('/users/'.$user->id.'/edit') !!}">
                                        <i class="fa fa-edit" title="Editar"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#usuario{{$user->id}}">
                                        <i id="demo{{$user->id}}" class="fa fa-plus-circle" title="Expandir" onclick="trocaPlusMinus({{$user->id}})"></i>
                                    </a>
                                </td>
                            </tr>
                            
                            @endforeach
                        </tbody>
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
<script type="text/javascript">
    $('#usertable').DataTable();
</script>
@endsection
