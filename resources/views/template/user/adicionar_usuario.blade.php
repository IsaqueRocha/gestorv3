@extends('app')
@section('content')
<!-- CABEÇALHO  -->
<div class="col-md-12">
  <div class="box box-default collapsed-box box-usuario">
    <div class="box-header with-border usuario-header-box">
      <h2 class="titulos">Gerenciar Usuários</h2>
      <h3 class="sub-titulos">Adicionar Novo</h3>
    </div>
  </div>
</div>
<!-- BOX DO USUÁRIO-->
<div class="col-md-12" style="color: #000;">
  <div class="box-body dados-usuario">
    <!-- FORMULÁRIO -->
    <form role="form" action="" method="POST">
      <div class="col-md-12 col-unica">
        <div class="form-group col-md-6">
          <label>Nome</label>
          <input type="text" class="form-control" placeholder="Nome ..." /> 
        </div>
        <div class="form-group col-md-6">
          <label>E-mail</label>
          <input type="text" class="form-control" placeholder="E-mail ..."/>
        </div>
        <div class="form-group col-md-3">
          <label>CPF</label>
          <input type="text" class="form-control" placeholder="CPF ..."/>
        </div>
        <div class="form-group col-md-3">
          <label>Telefone:</label>
          <input type="text" class="form-control" placeholder="(__) _-____-____" data-inputmask='"mask": "(99) 9-9999-9999"' data-mask/>
        </div>
        <div class="form-group col-md-6">
          <label>Endereço</label>
          <input type="text" class="form-control" placeholder="Rua, Bairro, Cidade ..."/>
        </div> 
        <div class="form-group col-md-4">
          <label>Área de atuação</label>
          <input type="text" class="form-control" placeholder="Área da atuação ..."/>
        </div>
        <div class="form-group col-md-4">
          <label>Função</label>
          <input type="text" class="form-control" placeholder="Função ..."/>
        </div>
        <div class="form-group col-md-4">
          <label>Entrada</label>
          <input type="text" class="form-control" placeholder="dd/mm/yyyy" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/> 
        </div>                                          
      </div>
      <!--BOTÃO SUBMIT-->
      <div class="me-col-12 box-botao-submit" >
        <a href="{!! url('/users')!!}" class="botao-cancelar-adicionar-usuario" title="Cancelar">               
          <i class="fa fa-times-circle icon-adicionar-usuario"> </i>
        </a>
        <a href="#" class="botao-salvar-usuario" title="Adicionar">
          <button >               
            <i class="fa fa-check-circle  icon-adicionar-usuario"> </i>
          </button>
        </a>
      </div>
    </form>
  </div>
</div>
@endsection