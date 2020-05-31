@extends('layouts.admin_app')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <button type="submit" class="btn btn-primary"><a href="{{url('/admin')}}">Admin</a></button>
        <button type="submit" class="btn btn-primary"><a href="{{url('/user')}}">User</a></button>
    @endsection