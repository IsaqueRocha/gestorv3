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

                            <div class="form-group col-md-12">
                                <label>Apoio</label>
                                <select multiple class="form-control">
                                    <option>Antônio</option>
                                    <option>GK</option>
                                    <option>Nina</option>
                                    <option>Renato</option>
                                    <option>Thais</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</section> <!-- FIM ADICIONAR USUÁRIO -->
@endsection