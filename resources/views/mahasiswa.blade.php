@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-16">
                <div class="card mt-4 mb-4">
                    <div class="card-header">Data Mahasiswa</div>
                    <div class="card-body">
                        <form action="">
                            
                        <div class="row">
                            <!-- Pencarian -->
                            <div class="col-md-6">
                                <div class="form-group mt-2">
                                    <input type="text" class="form-control" placeholder="Cari Berdasarkan Nama dan Jurusan">
                                </div>
                            </div>

                            <!-- Button Cetak dan Tambah -->
                            <div class="col-md-6 text-md-end">
                                <div class="form-group mt-2">
                                    <a href="/home" class="btn btn-success me-2">Cetak Data</a>
                                    <a href="/tambahmahasiswa" class="btn btn-primary">Tambah</a>
                                </div>
                            </div>
                        </div>

                            
                            <!-- Tabel -->
                            <div class="table-responsive">
                                <table class="table table-bordered mt-4">
                                    <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">NPM</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>TI</td>
                                    <td>2110010234</td>
                                    <td>Muhammad Tamami</td>
                                    <td>20 Agustus 2003</td>
                                    <td class="text-center" width=7%><img src="{{asset('img/upload.png')}}" alt="" width=40%></td>
                                    <td>
                                        <a href="/editmahasiswa" class="btn btn-warning">Edit</a>
                                        <a href="/home" class="btn btn-danger">Hapus</a>
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
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