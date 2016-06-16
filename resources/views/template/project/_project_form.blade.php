<form>
    <div class="row">
        <!-- NOME DO PROJETO-->
        <div class="form-group col-md-6">
            <label>Projeto</label>
            <input name="name" type="text" value="{{ $project->title }}" class="form-control" placeholder="Nome do projeto" required />
        </div>

        <!-- PROFESSOR -->
        <div class="form-group col-md-5">
            <label>Professor</label>
            <select class="form-control">
                <option>(Selecionar)</option>
                @foreach($teachers as $teacher)
                <option>{{ $teacher->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-1">
            <label>Adc. prof.</label>
            <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#adcProf" title="Adicionar professor">
                <i class="fa fa-plus-circle"></i>
            </button>
        </div>

        <!-- CURSO -->
        <div class="form-group col-md-4">
            <label>Curso</label>
            <select class="form-control" required>
                <option>(Selecionar)</option>
                @foreach($courses as $course)
                <option>{{ $course->name }} </option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-2">
            <label>Início da Disciplina</label>
            <input name="entrance_date" type="text" value="" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
        </div>

        <!-- INÍCIO -->
        <div class="form-group col-md-3">
            <label>Início do Projeto</label>
            <input name="start" type="text" value="{{ $project->start->format('d/m/Y') }}" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>
        </div>

        <!-- PRAZO -->
        <div class="form-group col-md-3">
            <label>Prazo do Projeto</label>
            <input name="deadline" type="text" value="{{ $project->deadline->format('d/m/Y') }}" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>
        </div>

        <!-- APOIO -->
        <div class="form-group col-md-12">
            <label>Apoio</label>
            <div class="checkbox">
                <div class="col-md-3">
                    @foreach($users as $user)
                        <label><input type="checkbox" name="apoio[]" value="{{ $user->id }}">{{ $user->name }}</label>
                    @endforeach
                </div>
                <div class="col-md-3">
                    <label><input type="checkbox" name="apoio" value=""> GK</label>
                    <label><input type="checkbox" name="apoio" value=""> Hugo</label>
                    <label><input type="checkbox" name="apoio" value=""> Mariana</label>
                    <label><input type="checkbox" name="apoio" value=""> Thaís</label>
                </div>
                <div class="col-md-3">
                    <label><input type="checkbox" name="apoio" value=""> Nina</label>
                    <label><input type="checkbox" name="apoio" value=""> Paulo</label>
                    <label><input type="checkbox" name="apoio" value=""> Pedro</label>
                    <label><input type="checkbox" name="apoio" value=""> Gabriel</label>
                </div>
                <div class="col-md-3">
                    <label><input type="checkbox" name="apoio" value=""> Rayan</label>
                    <label><input type="checkbox" name="apoio" value=""> Renato</label>
                    <label><input type="checkbox" name="apoio" value=""> Vinicius</label>
                </div>
            </div>
        </div>

        <!-- COMPOSIÇÃO DO PROJETO -->
        <div class="form-group col-md-6">
            <label>Tipo do Projeto</label>
            <div class="checkbox">
                @foreach($types as $type)
                <label><input type="checkbox" name="composicao[]" value="{{$type->id}}"> {{ $type->name }}</label>
                @endforeach
                {{-- <label><input type="checkbox" name="composicao" value="moodle"> Moodle</label>
                <label><input type="checkbox" name="composicao" value="web"> Web</label>
                <label><input type="checkbox" name="composicao" value="video"> Vídeo</label>
                <label><input type="checkbox" name="composicao" value="impresso"> Impresso</label> --}}
            </div>
        </div>

        <div class="form-group col-md-6">
            <label>Situação</label>
            <select class="form-control">
                <option>Em andamento</option>
                <option>Na fila</option>
                <option>Parado</option>
                <option>Finalizado</option>
            </select>
        </div>

    </div>
</form>
