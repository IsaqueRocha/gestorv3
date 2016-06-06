<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" media="screen" title="no title" charset="utf-8">
    </head>
    <body>
        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Role</th>
                    <th>Area</th>
                </tr>
            </thead>
        </table>
    </body>
    <!-- <script src="https://code.jquery.com/jquery-1.12.3.min.js" type="text/javascript"></script> -->
    <script src="{{ asset('assets/plugins/jQuery/jQuery-2.1.3.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript" ></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js" type="text/javascript" ></script>
    <script src="{{ asset('assets/dist/js/ajax.js')}}" type="text/javascript"></script>
</html>
