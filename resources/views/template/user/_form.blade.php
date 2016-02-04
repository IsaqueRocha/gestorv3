        <!--NOME-->
        <div class="form-group col-md-6">
            <label>Nome</label>
            <input name="name" type="text" value="{!! ($user->name)?($user->name):(old('name')) !!}" class="form-control" placeholder="Nome ..." required />
        </div><!-- NOME-->

        <!--EMAIL-->
        <div class="form-group col-md-6">
            <label>E-mail</label>
            <input name="email" type="email" value="{!! ($user->email)?($user->email):(old('email')) !!}"class="form-control" placeholder="E-mail ..."/>
        </div><!--FIM EMAIL-->

        <!--CPF-->
        <div class="form-group col-md-3">
            <label>CPF</label>
            <input name="cpf" type="text" value="{!! ($user->cpf)?($user->cpf):(old('cpf')) !!}" class="form-control" placeholder="___.___.___-__" data-inputmask='"mask": "999.999.999-99"' data-mask/>
        </div><!--CPF-->

        <!--TELEFONE-->
        <div class="form-group col-md-3">
            <label>Telefone:</label>
            <input name="phone" type="text" value="{!! ($user->phone)?($user->phone):(old('phone')) !!}" class="form-control" placeholder="(__) _____-____" data-inputmask='"mask": "(99) 99999-9999"' data-mask/>
        </div><!--FIM TELEFONE-->

        <!--ENDEREÇO-->
        <div class="form-group col-md-6">
            <label>Endereço</label>
            <input name="address" type="text" value="{!! ($user->address)?($user->address):(old('address')) !!}" class="form-control" placeholder="Rua, Bairro, Cidade ..."/>
        </div><!--FIM ENDEREÇO-->

        <!--FUNÇÃO-->

        <div class="form-group col-md-4">
            <label>Função</label>
            <select name="role" class="form-control">
                <option>Selecionar</option>
                @foreach(config('enum.roles') as $role)
                <option value="{{$role}}" {{($user->role == $role)?('selected'):('')}}>
                    {{$role}}
                </option>
                @endforeach
            </select>
        </div><!--FIM FUNÇÃO-->

        <!--ÁREA DE ATUAÇÃO-->
        <div class="form-group col-md-4">
            <label>Área de atuação</label>
            <select name="area" class="form-control">
                <option>Selecionar</option>
                @foreach(config('enum.areas') as $area)
                <option value="{{$area}}" {{($user->area == $area)?('selected'):('')}}>
                    {{$area}}
                </option>
                @endforeach
            </select>
        </div><!--FIM ÁREA DE ATUAÇÃO-->

        <!--ENTRADA-->
        <div class="form-group col-md-4">
            <label>Entrada</label>
            <input name="entrance_date" type="text" value="{!! ($user->entrance_date)?($user->entrance_date->format('d/m/Y')):(old('entrance_date')) !!}" class="form-control" placeholder="dd/mm/yyyy" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
        </div><!-- FIM ENTRADA-->

        <!--HORÁRIO-->
        <div class="form-group col-md-3">
            <label>Horário</label>
            <label>A.M.</label>
            <div class="input-group m-b10">
                <div class="input-group-addon dia-semana">
                    <i class="">Seg</i>
                </div>
                <input type="text" value="{{$user->work_schedule['seg_am']}}" class="form-control" name="seg_am" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
            </div>

            <div class="input-group m-b10">
                <div class="input-group-addon dia-semana">
                    <i class="">Ter</i>
                </div>
                <input type="text" value="{{$user->work_schedule['ter_am']}}" class="form-control" name="ter_am" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
            </div>

            <div class="input-group m-b10">
                <div class="input-group-addon dia-semana">
                    <i class="">Qua</i>
                </div>
                <input type="text" value="{{$user->work_schedule['qua_am']}}" class="form-control" name="qua_am" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
            </div>

            <div class="input-group m-b10">
                <div class="input-group-addon dia-semana">
                    <i class="">Qui</i>
                </div>
                <input type="text" value="{{$user->work_schedule['qui_am']}}" class="form-control" name="qui_am" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
            </div>

            <div class="input-group m-b10">
                <div class="input-group-addon dia-semana">
                    <i class="">Sex</i>
                </div>
                <input type="text" value="{{$user->work_schedule['sex_am']}}" class="form-control" name="sex_am" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
            </div>
        </div><!-- FIM HORÁRIO-->

        <!--HORÁRIO-->
        <div class="form-group col-md-3">
            <label>Horário</label>
            <label>P.M.</label>
            <div class="input-group m-b10">
                <div class="input-group-addon dia-semana">
                    <i class="">Seg</i>
                </div>
                <input type="text" value="{{$user->work_schedule['seg_pm']}}" class="form-control" name="seg_pm" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
            </div>

            <div class="input-group m-b10">
                <div class="input-group-addon dia-semana">
                    <i class="">Ter</i>
                </div>
                <input type="text" value="{{$user->work_schedule['ter_pm']}}" class="form-control" name="ter_pm"  placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
            </div>

            <div class="input-group m-b10">
                <div class="input-group-addon dia-semana">
                    <i class="">Qua</i>
                </div>
                <input type="text" value="{{$user->work_schedule['qua_pm']}}" class="form-control" name="qua_pm" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
            </div>

            <div class="input-group m-b10">
                <div class="input-group-addon dia-semana">
                    <i class="">Qui</i>
                </div>
                <input type="text" value="{{$user->work_schedule['qui_pm']}}" class="form-control" name="qui_pm" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
            </div>

            <div class="input-group m-b10">
                <div class="input-group-addon dia-semana">
                    <i class="">Sex</i>
                </div>
                <input type="text" value="{{$user->work_schedule['sex_pm']}}" class="form-control" name="sex_pm" placeholder="__:__ à __:__" data-inputmask='"mask": "99:99 à 99:99"' data-mask/>
            </div>
        </div><!-- FIM HORÁRIO-->

        <!--AVATAR-->
        <div class="form-group col-md-6">
            <label>Avatar</label>
            <div>
                <img src="{!! asset('assets/dist/img/avatar.png') !!}" id="blah" />
                <br>
                <input type="file" id="realupload" name="realupload" class="realupload" accept="image/*" onChange="readURL(this);" />
            </div>
        </div><!--FIM AVATAR-->