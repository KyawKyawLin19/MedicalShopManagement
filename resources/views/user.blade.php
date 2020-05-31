@extends('layouts.user_app')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>
                               {{$shops->name}}
                            </h3>
                            <p>
                            {{ Auth::user()->name }}
                            </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{url('/patient')}}" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div><!-- ./col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    @endsection