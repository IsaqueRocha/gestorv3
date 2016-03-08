@extends('app')
@section('content')

<!--TO-DO: REVISAR SE AS CLASSES APLICADAS ESTÃO SENDO UTILIZADAS-->

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
        <section class="col-md-12 connectedSortable ui-sortable">
            <div class="box box-ldi">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <i class="fa fa-clipboard"></i> Lista de projetos
                    </h3>
                    <div class="box-tools pull-right">
                        <div class="input-group pesquisar-projeto acoes">
                            <input type="text" name="table_search" class="form-control input-sm" style="width: 150px;" placeholder="Buscar projeto">
                            <span class="input-group-btn" style="width: auto;">
                                <button class="btn btn-sm btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>

                        <div class="form-group filtro-projetos acoes">
                            <div style="display:inline-block;">
                                Situação
                            </div>
                            <select class="form-control input-sm" style="width:200px;display:inline-block;">
                                <option>Todos</option>
                                <option>Entregues</option>
                                <option>Em andamento</option>
                            </select>
                        </div>

                        <div class="form-group filtro-projetos acoes">
                            <div style="display:inline-block;">
                                Exibir
                            </div>
                            <select class="form-control input-sm" style="width:200px;display:inline-block;">
                                <option>Todos</option>
                                <option>Web</option>
                                <option>Vídeo</option>
                                <option>Diagramação</option>
                                <option>Interno</option>
                                <option>Outro</option>
                            </select>
                        </div>

                        <div class="acoes">
                            <a class="botao-adicionar-usuario" title="Novo projeto">
                                <button class="btn btn-sm btn-ldi">Novo</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Usuário</th>
                                <th>Função</th>
                                <th>Área</th>
                                <th style="width:40px"><i class="fa fa-edit" title="Editar"></i></th>
                                <th style="width:40px"><i class="fa fa-plus-circle" title="Expandir"></i></th>
                            </tr>
                            <tr>
                                <td>NAME</td>
                                <td>ROLE</td>
                                <td>AREA</td>
                                <td>
                                    <a>
                                        <i class="fa fa-edit" title="Editar"></i>
                                    </a>
                                </td>
                                <td>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#usuario">
                                        <i class="fa fa-plus-circle" title="Expandir"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="usuario" class="panel-collapse collapse">
                                <td colspan="5">
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

<hr>

<!-- CABEÇALHO DA LISTA-->
<div class="col-md-12 responsivo-ativo" style="color: #000;">
    <div class="box box-default collapsed-box box-usuario">
        <div class="box-header with-border usuario-header-box">
            <span><h3 class="box-title box-curso">Curso</h3></span>
            <span><h3 class="box-title width-15p">Projeto</h3></span>
            <span><h3 class="box-title box-tipo">Tipo</h3></span>
            <span><h3 class="box-title width-15p">Apoio</h3></span>
            <span><h3 class="box-title width-15p">Situação</h3></span>
            <span><h3 class="box-title width-15p">Progresso</h3></span>
        </div>
    </div>
</div>

<!-- BOX DO PROJETO -->
<div class="col-md-12" style="color: #000;">
    <div class="box box-default collapsed-box box-usuario">
        <div class="box-header with-border usuario-header-box">

            <!-- CUSO -->
            <div class="item-tabela">
                <div class="box-curso width-100-1150 f-l">
                    <span class="responsivo-inativo">
                        <h3 class="box-title box-curso">Curso</h3>
                    </span>
                    <h3 class="box-title sub-box-title artes">Art</h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- NOME DO PROJETO -->
            <div class="item-tabela">
                <div class="width-15p width-100-1150 f-l">
                    <span class="responsivo-inativo">
                        <h3 class="box-title width-15p width-100-1150">Projeto</h3>
                    </span>
                    <h3 class="box-title sub-box-title">Moodle - Seminário</h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- TIPO DE PROJETO -->
            <div class="item-tabela">
                <div class="box-tipo width-100-1150 f-l">
                    <span class="responsivo-inativo">
                        <h3 class="box-title box-tipo">Tipo</h3>
                    </span>

                    <h3 class="box-title width-100-1150 sub-box-title">
                        <span class="fa fa-globe" data-toggle="tooltip" data-placement="top" title="Web"> </span>
                    </h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- APOIO -->
            <div class="item-tabela">
                <div class="width-15p width-100-1150 f-l">

                    <span class="responsivo-inativo">
                        <h3 class="box-title width-15p width-100-1150 ">Apoio</h3>
                    </span>

                    <h3 class="box-title width-100-1150 sub-box-title">Leandro Hora</h3>
                    <!-- Aqui entra o nome dos demais estÃ¡giÃ¡rios de apoio -->
                    <span class="fa fa-group icon-apoio" data-toggle="tooltip" data-placement="right" title="AntÃ´nio Anselmo, Mariana Machado, Rayan Casagrande"></span>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- SITUAÇÃO -->
            <div class="item-tabela">

                <span class="responsivo-inativo">
                    <h3 class="box-title width-15p width-100-1150">Situação</h3>
                </span>

                <div class="width-15p width-100-1150 f-l o_h">
                    <h3 class="box-title sub-box-title">Entregue</h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- BARRA DE PROGRESSO -->
            <div class="item-tabela">

                <span class="responsivo-inativo">
                    <h3 class="box-title width-15p width-100-1150">Progresso</h3>
                </span>

                <div class="width-15p width-100-1150 f-l">
                    <div class="progress progress-sm v-a-m">
                        <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                    </div>
                </div>

                <div class="box-valor-progresso">
                    <h6>
                        <span class="valor-progresso-green">
                            100%
                        </span>
                    </h6>
                </div>
            </div> <hr class="responsivo-inativo" />

            <div class="box-botoes-gerenciar-projeto">

                <!-- VER MAIS -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Detalhes">
                        <span class="fa fa-plus-circle"></span>
                    </a>
                </div>

                <!-- EDITAR -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Editar">
                        <span class="fa fa-edit"></span>
                    </a>
                </div>

                <!-- ADICIONAR MARCO -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Marco">
                        <span class="fa fa-flag"></span>
                    </a>
                </div>

                <!-- ADICIONAR ANDAMENTO -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Andamento">
                        <span class="fa fa-pencil"></span>
                    </a>
                </div>

            </div>

        </div>

    </div>
</div><!-- FIM BOX DO PROJETO -->

<!-- BOX DO PROJETO -->
<div class="col-md-12" style="color: #000;">
    <div class="box box-default collapsed-box box-usuario">
        <div class="box-header with-border usuario-header-box">

            <!-- CUSO -->
            <div class="item-tabela">
                <div class="box-curso width-100-1150 f-l">
                    <span class="responsivo-inativo">
                        <h3 class="box-title box-curso">Curso</h3>
                    </span>
                    <h3 class="box-title sub-box-title artes">Art</h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- NOME DO PROJETO -->
            <div class="item-tabela">
                <div class="width-15p width-100-1150 f-l">
                    <span class="responsivo-inativo">
                        <h3 class="box-title width-15p width-100-1150">Projeto</h3>
                    </span>
                    <h3 class="box-title sub-box-title">Moodle - Seminário</h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- TIPO DE PROJETO -->
            <div class="item-tabela">
                <div class="box-tipo width-100-1150 f-l">
                    <span class="responsivo-inativo">
                        <h3 class="box-title box-tipo">Tipo</h3>
                    </span>

                    <h3 class="box-title width-100-1150 sub-box-title">
                        <span class="fa fa-globe" data-toggle="tooltip" data-placement="top" title="Web"> </span>
                    </h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- APOIO -->
            <div class="item-tabela">
                <div class="width-15p width-100-1150 f-l">

                    <span class="responsivo-inativo">
                        <h3 class="box-title width-15p width-100-1150 ">Apoio</h3>
                    </span>

                    <h3 class="box-title width-100-1150 sub-box-title">Leandro Hora</h3>
                    <!-- Aqui entra o nome dos demais estÃ¡giÃ¡rios de apoio -->
                    <span class="fa fa-group icon-apoio" data-toggle="tooltip" data-placement="right" title="AntÃ´nio Anselmo, Mariana Machado, Rayan Casagrande"></span>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- SITUAÇÃO -->
            <div class="item-tabela">

                <span class="responsivo-inativo">
                    <h3 class="box-title width-15p width-100-1150">Situação</h3>
                </span>

                <div class="width-15p width-100-1150 f-l o_h">
                    <h3 class="box-title sub-box-title">Entregue</h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- BARA DE PROGRESSO -->
            <div class="item-tabela">

                <span class="responsivo-inativo">
                    <h3 class="box-title width-15p width-100-1150">Progresso</h3>
                </span>

                <div class="width-15p width-100-1150 f-l">
                    <div class="progress progress-sm v-a-m">
                        <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                    </div>
                </div>

                <div class="box-valor-progresso">
                    <h6>
                        <span class="valor-progresso-green">
                            100%
                        </span>
                    </h6>
                </div>
            </div> <hr class="responsivo-inativo" />

            <div class="box-botoes-gerenciar-projeto">

                <!-- VER MAIS -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Detalhes">
                        <span class="fa fa-plus-circle"></span>
                    </a>
                </div>

                <!-- EDITAR -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Editar">
                        <span class="fa fa-edit"></span>
                    </a>
                </div>

                <!-- ADICIONAR MARCO -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Marco">
                        <span class="fa fa-flag"></span>
                    </a>
                </div>

                <!-- ADICIONAR ANDAMENTO -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Andamento">
                        <span class="fa fa-pencil"></span>
                    </a>
                </div>

            </div>

        </div>

    </div>
</div><!-- FIM BOX DO PROJETO -->

<!-- BOX DO PROJETO -->
<div class="col-md-12" style="color: #000;">
    <div class="box box-default collapsed-box box-usuario">
        <div class="box-header with-border usuario-header-box">

            <!-- CUSO -->
            <div class="item-tabela">
                <div class="box-curso width-100-1150 f-l">
                    <span class="responsivo-inativo">
                        <h3 class="box-title box-curso">Curso</h3>
                    </span>
                    <h3 class="box-title sub-box-title artes">Art</h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- NOME DO PROJETO -->
            <div class="item-tabela">
                <div class="width-15p width-100-1150 f-l">
                    <span class="responsivo-inativo">
                        <h3 class="box-title width-15p width-100-1150">Projeto</h3>
                    </span>
                    <h3 class="box-title sub-box-title">Moodle - Seminário</h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- TIPO DE PROJETO -->
            <div class="item-tabela">
                <div class="box-tipo width-100-1150 f-l">
                    <span class="responsivo-inativo">
                        <h3 class="box-title box-tipo">Tipo</h3>
                    </span>

                    <h3 class="box-title width-100-1150 sub-box-title">
                        <span class="fa fa-globe" data-toggle="tooltip" data-placement="top" title="Web"> </span>
                    </h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- APOIO -->
            <div class="item-tabela">
                <div class="width-15p width-100-1150 f-l">

                    <span class="responsivo-inativo">
                        <h3 class="box-title width-15p width-100-1150 ">Apoio</h3>
                    </span>

                    <h3 class="box-title width-100-1150 sub-box-title">Leandro Hora</h3>
                    <!-- Aqui entra o nome dos demais estÃ¡giÃ¡rios de apoio -->
                    <span class="fa fa-group icon-apoio" data-toggle="tooltip" data-placement="right" title="AntÃ´nio Anselmo, Mariana Machado, Rayan Casagrande"></span>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- SITUAÇÃO -->
            <div class="item-tabela">

                <span class="responsivo-inativo">
                    <h3 class="box-title width-15p width-100-1150">Situação</h3>
                </span>

                <div class="width-15p width-100-1150 f-l o_h">
                    <h3 class="box-title sub-box-title">Entregue</h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- BARA DE PROGRESSO -->
            <div class="item-tabela">

                <span class="responsivo-inativo">
                    <h3 class="box-title width-15p width-100-1150">Progresso</h3>
                </span>

                <div class="width-15p width-100-1150 f-l">
                    <div class="progress progress-sm v-a-m">
                        <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                    </div>
                </div>

                <div class="box-valor-progresso">
                    <h6>
                        <span class="valor-progresso-green">
                            100%
                        </span>
                    </h6>
                </div>
            </div> <hr class="responsivo-inativo" />

            <div class="box-botoes-gerenciar-projeto">

                <!-- VER MAIS -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Detalhes">
                        <span class="fa fa-plus-circle"></span>
                    </a>
                </div>

                <!-- EDITAR -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Editar">
                        <span class="fa fa-edit"></span>
                    </a>
                </div>

                <!-- ADICIONAR MARCO -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Marco">
                        <span class="fa fa-flag"></span>
                    </a>
                </div>

                <!-- ADICIONAR ANDAMENTO -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Andamento">
                        <span class="fa fa-pencil"></span>
                    </a>
                </div>

            </div>

        </div>

    </div>
</div><!-- FIM BOX DO PROJETO -->

<!-- BOX DO PROJETO -->
<div class="col-md-12" style="color: #000;">
    <div class="box box-default collapsed-box box-usuario">
        <div class="box-header with-border usuario-header-box">

            <!-- CUSO -->
            <div class="item-tabela">
                <div class="box-curso width-100-1150 f-l">
                    <span class="responsivo-inativo">
                        <h3 class="box-title box-curso">Curso</h3>
                    </span>
                    <h3 class="box-title sub-box-title artes">Art</h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- NOME DO PROJETO -->
            <div class="item-tabela">
                <div class="width-15p width-100-1150 f-l">
                    <span class="responsivo-inativo">
                        <h3 class="box-title width-15p width-100-1150">Projeto</h3>
                    </span>
                    <h3 class="box-title sub-box-title">Moodle - Seminário</h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- TIPO DE PROJETO -->
            <div class="item-tabela">
                <div class="box-tipo width-100-1150 f-l">
                    <span class="responsivo-inativo">
                        <h3 class="box-title box-tipo">Tipo</h3>
                    </span>

                    <h3 class="box-title width-100-1150 sub-box-title">
                        <span class="fa fa-globe" data-toggle="tooltip" data-placement="top" title="Web"> </span>
                    </h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- APOIO -->
            <div class="item-tabela">
                <div class="width-15p width-100-1150 f-l">

                    <span class="responsivo-inativo">
                        <h3 class="box-title width-15p width-100-1150 ">Apoio</h3>
                    </span>

                    <h3 class="box-title width-100-1150 sub-box-title">Leandro Hora</h3>
                    <!-- Aqui entra o nome dos demais estÃ¡giÃ¡rios de apoio -->
                    <span class="fa fa-group icon-apoio" data-toggle="tooltip" data-placement="right" title="AntÃ´nio Anselmo, Mariana Machado, Rayan Casagrande"></span>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- SITUAÇÃO -->
            <div class="item-tabela">

                <span class="responsivo-inativo">
                    <h3 class="box-title width-15p width-100-1150">Situação</h3>
                </span>

                <div class="width-15p width-100-1150 f-l o_h">
                    <h3 class="box-title sub-box-title">Entregue</h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- BARA DE PROGRESSO -->
            <div class="item-tabela">

                <span class="responsivo-inativo">
                    <h3 class="box-title width-15p width-100-1150">Progresso</h3>
                </span>

                <div class="width-15p width-100-1150 f-l">
                    <div class="progress progress-sm v-a-m">
                        <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                    </div>
                </div>

                <div class="box-valor-progresso">
                    <h6>
                        <span class="valor-progresso-green">
                            100%
                        </span>
                    </h6>
                </div>
            </div> <hr class="responsivo-inativo" />

            <div class="box-botoes-gerenciar-projeto">

                <!-- VER MAIS -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Detalhes">
                        <span class="fa fa-plus-circle"></span>
                    </a>
                </div>

                <!-- EDITAR -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Editar">
                        <span class="fa fa-edit"></span>
                    </a>
                </div>

                <!-- ADICIONAR MARCO -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Marco">
                        <span class="fa fa-flag"></span>
                    </a>
                </div>

                <!-- ADICIONAR ANDAMENTO -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Andamento">
                        <span class="fa fa-pencil"></span>
                    </a>
                </div>

            </div>

        </div>

    </div>
</div><!-- FIM BOX DO PROJETO -->

<!-- BOX DO PROJETO -->
<div class="col-md-12" style="color: #000;">
    <div class="box box-default collapsed-box box-usuario">
        <div class="box-header with-border usuario-header-box">

            <!-- CUSO -->
            <div class="item-tabela">
                <div class="box-curso width-100-1150 f-l">
                    <span class="responsivo-inativo">
                        <h3 class="box-title box-curso">Curso</h3>
                    </span>
                    <h3 class="box-title sub-box-title artes">Art</h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- NOME DO PROJETO -->
            <div class="item-tabela">
                <div class="width-15p width-100-1150 f-l">
                    <span class="responsivo-inativo">
                        <h3 class="box-title width-15p width-100-1150">Projeto</h3>
                    </span>
                    <h3 class="box-title sub-box-title">Moodle - Seminário</h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- TIPO DE PROJETO -->
            <div class="item-tabela">
                <div class="box-tipo width-100-1150 f-l">
                    <span class="responsivo-inativo">
                        <h3 class="box-title box-tipo">Tipo</h3>
                    </span>

                    <h3 class="box-title width-100-1150 sub-box-title">
                        <span class="fa fa-globe" data-toggle="tooltip" data-placement="top" title="Web"> </span>
                    </h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- APOIO -->
            <div class="item-tabela">
                <div class="width-15p width-100-1150 f-l">

                    <span class="responsivo-inativo">
                        <h3 class="box-title width-15p width-100-1150 ">Apoio</h3>
                    </span>

                    <h3 class="box-title width-100-1150 sub-box-title">Leandro Hora</h3>
                    <!-- Aqui entra o nome dos demais estÃ¡giÃ¡rios de apoio -->
                    <span class="fa fa-group icon-apoio" data-toggle="tooltip" data-placement="right" title="AntÃ´nio Anselmo, Mariana Machado, Rayan Casagrande"></span>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- SITUÃ‡ÃƒO -->
            <div class="item-tabela">

                <span class="responsivo-inativo">
                    <h3 class="box-title width-15p width-100-1150">Situação</h3>
                </span>

                <div class="width-15p width-100-1150 f-l o_h">
                    <h3 class="box-title sub-box-title">Entregue</h3>
                </div>
            </div> <hr class="responsivo-inativo" />

            <!-- BARA DE PROGRESSO -->
            <div class="item-tabela">

                <span class="responsivo-inativo">
                    <h3 class="box-title width-15p width-100-1150">Progresso</h3>
                </span>

                <div class="width-15p width-100-1150 f-l">
                    <div class="progress progress-sm v-a-m">
                        <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                    </div>
                </div>

                <div class="box-valor-progresso">
                    <h6>
                        <span class="valor-progresso-green">
                            100%
                        </span>
                    </h6>
                </div>
            </div> <hr class="responsivo-inativo" />

            <div class="box-botoes-gerenciar-projeto">

                <!-- VER MAIS -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Detalhes">
                        <span class="fa fa-plus-circle"></span>
                    </a>
                </div>

                <!-- EDITAR -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Editar">
                        <span class="fa fa-edit"></span>
                    </a>
                </div>

                <!-- ADICIONAR MARCO -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Marco">
                        <span class="fa fa-flag"></span>
                    </a>
                </div>

                <!-- ADICIONAR ANDAMENTO -->
                <div class="box-tools botao">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Andamento">
                        <span class="fa fa-pencil"></span>
                    </a>
                </div>

            </div>

        </div>

    </div>
</div><!-- FIM BOX DO PROJETO -->

@endsection
