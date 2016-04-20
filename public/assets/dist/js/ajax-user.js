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

function disableUser(user_id){
    swal({
        title: "DESATIVAR USUÁRIO?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Ok",
        cancelButtonText: "Cancelar",
        closeOnConfirm: false,
        closeOnCancel: false,
        showLoaderOnConfirm: true,
        animation: 'slide-from-bottom',
    }
    // function(isConfirm){
    //     if (isConfirm) {
    //         $.ajax({
    //             type    :   'PATCH',
    //             url     :   '/users/' + user_id + 'disable';
    //         });
    //     }
    // }
    );
}
