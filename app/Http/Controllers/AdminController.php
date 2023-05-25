<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\Category;
use App\Models\Mail;
use App\Models\Destination;

class AdminController extends Controller
{
    public function dashboard(){
        $pageTitle = "Admin Dashboard";
        $mails = Mail::count();
        $categories = Category::count();
        $destinations = Destination::count();
        return view('admin.dashboard',compact('pageTitle','mails','categories','destinations'));
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
