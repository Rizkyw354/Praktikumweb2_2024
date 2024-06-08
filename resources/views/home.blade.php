@extends('layouts.main')
@push('css')
    <style>
       
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-body">
                <h1 class="text-primary">Selamat Datang user {{Auth::user()->nama}}</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint vel laboriosam ipsum deleniti, consequatur quae adipisci nostrum similique quia beatae voluptates quasi vero perspiciatis mollitia ex inventore, reiciendis voluptatum facilis?</p>
            </div>
        </div>
    </div>
@endsection