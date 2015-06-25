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
        <form role="form" method="POST">
            {!! csrf_field() !!}
            <div class="col-md-12 col-unica">
            <div class="form-group col-md-6">
              <label>Nome</label>
              <input type="text" name="name" class="form-control" placeholder="Nome ..." />
            </div>
            <div class="form-group col-md-6">
              <label>E-mail</label>
              <input type="email" name="email" class="form-control" placeholder="E-mail ..."/>
            </div>
            <div class="form-group col-md-3">
              <label>CPF</label>
              <input type="text" name="cpf" class="form-control" placeholder="___.___.___-__" data-inputmask='"mask": "999.999.999-99"' data-mask/>
            </div>
            <div class="form-group col-md-3">
              <label>Telefone:</label>
              <input type="text" name="phone" class="form-control" placeholder="(__) _____-____" data-inputmask='"mask": "(99) 99999-9999"' data-mask/>
            </div>
            <div class="form-group col-md-6">
              <label>Endereço</label>
              <input type="text" name="address" class="form-control" placeholder="Rua, Bairro, Cidade ..."/>
            </div>
            <div class="form-group col-md-4">
                <label>Função</label>
                <select name="role" class="form-control">
                  <option>Selecionar</option>
                  <option>Coordenador</option>
                  <option>Estagiário</option>
                  <option>Gerente</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Área de atuação</label>
                <select name="operation" class="form-control">
                  <option>Selecionar</option>
                  <option>Diagramação</option>
                  <option>Gerência</option>
                  <option>Ilustração</option>
                  <option>Vídeo</option>
                  <option>Web</option>
                </select>
            </div>
            <div class="form-group col-md-4">
              <label>Entrada</label>
              <input type="text" name="start_date" class="form-control" placeholder="dd/mm/yyyy" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
            </div>
          </div>
          <!--BOTÃO SUBMIT-->
          <div class="me-col-12 box-botao-submit" >
            <!--CANCELAR-->
            <a href="{!! url('/users') !!}" class="botao-cancelar-adicionar-usuario" title="Cancelar">
              <i class="fa fa-times-circle icones-edicao-usuario"> </i>
            </a>
            <!--SALVAR-->
            <a href="#" class="botao-salvar-usuario" title="Adicionar">
              <button >
                <i class="fa fa-check-circle  icones-edicao-usuario"> </i>
              </button>
            </a>
          </div>
        </form>
      </div>
    </div>
@endsection