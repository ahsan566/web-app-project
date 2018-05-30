<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">





<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CricketIBA</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


	<style>
	 html, body {
                background-color: #000;
                color: #000;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
				 
            }

			ul{
			
				display:in-line;
			
			}

			.button:hover{
			
			background-color: #ff0000;
			
			}

			.navbutton:hover{
			
			background-color: #ff0000;
			
			}

			.button {
			background-color: #990000; 
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			
			}

			.navbutton {
			background-color: #990000; 
			border: none;
			color: white;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 14px;
			
			}

			.navbar{
			
			background-color: #990000; 
			border: none;
			color: white;


			}

			a {
		color: white;}

		a:hover{
	
		color: white;
		text-decoration:none;}

	.nav>li>a:focus, .nav>li>a:hover {
        text-decoration: none;
        background-color: transparent !important;
  }

			

	</style>


</head>
<body>
    <div id="app">
        <nav class="navbar  navbar-static-top">
            <div class="container">
              <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->



                    <a class="navbar-brand" href="{{ url('/') }}">
                       CricketIBA
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
                        @guest



				
				<li><a href="/player">
				<button class="navbutton">Players</button>
					</a></li>


				<li><a href="/venue">
				<button class="navbutton">Venues</button>
					</a></li>


				<li><a href="/team">
				<button class="navbutton">Teams</button>
					</a></li>

				<li><a href="/blog">
				<button class="navbutton">Blog</button>
					</a></li>
				
				
                 <li> <a href="/login">
				<button class="navbutton">Login</button>
					</a></li>
                 
				 <li><a href="/register">
				<button class="navbutton">Register</button>
					</a></li>
						
					
                        @else

						<li><a href="/player">
				<button class="navbutton">Players</button>
					</a></li>


				<li><a href="/venue">
				<button class="navbutton">Venues</button>
					</a></li>


				<li><a href="/team">
				<button class="navbutton">Teams</button>
					</a></li>

				<li><a href="/blog">
				<button class="navbutton">Blog</button>
					</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
