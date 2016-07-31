<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{!! csrf_token() !!}"/>

    <title>Education Portal</title>

    <!-- Fonts -->
    {{ HTML::style('css/font-awesome.css') }}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    {{ HTML::style('css/bootstrap.min.css') }}
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ elixir('public/css/style.css') }}" rel="stylesheet"> --}}
    {{ HTML::style('css/style.css') }}
    {{ HTML::script('js/bootstrap.js') }}
    {{ HTML::script('js/scrollreveal.js') }}

   
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="forum">
    <nav class="navbar navbar-default navbar-fixed-top">
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
                <a class="navbar-brand  page-scroll" href="{{ url('/') }}">
                    Education portal
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">

                        <li><a href="{{ url('/discussion-forum/questions') }}">Questions</a></li>
                       
                        <li><a href="#">FAQ</a></li>
                        <li><a href="{{ url('/discussion-forum/ask-question') }}">Ask Question</a></li>

                    <!-- Authentication Links -->
                    @if (Auth::guest())

                        <li><a href="{{ url('/register') }}" id="borderless"><i class="fa fa-btn fa-user"></i>Register</a></li>
                         <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="borderless">
                                 <i class="fa fa-power-off"><span style="font-size: 20px; font-weight: bolder;"> Log in</span></i>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/login') }}" id="borderless-menu"><i class="fa fa-btn fa-user"></i>Student</a></li>
                                <li><a href="{{ url('/login') }}" id="borderless-menu"><i class="fa fa-btn fa-cog"></i>Teacher</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="#">Notifications</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false" id="borderless">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                 <li><a href="{{ url('/profile') }}" id="borderless-menu"><i class="fa fa-btn fa-user"></i>My Profile</a></li>
                                  <li><a href="{{ url('/settings') }}" id="borderless-menu"><i class="fa fa-btn fa-cog"></i>Settings</a></li>
                                <li><a href="{{ url('/logout') }}" id="borderless-menu"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')

  <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

</body>
</html>
