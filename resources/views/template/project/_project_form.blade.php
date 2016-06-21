<div class="row">
    <!-- NOME DO PROJETO-->
    <div class="form-group col-md-6">
        <label>Projeto</label>
        <input name="name" type="text" value="{{ $project->title or old('name')}}" class="form-control" placeholder="Nome do projeto" required />
    </div>

    <!-- PROFESSOR -->
    <div class="form-group col-md-5">
        <label>Professor</label>
        <select name="teacher" class="form-control js-example-basic-single">
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
</div>

<div class="row">
    <!-- CURSO -->
    <div class="form-group col-md-4">
        <label>Curso</label>
        <select name="course" class="form-control js-example-basic-single" required>
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
    <input name="discipline_date" type="text" value="{{ \Carbon\Carbon::now()->format('d/m/Y') }}" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
</div>

<!-- INÍCIO -->
<div class="form-group col-md-3">
    <label>Início do Projeto</label>
    <input name="start" type="text" value="{{ ($project->start)?($project->start->format('d/m/Y')):(\Carbon\Carbon::now()->format('d/m/Y')) }}" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>
</div>

<!-- PRAZO -->
<div class="form-group col-md-3">
    <label>Prazo do Projeto</label>
    <input name="deadline" type="text" value="{{ ($project->deadline)?($project->deadline->format('d/m/Y')):(\Carbon\Carbon::now()->format('d/m/Y')) }}" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>
</div>
</div>

<div class="row">
    <!-- APOIO -->
    <div class="form-group col-md-6">
        <div class="row" style="margin-bottom: 15px;">
            <div class="col-md-12">
                <label>Apoio</label>
                <select name="users[]" class="js-example-basic-multiple form-control" multiple="multiple">
                    @foreach($users as $user)
                    <option value="{{ $user->id }}" {{($project->hasUser($user->id)?('selected'):(''))}}>{{ $user->name }} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-md-12">
                <label>Situação</label>
                <select name="status" class="form-control select">
                    @foreach($status as $stat)
                    <option value="{{ $stat->id}}"
                            @if(isset($project->status))
                            {{ ($project->status->id == $stat->id)?('selected'):('')}}
                            @endif
                            >{{ $stat->name }}
                </option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<!-- COMPOSIÇÃO DO PROJETO -->
<div class="form-group col-md-6">
    <label>Tipo do Projeto</label>
    <div class="checkbox">
        @foreach($types as $type)
        <label><input type="checkbox" name="types[]" value="{{ $type->id }}" {{($project->hasType($type->id)?('checked'):(''))}}> {{ $type->name }}</label>
        @endforeach
    </div>
</div>
</div>
@section('script')

<script type="text/javascript">
    $(".js-example-basic-multiple").select2();
    $(".js-example-basic-single").select2();
    $(".select").select2({
        minimumResultsForSearch: Infinity
    });
</script>
@endsection
