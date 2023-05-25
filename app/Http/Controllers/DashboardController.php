<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Mail;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $pageTitle = "Dashboard";
        $mails = Mail::count();
        $categories = Category::count();
        return view('admin.dashboard',compact('pageTitle','mails','categories'));
    }
}
