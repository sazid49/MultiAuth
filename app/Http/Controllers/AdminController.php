<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginForm()
    {
       return view('admin.login');
    }

    public function login(Request $request)
    {
       $data = $request->all();
       if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']]))
       {
          return redirect()->route('admin.dashboard')->with('success','Login Success');
       }else{
           return back()->with('error',"Email or Password don't matche");
       }
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login.form')->with('error','logout');

    }
}
