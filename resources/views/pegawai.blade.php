<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat Laporan PDF dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <center>
            <h4>Membuat laporan PDF dengan DOMPDF Laravel</h4>            
        </center>
        <br/>
        <a href="/cetak" class="btn btn-primary" target="_blank">Cetak Pdf</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Pekerjaan</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1
                @endphp
                @foreach ($pegawai as $p)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{$p->nama}}</td>
                        <td>{{$p->email}}</td>
                        <td>{{$p->alamat}}</td>
                        <td>{{$p->telepon}}</td>
                        <td>{{$p->pekerjaan}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
</body>
</html>