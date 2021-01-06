<!--
|--------------------------------------------------------------------------
| resources/views/layouts/frontend.blade.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
-->
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Noclegownia</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://bootswatch.com/3/readable/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Lecture 5 -->
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./">Home</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">

                    @guest
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('login') }}">Logowanie</a></li>
                        <li><a href="{{ route('register') }}">Rejestracja</a></li>
                    </ul>
                    @else
                    <ul class="nav navbar-nav">
                        <li><p class="navbar-text">Zalogowany jako:</p></li>
                        <li><p class="navbar-text">{{ Auth::user()->name }}</p></li>
                        <li><a href="{{ route('adminHome') }}">admin</a></li>
                        <li>    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Wyloguj
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form></li>
                    </ul>
                    @endguest
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="jumbotron">
            <div class="container">
                <h1>Radość z podróży!</h1>
                <p>A platform for tourists and owners of tourist facilities. Find the original place for the holidays!</p>
                <p>Place your home on the site and let yourself be found by many tourists!</p>
                <form action="{{ route('roomSearch') }}" class="form-inline">
                    <div class="form-group">
                        <label class="sr-only" for="city">City</label>
                        <input name="city" type="text" class="form-control autocomplete" id="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="day_in">Check in</label>
                        <input name="check_in" type="text" class="form-control datepicker" id="check_in" placeholder="Check in">
                    </div>

                    <div class="form-group">
                        <label class="sr-only" for="day_out">Check out</label>
                        <input name="check_out" type="text" class="form-control datepicker" id="check_out" placeholder="Check out">
                    </div>
                    <div class="form-group">
                        <select name="room_size" class="form-control">
                            <option>Room size</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning">Search</button>
                    
                    <!-- Lecture 6: deleted <input type="hidden" name="view" value="roomsearch"> -->
                       
                </form>

            </div>
        </div>

        @yield('content') <!-- Lecture 5  -->

        <div class="container-fluid">

            <div class="row mobile-apps">

                <div class="col-md-6 col-xs-12">
                    <!-- Lecture 5 img src tag -->
                    <img src="{{ asset('images/mobile-app.png') }}" alt="" class="img-responsive center-block">
                </div>

                <div class="col-md-6 col-xs-12">
                    <h1 class="text-center">Download mobile app.</h1>
                    <!-- Lecture 5 img src tags -->
                    <a href="#"><img class="img-responsive center-block" src="{{ asset('images/google.png') }}" alt=""></a><br><br>
                    <a href="#"><img class="img-responsive center-block" src="{{ asset('images/apple.png') }}" alt=""></a><br><br>
                    <a href="#"><img class="img-responsive center-block" src="{{ asset('images/windows.png') }}" alt=""></a>

                </div>

            </div>

            <hr>

            <footer>

                <p class="text-center">&copy; 2021 Kacper P. projekt edukacyjny</p>

            </footer>

        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}"></script> <!-- Lecture 5 -->
    </body>
</html>
