@inject('appController','App\Services\appController')
<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <title>{{Config::get('app.name')}}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cei.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('resources/dropzone/dropzone.css') }}"> --}}
    @yield('css')
<style>
    .skin-blue .main-header .navbar,.skin-blue .main-header .logo{
        background: transparent;
    }
    .skin-blue .main-header .navbar .sidebar-toggle:hover,.skin-blue .main-header .logo:hover {
        background-color: #367fa980;
    }
    .main-header{
        background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
        background-size: 400% 400%;

    }

    @-webkit-keyframes Gradient {
        0% {
            background-position: 0% 50%
        }
        50% {
            background-position: 100% 50%
        }
        100% {
            background-position: 0% 50%
        }
    }

    @-moz-keyframes Gradient {
        0% {
            background-position: 0% 50%
        }
        50% {
            background-position: 100% 50%
        }
        100% {
            background-position: 0% 50%
        }
    }

    @keyframes Gradient {
        0% {
            background-position: 0% 50%
        }
        50% {
            background-position: 100% 50%
        }
        100% {
            background-position: 0% 50%
        }
    }
</style>
</head>
<body class="skin-blue sidebar-mini">
@if (!Auth::guest())
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <!-- Logo -->
            <a href="{!! url('/') !!}" class="logo" style="padding: 0px;position: absolute;"> <b>{{ Config::get('app.name') }}</b> </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" title="Ocultar/Mostrar Menu lateral" data-position="right">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="user user-menu">
                            <a href="{!! url('/logout') !!}" 
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar sección
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#">
                                <!-- The user image in the navbar-->
                                <img src="{{ asset('img/default_avatar.jpg') }}" class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{!! Auth::user()->name !!}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper loanding">
            @include('layouts.loanding')
            <div class="loanding-hide">
                @yield('content')
            </div>
        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © {{ date('Y') }} </strong> All rights reserved. ( Carlos Anselmi & Antony Ruth | Facyt )
        </footer>
    </div>
    @include('modal')
@else
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
@endif
    <!-- jQuery 3.1.1 -->
    <script src="{{ asset('js/koalaCEI.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    {{-- <script src="{{ asset('resources/dropzone/dropzone.js') }}"></script> --}}
    @yield('scripts')
    <script>
        tippy('*:not(.help)',{
            size: 'big'
        });
        tippy('#string_search',{
            trigger: 'click'
        })
    </script>
</body>
</html>