@extends('app')
@section('content')
    <!-- CABEÇALHO DO CONTEÚDO -->
    <div class="col-md-12">
        <div class="box box-default collapsed-box box-usuario">
            <div class="box-header with-border usuario-header-box">
                <a href="{!! url('/roles/create') !!}" class="botao-adicionar-usuario" title="Novo Usuário">
                    <i class="fa fa-plus-circle  icones-edicao-usuario"> </i>
                </a>
                <h2 class="titulos">Gerenciar Funções</h2>
            </div>
        </div>
    </div><!-- FIM CABEÇALHO DO CONTEÚDO -->

    <!-- CABEÇALHO LISTA-->
    <div class="col-md-12" style="color: #000;">
        <div class="box box-default collapsed-box box-usuario">
            <div class="box-header with-border usuario-header-box">
                <span><h3 class="box-title width-20p v-a-m"><b>ID</b></h3></span>
                <span><h3 class="box-title width-20p v-a-m"><b>Nome da Função</b></h3></span>
            </div>
        </div>
    </div>
    @foreach($roles as $role)
        <!-- BOX DO USUÁRIO-->
        <div class="col-md-12" style="color: #000;">
            <div class="box box-default collapsed-box box-usuario">
                <div class="box-header with-border usuario-header-box">
                    <span><h3 class="box-title sub-box-title width-20p v-a-m">{{ $role->id }}</h3></span>
                    <span><h3 class="box-title sub-box-title width-20p v-a-m">{{ $role->name }}</h3></span>

                    <div class="box-tools botao-editar-usuario">
                        <a href="{!! url('/roles/'.$role->id.'/edit') !!}" title="Editar">
                            <samp class="fa fa-edit"></samp>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
@endsection