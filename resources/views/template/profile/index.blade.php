@extends('app')
@section('content')
<!-- CABEÇALHO -->
<section class="content-header">
    <h1>
        {{ $user->name }}
        <small>Perfil</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Início</a></li>
        <li class="active"><i class="fa fa-user"></i> Perfil de {{ $user->name }}</li>
    </ol>
</section>
<!-- FIM CABEÇALHO -->

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-ldi">
                <div class="box-header with-border">
                    <div>
                        <h3 class="box-title">
                            <i class="fa fa-user"></i> Dados do usuário
                        </h3>
                    </div>
                    <hr>
                    <div>
                        <div class="col-md-2" style="margin-bottom: 20px;">
                            <img src="{{ ( $user->photo == null ) ? ('/assets/theme/img/avatar.png'):($user->photo) }}" class="img-circle" style="max-width:100%;" />
                        </div>
                        <div class="col-md-10" style="margin-bottom: 20px;">
                            <ul style="list-style:none;padding-left:0;float:left;width:100%;">
                                <div class="col-md-4">
                                    <li><b>Nome:</b> {{ $user->name }}</li>
                                    <li><b>E-mail:</b> {{ $user->email }}</li>
                                    <li><b>Função:</b> {{ $user->role }}</li>
                                    <li><b>Área de atuação:</b> {{ $user->area }}</li>
                                </div>
                                <div class="col-md-4">
                                    <li><b>CPF:</b> {{ $user->cpf }} </li>
                                    <li><b>Endereço:</b> {{ $user->address }} </li>
                                    <li><b>Telefone:</b> {{ $user->phone }}</li>
                                </div>
                                <div class="col-md-4">
                                    <li><b>Data de entrada:</b> {{ $user->entrance_date }}</li>
                                    <li><b>Data de saída:</b> --/--/---</li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <section class="listaProjetos col-md-12 connectedSortable ui-sortable">
            <div class="box box-ldi">
                <div class="box-header">
                    <div>
                        <h3 class="box-title">
                            <i class="fa fa-clipboard"></i> Lista de projetos vinculados (tabela desatualizada)
                        </h3>
                    </div>
                    <hr>
                    <div>
                        <div class="box-tools">
                            <div class="form-group acoes">
                                <div class="rotulo">
                                    Exibir
                                </div>
                                <select class="form-control input-sm">
                                    <option>Todos</option>
                                    <option>Web</option>
                                    <option>Vídeo</option>
                                    <option>Diagramação</option>
                                    <option>Interno</option>
                                    <option>Outro</option>
                                </select>
                            </div>

                            <div class="form-group acoes">
                                <div class="rotulo">
                                    Situação
                                </div>
                                <select class="form-control input-sm">
                                    <option>Todos</option>
                                    <option>Entregues</option>
                                    <option>Em andamento</option>
                                </select>
                            </div>

                            <div class="input-group pesquisar-projeto acoes">
                                <input type="text" name="table_search" class="form-control input-sm" style="width: 150px;position:initial;" placeholder="Buscar projeto">
                                <span class="input-group-btn" style="width: auto;position:absolute;right:0;">
                                    <button class="btn btn-sm btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>

                            <div class="acoes">
                                <a title="Novo projeto">
                                    <button class="btn btn-sm btn-success">Novo</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Curso</th>
                                <th>Projeto</th>
                                <th class='icone-composicao' title='Composição do projeto'>Tipo</th>
                                <th>Apoio</th>
                                <th>Situação</th>
                                <th class="icone"><i class="fa fa-pencil" title="Editar"></i></th>
                                <th class="icone"><i class="fa fa-flag" title="Expandir"></i></th>
                                <th class="icone"><i class="fa fa-edit" title="Editar"></i></th>
                                <th class="icone"><i class="fa fa-plus-circle" title="Expandir"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="um" class="panel-collapse collapse">
                                <td colspan="10">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </td>
                            </tr>
                            <tr>
                                <td class="box-curso art"></td>
                                <td>Moodle - Seminário</td>
                                <td class='icone-composicao'><i class="fa fa-globe"></i></td>
                                <td>Ana Clara, Pedro e Renato</td>
                                <td>Parado</td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-pencil" title="Editar"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-flag" title="Editar"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-edit" title="Editar"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#dois">
                                        <i class="fa fa-plus-circle" title="Expandir"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="dois" class="panel-collapse collapse">
                                <td colspan="10">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </td>
                            </tr>
                            <tr>
                                <td class="box-curso mat"></td>
                                <td>Moodle - Seminário</td>
                                <td><i class="fa fa-globe"></i></td>
                                <td>Antonio, Rayan e Renato</td>
                                <td>Em andamento</td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-pencil" title="Editar"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-flag" title="Editar"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a>
                                        <i class="fa fa-edit" title="Editar"></i>
                                    </a>
                                </td>
                                <td class="icone">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#quatro">
                                        <i class="fa fa-plus-circle" title="Expandir"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr id="quatro" class="panel-collapse collapse">
                                <td colspan="10">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</section>

<!--<script type="text/javascript">
    $(document).ready(function () {
        $('#example1').DataTable();
        $('#example2').DataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>-->

@endsection
