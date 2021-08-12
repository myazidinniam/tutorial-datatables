<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cara Membuat DataTables Server-Side di Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
        <!-- Css Bootstrap dan Jquery Datatables -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    </head>
    <body>
            <div class="container">
                <h4 class="alert alert-success">
                    Latihan DataTables Server-Side di Laravel
                </h4>

                <div class="table-responsive py-3">
                    <table class="table table-bordered" id="users-table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Tgl Register</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <!-- DataTables -->
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $('document').ready(function(){
                $('#users-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '/UserJson',
                    columns: [
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
                        { data: 'created_at', name: 'created_at' },
                    ]
                });
            });
        </script>
    </body>
</html>
