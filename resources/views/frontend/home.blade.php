@extends('frontend.components.layouts')
@section('title')
    Sohan's Blog
@endsection
@section('content')

    <h1 class="my-4">Home Page</h1>

    <x-single-post title="This is our first blog">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
        aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi
        vero voluptate voluptatibus possimus, veniam magni quis!
    </x-single-post>
    {{-- <x-single-post title="This is our second blog"></x-single-post> --}}
@endsection
