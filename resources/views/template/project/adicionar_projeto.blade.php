@extends('app')
@section('content')
<!-- CABEÇALHO -->
<section class="content-header">
    <h1>
        Gerenciar Projetos
        <small>Adicionar novo</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="#"><i class="fa fa-tasks"></i> Gerenciar Projetos</a></li>
        <li class="active"><i class="fa fa-plus-circle"></i> Adicionar Projeto</li>
    </ol>
</section>
<!-- FIM CABEÇALHO -->

<!-- ADICIONAR USUÁRIO -->
<section class="content">
    <div class="row">
        <section class="col-md-12">
            <div class="box box-ldi">
                <div class="box-body">
                    <form>
                        <div class="row">
                            <!-- NOME DO PROJETO-->
                            <div class="form-group col-md-6">
                                <label>Projeto</label>
                                <input name="name" type="text" value="" class="form-control" placeholder="Nome do projeto" required />
                            </div>

                            <!-- PROFESSOR -->
                            <div class="form-group col-md-5">
                                <label>Professor</label>
                                <select class="form-control">
                                    <option>(Selecionar)</option>
                                    <option>Alfredo</option>
                                    <option>Betânia</option>
                                    <option>Carlos</option>
                                    <option>Diego</option>
                                    <option>Enzo</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label>Adc. prof.</label>
                                <button class="btn btn-block btn-primary" title="Adicionar professor"><i class="fa fa-plus-circle"></i></button>
                            </div>

                            <!-- CURSO -->
                            <div class="form-group col-md-6">
                                <label>Curso</label>
                                <select class="form-control">
                                    <option>(Selecionar)</option>
                                    <option>Artes</option>
                                    <option>Filosofia</option>
                                    <option>Física</option>
                                    <option>História</option>
                                    <option>Química</option>
                                </select>
                            </div>

                            <!-- INÍCIO -->
                            <div class="form-group col-md-3">
                                <label>Início</label>
                                <input name="entrance_date" type="text" value="" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/aaaa'" data-mask/>
                            </div>

                            <!-- PRAZO -->
                            <div class="form-group col-md-3">
                                <label>Prazo</label>
                                <input name="entrance_date" type="text" value="" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/aaaa'" data-mask/>
                            </div>

                            <!-- APOIO -->
                            <div class="col-md-12">
                                <label>Apoio</label>
                            </div>
                            <div class="checkbox">
                                <div class="col-md-3">
                                    <label><input type="checkbox" name="apoio" value="" checked> Ana Clara</label>
                                    <label><input type="checkbox" name="apoio" value="" checked> Andre</label>
                                    <label><input type="checkbox" name="apoio" value=""> Antônio</label>
                                    <label><input type="checkbox" name="apoio" value=""> Elisa</label>
                                </div>
                                <div class="col-md-3">
                                    <label><input type="checkbox" name="apoio" value=""> GK</label>
                                    <label><input type="checkbox" name="apoio" value=""> Hugo</label>
                                    <label><input type="checkbox" name="apoio" value=""> Mariana</label>
                                    <label><input type="checkbox" name="apoio" value=""> Thaís</label>
                                </div>
                                <div class="col-md-3">
                                    <label><input type="checkbox" name="apoio" value=""> Nina</label>
                                    <label><input type="checkbox" name="apoio" value=""> Paulo</label>
                                    <label><input type="checkbox" name="apoio" value=""> Pedro</label>
                                    <label><input type="checkbox" name="apoio" value=""> Gabriel</label>
                                </div>
                                <div class="col-md-3">
                                    <label><input type="checkbox" name="apoio" value=""> Rayan</label>
                                    <label><input type="checkbox" name="apoio" value=""> Renato</label>
                                    <label><input type="checkbox" name="apoio" value=""> Vinicius</label>
                                </div>
                            </div>

                            <!-- COMPOSIÇÃO DO PROJETO -->
                            <div class="form-group col-md-6">
                                <label>Composição do Projeto</label>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="composicao" value="moodle"> Moodle</label>
                                    <label><input type="checkbox" name="composicao" value="web"> Web</label>
                                    <label><input type="checkbox" name="composicao" value="video"> Vídeo</label>
                                    <label><input type="checkbox" name="composicao" value="impresso"> Impresso</label>
                                </div>
                            </div>

                            <!-- COMPLEMENTARES -->
                            <div class="form-group col-md-6">
                                <label>Complementares</label>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="composicao" value="formula"> Fórmula</label>
                                    <label><input type="checkbox" name="composicao" value="tabela"> Tabela</label>
                                    <label><input type="checkbox" name="composicao" value="fotografia"> Fotografia</label>
                                    <label><input type="checkbox" name="composicao" value="ilustracao"> Ilustração</label>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-md-12" style="margin-top:15px;text-align:right;">
                            <!--BOTÕES-->
                            <button class="btn btn-success" type="submit" form="adicionarUsuario" value="Enviar">Enviar</button>
                            <a href="{{ url('/projects') }}">
                                <button class="btn btn-default" value="Cancelar" >Cancelar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section> <!-- FIM ADICIONAR USUÁRIO -->
@endsection