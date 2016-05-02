alteraDesativa();

function deleteUser(event){

    event.preventDefault();

    swal({
        title: "APAGAR USUARIO?",
        text: "Tem certeza que deseja apaga este usuário,não será possível recuperá-lo.",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Ok",
        cancelButtonText: "Cancelar",
        closeOnConfirm: false,
        closeOnCancel: true,
        showLoaderOnConfirm: true,
        animation: 'slide-from-bottom',
    },
    function(isConfirm){
        if (isConfirm) {
            $('#deletarUsuario').submit();
        }
    });
}


function cancelEdit(){
    window.history.back();
}

function disableUser(event){
    event.preventDefault();
    var url = $('#desativarUsuario').attr('action');
    var status = $('#desativar').val();
    var title;
    if (status == 1) {
        title = 'DESATIVAR USUÁRIO?';
    } else {
        title = 'ATIVAR USUÁRIO?';
    }

    swal({
        title: title,
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Ok",
        cancelButtonText: "Cancelar",
        closeOnConfirm: false,
        closeOnCancel: true,
        showLoaderOnConfirm: true,
        animation: 'slide-from-bottom',
    },
    function(isConfirm){
        if (isConfirm) {
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type    :   'PUT',
                url     :   url,
                dataType:   'JSON',
                error   :   function( data ) {
                    swal("Erro!", "Houve um erro na tentativa de desativar este usuário. " + user_id, "error");
                    console.log('Error: ', data);
                },
                success :   function( data) {
                    console.log(data);
                    if (data.active === true ) {
                        swal("Ativado!", "Este usuário foi desativado." + data.active, "success");
                        $('#desativar').val('1');
                    } else {
                        swal("Desativado!", "Este usuário foi desativado." + data.active, "success");
                        $('#desativar').val('0');
                    }
                    alteraDesativa();
                }
            });
        }
    });
}

function filterArea(url, area_name){
    if (area_name === 'todos') {
        $('#areas').attr('action', url + '/users').submit();
    }else{
        $('#areas').attr('action', url + '/users/area/' + area_name).submit();
    }
}

function filterRole(url, role_name) {
    if (role_name === 'todos') {
        $('#roles').attr('action', url + '/users').submit();
    }else{
        $('#roles').attr('action', url + '/users/role/' + role_name).submit();
    }
}

function alteraDesativa(){
    var mode = $('#desativar').val();
    if (mode === 0){
        $('#desativar').removeClass("btn-warning").addClass("btn-primary");
    } else if(mode == 1){
        $('#desativar').removeClass("btn-primary").addClass("btn-warning");
    }
}
