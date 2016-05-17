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
    <div class="row artes">
        <div class="col-md-12">
            <div class="box box-ldi">
                <div class="box-header">
                    <h3 class="box-title">Evento de Artes Visuais</h3>
                </div>
                <div class="box-body">
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
                                <li><b>Composição do Projeto:</b> Vídeo, Impresso</li>
                                <li><b>Complementares:</b> Ilustração</li>
                            </div>
                        </ul>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div class="col-md-4">
                            <b>Progresso:</b>
                            <div class="progress progress-sm" style="margin-top:5px;margin-bottom:0;">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    <span class="sr-only">100% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div><b>Situação:</b></div>
                            <div>Entregue</div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top:20px;">
        <div class="col-md-12">
            <div style="border-top:1px solid #ccc;margin-bottom:20px;"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
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
                                                <label><input type="checkbox" required> Roteiro feito</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" required> Gravação</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" required> Decupagem</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Narrações solicitadas</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="Quantidade necessária" required />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Narrações concluídas</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="Quantidade concluída" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox" required> Montagem</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" required> Animação</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" required> Edição</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" required> Edição sonora</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" required> Transcrição</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" required> Legenda</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" required> Render</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" required> Revisão</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" required> Upload</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" required> DVD</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Data de disponibilidade</label>
                                                <input name="" type="text" value="" class="form-control" placeholder="hh:mm" data-inputmask="'alias': 'hh:mm'" data-mask="" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Início da Gravação</label>
                                                <input name="" type="text" value="" class="form-control" placeholder="hh:mm" data-inputmask="'alias': 'hh:mm'" data-mask="" required/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox" required> Revisado pelo autor</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Conclusão da Gravação</label>
                                                <input name="" type="text" value="" class="form-control" placeholder="hh:mm" data-inputmask="'alias': 'hh:mm'" data-mask="" required/>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box box-ldi">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" href="#impresso">
                            <div class="box-header panel-heading">
                                <h3 class="box-title panel-title"><i class="fa fa-flag"></i>Impresso</h3>
                            </div>
                        </a>
                        <div id="impresso" class="panel-collapse collapse">
                            <div class="box-body panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Fase de diagramação</label>
                                                <select class="form-control" required>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Formato</label>
                                                <select class="form-control" required>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Papel</label>
                                                <select class="form-control" required>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Número de páginas</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="Número de páginas" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox" required> Reunião Autor</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" required> Layout aprovado</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" required> Revisao supervisor</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" required> Capa finalizada</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Texto de orelha</label>
                                                <select class="form-control" required>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Número de capítulos</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="Número de capítulos" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Ficha catalográfica</label>
                                                <select class="form-control" required>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Capítulos finalizados</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="Capítulos finalizados" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Aberturas finalizadas</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="Aberturas finalizadas" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkbox" required>
                                                <label><input type="checkbox"> Créditos aprovados</label>
                                            </div>
                                            <div class="checkbox" required>
                                                <label><input type="checkbox"> Visualização do arquivo</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Prova de Impressão</label>
                                                <select class="form-control" required>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Burocracia</label>
                                                <select class="form-control" required>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Fase da Boneca</label>
                                                <select class="form-control" required>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ISBN</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="ISBN" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Situação do ISBN</label>
                                                <select class="form-control" required>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Memo</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="Memo" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Gráfica</label>
                                                <input name="name" type="text" value="" class="form-control" placeholder="Gráfica" required />
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="box box-ldi">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-flag"></i>Web</h3>
                </div>
                <div class="box-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Necessidade do Usuário</label>
                                    <textarea class="form-control" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Requisitos</label>
                                    <textarea class="form-control" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Objetivo</label>
                                    <textarea class="form-control" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Definição do conteúdo</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Aprovação do Briefing</label>
                                    <input name="" type="text" value="" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/aaaa'" data-mask=""/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label><input type="checkbox" required> Arquitetura da Informação</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Quantidade de layouts</label>
                                    <input name="name" type="text" value="" class="form-control" placeholder="Gráfica" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Quantidade de layouts prontos</label>
                                    <input name="name" type="text" value="" class="form-control" placeholder="Gráfica" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Implementação</label>
                                    <select class="form-control" required>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label><input type="checkbox" required> Teste</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" required> Upload</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-ldi">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-flag"></i>Moodle</h3>
                </div>
                <div class="box-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label><input type="checkbox" required> Adaptação do tema</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" required> Cabeçalho</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" required> Fechamento do tema</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" required> Upload arquivos</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Data do upload</label>
                                    <input name="" type="text" value="" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/aaaa'" data-mask="" required/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection