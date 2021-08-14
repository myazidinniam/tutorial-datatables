<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cara Membuat DataTables Join Multiple Tables</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
        <!-- Css Bootstrap dan Jquery Datatables -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    </head>
    <body>
            <div class="container">
                <h4 class="alert alert-success">
                    Cara Membuat DataTables Join Multiple Tables
                </h4>

                <div class="table-responsive py-3">
                    <table class="table table-bordered" id="users-table">
                        <thead>
                            <tr>
                                <th>Judul Artikel</th>
                                <th>Kategori</th>
                                <th>Isi</th>
                                <th>Tanggal Dibuat</th>
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
                    ajax: '/ArtikelJson',
                    columns: [
                        { data: 'nama_artikel', name: 'nama_artikel' },
                        { data: 'nama_kategori', name: 'nama_kategori' },
                        { data: 'konten', name: 'konten' },
                        { data: 'created_at', name: 'created_at' },
                    ]
                });
            });
        </script>
    </body>
</html>
