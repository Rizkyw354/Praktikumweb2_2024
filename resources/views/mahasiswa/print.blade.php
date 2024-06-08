<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print - Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body onload="window.print()">
    <style>
        .text-center {
            text-align: center;
        }

        #table {
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        #container {
            position: relative;
            min-height: 100vh;
        }

        #content {
            padding-bottom: 2.5rem;
            /* Footer height */
        }

        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 2.5rem;
            text-align: center;
            /* Footer height */
        }
    </style>
    <div id="container">
        <div class="text-center">
            <h3>LAPORAN DATA MAHASISWA</h3>
        </div>
        <div id="content">
            <table id="table" class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Foto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->jurusan}}</td>
                            <td>{{$data->npm}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{Carbon\carbon::parse($data->tanggal_lahir)->format('d-m-Y')}}</td>
                            <td>
                                <div class="text-center">
                                    <img src="{{asset('storage/foto/' . $data->foto)}}" alt="" width="20%">
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>


</body>
<footer id="footer">
    &#169 Muhammad Tamami
</footer>

</html>