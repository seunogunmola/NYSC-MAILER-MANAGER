<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\Mail;

class AdminController extends Controller
{
    public function dashboard(){
        $pageTitle = "Admin Dashboard";
        $mails = Mail::count();
        
        return view('admin.dashboard',compact('pageTitle','mails'));
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
