<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Cellar App</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/docs.css') }}" rel="stylesheet">
    <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body>
    <div class="header"><div><div class="navbar navbar-fixed-top" xmlns="http://www.w3.org/1999/html"><div class="navbar-inner">
        <div class="container">
            <a class="brand" href="{{ url('/') }}">Cellar App</a>
                <div class="nav-collapse">
                    <ul class="nav">
                        <li class="add-menu"><a href="{{ route('wine.create') }}"><i class="fa fa-user"></i> Add Wine</a></li>
                        <li class="add-menu"><a href="{{ route('wine.index')  }}"><i class="fa fa-glass"></i> Wine List</a></li>
                    </ul>

                    <ul class="nav pull-right">
                        <li class="about-menu"><a href="javascript:void(0)">Login</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="container">
        @yield('content')

        <footer class="footer">
            <p class="pull-right"><a href="#">Cellar App</a></p>
            <p> CodeBy - Ajay Singh Rawat</p>
        </footer>
    </div>
</body>
</html>
