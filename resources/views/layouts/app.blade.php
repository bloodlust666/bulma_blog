<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
     <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
    <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar is-medium is-primary is-bold" >
            <div class="navbar-brand">
                <a  class="navbar-item" href="{{ url('/blog') }}">Blog v1
                  <!--  {{ config('app.name', 'Blog v1') }}-->
                    <!--<img src="" alt="" width="112" height="28">-->
                </a>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
            </div>

            <div id="navbarExampleTransparentExample" class="navbar-menu">
               <div class="navbar-start">
                 <!--<a class="navbar-item" href="https://bulma.io/">
                   Home
                 </a>-->

               </div>

               <div class="navbar-end">
                  <div class="navbar-item">
                    <div class="field is-grouped">
                      @guest
                      <p class="control">
                         <a class="button is-primary" href="{{ route('register') }}">
                           <span class="icon">
                             <i class="fas fa-user"></i>
                           </span>
                           <span>Register</span>
                         </a>
                       </p>
                       <p class="control">
                          <a class="button is-primary" href="{{ route('login') }}">
                            <span class="icon">
                              <i class="fas fa-sign-in-alt"></i>
                            </span>
                            <span>Login</span>
                          </a>
                        </p>
                    </div>
                  </div>
                </div>
              @else
                <div class="navbar-end" >
                  <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                      {{ Auth::user()->name }}
                    </a>
                       <div class="navbar-dropdown is-right">
                       <a class="navbar-item">
                         compt
                       </a>
                       <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                         Logout
                       </a>
                     </div>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                     @endguest
                   </div>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
