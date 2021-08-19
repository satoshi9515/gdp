

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JapanGameDevPot') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="url('//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css')" rel="stylesheet" id="bootstrap-css">
    
    

</head>
<body>
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light shadow-sm context-dark bg-image text-white"  style="background: #2d3246;">
            <div class="container">
                <a class="navbar-brand  text-white" href="{{ url('/') }}" >
                    Japan Ⓖame Ⓓev Ⓟot
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="navv m-4"><a class="text-white" href="{{url('/about')}}">About</a> </li>
                        <li class="navv m-4"><a class="text-white" href="{{url('/youtubers')}}">Youtubers</a> </li>
                        <li class="navv m-4"><a class="text-white" href="{{url('/learningapps')}}">Japanese Study apps</a> </li>
                        <li class="navv m-4"><a class="text-white" href="{{url('/schools')}}">Language Schools</a> </li>
                        <li class="navv m-4"><a class="text-white" href="{{url('/interviews')}}">Interview columns</a> </li>
                         

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item  ">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link  text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle  text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   welcome {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-0">
            @yield('content')
        </main>
    </div>
    <footer class="section footer-classic context-dark bg-image text-white" style="background: #2d3246;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4">
                <p>We support IT students and engineers who eager to work in Japanese gaming and IT compnanies</p>
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year">2021</span><span> </span><span>Japan Ⓖame Ⓓev Ⓟot</span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contacts</h5>
              
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#">fukushima@gmail.com</a></dd>
              </dl>
              
               
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
                <li><a href="#">About</a></li>
                <li><a href="#">Youtubers</a></li>
                <li><a href="#">Japanese Study apps</a></li>
                <li><a href="#">Language Schools</a></li>
                <li><a href="#">Interview columns</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
</body>

</html>
