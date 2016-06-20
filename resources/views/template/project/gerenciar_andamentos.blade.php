@extends('app')
@section('content')
<!-- CABEÇALHO -->
<section class="content-header">
    <h1>
        Gerenciar Projetos
        <small>Visualizar</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url('/') !!}"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="{!! url('/projects') !!}"><i class="fa fa-tasks"></i> Gerenciar Projetos</a></li>
        <li class="active"><i class="fa fa-eye"></i> Visualizar</li>
    </ol>
</section>
<!-- FIM CABEÇALHO -->

<!--  -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-curso art">
                <div class="box-header" data-toggle="collapse" data-target="#cabecalho" style="cursor:pointer;">
                    <h3 class="box-title">Evento de Artes Visuais</h3>
                </div>
                <div id="cabecalho" class="box-body collapse in">
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
                                <li><b>Composição:</b> Vídeo, Impresso</li>
                            </div>
                        </ul>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div class="col-md-4">
                            <div><b>Situação:</b></div>
                            <div>Entregue</div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
            <div class="row nav-filter">
                <div class="col-md-6 col-sm-12 left">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#adcAnd" title="Adicionar andamento">
                        <i class="fa fa-bookmark" style="margin-right:2px;"></i> Adicionar andamento
                    </button>
                    <a href="{{ url('/projects/marcos') }}" target="_blank">
                        <button type="button" class="btn btn-primary" title="Ver/editar marcos em nova aba">
                            <i class="fa fa-flag" style="margin-right:2px;"></i> Ver/editar marcos
                        </button>
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 right">
                    <div class="form-inline">
                        <div class="form-group" style="margin-left:10px;">
                            <label>Usuário</label>
                            <select class="form-control">
                                <option>Todos</option>
                                <option>Antonio</option>
                                <option>Rayan</option>
                            </select>
                        </div>
                        <div class="form-group" style="margin-left:10px;">
                            <label>Tipo</label>
                            <select class="form-control">
                                <option>Tudo</option>
                                <option>Andamentos</option>
                                <option>Marcos</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <div style="border-top:1px solid #ccc;margin-bottom:20px;"></div>
        </div>
        <div class="col-md-12">
            <!-- The time line -->
            <ul class="timeline">
                <!-- timeline time label -->
                <li class="time-label">
                    <span class="bg-ldi">
                        22 Jun. 2016
                    </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                    <i class="fa fa-check bg-green"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 14:56</span>
                        <h3 class="timeline-header no-border"><a href="#">Giulliano</a> adicionou um marco: <b>Projeto finalizado</b></h3>
                    </div>
                </li>
                <!-- END timeline item -->
                <li class="time-label">
                    <span class="bg-ldi">
                        21 Jun. 2016
                    </span>
                </li>
                <!-- timeline item -->
                <li>
                    <i class="fa fa-comment bg-blue"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 08:00 - 12:00</span>
                        <h3 class="timeline-header"><a href="#">Rayan</a> contribuiu com: <b>Conclusão das ilustrações</b></h3>
                        <div class="timeline-body">
                            Hoje me reuni com o professor responsável e consegui aprovação de todas as ilustrações que estavam pendentes.
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                    <i class="fa fa-comment bg-blue"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 09:00 - 11:00</span>
                        <h3 class="timeline-header"><a href="#">Antônio</a> contribuiu com: <b>Início do banner</b></h3>
                        <div class="timeline-body">
                            Hoje eu comecei a diagramação do banner de divulgação.
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline time label -->
                <li class="time-label">
                    <span class="bg-ldi">
                        10 Maio 2016
                    </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                    <i class="fa fa-rocket bg-ldi"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 11:32</span>
                        <h3 class="timeline-header"><a href="#">Giulliano</a> criou o projeto</h3>
                    </div>
                </li>
                <!-- END timeline item -->
            </ul>
        </div><!-- /.col -->
    </div><!-- /.row -->
</section>

<div id="adcAnd" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adicionar andamento</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Atividade</label>
                        <input name="name" type="text" value="" class="form-control" placeholder="Atividade" required />
                    </div>

                    <div class="form-group">
                        <label>Data</label>
                        <input name="entrance_date" type="text" value="" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Comecei às</label>
                                <input name="" type="text" value="" class="form-control" placeholder="hh:mm" data-inputmask="'alias': 'hh:mm'" data-mask/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Terminei às</label>
                                <input name="" type="text" value="" class="form-control" placeholder="hh:mm" data-inputmask="'alias': 'hh:mm'" data-mask/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Detalhes</label> <br>
                        <textarea style="width:100%;min-height:80px;"></textarea>
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