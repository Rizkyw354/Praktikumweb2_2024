@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card mt-4 mb-4">
                    <div class="card-header text-center">Halaman Login</div>
                    <div class="card-body">
                        <div class="text-center">
                             <img src="{{asset('img/uniska.png')}}" alt="" width=20%>
                        </div>
                        <form action="{{Route('login')}}" method="post">
                            @csrf

                            <!-- Username -->
                            <div class="form-group mt-2">
                                <label for="">Username</label>
                                <input type="text" class="form-control" placeholder="Enter your Username" name="username" value="{{old('password')}}">
                            </div>
                            <!-- Username -->

                            <!-- Password -->
                            <div class="form-group mt-2">
                                <label for="">Password</label>
                                <input type="password" class="form-control" placeholder="Enter your Password" name="password" value="{{old('password')}}">
                            </div>
                            <!-- Password -->

                            <!-- Button Login -->
                            <div class="my-2 text-center">
                                <button type="submit" class="btn btn-primary">Login User</button>
                            </div>
                            <!-- Button Login -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection