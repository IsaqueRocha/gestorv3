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
        <div class="col-md-3">
            <div class="box box-ldi">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" href="#livroDigital">
                            <div class="box-header panel-heading">
                                <h3 class="box-title panel-title"><i class="fa fa-flag"></i>Livro Digital</h3>
                            </div>
                        </a>
                        <div id="livroDigital" class="panel-collapse collapse">
                            <div class="box-body panel-body">
                                <form>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Reunião com professor</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Briefing</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Formato</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>epub</option>
                                                    <option>pdf</option>
                                                    <option>mobi</option>
                                                    <option>aplicativo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Capa finalizada</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Número de capítulos</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="30" step="1" value="0" class="form-control">
                                                de 30
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Aberturas de capítulo</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="15" step="1" value="0" class="form-control">
                                                de 15
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Currículo do autor</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Ficha catalográfica</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Pedida</option>
                                                    <option>Inserida</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Aprovação de folha de créditos</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Enviado para o coordenador</option>
                                                    <option>Devolvido com alterações</option>
                                                    <option>Aprovado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Animação 2D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Animação 3D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Fórmula</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Fotografia</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Ilustração</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Modelagem 3D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Programação</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>10%</option>
                                                    <option>20%</option>
                                                    <option>30%</option>
                                                    <option>40%</option>
                                                    <option>50%</option>
                                                    <option>60%</option>
                                                    <option>70%</option>
                                                    <option>80%</option>
                                                    <option>90%</option>
                                                    <option>100%</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tabela</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Revisão pelo professor</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Enviado para o professor</option>
                                                    <option>Devolvido com alterações</option>
                                                    <option>Aprovado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Solicitação do ISBN</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Solicitado a Biblioteca Nacional</option>
                                                    <option>Inserido</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ISBN</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="ISBN" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Revisão do Coordenador LDI</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Upload</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div style="text-align:right;">
                                    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#editLivroDigital" title="Editar atividade">
                                        Editar atividade
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if($project->hasType(2)) {{-- Livro Impresso --}}
        <div class="col-md-3">
            <div class="box box-ldi">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" href="#livroImpresso">
                            <div class="box-header panel-heading" >
                                <h3 class="box-title panel-title"><i class="fa fa-flag"></i>Livro Impresso</h3>
                            </div>
                        </a>
                        <div id="livroImpresso" class="panel-collapse collapse">
                            <div class="box-body panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Reunião com professor</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Briefing</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Formato</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Carta</option>
                                                    <option>Quadrado</option>
                                                    <option>Cartinha</option>
                                                    <option>Outro</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Papel</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Offset</option>
                                                    <option>Couchê fosco</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Texto de orelha</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Aguardando</option>
                                                    <option>Inserido</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Diagramação de capítulos</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 20
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Aberturas de capítulo</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="15" step="1" value="0" class="form-control">
                                                de 15
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Animação 2D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Animação 3D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Fórmula</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Fotografia</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Ilustração</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Modelagem 3D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Programação</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>10%</option>
                                                    <option>20%</option>
                                                    <option>30%</option>
                                                    <option>40%</option>
                                                    <option>50%</option>
                                                    <option>60%</option>
                                                    <option>70%</option>
                                                    <option>80%</option>
                                                    <option>90%</option>
                                                    <option>100%</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tabela</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Número de páginas</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="Número de páginas" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Finalização da capa</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Aprovação do layout</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Boneca</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Impressa</option>
                                                    <option>Com o professor</option>
                                                    <option>Devolvida com alterações</option>
                                                    <option>Aprovada</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Memorando de pedido de impressão</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="Memorando" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Ficha catalográfica</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Não possui</option>
                                                    <option>Aguardando</option>
                                                    <option>Inserida</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Aprovação de folha de créditos</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Enviado para o coordenador</option>
                                                    <option>Devolvido com alterações</option>
                                                    <option>Aprovado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> PDF de visualização</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Revisão pelo Coordenador LDI</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Definição da gráfica</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="Nome da gráfica" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Prova de impressão</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Recebida</option>
                                                    <option>Pedido de nova prova</option>
                                                    <option>Aprovada com correções</option>
                                                    <option>Aprovada</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Relatório da prova de impressão</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ISBN</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Não possui</option>
                                                    <option>Solicitado</option>
                                                    <option>Inserido</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Número do ISBN</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="ISBN" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Organização da pasta do projeto</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Impressão do livro</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Enviado para impressão</option>
                                                    <option>Recebida</option>
                                                    <option>Aprovada com restrições</option>
                                                    <option>Aprovada</option>
                                                    <option>Reprovada</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Relatório da impressão do livro</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Transferência dos arquivos para Projetos Finalizados</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div style="text-align:right;">
                                    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#editLivroImpresso" title="Editar atividade">
                                        Editar atividade
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if($project->hasType(3)) {{-- Moodle --}}
        <div class="col-md-3">
            <div class="box box-ldi">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" href="#moodle">
                            <div class="box-header panel-heading">
                                <h3 class="box-title"><i class="fa fa-flag"></i>Moodle</h3>
                            </div>
                        </a>
                        <div id="moodle" class="panel-collapse collapse">
                            <div class="box-body panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Reunião com professor</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Briefing</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Adaptação do tema/CSS</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Cabeçalho</label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Animação 2D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Animação 3D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Diagramação</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Fórmula</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Fotografia</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Ilustração</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Modelagem 3D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Programação</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>10%</option>
                                                    <option>20%</option>
                                                    <option>30%</option>
                                                    <option>40%</option>
                                                    <option>50%</option>
                                                    <option>60%</option>
                                                    <option>70%</option>
                                                    <option>80%</option>
                                                    <option>90%</option>
                                                    <option>100%</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tabela</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Apresentação</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Enviado por e-mail</option>
                                                    <option>Aprovado</option>
                                                    <option>Aprovado com correções</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Envio para o Suporte</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Checagem online</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Organização da pasta</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr class="row">
                                <div style="text-align:right;">
                                    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#editMoodle" title="Editar atividade">
                                        Editar atividade
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if($project->hasType(4))
        <div class="col-md-3">
            <div class="box box-ldi">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" href="#video">
                            <div class="box-header panel-heading">
                                <h3 class="box-title panel-title"><i class="fa fa-flag"></i>Vídeo</h3>
                            </div>
                        </a>
                        <div id="video" class="panel-collapse collapse">
                            <div class="box-body panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Reunião com professor</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Briefing</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Roteiro</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Em revisão</option>
                                                    <option>Finalizado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Decupagem</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Storyboard</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Captura de áudio</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Gravação</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="30" step="1" value="0" class="form-control">
                                                de 30
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Edição de vídeo</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 20
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Edição sonora</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Em revisão</option>
                                                    <option>Finalizado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Animatic</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Legenda</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Créditos</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Render</label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Animação 2D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Animação 3D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Diagramação</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Fórmula</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Fotografia</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Ilustração</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Modelagem 3D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Programação</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>10%</option>
                                                    <option>20%</option>
                                                    <option>30%</option>
                                                    <option>40%</option>
                                                    <option>50%</option>
                                                    <option>60%</option>
                                                    <option>70%</option>
                                                    <option>80%</option>
                                                    <option>90%</option>
                                                    <option>100%</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tabela</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Revisão pelo Coordenador LDI</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Aprovação pelo professor</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Aprovado</option>
                                                    <option>Aprovado com correções</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Upload</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> DVD</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Data de disponibilidade</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div style="text-align:right;">
                                    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#editVideo" title="Editar atividade">
                                        Editar atividade
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if($project->hasType(5))
        <div class="col-md-3">
            <div class="box box-ldi">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" href="#web">
                            <div class="box-header panel-heading">
                                <h3 class="box-title"><i class="fa fa-flag"></i>Web</h3>
                            </div>
                        </a>
                        <div id="web" class="panel-collapse collapse">
                            <div class="box-body panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Reunião com professor</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Briefing</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Fluxo de Interação</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Quantidade de layouts</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 20
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Animação 2D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Animação 3D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Diagramação</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Fórmula</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Fotografia</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Ilustração</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Modelagem 3D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Programação</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>10%</option>
                                                    <option>20%</option>
                                                    <option>30%</option>
                                                    <option>40%</option>
                                                    <option>50%</option>
                                                    <option>60%</option>
                                                    <option>70%</option>
                                                    <option>80%</option>
                                                    <option>90%</option>
                                                    <option>100%</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tabela</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Teste</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Aprovação pelo professor</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>Aprovado</option>
                                                    <option>Aprovado com correções</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Upload</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div style="text-align:right;">
                                    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#editWeb" title="Editar atividade">
                                        Editar atividade
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if($project->hasType(6))
        <div class="col-md-3">
            <div class="box box-ldi">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" href="#interativo">
                            <div class="box-header panel-heading">
                                <h3 class="box-title"><i class="fa fa-flag"></i>Interativo</h3>
                            </div>
                        </a>
                        <div id="interativo" class="panel-collapse collapse">
                            <div class="box-body panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Reunião com professor</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Briefing</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Fluxo de Interação</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Definição de layout</label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Animação 2D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Animação 3D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Diagramação</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Fórmula</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Fotografia</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Ilustração</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Modelagem 3D</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Programação</label>
                                                <select class="form-control">
                                                    <option>---</option>
                                                    <option>10%</option>
                                                    <option>20%</option>
                                                    <option>30%</option>
                                                    <option>40%</option>
                                                    <option>50%</option>
                                                    <option>60%</option>
                                                    <option>70%</option>
                                                    <option>80%</option>
                                                    <option>90%</option>
                                                    <option>100%</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tabela</label>
                                                <br clear="all">
                                                <input type="number" min="1" max="20" step="1" value="0" class="form-control">
                                                de 1
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Testes</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Upload</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div style="text-align:right;">
                                    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#editInterativo" title="Editar atividade">
                                        Editar atividade
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>

<div id="editWeb" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Web</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Fluxo de Interação</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group" style="margin-top:-5px;margin-bottom:5px;">
                                <span class="input-group-addon">
                                    Quantidade de layouts
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade solicitada">
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Animação 2D
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Animação 3D
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Diagramação
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Fórmula
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Fotografia
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Ilustração
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Modelagem 3D
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Tabela
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="editInterativo" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Interativo</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Fluxo de Interação</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <hr>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Animação 2D
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Animação 3D
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Diagramação
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Fórmula
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Fotografia
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Ilustração
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Modelagem 3D
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Programação</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Tabela
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="editVideo" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Vídeo</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Captura de áudio</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    Gravação
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    Edição de vídeo
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Legenda</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Upload</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> DVD</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Data de disponibilidade</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <hr>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Animação 2D
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Animação 3D
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Diagramação
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Fórmula
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Fotografia
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Ilustração
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Modelagem 3D
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Programação</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Tabela
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="editLivroImpresso" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Livro Impresso</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Texto de orelha</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    Diagramação de capítulos
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Aberturas de capítulo
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Boneca</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Prova de impressão</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Número do ISBN</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <hr>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Animação 2D
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Animação 3D
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Fórmula
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Fotografia
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Ilustração
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Modelagem 3D
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Programação</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Tabela
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="editLivroDigital" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Livro Digital</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    Número de capítulos
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade solicitada">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Aberturas de capítulos
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade solicitada">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Currículo do professor</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Ficha catalográfica</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Solicitação do ISBN</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> ISBN</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="editMoodle" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Moodle</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Adaptação do tema/CSS</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Cabeçalho</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <hr>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Animação 2D
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Animação 3D
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Diagramação
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Fórmula
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Fotografia
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Ilustração
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Modelagem 3D
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="checkbox">
                                <label><input type="checkbox" checked> Programação</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" checked> Tabela
                                </span>
                                <input type="text" class="form-control" placeholder="Quantidade">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
