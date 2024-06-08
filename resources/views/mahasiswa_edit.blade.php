@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Mahasiswa</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4 mb-4">
                    <div class="card-header">Edit Mahasiswa</div>
                    <div class="card-body">
                        <form action="">

                        <!-- Jurusan -->
                        <div class="form-group mt-2">
                            <label for="">Jurusan</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama Jurusan">
                        </div>

                        <!-- NPM -->
                        <div class="form-group mt-2">
                           <label for="">NPM</label>
                            <input type="text" class="form-control" placeholder="Masukkan NPM Kamu">
                        </div>

                        <!-- Nama -->
                        <div class="form-group mt-2">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama kamu">
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="form-group mt-2">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir Kamu">
                        </div>

                        <!-- Upload Foto -->
                        <div class="form-group mt-3">
                            <label for="">Upload Foto</label>
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        </div>

                        <!-- Button Simpan Edit -->
                        <div class="mt-4">
                            <a href="/mahasiswa" class="btn btn-primary">Simpan Edit</a>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection