@extends('app')
  @section('content')
  <!-- CABEÇALHO DO CONTEÚDO -->
  <div class="col-md-12">
    <div class="box box-default collapsed-box box-usuario">
      <div class="box-header with-border usuario-header-box">
        <a href="{!! url('/users/create') !!}" class="botao-adicionar-usuario" title="Novo Usuário">               
          <i class="fa fa-plus-circle icon-adicionar-usuario"> </i>
        </a>
        <h2 class="titulos">Gerenciar Usuários</h2>
      </div>
    </div>
  </div><!-- FIM CABEÇALHO DO CONTEÚDO -->
  <!-- BOX DO USUÁRIO-->
  <div class="col-md-12" style="color: #000;">
    <div class="box box-default collapsed-box box-usuario">
      <div class="box-header with-border usuario-header-box">
        <span><h3 class="box-title">Giulliano Kenzo</h3></span>
        <span><h3 class="box-title">Estagiário</h3></span>
        <span><h3 class="box-title">Gerente</h3></span>
        <div class="box-tools pull-right box-botao-mostrar-mais">
          <button class="btn btn-box-tool botao-mostrar-mais" data-widget="collapse">
            <i><img onclick="changeSrc('p-a1');" id="p-a1" alt="Mais" src="dist/img/down.png"/></i>
          </button>
        </div>
      </div>
      <!-- DADOS DO USUÁRIO -->
      <div class="box-body dados-usuario">
        <!-- FORM -->
        <form role="form" action="" method="POST">
          <!-- CAMPOS -->
          <div class="col-md-10 col-unica">
            <div class="form-group col-md-6">
              <label>Nome</label>
              <input type="text" class="form-control" placeholder="Nome ..." disabled="true" /> 
            </div>
            <div class="form-group col-md-6">
              <label>E-mail</label>
              <input type="text" class="form-control" placeholder="E-mail ..." disabled="true"/>
            </div>
            <div class="form-group col-md-3">
              <label>CPF</label>
              <input type="text" class="form-control" placeholder="CPF ..." disabled="true" />
            </div>
            <div class="form-group col-md-3">
              <label>Telefone:</label>
              <input type="text" class="form-control" placeholder="(__) _-____-____" data-inputmask='"mask": "(99) 9-9999-9999"' data-mask disabled="true"/>
            </div>
            <div class="form-group col-md-6">
              <label>Endereço</label>
              <input type="text" class="form-control" placeholder="Rua, Bairro, Cidade ..." disabled="true"/>
            </div> 
            <div class="form-group col-md-4">
              <label>Área de atuação</label>
              <input type="text" class="form-control" placeholder="Área da atuação ..." disabled="true" />
            </div>
            <div class="form-group col-md-4">
              <label>Função</label>
              <input type="text" class="form-control" placeholder="Função ..." disabled="true" />
            </div>
            <div class="form-group col-md-4">
              <label>Entrada</label>
              <input type="text" class="form-control" placeholder="dd/mm/yyyy" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  disabled="true" /> 
            </div>                                           
          </div><!-- FIM CAMPOS --> 
          <!-- OPÇÕES DE EDIÇÃO DOS CAMPOS DO USUÁRIO-->
          <div class="opcoes">
            <div class="botao-mostrar btn-editar" name="btn" style="display: block;" onclick="habilitaDesabilitaInput(false); mostrarEnsonderBotoes()" title="Editar">
              <span><i class="fa fa-edit"></i></span>
            </div> 
            <div class="botao-voltar edicao-usuario" style="display:none">
              <div class="btn-cancelar" name="btn" onclick="habilitaDesabilitaInput(false); mostrarEnsonderBotoes()" title="Cancelar">
                <span><i class="fa fa-times "></i></span>
              </div>                        
              <div class="btn-salvar" title="Salvar">
                <button type="submit" name="enviar">
                  <span><i class="fa fa-check"></i></span>
                </button>                            
              </div>
              <div class="btn-desativar" title="Desativar">
                <span><i class="fa fa-ban"></i></span>
              </div>
              <div class="btn-excluir " title="Excluir">
                <span><i class="fa fa-trash-o"></i></span>
              </div>
            </div>                                                                    
          </div><!-- FIM OPÇÕES DE EDIÇÃO DO USUÁRIO-->
        </form><!-- FIM FORM -->
      </div><!-- FIM DADOS DO USUÁRIO -->
    </div>
  </div><!-- FIM BOX DO USUÁRIO -->
@endsection