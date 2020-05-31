<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userRoles = Auth::user()->roles()->pluck('name');
        if($userRoles->contains('admin')){
            return redirect('admin');
        }
        return view('user');
    }

    public function user()
    {
        return view('user');
    }

    public function admin()
    {
        $userRoles = Auth::user()->roles()->pluck('name');
        if(!$userRoles->contains('admin')){
            return redirect('permissiondenied');
        }
        return view('admin');
    }

    public function permission_denied(){
        return view('permission_denied');
    }
}
