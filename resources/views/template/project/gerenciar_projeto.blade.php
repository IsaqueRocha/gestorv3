@extends('app')
@section('content')
    <!-- CABEÇALHO DO CONTEÚDO -->
    <div class="col-md-12">
        <div class="box box-default collapsed-box box-usuario">
            <div class="box-header with-border usuario-header-box">

                <a href="#" class="botao-adicionar-usuario" data-toggle="tooltip" data-placement="bottom" title="Novo Projeto">
                    <i class="fa fa-plus-circle icones-edicao-usuario"> </i>
                </a>

                <h2 class="titulos">Gerenciar Projetos</h2>

                <div class="filtros-lista">

                    <div class="input-group pesquisar-projeto">
                        <input type="text" class="form-control" placeholder="Buscar projeto">
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-flat" type="button"><span class="fa fa-search"></span></button>
                        </span>
                    </div>

                    <div class="form-group filtro-projetos">
                        <div class="titulo-filtro-projetos">
                            <span>Situação</span>
                        </div>
                        <select class="form-control" title="">
                            <option>Todos</option>
                            <option>Entregues</option>
                            <option>Em andamento</option>
                        </select>
                    </div>

                    <div class="form-group filtro-projetos">
                        <div class="titulo-filtro-projetos">
                            <span>Exibir</span>
                        </div>
                        <select class="form-control" title="">
                            <option>Todos</option>
                            <option>Web</option>
                            <option>Vídeo</option>
                            <option>Diagramação</option>
                            <option>Interno</option>
                            <option>Outro</option>
                        </select>
                    </div>

                </div>

            </div>
        </div>
    </div><!-- FIM CABEÇALHO DO CONTEÚDO -->

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
                        <!-- Aqui entra o nome dos demais estágiários de apoio -->
                        <span class="fa fa-group icon-apoio" data-toggle="tooltip" data-placement="right" title="Antônio Anselmo, Mariana Machado, Rayan Casagrande"></span>
                    </div>
                </div> <hr class="responsivo-inativo" />

                <!-- SITUÇÃO -->
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
                        <!-- Aqui entra o nome dos demais estágiários de apoio -->
                        <span class="fa fa-group icon-apoio" data-toggle="tooltip" data-placement="right" title="Antônio Anselmo, Mariana Machado, Rayan Casagrande"></span>
                    </div>
                </div> <hr class="responsivo-inativo" />

                <!-- SITUÇÃO -->
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
                        <!-- Aqui entra o nome dos demais estágiários de apoio -->
                        <span class="fa fa-group icon-apoio" data-toggle="tooltip" data-placement="right" title="Antônio Anselmo, Mariana Machado, Rayan Casagrande"></span>
                    </div>
                </div> <hr class="responsivo-inativo" />

                <!-- SITUÇÃO -->
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
                        <!-- Aqui entra o nome dos demais estágiários de apoio -->
                        <span class="fa fa-group icon-apoio" data-toggle="tooltip" data-placement="right" title="Antônio Anselmo, Mariana Machado, Rayan Casagrande"></span>
                    </div>
                </div> <hr class="responsivo-inativo" />

                <!-- SITUÇÃO -->
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
                        <!-- Aqui entra o nome dos demais estágiários de apoio -->
                        <span class="fa fa-group icon-apoio" data-toggle="tooltip" data-placement="right" title="Antônio Anselmo, Mariana Machado, Rayan Casagrande"></span>
                    </div>
                </div> <hr class="responsivo-inativo" />

                <!-- SITUÇÃO -->
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
