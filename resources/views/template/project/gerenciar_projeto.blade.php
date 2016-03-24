@extends('app')
@section('content')
<!-- CABEÇALHO -->
<section class="content-header">
    <h1>
        Gerenciar Projetos
        <small>Painel Administrativo</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active">Gerenciar Projetos</li>
    </ol>
</section>
<!-- FIM CABEÇALHO -->

<!-- TABELA - LISTA DE USUÁRIOS -->
<section class="content">
    <div class="row">
        <section class="listaProjetos col-md-12 connectedSortable ui-sortable">
            <div class="box box-ldi">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <i class="fa fa-clipboard"></i> Lista de projetos
                    </h3>
                    <div class="box-tools pull-right">
                        <div class="form-group acoes">
                            <div class="rotulo">
                                Exibir
                            </div>
                            <select class="form-control input-sm">
                                <option>Todos</option>
                                <option>Web</option>
                                <option>Vídeo</option>
                                <option>Diagramação</option>
                                <option>Interno</option>
                                <option>Outro</option>
                            </select>
                        </div>

                        <div class="form-group acoes">
                            <div class="rotulo">
                                Situação
                            </div>
                            <select class="form-control input-sm">
                                <option>Todos</option>
                                <option>Entregues</option>
                                <option>Em andamento</option>
                            </select>
                        </div>

                        <div class="input-group pesquisar-projeto acoes">
                            <input type="text" name="table_search" class="form-control input-sm" style="width: 150px;" placeholder="Buscar projeto">
                            <span class="input-group-btn" style="width: auto;">
                                <button class="btn btn-sm btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>

                        <div class="acoes">
                            <a title="Novo projeto">
                                <button class="btn btn-sm btn-ldi">Novo</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-striped table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th>Curso</th>
                                <th>Projeto</th>
                                <th>Tipo</th>
                                <th>Apoio</th>
                                <th>Situação</th>
                                <th>Progresso</th>
                                <th class="icone"><i class="fa fa-pencil" title="Editar"></i></th>
                                <th class="icone"><i class="fa fa-flag" title="Expandir"></i></th>
                                <th class="icone"><i class="fa fa-edit" title="Editar"></i></th>
                                <th class="icone"><i class="fa fa-plus-circle" title="Expandir"></i></th>
                            </tr>
                            <tr>
                                <td class="box-curso" title="Artes"></td>
                                <td>Moodle - Seminário</td>
                                <td><i class="fa fa-globe"></i></td>
                                <td>Leandro Hora <i class="fa fa-users" title="Antonio Anselmo, Mariana Machado, Rayan Casagrande"></i></td>
                                <td>Entregue</td>
                                <td>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                            <span class="sr-only">100% Complete</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-pencil" title="Editar"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-flag" title="Editar"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-edit" title="Editar"></i>
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
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </td>
                            </tr>
                            <tr>
                                <td class="box-curso" title="Química"></td>
                                <td>Moodle - Seminário</td>
                                <td><i class="fa fa-globe"></i></td>
                                <td>Renato Delpupo <i class="fa fa-users" title="Antonio Anselmo, Mariana Machado, Rayan Casagrande"></i></td>
                                <td>Parado</td>
                                <td>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-pencil" title="Editar"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-flag" title="Editar"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-edit" title="Editar"></i>
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
                                <td><i class="fa fa-globe"></i></td>
                                <td>Leandro Hora <i class="fa fa-users" title="Antonio Anselmo, Mariana Machado, Rayan Casagrande"></i></td>
                                <td>Atrasado</td>
                                <td>
                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-pencil" title="Editar"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-flag" title="Editar"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-edit" title="Editar"></i>
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
                                <td><i class="fa fa-globe"></i></td>
                                <td>Renato Delpupo <i class="fa fa-users" title="Antonio Anselmo, Mariana Machado, Rayan Casagrande"></i></td>
                                <td>Desenvolvendo</td>
                                <td>
                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-pencil" title="Editar"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-flag" title="Editar"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-edit" title="Editar"></i>
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
