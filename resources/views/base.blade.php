<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{url('bootstrap.min.css')}}">

        <title>Responsi Web 2</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">WEB2</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item @yield('jobs')">
                        <a class="nav-link" href="">Jobs</a>
                    </li>
                    <li class="nav-item @yield('employees')">
                        <a class="nav-link" href="">Employees</a>
                    </li>
                    <li class="nav-item @yield('info')">
                        <!-- isikan link INFO anda disini -->
                        <a class="nav-link" href="">Info</a>
                    </li>
                </ul>
                @if (Route::has('login'))
                <form action="{{ route('logout') }}" method="POST" class="form-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
                @endif
            </div>
        </nav>
        <br/>
        <div class="container-fluid">
            @yield()
        </div>
    </body>
</html>