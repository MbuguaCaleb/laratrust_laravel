<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {

        if (Auth::user()->hasRole('user')) {
            return view('userdashboard');
        } elseif (Auth::user()->hasRole('blogwriter')) {
            return view('blogwriterdashboard');
        } elseif (Auth::user()->hasRole('admin')) {
            return view('dashboard');
        }
    }

    public function myProfile()
    {
        return view('myprofile');
    }
}
