@extends('frontend.components.layouts')
@section('title')
    User Registration Form
@endsection
@section('content')
    <br>
    <div class="card">
        <h5 class="card-header">User Registration Page</h5>

        <div class="card-body">

            {{-- Error message show code start one way --}}

            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>
                </div>
            @endif --}}

            {{-- Error message show code end one way --}}

            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <form action="{{ route('user.userRegistration') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror" placeholder="Enter Your Name">
                    @error('name')
                        <span class="text-danger font-italic">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your Email">
                    @error('email')
                        <span class="text-danger font-italic">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="{{ old('password') }}"
                        class="form-control @error('password') is-invalid @enderror" placeholder="Enter Your Password">
                    @error('password')
                        <span class="text-danger font-italic">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="photo" class="form-control">
                    @error('photo')
                        <span class="text-danger font-italic">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>

@endsection
