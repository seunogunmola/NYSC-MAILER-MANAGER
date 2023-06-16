<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use App\Models\Mail;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $pageTitle = "Dashboard";
        $mails = Mail::count();
        $categories = Category::count();
        $destinations = Destination::count();
        $recentMails = Mail::latest()->get();
        return view('user.dashboard',compact('pageTitle','mails','categories','destinations','recentMails'));
    }
}
