$('#digitalButton').on('click', function(event){
    event.preventDefault();
    // var formData = {
    //     metting :   $('#digitalform')
    // };
    var id = $('#project_id').val();
    var url = '/projects/'+ id + '/marks/digital';

    // var dataForm = {
    //     briefing : $('#digitalform textarea[name="briefing"]').val(),
    // }

    var formData = $('#digitalform').serialize();

    alert(formData);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        }
    });

    $.ajax({
        type    :   'PATCH',
        url     :   url,
        data    :   formData,
    }).done(function(data){
        console.log('Sucsses:', data);
    }).fail(function(data){
        console.log('Errooooouuu!', data);
    });
});
