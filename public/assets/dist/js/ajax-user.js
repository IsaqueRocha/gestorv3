function deleteUser(event){

    event.preventDefault();

    swal({
        title: "Tem certeza que deseja apagar este Usuário?",
        text: "Não será possível recuperar este usuário.",
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
    swal("Here's a message!", "It's pretty, isn't it?");
}

function deactivateUser(){
    swal({
        title: "Tem certeza que deseja desativar este usuário?",
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
    );
}
