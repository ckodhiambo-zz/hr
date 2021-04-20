<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>

        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="sidebar-mini" style="height: auto;">
        <div class="wrapper" id="app">

            <nav class="main-header navbar navbar-expand navbar-white navbar-light">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                            <i class="fas fa-bars"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="contact-us" class="nav-link">Contact</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <p>
                                <i class="nav-icon fas fa-power-off"></i>
                                Logout
                            </p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>

            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="index3.html" class="brand-link">
                    <img src="{{ asset('img/centumtangible.png') }}" alt="AdminLTE Logo" class="brand-image rounded elevation-3" style="opacity: .8">
                    <br>
                    <span class="brand-text font-weight-light"><strong>Centum On-boarding</strong></span>
                </a>

                <div class="sidebar">

                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{ asset('img/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="{{ route('user.profile') }}" class="d-block">
                                <strong>{{ auth()->user()->name }}</strong>
                            </a>
                        </div>
                    </div>

                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item">
                                <a href="home" class="nav-link">
                                    <i class="nav-icon fas fa-chalkboard"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>
                                        Management
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    @can('create role')
                                        <li class="nav-item">
                                            <a href="{{ route('role.index') }}" class="nav-link">
                                                <i class="fas fa-bomb nav-icon"></i>
                                                <p>Roles</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('permission.index') }}" class="nav-link">
                                                <i class="fas fa-bomb nav-icon"></i>
                                                <p>Permissions</p>
                                            </a>
                                        </li>
                                    @endcan
                                    <li class="nav-item">
                                        <a href="employees" class="nav-link">
                                            <i class="fas fa-bomb nav-icon"></i>
                                            <p>Employees</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/checkbox" class="nav-link">
                                            <i class="fas fa-bomb nav-icon"></i>
                                            <p>On-boarded Employees</p>
                                        </a>
                                    </li>
                                    @can('create role')
                                    <li class="nav-item">
                                        <a href="{{ route('user.index') }}" class="nav-link">
                                            <i class="fas fa-users-cog nav-icon"></i>
                                            <p>Users</p>
                                        </a>
                                    </li>
                                        @endcan

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('user.profile') }}" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        Profile </p>
                                </a>
                            </li>
                            

                            <li class="nav-item">
                                <a href="{{ route('userGetPassword') }}" class="nav-link">
                                    <i class="fas fa-lock nav-icon"></i>
                                    <p>Change Password</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                    <i class="nav-icon fas fa-power-off"></i>
                                    <p>
                                        Logout </p>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>

            </aside>

            <div class="content-wrapper" style="min-height: 399px;">

                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">@yield('pageName')</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">@yield('title')</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <div class="container-fluid">
                        @include('partials.alert')
                        @yield('content')
                    </div>
                </div>

            </div>

            <footer class="main-footer">


                <strong>Copyright © 2021
                    <a href="https://centum.co.ke">centum.co.ke</a>
                        .
                </strong>
                All rights reserved.
            </footer>
            <div id="sidebar-overlay"></div>
        </div>

    </body>
</html>
