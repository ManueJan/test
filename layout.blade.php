<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title',"Event Planner")</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="base-url" content="{{ url('/') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        .is-complete {
            color: red;
        }
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md">
            <div class="container col-sm-11">
                <a class="navbar-brand" href="{{ url('/') }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/events') }}">Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/events/create') }}">Create Event</a>
                            </li> 
                        </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>
    </div>
    @stack('js')
</body>
</html>
