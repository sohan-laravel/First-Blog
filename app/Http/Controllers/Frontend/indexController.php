<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function singlePost()
    {
        return view('frontend.single-post');
    }

    public function showRegistrationForm()
    {
        return view('frontend.auth.register');
    }

    public function userRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        return $request;
    }
}
