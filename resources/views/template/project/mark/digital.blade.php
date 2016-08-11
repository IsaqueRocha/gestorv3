<div class="col-md-4">
    <div class="box box-ldi">
        <div class="panel-group">
            <div class="panel panel-default">
                <a data-toggle="collapse" href="#livroDigital">
                    <div class="box-header panel-heading">
                        <h3 class="box-title panel-title"><i class="fa fa-flag"></i>Livro Digital</h3>
                    </div>
                </a>
                <div id="livroDigital" class="panel-collapse collapse">
                    <div class="box-body panel-body">
                        <form name="digitalform" role="form"  method="post" id="digitalform">
                            {{ method_field('PATCH') }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label><input name="metting" type="checkbox" value="{{ $project->digitalMark->metting }}" {{ ($project->digitalMark->metting == 1)?('checked'):('')}}> Reunião com professor</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Briefing</label>
                                        <textarea id="briefing" name="briefing" class="form-control" rows="3">{{ $project->digitalMark->briefing }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Formato</label>
                                        <select name="format" class="form-control">
                                            <option>---</option>
                                            @foreach($digitalformats as $format)
                                                <option value="{{$format->id}}"
                                                    {{ ($project->digitalMark->format->id == $format->id)?('selected'):('')}}>
                                                    {{$format->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label><input name="cover" type="checkbox"  {{ ($project->digitalMark->cover == 1)?('checked'):('')}}> Capa finalizada</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Número de capítulos</label>
                                        <br clear="all">
                                        <input name="chapters_done" type="number" min="0" max="30" step="1" value="0" class="form-control">
                                        de 30
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Aberturas de capítulo</label>
                                        <br clear="all">
                                        <input name="opening_chapter" type="number" min="0" max="15" step="1" value="0" class="form-control">
                                        de 15
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label><input name="authorcv" type="checkbox" value="1" {{ ($project->digitalMark->authorcv == 1)?('checked'):('')}}> Currículo do autor</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Ficha catalográfica</label>
                                        <select name="cataloguing" class="form-control">
                                            <option>---</option>
                                            <option>Pedida</option>
                                            <option>Inserida</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Aprovação de folha de créditos</label>
                                        <select name="creditsapproval" class="form-control">
                                            <option>---</option>
                                            <option>Enviado para o coordenador</option>
                                            <option>Devolvido com alterações</option>
                                            <option>Aprovado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Animação 2D</label>
                                        <br clear="all">
                                        <input name="animation2d" type="number" min="0" max="20" step="1" value="0" class="form-control">
                                        de 1
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Animação 3D</label>
                                        <br clear="all">
                                        <input name="animation3d" type="number" min="0" max="20" step="1" value="0" class="form-control">
                                        de 1
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Fórmula</label>
                                        <br clear="all">
                                        <input name="formula" type="number" min="0" max="20" step="1" value="0" class="form-control">
                                        de 1
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Fotografia</label>
                                        <br clear="all">
                                        <input name="photografs" type="number" min="0" max="20" step="1" value="0" class="form-control">
                                        de 1
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Ilustração</label>
                                        <br clear="all">
                                        <input name="ilustrations" type="number" min="0" max="20" step="1" value="0" class="form-control">
                                        de 1
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Modelagem 3D</label>
                                        <br clear="all">
                                        <input name="modeling3d" type="number" min="0" max="20" step="1" value="0" class="form-control">
                                        de 1
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Programação</label>
                                        <select name="development" class="form-control">
                                            <option>---</option>
                                            <option>10%</option>
                                            <option>20%</option>
                                            <option>30%</option>
                                            <option>40%</option>
                                            <option>50%</option>
                                            <option>60%</option>
                                            <option>70%</option>
                                            <option>80%</option>
                                            <option>90%</option>
                                            <option>100%</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tabela</label>
                                        <br clear="all">
                                        <input name="tables" type="number" min="0" max="20" step="1" value="0" class="form-control">
                                        de 1
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Revisão pelo professor</label>
                                        <select name="revision" class="form-control">
                                            <option>---</option>
                                            <option>Enviado para o professor</option>
                                            <option>Devolvido com alterações</option>
                                            <option>Aprovado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Solicitação do ISBN</label>
                                        <select name="isbnrequest" class="form-control">
                                            <option>---</option>
                                            <option>Solicitado a Biblioteca Nacional</option>
                                            <option>Inserido</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>ISBN</label>
                                        <input name="isbn" type="text" value="" class="form-control" placeholder="ISBN" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label><input name="coord_revision" type="checkbox" value="1" {{ ($project->digitalMark->coord_revision == 1)?('checked'):('')}}> Revisão pelo Coordenador LDI</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label><input name="folder_organization" type="checkbox" value="1" {{ ($project->digitalMark->organization == 1)?('checked'):('')}}> Organização da pasta do projeto</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label><input name="upload" type="checkbox" value="1" {{ ($project->digitalMark->upload == 1)?('checked'):('')}}> Upload</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label><input name="file_transfered" type="checkbox" value="1" {{ ($project->digitalMark->transfer == 1)?('checked'):('')}}> Transferência dos arquivos para Projetos Finalizados</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <hr class="row">
                        <div style="text-align:right;">
                            <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#editLivroDigital" title="Editar atividade">
                                Editar
                            </button>
                            <button type="button" class="btn btn-success" form="digitalform" id="digitalButton" title="Salvar">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
