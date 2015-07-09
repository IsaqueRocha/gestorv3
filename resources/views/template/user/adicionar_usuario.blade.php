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

                    <!--NOME-->
                    <div class="form-group col-md-6">
                        <label>Nome</label>
                        <input name="name" type="text" value="{!! ($user->name)?($user->name):(old('name')) !!}" class="form-control" placeholder="Nome ..." />
                    </div><!-- NOME-->

                    <!--EMAIL-->
                    <div class="form-group col-md-6">
                        <label>E-mail</label>
                        <input type="text" class="form-control" placeholder="E-mail ..."/>
                    </div><!--FIM EMAIL-->

                    <!--CPF-->
                    <div class="form-group col-md-3">
                        <label>CPF</label>
                        <input type="text" class="form-control" placeholder="___.___.___-__" data-inputmask='"mask": "999.999.999-99"' data-mask/>
                    </div><!--CPF-->

                    <!--TELEFONE-->
                    <div class="form-group col-md-3">
                        <label>Telefone:</label>
                        <input type="text" class="form-control" placeholder="(__) _____-____" data-inputmask='"mask": "(99) 99999-9999"' data-mask/>
                    </div><!--FIM TELEFONE-->

                    <!--ENDEREÇO-->
                    <div class="form-group col-md-6">
                        <label>Endereço</label>
                        <input type="text" class="form-control" placeholder="Rua, Bairro, Cidade ..."/>
                    </div><!--FIM ENDEREÇO-->

                    <!--FUNÇÃO-->
                    <div class="form-group col-md-4">
                        <label>Função</label>
                        <select name="role" class="form-control">
                            <option>Selecionar</option>
                            <option>Coordenador</option>
                            <option>Estagiário</option>
                            <option>Gerente</option>
                        </select>
                    </div><!--FIM FUNÇÃO-->

                    <!--ÁREA DE ATUAÇÃO-->
                    <div class="form-group col-md-4">
                        <label>Área de atuação</label>
                        <select name="area" class="form-control">
                            <option>Selecionar</option>
                            <option>Diagramação</option>
                            <option>Gerência</option>
                            <option>Ilustração</option>
                            <option>Vídeo</option>
                            <option>Web</option>
                        </select>
                    </div><!--FIM ÁREA DE ATUAÇÃO-->

                    <!--ENTRADA-->
                    <div class="form-group col-md-4">
                        <label>Entrada</label>
                        <input name="entrace_date" type="text" class="form-control" placeholder="dd/mm/yyyy" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                    </div><!-- FIM ENTRADA-->

                    <!--HORÁRIO-->
                    <div class="form-group col-md-3">
                        <label>Horário</label>

                        <div class="input-group m-b10">
                            <div class="input-group-addon dia-semana">
                                <i class="">Seg</i>
                            </div>
                            <input type="text" class="form-control" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
                        </div>

                        <div class="input-group m-b10">
                            <div class="input-group-addon dia-semana">
                                <i class="">Ter</i>
                            </div>
                            <input type="text" class="form-control" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
                        </div>

                        <div class="input-group m-b10">
                            <div class="input-group-addon dia-semana">
                                <i class="">Qua</i>
                            </div>
                            <input type="text" class="form-control" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
                        </div>

                        <div class="input-group m-b10">
                            <div class="input-group-addon dia-semana">
                                <i class="">Qui</i>
                            </div>
                            <input type="text" class="form-control" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
                        </div>

                        <div class="input-group m-b10">
                            <div class="input-group-addon dia-semana">
                                <i class="">Sex</i>
                            </div>
                            <input type="text" class="form-control" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
                        </div>
                    </div><!-- FIM HORÁRIO-->

                    <!--AVATAR-->
                    <div class="form-group col-md-9">
                        <label>Avatar</label>
                        <div>
                            <img src="{!! asset('assets/dist/img/avatar.png') !!}" id="blah" />
                            <br>
                            <input type="file" id="realupload" name="realupload" class="realupload" accept="image/*" onChange="readURL(this);" />
                        </div>
                    </div><!--FIM AVATAR-->

                    <!--BOTÕES-->
                    <div class="me-col-12 box-botao-submit" >
                        <a href="#" class="botao-cancelar-adicionar-usuario" data-toggle="tooltip" data-placement="top"  title="Cancelar">
                            <i class="fa fa-times-circle icones-edicao-usuario"> </i>
                        </a>
                        <a href="#" class="botao-salvar-usuario" data-toggle="tooltip" data-placement="top" title="Adicionar">
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