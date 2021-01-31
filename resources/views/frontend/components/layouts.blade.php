<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/frontend/css/blog-home.css') }}" rel="stylesheet">

</head>

<body>

    @include('frontend.components.header')


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                @yield('content')

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                @include('frontend.components.right-sidebar')

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


    @include('frontend.components.footer')


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets/frontend/css/blog-home.cssvendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/css/blog-home.cssvendor/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>

</body>

</html>
