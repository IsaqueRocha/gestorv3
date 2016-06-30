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


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        }
    });

    $.ajax({
        type    :   'PUT',
        url     :   url,
        data    :   formData,
        dataType:   JSON,
        success :   function(data){
            console.log('Success:', data);
        },
        error   :   function (data) {
            console.log('Error:', data);
        }
    });
});
