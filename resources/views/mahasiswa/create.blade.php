@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Mahasiswa</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4 mb-4">
                    <div class="card-header">Tambah Data Mahasiswa</div>
                    <div class="card-body">
                        <form action="{{Route('mahasiswa.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- Jurusan -->
                            <div class="form-group mt-2">
                                <label for="">Jurusan</label>
                                <select name="jurusan" id="" class="form-control">
                                    <option value="">- Pilih -</option>
                                    <option value="TI">TI</option>
                                    <option value="SI">SI</option>
                                </select>
                                @error('jurusan')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- NPM -->
                            <div class="form-group mt-2">
                                <label for="">NPM</label>
                                <input type="text" name="npm" class="form-control" placeholder="Masukkan NPM Kamu">
                                @error('npm')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Nama -->
                            <div class="form-group mt-2">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama kamu">
                                @error('nama')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Tanggal Lahir -->
                            <div class="form-group mt-2">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control">
                                @error('tanggal_lahir')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Upload Foto -->
                            <div class="form-group mt-3">
                                <label for="">Upload Foto</label>
                                <input type="file" name="foto" class="form-control">
                                @error('foto')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                    </div>

                    <!-- Button Simpan -->
                    <div class="card-footer">
                        <div class="float-end">
                            <a href="{{Route('mahasiswa.index')}}" class="btn btn-success">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan Data</a>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection