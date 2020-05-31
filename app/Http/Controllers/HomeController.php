<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Shop;
use App\User;
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
            $shops = Shop::all();
            return view('admin',compact('shops'));
        }
        $userShops = Auth::user()->shops()->pluck('name');
        $shops = Shop::where('name',$userShops[0])->first(); 
        return view('user',compact('shops'));
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
        $shops = Shop::all();
        return redirect('admin',compact('shops'));
    }

    public function permission_denied(){
        return view('permission_denied');
    }

    public function userList(){
        $users = User::all();
        return view('user_list',compact('users'));
    }
}
