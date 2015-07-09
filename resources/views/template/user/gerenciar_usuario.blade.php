@extends('app')
@section('content')
    <!-- CABEÇALHO DO CONTEÚDO -->
    <div class="col-md-12">
        <div class="box box-default collapsed-box box-usuario">
            <div class="box-header with-border usuario-header-box">
                <a href="{!! url('/users/create') !!}" class="botao-adicionar-usuario" title="Novo Usuário">
                    <i class="fa fa-plus-circle  icones-edicao-usuario"> </i>
                </a>

                <h2 class="titulos">Gerenciar Usuários</h2>
            </div>
        </div>
    </div><!-- FIM CABEÇALHO DO CONTEÚDO -->

    <!-- CABEÇALHO LISTA-->
    <div class="col-md-12" style="color: #000;">
        <div class="box box-default collapsed-box box-usuario">
            <div class="box-header with-border usuario-header-box">
                <span><h3 class="box-title width-20p v-a-m"><b>Estagiário</b></h3></span>
                <span><h3 class="box-title width-20p v-a-m"><b>Função</b></h3></span>
                <span><h3 class="box-title width-20p v-a-m"><b>Área</b></h3></span>
            </div>
        </div>
    </div>
    @foreach($users as $user)
        <!-- BOX DO USUÁRIO-->
        <div class="col-md-12" style="color: #000;">a
            <div class="box box-default collapsed-box box-usuario">
                <div class="box-header with-border usuario-header-box">
                    <span><h3 class="box-title sub-box-title width-20p v-a-m">{{ $user->name }}</h3></span>
                    <span><h3 class="box-title sub-box-title width-20p v-a-m">Estagiário</h3></span>
                    <span><h3 class="box-title sub-box-title width-20p v-a-m">Web</h3></span>

                    <div class="box-tools botao-editar-usuario">
                        <a href="{!! url('/users/'.$user->id.'/edit') !!}" title="Editar">
                            <samp class="fa fa-edit"></samp>
                        </a>
                    </div>

                    <div class="box-botao-mostrar-mais">
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool botao-mostrar-mais" data-widget="collapse" title="Expandir">
                                <i><img onclick="clique(event)" alt="Mais" class="item img-expandir"
                                        src="assets/dist/img/down.png"/></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- DADOS DO USUÁRIO -->
                <div class="box-body dados-usuario">

                    <div class="col-md-6">
                        <span class="label-form">Nome: </span> <span>Leandro Siqueira da Hora Gonzaga</span> <br/>
                        <span class="label-form">E-mail: </span> <span>leandroshora@gmail.com</span> <br/>
                        <span class="label-form">CPF: </span> <span>121.923.787-69</span> <br/>
                        <span class="label-form">Telefone: </span> <span>(27) 99958-4570</span> <br/>
                    </div>

                    <div class="col-md-6">
                        <span class="label-form">Endereço: </span> <span>Av. Sólon Borges, Sólon Borges</span> <br/>
                        <span class="label-form">Função: </span> <span>Estagiário</span> <br/>
                        <span class="label-form">Área de atuação: </span> <span>Web</span> <br/>
                        <span class="label-form">Entrada: </span> <span>14/03/2014</span> <br/>
                    </div>

                </div>
                <!-- FIM DADOS DO USUÁRIO -->
            </div>
        </div><!-- FIM BOX DO USUÁRIO -->
    @endforeach
@endsection