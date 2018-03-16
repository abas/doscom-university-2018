<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DOSCOM | DU 2018</title>

    <link rel="stylesheet" href="{{asset('css/cus-datatable.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- material -->
    <link href="{{ asset('assetmaterial/css/bootstrap-material-design.min.css') }}" rel="stylesheet">


    <!-- Material Design fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--     
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/main.css" rel="stylesheet">
    <link href="assetmaterial/css/bootstrap-material-design.min.css" rel="stylesheet">
    <link href="assetmaterial/css/ripples.min.css" rel="stylesheet">
    <link href="css/image-picker.css" rel="stylesheet"> -->
    <style media="screen">
        .image_picker_selector p {
            text-align: center;
            font-weight: bold;
        }

        .selected p {
            color: #fff;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top well-info" style="background-color:#03a9f4">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{url('/')}}">Doscom
                        <b>University</b>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        @else
                        <li>
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} </a>

                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            <li>
                                <a href="{{route('dashboard')}}">Dasboard</a>
                            </li>
                            <li>
                                <a href="{{route('humasdata')}}">Humas</a>
                            </li>
                        </li>
                        @endif
                    </ul>
                </div>

            </div>
        </nav>
    </div>
    @yield('content')

    <div class="col-md-8 col-md-offset-3">
        <p>Copyright &copy; 2015 |
            <a href="http://du.doscom.org" style="text-decoration:none;color:#03a9f4;font-weight:bold">Doscom University</a>
        </p>
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js'></script>

    <script src="{{asset('js/cus-datatable.js')}}"></script>

    <!-- Scripts -->
    <script>
        $(function () {
            $('.hiddensearch').slideDown();
        });

        $(function () {
            var label = document.getElementsByTagName("LABEL")[0];
            if(label.id == "email"){
                // 
            }else{
                document.getElementsByTagName("LABEL")[0].style.width = "100%";
            }
        });
    </script>
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->

</body>

</html>