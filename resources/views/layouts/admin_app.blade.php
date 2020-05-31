<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>Medical Shop Management | Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
      
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/AdminLTE.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <body class="skin-black">

        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
        <header class="header">
            <a href="{{url('admin')}}" class="logo">
                MedicalShop
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <a class="btn btn-primary btn-flat" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <aside class="left-side sidebar-offcanvas">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left info">
                            <p>Hello, {{ Auth::user()->name }}</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="{{url('admin')}}">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span>Users</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{url('patient/create')}}"><i class="fa fa-angle-double-right"></i> Add New Patient</a></li>
                                <li><a href="{{url('users')}}"><i class="fa fa-angle-double-right"></i> Users List</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-medkit"></i>
                                <span>Medicines</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{url('volunteer/create')}}"><i class="fa fa-angle-double-right"></i> Add New Medicine</a></li>
                                <li><a href="{{url('volunteer')}}"><i class="fa fa-angle-double-right"></i> Volunteers List</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-hospital-o"></i> <span>Centers</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{url('center/create')}}"><i class="fa fa-angle-double-right"></i> Add New Center</a></li>
                                <li><a href="{{url('center')}}"><i class="fa fa-angle-double-right"></i> Centers List</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-hospital-o"></i> <span>Townships</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{url('township/create')}}"><i class="fa fa-angle-double-right"></i> Add New Township</a></li>
                                <li><a href="{{url('township')}}"><i class="fa fa-angle-double-right"></i> Townships List</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </aside>

            <aside class="right-side">
                @yield('content')
            </aside>
        </div>
        @endguest

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="{{ asset('js/jquery-ui-1.10.3.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/AdminLTE/app.js') }}" type="text/javascript"></script>   
    </body>
</html>