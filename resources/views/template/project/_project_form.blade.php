<form>
    <div class="row">
        <!-- NOME DO PROJETO-->
        <div class="form-group col-md-6">
            <label>Projeto</label>
            <input name="name" type="text" value="{{ $project->title or old('name')}}" class="form-control" placeholder="Nome do projeto" required />
        </div>

        <!-- PROFESSOR -->
        <div class="form-group col-md-5">
            <label>Professor</label>
            <select class="form-control js-example-basic-single">
                <option>(Selecionar)</option>
                @foreach($teachers as $teacher)
                <option value="{{ $teacher->id }}"
                    @if(isset($project->teacher))
                        {{($project->teacher->id == $teacher->id)?('selected'):('')}}
                    @endif
                >
                    {{ $teacher->name }}
                </option>
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
            <select class="form-control js-example-basic-single" required>
                <option>(Selecionar)</option>
                @foreach($courses as $course)
                <option value="{{$course->id}}"
                    @if(isset($project->course))
                        {{($project->course->id == $course->id)?('selected'):('')}}
                    @endif
                    >{{ $course->name }}
                </option>
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
            <input name="start" type="text" value="{{ ($project->start)?($project->start->format('d/m/Y')):('') }}" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>
        </div>

        <!-- PRAZO -->
        <div class="form-group col-md-3">
            <label>Prazo do Projeto</label>
            <input name="deadline" type="text" value="{{ ($project->deadline)?($project->deadline->format('d/m/Y')):('') }}" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>
        </div>

        <!-- APOIO -->
        <div class="form-group col-md-6">
            <label>Apoio</label>
            <select class="js-example-basic-multiple form-control" multiple="multiple" name="apoio[]">
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{($project->hasUser($user->id)?('selected'):(''))}}>{{ $user->name }} </option>
                @endforeach
            </select>
        </div>

        <!-- COMPOSIÇÃO DO PROJETO -->
        <div class="form-group col-md-6">
            <label>Tipo do Projeto</label>
            <div class="checkbox">
                @foreach($types as $type)
                <label><input type="checkbox" name="composicao[]" value="{{ $type->id }}" {{($project->hasType($type->id)?('checked'):(''))}}> {{ $type->name }}</label>
                @endforeach
        </div>

        <div class="form-group col-md-6">
            <label>Situação</label>
            <select class="form-control">
                @foreach($status as $stat)
                    <option value="{{ $stat->id}}" {{ ($project->status->id == $stat->id)?('selected'):('')}}>{{ $stat->name }}</option>
                @endforeach
            </select>
        </div>

    </div>
</form>
@section('script')
    <script type="text/javascript">
        $(".js-example-basic-multiple").select2();
        $(".js-example-basic-single").select2();
    </script>
    </script>
@endsection
