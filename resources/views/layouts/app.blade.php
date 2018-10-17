<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    


    <!-- core dependcies js -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>

    

    <script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/PACE/pace.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>     
    <script src="{{ asset('assets/vendor/d3/d3.min.js') }}"></script>
    <!-- endbuild -->

    <!-- build:js assets/js/app.min.js -->
    <!-- core js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- configurator js -->
    <script src="{{ asset('assets/js/configurator.js')}}"></script>
    <!-- endbuild -->

    <!-- page js -->
    <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
    
    <!-- page js -->
    <script src="{{ asset('assets/vendor/datatables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/tables/data-table.js') }}"></script>
    <script src="{{ asset('assets/vendor/sweetalert/lib/sweet-alert.js') }}"></script>
    <script src="{{ asset('assets/vendor/summernote/dist/summernote-bs4.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/selectize/dist/js/standalone/selectize.min.js')}}"></script>
    <script src="{{ asset('assets/js/forms/form-elements.js')}}"></script>

   
    <script>
           // $.noConflict();
            jQuery( document ).ready(function( $ ) {
                $('#myTable').DataTable();
            });
    </script>
    @yield('js')
</body>
</html>
