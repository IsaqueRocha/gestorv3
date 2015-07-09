@extends('app')
@section('content')
    <!-- CABEÇALHO  -->
    <div class="col-md-12">
        <div class="box box-default collapsed-box box-usuario">
            <div class="box-header with-border usuario-header-box">
                <h2 class="titulos">Gerenciar Funções</h2>
                <h3 class="sub-titulos">Editar Função</h3>
            </div>
        </div>
    </div>
    <!-- FIM DO CABEÇALHO  -->

    <!-- BOX DO USUÁRIO-->
    <div class="col-md-12" style="color: #000;">
        <div class="box-body dados-usuario">

            <!-- FORMULÁRIO -->
            <form role="form" action="" method="POST">
                {!! csrf_field() !!}
                <div class="col-md-12 col-unica">
                    <!--ID-->
                    <div class="form-group col-md-6">
                        <label>ID</label>
                        <input name="id" type="text" value="{!! ($role->id)?($role->id):(old('id')) !!}" class="form-control" placeholder="ID ..." />
                    </div><!-- ID-->
                    <!--NOME-->
                    <div class="form-group col-md-6">
                        <label>Nome</label>
                        <input name="name" type="text" value="{!! ($role->name)?($role->name):(old('name')) !!}" class="form-control" placeholder="Nome ..." />
                    </div><!-- NOME-->

                    <!--BOTÕES-->
                    <div class="me-col-12 box-botao-submit" >

                        <!--CANCELAR-->
                        <a href="{!! url('/roles') !!}" class="botao-cancelar-adicionar-usuario" title="Cancelar">
                            <i class="fa fa-times-circle icones-edicao-usuario"> </i>
                        </a>

                        <!--EXCLUIR-->
                        <a href="#" class="botao-excluir-usuario" title="Excluir">
                            <i class="fa fa-trash icon-edicao-usuario-circles"> </i>
                        </a>

                        <!--SALVAR-->
                        <a href="{!! url('/roles') !!}" class="botao-salvar-usuario" title="Adicionar">
                            <button >
                                <i class="fa fa-check-circle  icones-edicao-usuario"> </i>
                            </button>
                        </a>
                    </div><!--FIM BOTÕES-->

                </div>
            </form><!-- FORMULÁRIO -->            </form><!-- FORMULÁRIO -->

        </div>
    </div><!-- FIM BOX DO USUÁRIO-->
@endsection