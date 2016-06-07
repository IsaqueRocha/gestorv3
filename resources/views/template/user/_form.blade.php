@section('head')
@parent
<!-- Custom styles for this template -->
<link href="{{ asset('/assets/plugins/croppic/assets/css/main.css') }}" rel="stylesheet">
<link href="{{ asset('/assets/plugins/croppic/assets/css/croppic.css') }}" rel="stylesheet">

@endsection

<div class="row">
    <!-- NOME -->
    <div class="form-group col-md-3">
        <label>Nome</label>
        <input name="name" type="text" value="{!! ($user->name)?($user->name):(old('name')) !!}" class="form-control" placeholder="Nome" required />
    </div>

    <!-- SOBRENOME -->
    <div class="form-group col-md-3">
        <label>Sobrenome</label>
        <input name="surname" type="text" value="{!! ($user->surname)?($user->surname):(old('surname')) !!}" class="form-control" placeholder="Sobrenome" required />
    </div>

    <!--EMAIL-->
    <div class="form-group col-md-6">
        <label>E-mail</label>
        <input name="email" type="email" value="{!! ($user->email)?($user->email):(old('email')) !!}" class="form-control" placeholder="E-mail"/>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="row">
            <!--CPF-->
            <div class="form-group col-md-3">
                <label>CPF</label>
                <input name="cpf" type="text" value="{!! ($user->cpf)?($user->cpf):(old('cpf')) !!}" class="form-control" placeholder="___.___.___-__" data-inputmask='"mask": "999.999.999-99"' data-mask/>
            </div>

            <!--TELEFONE-->
            <div class="form-group col-md-3">
                <label>Telefone:</label>
                <input name="phone" type="text" value="{!! ($user->phone)?($user->phone):(old('phone')) !!}" class="form-control" placeholder="(__) _____-____" data-inputmask='"mask": "(99) 99999-9999"' data-mask/>
            </div>

            <!--ENTRADA-->
            <div class="form-group col-md-3">
                <label>Entrada</label>
                <input name="entrance_date" type="text" value="{!! ($user->entrance_date)?($user->entrance_date->format('d/m/Y')):(old('entrance_date')) !!}" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/aaaa'" data-mask/>
            </div>

            <!--ENTRADA-->
            <div class="form-group col-md-3">
                <label>Saída</label>
                <input name="exit_date" type="text" value="" class="form-control" placeholder="dd/mm/aaaa" data-inputmask="'alias': 'dd/mm/aaaa'" data-mask/>
            </div>
        </div>
    </div>

    <!--ENDEREÇO-->
    <div class="form-group col-md-6">
        <label>Endereço</label>
        <input name="address" type="text" value="{!! ($user->address)?($user->address):(old('address')) !!}" class="form-control" placeholder="Endereço"/>
    </div>
</div>

<div class="row">
    <!--FUNÇÃO-->
    <div class="form-group col-md-6">
        <label>Função</label>
        <select name="role" class="form-control">
            <option>(Selecionar)</option>
            @is('Admin')
            <option value="{{ Defender::findRole('Admin')->id }}"
                {{ ($user->hasRole('Admin'))?('selected'):('') }}>
                Admin
            </option>
            @endis
            <option value="{{ Defender::findRole('Coordenador')->id }}"
                {{ ($user->hasRole('Coordenador'))?('selected'):('') }} >
                Coordenador
            </option>
            <option value="{{ Defender::findRole('Estagiário')->id }}"
                {{ ($user->hasRole('Estagiário'))?('selected'):('') }} >
                Estagiário
            </option>
            <option value="{{ Defender::findRole('Técnico')->id }}"
                {{ ($user->hasRole('Técnico'))?('selected'):('') }} >
                Técnico
            </option>
        </select>
    </div>

    <div class="form-group col-md-6">
        <div class="row">
            <!--ÁREA DE ATUAÇÃO-->
            <div class="col-md-12">
                <label>Área de atuação</label>
                <div class="checkbox">
                    <div class="col-md-4">
                        @is('Admin')
                        <label><input type="checkbox" name="area[]"
                            value="{{ Defender::findRole('Master')->id }}"
                            {{ ($user->hasRole('Master'))?('checked'):('') }} >Master
                        </label>
                        @endis
                        <label><input type="checkbox" name="area[]"
                            value="{{ Defender::findRole('Diagramação')->id }}"
                            {{ ($user->hasRole('Diagramação'))?('checked'):('') }} >Diagramação
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label><input type="checkbox" name="area[]"
                            value="{{ Defender::findRole('Gerência')->id }}"
                            {{ ($user->hasRole('Gerência'))?('checked'):('') }}> Gerência</label>
                        <label><input type="checkbox" name="area[]"
                            value="{{ Defender::findRole('Ilustração')->id }}"
                            {{ ($user->hasRole('Ilustração'))?('checked'):('') }}> Ilustração</label>
                    </div>
                    <div class="col-md-4">
                        <label><input type="checkbox" name="area[]"
                            value="{{ Defender::findRole('Vídeo')->id }}"
                            {{ ($user->hasRole('Vídeo'))?('checked'):('') }} > Vídeo</label>
                        <label><input type="checkbox" name="area[]"
                            value="{{ Defender::findRole('Web')->id }}"
                            {{ ($user->hasRole('Web'))?('checked'):('') }} > Web</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <!--HORÁRIO MATUTINO-->
    <div class="form-group col-md-3 horarioUsuario">
        <label>Horário Matutino <small>(Manhã)</small></label>
        <div class="input-group">
            <div class="input-group-addon">
                Seg
            </div>
            <input type="text" value="{{$user->work_schedule['seg_am']}}" class="form-control" name="seg_am" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
        </div>

        <div class="input-group">
            <div class="input-group-addon">
                Ter
            </div>
            <input type="text" value="{{$user->work_schedule['ter_am']}}" class="form-control" name="ter_am" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
        </div>

        <div class="input-group">
            <div class="input-group-addon">
                Qua
            </div>
            <input type="text" value="{{$user->work_schedule['qua_am']}}" class="form-control" name="qua_am" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
        </div>

        <div class="input-group">
            <div class="input-group-addon">
                Qui
            </div>
            <input type="text" value="{{$user->work_schedule['qui_am']}}" class="form-control" name="qui_am" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
        </div>

        <div class="input-group">
            <div class="input-group-addon">
                Sex
            </div>
            <input type="text" value="{{$user->work_schedule['sex_am']}}" class="form-control" name="sex_am" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
        </div>
    </div><!-- FIM HORÁRIO MATUTINO-->

    <!--HORÁRIO VESPERTINO-->
    <div class="form-group col-md-3 horarioUsuario">
        <label>Horário Vespertino <small>(Tarde)</small></label>

        <div class="input-group">
            <div class="input-group-addon">
                Seg
            </div>
            <input type="text" value="{{$user->work_schedule['seg_pm']}}" class="form-control" name="seg_pm" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
        </div>

        <div class="input-group">
            <div class="input-group-addon">
                Ter
            </div>
            <input type="text" value="{{$user->work_schedule['ter_pm']}}" class="form-control" name="ter_pm"  placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
        </div>

        <div class="input-group">
            <div class="input-group-addon">
                Qua
            </div>
            <input type="text" value="{{$user->work_schedule['qua_pm']}}" class="form-control" name="qua_pm" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
        </div>

        <div class="input-group">
            <div class="input-group-addon">
                Qui
            </div>
            <input type="text" value="{{$user->work_schedule['qui_pm']}}" class="form-control" name="qui_pm" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
        </div>

        <div class="input-group">
            <div class="input-group-addon">
                Sex
            </div>
            <input type="text" value="{{$user->work_schedule['sex_pm']}}" class="form-control" name="sex_pm" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
        </div>
    </div><!-- FIM HORÁRIO VESPERTINO-->

    <!--AVATAR-->
    <!-- <div class="form-group col-md-6">
    <label>Avatar</label>
    <div>
    <a href="#">
    <img src="{!! asset('/assets/theme/img/avatar.png') !!}" id="blah" style="max-height:200px;margin-bottom:10px;" />
    </a>
    <input type="file" id="realupload" name="realupload" class="realupload" accept="image/*" onChange="readURL(this);" />
    </div>
    </div> -->

    <!-- <div class="row margin-bottom-40"> -->
    <div class="form-group col-md-3">
        <label>Avatar</label>
        <br>
        <div id="cropContainerEyecandy">
            <img src="{{ $user->photo }}" alt="" />
        </div>
        <input type="hidden" name="photo" id="croppedImgUrl">
    </div> <!--FIM AVATAR-->
</div>

@section('script')
@parent
<script src="{{ asset('assets/plugins/croppic/croppic.min.js')}}"></script>
<script>
var eyeCandy = $('#cropContainerEyecandy');
var croppedOptions = {
    uploadUrl: 'upload',
    cropUrl: 'crop',
    cropData: {
        'width': eyeCandy.width(),
        'height': eyeCandy.height()
    },
    outputUrlId: 'croppedImgUrl'
};
var cropperBox = new Croppic('cropContainerEyecandy', croppedOptions);
</script>
<script src="{{ asset('assets/dist/js/ajax-user.js') }}"></script>

@endsection
