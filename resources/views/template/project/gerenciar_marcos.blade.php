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
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-flag"></i>Vídeo</h3>
                </div>
                <div class="box-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                        <div class="checkbox">
                            <label><input type="checkbox"> Roteiro feito</label>
                            <label><input type="checkbox"> Gravação</label>
                            <label><input type="checkbox"> Decupagem</label>
                        </div>
                            </div>

                            <div class="col-md-6">
                        <div class="form-group">
                            <label>Narrações solicitadas</label>
                            <input name="name" type="text" value="" class="form-control" placeholder="Quantidade necessária" required />
                        </div>
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-ldi">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-flag"></i>Impresso</h3>
                </div>
                <div class="box-body">
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection