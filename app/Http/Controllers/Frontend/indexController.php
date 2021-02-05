<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegistration;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

    public function userRegistration(UserRegistration $request)
    {


        // New system validation process craete request class


        // $rules = [
        //     'name' => 'required|string',
        //     'email' => 'required|email',
        //     'password' => 'required|min:6'
        // ];

        // // $request->validate($rules);

        // $validator = Validator::make($request->all(), $rules);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // $photo = $request->file('photo');

        // if ($photo->isValid()) {

        //     $photo_name = rand(1111, 9999) . date('.d-m-y.') . $photo->getClientOriginalExtension();

        //     $photo->storeAs('UserRegistrationImage', $photo_name);
        // }


        try {

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'User Registration Successfully !..');
        } catch (Exception $e) {

            session()->flash('type', 'danger');
            session()->flash('message', $e->getMessage());
        }


        return redirect()->back();
    }

    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }

    public function userLogin(Request $request)
    {
        // $rules = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|min:6'
        // ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/');
        } else {
            session()->flash('type', 'danger');
            session()->flash('message', 'These credentials do not match our records.');
            return redirect()->back();
        }

        // auth()->attempt($rules);
    }

    public function userlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
