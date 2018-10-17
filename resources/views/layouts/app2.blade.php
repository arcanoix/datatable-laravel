<!DOCTYPE html>
<html  lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CHOSICA SOCIAL</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" href="">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/PACE/themes/blue/pace-theme-minimal.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" />

    <!-- page css -->

    <!-- core css -->
    <link href="{{ asset('assets/vendor/selectize/dist/css/selectize.default.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/summernote/dist/summernote-bs4.css') }}"  rel="stylesheet"
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
    
    <link href="{{ asset('assets/vendor/sweetalert/lib/sweet-alert.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

    <style>
        
        .cardx {
            background: #fff;
            border-radius: 2px;
            display: inline-block;
           /* height: 300px; */
            margin: 1rem;
            position: relative;
           /* width: 300px; */
           text-align: center;
        }
        
        .card-1 {
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            transition: all 0.3s cubic-bezier(.25,.8,.25,1);
        }

        .card-1:hover {
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
          }
  
    </style>

    @yield('css')
 
</head>

<body>
    <div class="app header-success-gradient">
        <div class="layout">
            <!-- Header START -->
            <div class="header navbar">
                <div class="header-container">
                    <div class="nav-logo">
                        <a href="">
                            
                            <div class="logo logo-white" style=""></div>
                                
                            
                        </a>
                    </div>
                    <ul class="nav-left">
                        <li>
                            <a class="sidenav-fold-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-menu"></i>
                            </a>
                            <a class="sidenav-expand-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-menu"></i>
                            </a>
                        </li>
                       
                        
                    </ul>
                    <ul class="nav-right">
                        
                       
                        <li class="user-profile dropdown dropdown-animated scale-left">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="profile-img img-fluid" src="" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-md p-v-0">
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item p-15">
                                            <div class="media-img">
                                                <img src="" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title text-semibold"></span>
                                                <span class="sub-title"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li role="separator" class="divider"></li>
                                
                                <li>
                                    <a href="">
                                        <i class="ti-user p-r-10"></i>
                                        <span>Perfil</span>
                                    </a>
                                </li>
                                
                                <li>

                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                        <i class="ti-power-off p-r-10"></i>
                                        <span>Logout</span>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="m-r-10">
                            <a class="quick-view-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-format-indent-decrease"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header END -->


            <!-- Page Container START -->
            <div class="page-container">
                
               @yield('content')

                <!-- Footer START -->
                <footer class="content-footer">
                    <div class="footer">
                        <div class="copyright">
                            <span>Copyright © 2018 <b class="text-dark">CHOSICA</b>. All rights reserved.</span>
                            <span class="go-right">
                                <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                                <a href="" class="text-gray">Privacy &amp; Policy</a>
                            </span>
                        </div>
                    </div>
                </footer>
                

            </div>
           

        </div>
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

    @yield('js')
    
</body>

</html>