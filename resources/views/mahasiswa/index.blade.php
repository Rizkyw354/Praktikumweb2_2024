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
                            <div class="row">
                                <!-- Pencarian -->
                                <div class="col-md-6">
                                    <div class="form-group mt-2">
                                        <form action="{{Route('mahasiswa.search')}}">
                                        <input type="text" class="form-control"
                                            placeholder="Cari Berdasarkan Nama atau NPM" name="keyword"
                                            value="{{old('keyword')}}">
                                            </form>
                                    </div>
                                </div>
                        <!-- Button Cetak dan Tambah -->
                        <div class="col-md-6 text-md-end">
                            <div class="form-group mt-2">
                                <a href="{{Route('mahasiswa.print')}}" class="btn btn-success me-2"
                                    target="__blank">Cetak Data</a>
                                <a href="{{Route('mahasiswa.create')}}" class="btn btn-primary">+ Tambah Data</a>
                            </div>
                        </div>
                    </div>

                    <!-- Tabel -->
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
                                    <td>
                                        <div class="text-center mt-3">
                                            <form action="{{Route('mahasiswa.destroy', $data->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{Route('mahasiswa.edit', $data->id)}}"
                                                    class="btn btn-info">Edit</a>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
@endsection