@extends('app')
@section('content')
    <!-- CABEÇALHO  -->
    <div class="col-md-12">
      <div class="box box-default collapsed-box box-usuario">
        <div class="box-header with-border usuario-header-box">
          <h2 class="titulos">Gerenciar Usuários</h2>
          <h3 class="sub-titulos">Editar</h3>
        </div>
      </div>
    </div>
    <!-- BOX DO USUÁRIO-->
    <div class="col-md-12" style="color: #000;">
        @include('template.user._errors')23
        <div class="box-body dados-usuario">
            <!-- FORMULÁRIO -->
            <form role="form" action="" method="POST">
                {!! csrf_field() !!}
                <div class="col-md-12 col-unica">
                    @include('template.user._form')
                    <!--BOTÕES-->
                    <div class="me-col-12 box-botao-submit" >
                        <!--CANCELAR-->
                        <a href="{{ url('/users') }}" class="botao-cancelar-adicionar-usuario" data-toggle="tooltip" data-placement="top" title="Cancelar">
                            <i class="fa fa-times-circle icones-edicao-usuario"> </i>
                        </a>

                        <!--EXCLUIR-->
                        <a href="{{ url('/users/'.$user->id.'/delete') }}" class="botao-excluir-usuario" data-toggle="tooltip" data-placement="top" title="Excluir">
                            <i class="fa fa-trash icon-edicao-usuario-circles"> </i>
                        </a>

                        <!--DESATIVAR-->
                        <a href="{{ url('/users/'.$user->id.'/deactivate') }}" class="botao-desativar-usuario" data-toggle="tooltip" data-placement="top" title="Desativar">
                            <i class="fa fa-ban icon-edicao-usuario-circles"> </i>
                        </a>

                        <!--SALVAR-->
                        <a href="{{ url('/users/'.$user->id.'/update') }}" class="botao-salvar-usuario" data-toggle="tooltip" data-placement="top" title="Salvar">
                            <button >
                                <i class="fa fa-check-circle  icones-edicao-usuario"> </i>
                            </button>
                        </a>
                    </div><!--FIM BOTÕES-->
                </div>
            </form><!-- FORMULÁRIO -->
        </div>
    </div><!-- FIM BOX DO USUÁRIO-->

@endsection