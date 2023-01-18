<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

class AdminController extends Controller
{
    public function dashboard(){
        $pageTitle = "Admin Dashboard";
        return view('admin.dashboard',compact('pageTitle'));
    }

    public function login(){
        $pageTitle = "Admin Login";
        return view('admin.login',compact('pageTitle'));
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');        
    }
}
