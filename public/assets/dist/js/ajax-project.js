var style = "box-curso ";

var table = $('#projecttable').DataTable({
    ajax        :   "api/projects",
    responsive  :   true,
    columns     :   [
        {   data: {
                _: "course.tinyname",
            },
            className   :  'box-curso',
        },
        {   data: "title" },
        {   data: null,
            render: function(data){
                var type = data.types;
                var str = type[0].name;
                var icons =  findIcon(type[0].name);
                for (var i = 1; i < type.length; i++) {
                    str += ', ' + type[i].name;
                    icons += ' ' + findIcon(type[i].name);
                }
                str += '.';
                return '<span style="display: none;">' + str + '</span>' + icons;
            }
        },
        {
            data: null,
            render: function(data){
                var usr = data.users;
                var str = usr[0].name;
                for (var i = 1; i < usr.length; i++) {
                    str += ', ' + usr[i].name;
                }
                str += '.';
                return str;
            }
        },
        {   data: {
                _:  "status.name",
        },},

        {   data: null,
            orderable: false,
            className:   'icone',
            defaultContent: '<a href="/projects/andamentos">' +
                                '<i class="fa fa-eye" title="Visualizar projeto"></i>' +
                            '</a>',
        },
        {   data: null,
            orderable: false,
            className:   'icone',
            defaultContent: '<a href="/projects/marcos">' +
                                '<i class="fa fa-flag" title="Marcos"></i>' +
                            '</a>',
        },
        {   data: null,
            orderable: false,
            className:   'icone',
            defaultContent: '<a>' +
                                '<i class="fa fa-edit" title="Editar config. do projeto"></i>' +
                            '</a>',
        },
        {   data: null,
            orderable: false,
            className:   'icone',
            defaultContent: '<a data-toggle="collapse" data-parent="#accordion" href="#um">' +
                                '<i class="fa fa-plus-circle" title="Expandir"></i>' +
                            '</a>',
        }
    ],
    columnDefs  :   [{
        targets: 0,
        createdCell: function(td, cellData, rowData, row, col){
            var cls = cellData;
            $(td).text('');
            $(td).addClass(cls);

        }
    }],
    paging      :   false,
    language    :   {
        "sProcessing": "Processando...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sZeroRecords": "Não foram encontrados resultados",
        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando de 0 até 0 de 0 registros",
        "sInfoFiltered": "(filtrado de _MAX_ registros no total)",
        "sInfoPostFix": "",
        "sSearch": "Procurar:",
        "sUrl": "",
        "oPaginate": {
            "sFirst": "Primeiro",
            "sPrevious": "Anterior",
            "sNext": "Seguinte",
            "sLast": "Último"
        }
    },
    order: [[1, 'asc']],
});

$('#filter_global').on( 'keyup click', function () {
    table.search( this.value ).draw();
} );

$('#selectstatus').on('change', function () {
    table.column( 4 )
        .search( this.value )
        .draw();
} );

$('#selecttype').on('change', function () {
    table.column( 2 )
        .search( this.value )
        .draw();
} );

function findIcon(str){
    var icons;
    switch (str) {
        case "Moodle":
            icons = '<i class="fa fa-graduation-cap" title="Moodle"></i>';
            break;
        case "Vídeo":
            icons = '<i class="fa fa-video-camera" title="Vídeo"></i>';
            break;
        case "Web":
            icons = '<i class="fa fa-globe" title="Web"></i>';
            break;
        case "Interativo":
            icons = '<i class="fa fa-gamepad" title="Interativo"></i>';
            break;
        case "Livro Digital":
            icons = '<i class="fa fa-tablet" title="Livro Digital"></i>';
            break;
        case "Livro Impresso":
            icons = '<i class="fa fa-book" title="Livro Impresso"></i>';
            break;
    }
    return icons;
}
