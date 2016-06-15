@extends('app')
@section('head')
<style media="screen">
    #projecttable_filter{
        display: none;
    }
</style>
@endsection
@section('content')
<!-- CABEÇALHO -->
<section class="content-header">
    <h1>
        Gerenciar Projetos
        <small>Painel Administrativo</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url('/') !!}"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active"><i class="fa fa-tasks"></i> Gerenciar Projetos</li>
    </ol>
</section>
<!-- FIM CABEÇALHO -->

<!-- TABELA - LISTA DE USUÁRIOS -->
<section class="content">
    <div class="row">
        <section class="listaProjetos col-md-12 connectedSortable ui-sortable">
            <div class="box box-ldi">
                <div class="box-header">
                    <div>
                        <h3 class="box-title">
                            <i class="fa fa-clipboard"></i> Lista de projetos
                        </h3>
                    </div>
                    <hr>
                    <div>
                        <div class="box-tools">
                            <div class="form-group acoes">
                                <div class="rotulo">
                                    Exibir
                                </div>
                                <select id="selecttype" class="form-control input-sm">
                                    <option value="">Todos</option>
                                    <option>Livro Digital</option>
                                    <option>Livro Impresso</option>
                                    <option>Moodle</option>
                                    <option>Vídeo</option>
                                    <option>Web</option>
                                    <option>Interativo</option>
                                </select>
                            </div>

                            <div class="form-group acoes">
                                <div class="rotulo">
                                    Situação
                                </div>
                                <select id="selectstatus" class="form-control input-sm">
                                    <option value="">Todos</option>
                                    <option>Na fila</option>
                                    <option>Em andamento</option>
                                    <option>Parado</option>
                                    <option>Finalizado</option>
                                </select>
                            </div>

                            <div class="input-group pesquisar-projeto acoes">
                                <input id="filter_global" type="text" name="table_search" class="form-control input-sm" style="width: 150px;position:initial;" placeholder="Buscar projeto">
                                <span class="input-group-btn" style="width: auto;position:absolute;right:0;">
                                    <button class="btn btn-sm btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>

                            <div class="acoes">
                                <a href="{{ url('/projects/create') }}" title="Novo projeto">
                                    <button class="btn btn-sm btn-success">Novo</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <table id="projecttable" class="table table-bordered table-responsive table-hover" width="100%">
                        <thead>
                            <tr>
                                <th>Curso</th>
                                <th>Projeto</th>
                                <th>Tipo</th>
                                <th>Apoio</th>
                                <th>Situação</th>
                                <th class="icone"></th>
                                <th class="icone"></th>
                                <th class="icone"></th>
                                <th class="icone"></th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div style="display: none;" class="box-body">
                    <table class="table table-bordered table-responsive table-hover" width="100%">
                        <thead>
                            <tr>
                                <th>Curso</th>
                                <th>Projeto</th>
                                <th>Composição</th>
                                <th>Apoio</th>
                                <th>Situação</th>
                                <th>Progresso</th>
                                <th class="icone"></th>
                                <th class="icone"></th>
                                <th class="icone"></th>
                                <th class="icone"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="box-curso" title="Artes"></td>
                                <td>Evento de Artes Visuais</td>
                                <td><i class="fa fa-file-text-o" title="Diagramação"></i> <i class="fa fa-paint-brush" title="Ilustração"></i> <i class="fa fa-video-camera" title="Vídeo"></i></td>
                                <td>Antonio, Mariana, Rayan</td>
                                <td>Na fila</td>
                                <td>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">100% Complete</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="icone">
                                    <a href="{{ url('/projects/andamentos') }}">
                                        <i class="fa fa-eye" title="Visualizar projeto"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a href="{{ url('/projects/marcos') }}">
                                        <i class="fa fa-flag" title="Marcos"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-edit" title="Editar config. do projeto"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#um">
                                        <i class="fa fa-plus-circle" title="Expandir"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="um" class="panel-collapse collapse">
                                <td colspan="10">
                                    <div class="row">
                                        <ul style="list-style:none;padding:0;">
                                            <div class="col-md-4">
                                                <li><b>Nome do projeto:</b> Evento de Artes Visuais</li>
                                                <li><b>Professor:</b> Fabiana Carvalho</li>
                                                <li><b>Curso:</b> Artes Visuais</li>
                                            </div>
                                            <div class="col-md-4">
                                                <li><b>Início</b> 12/05/2016</li>
                                                <li><b>Prazo:</b> 22/06/2016</li>
                                                <li><b>Apoio:</b> Antonio, Mariana, Rayan</li>
                                            </div>
                                            <div class="col-md-4">
                                                <li><b>Tipo do Projeto:</b> Vídeo, Impresso</li>
                                                <li><b>Complementares:</b> Ilustração</li>
                                            </div>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="box-curso" title="Química"></td>
                                <td>Moodle - Seminário</td>
                                <td><i class="fa fa-file-text-o" title="Diagramação"></i> <i class="fa fa-paint-brush" title="Ilustração"></i> <i class="fa fa-globe" title="Web"></i></td>
                                <td>Ana Clara, Pedro, Renato</td>
                                <td>Em andamento</td>
                                <td>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-eye" title="Visualizar projeto"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-flag" title="Marcos"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-edit" title="Editar config. do projeto"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#dois">
                                        <i class="fa fa-plus-circle" title="Expandir"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="dois" class="panel-collapse collapse">
                                <td colspan="10">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </td>
                            </tr>

                            <tr>
                                <td class="box-curso" title="Biologia"></td>
                                <td>Moodle - Seminário</td>
                                <td><i class="fa fa-paint-brush" title="Ilustração"></i> <i class="fa fa-globe" title="Web"></i></td>
                                <td>Hugo, Gabriel</td>
                                <td>Parado</td>
                                <td>
                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-eye" title="Visualizar projeto"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-flag" title="Marcos"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-edit" title="Editar config. do projeto"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#tres">
                                        <i class="fa fa-plus-circle" title="Expandir"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="tres" class="panel-collapse collapse">
                                <td colspan="10">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </td>
                            </tr>

                            <tr>
                                <td class="box-curso" title="Matemática"></td>
                                <td>Moodle - Seminário</td>
                                <td><i class="fa fa-file-text-o" title="Diagramação"></i> <i class="fa fa-video-camera" title="Vídeo"></i></td>
                                <td>André, Elisa, Vinicius</td>
                                <td>Finalizado</td>
                                <td>
                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-eye" title="Visualizar projeto"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-flag" title="Marcos"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-edit" title="Editar config. do projeto"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#quatro">
                                        <i class="fa fa-plus-circle" title="Expandir"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="quatro" class="panel-collapse collapse">
                                <td colspan="10">
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
@endsection
@section('script')
    <script src="{{ asset('assets/dist/js/ajax-project.js' )}}" charset="utf-8"></script>
@endsection
