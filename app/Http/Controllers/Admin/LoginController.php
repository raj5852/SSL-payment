<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class LoginController extends Controller
{
    //
    function index()
    {
        return view('admin.login');
    }
    public function post(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin/dashboard')
                ->withSuccess('Signed in');
        }

        return redirect()->back()->withSuccess('Login details are not valid');
    }
    function logout(){
        Session::flush();
        Auth::logout();

        return Redirect('admin/login');
    }
}
