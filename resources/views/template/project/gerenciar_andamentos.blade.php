@extends('app')
@section('content')
<!-- CABEÇALHO -->
<section class="content-header">
    <h1>
        Gerenciar Projetos
        <small>Andamentos</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url('/') !!}"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="{!! url('/projects') !!}"><i class="fa fa-tasks"></i> Gerenciar Projetos</a></li>
        <li class="active"><i class="fa fa-bookmark"></i> Andamentos</li>
    </ol>
</section>
<!-- FIM CABEÇALHO -->

<!--  -->
<section class="content artes">
    <div class="row">
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
                    <div class="row">
                        <div class="col-md-2" style="margin-top:10px;">
                            <b>Situação:</b> Entregue
                        </div>
                        <div class="col-md-10" style="margin-top:10px;">
                            <div style="float:left;">
                                <b>Progresso:</b>
                            </div>
                            <div style="float:left;">
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        <span class="sr-only">100% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#adcAnd" title="Adicionar andamento">
                        <i class="fa fa-bookmark" style="margin-right:2px;"></i> Adicionar andamento
                    </button>
                    <button type="button" class="btn btn-ldi" data-toggle="modal" data-target="#marcoVideo" title="Adicionar marco">
                        <i class="fa fa-flag" style="margin-right:2px;"></i> Vídeo
                    </button>
                    <button type="button" class="btn btn-ldi" data-toggle="modal" data-target="#marcoImpresso" title="Adicionar marco">
                        <i class="fa fa-flag" style="margin-right:2px;"></i> Impresso
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- row -->
    <div class="row" style="margin-top:20px;">
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
                        <input name="entrance_date" type="text" value="" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/aaaa'" data-mask/>
                    </div>

                    <div class="form-group">
                        <label>Comecei às</label>
                        <input name="" type="text" value="" class="form-control" placeholder="hh:mm" data-inputmask="'alias': 'hh:mm'" data-mask/>
                    </div>

                    <div class="form-group">
                        <label>Terminei às</label>
                        <input name="" type="text" value="" class="form-control" placeholder="hh:mm" data-inputmask="'alias': 'hh:mm'" data-mask/>
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

<div id="marcoVideo" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adicionar marco em Vídeo</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="checkbox">
                        <label><input type="checkbox"> Roteiro feito</label>
                        <label><input type="checkbox"> Gravação</label>
                        <label><input type="checkbox"> Decupagem</label>
                    </div>
                    
                    <div class="form-group">
                        <label>Narrações solicitadas</label>
                        <input name="name" type="text" value="" class="form-control" placeholder="Quantidade necessária" required />
                    </div>

                    <div class="form-group">
                        <label>Narrações concluídas</label>
                        <input name="name" type="text" value="" class="form-control" placeholder="Quantidade concluída" required />
                    </div>
                    
                     <div class="checkbox">
                        <label><input type="checkbox"> Montagem</label>
                        <label><input type="checkbox"> Animação</label>
                        <label><input type="checkbox"> Edição</label>
                        <label><input type="checkbox"> Edição sonora</label>
                        <label><input type="checkbox"> Transcrição</label>
                        <label><input type="checkbox"> Legenda</label>
                        <label><input type="checkbox"> Render</label>
                        <label><input type="checkbox"> Revisão</label>
                        <label><input type="checkbox"> Upload</label>
                        <label><input type="checkbox"> DVD</label>
                    </div>

                    <div class="form-group">
                        <label>Data de disponibilidade</label>
                        <input name="" type="text" value="" class="form-control" placeholder="hh:mm" data-inputmask="'alias': 'hh:mm'" data-mask/>
                    </div>

                    <div class="form-group">
                        <label>Início da Gravação</label>
                        <input name="" type="text" value="" class="form-control" placeholder="hh:mm" data-inputmask="'alias': 'hh:mm'" data-mask/>
                    </div>
                    
                    <div class="checkbox">
                        <label><input type="checkbox"> Revisado pelo autor</label>
                    </div>
                    
                    <div class="form-group">
                        <label>Conclusão da Gravação</label>
                        <input name="" type="text" value="" class="form-control" placeholder="hh:mm" data-inputmask="'alias': 'hh:mm'" data-mask/>
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