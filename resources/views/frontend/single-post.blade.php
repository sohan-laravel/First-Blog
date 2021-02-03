@extends('frontend.components.layouts')
@section('title')
    Post Page
@endsection
@section('content')

    <br>
    <!-- Blog Post -->
    <div class="card mb-4">
        <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title">Single Post</h2>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quam fugit modi adipisci
                provident hic veniam molestias porro vel amet. Fugit saepe ut possimus. Error nisi exercitationem iste
                quidem nihil?</p>

        </div>
        <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <a href="#">Start Bootstrap</a>
        </div>
    </div>

    <!-- Pagination -->
    {{-- <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
        </li>
    </ul> --}}


@endsection
