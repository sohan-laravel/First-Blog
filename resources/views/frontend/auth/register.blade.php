@extends('frontend.components.layouts')
@section('title')
    User Registration Form
@endsection
@section('content')
    <br>
    <div class="card">
        <h5 class="card-header">User Registration Page</h5>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>
                </div>
            @endif

            <form action="{{ route('userRegistration') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="form-control" placeholder="Enter Your Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>

@endsection
