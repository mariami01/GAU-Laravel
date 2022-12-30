@extends('master')
@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card" >
                <div class="card-header">
                    <h2>Add User
                        <a href="{{url('user')}}" class="btn btn-danger float-end">BACK</a>
                    </h2>

                </div>
                <div class="card-body">

                    <form action="{{ url('store-user') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">User Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">User Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection