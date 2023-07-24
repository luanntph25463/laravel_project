<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function login(Request $request) {
        if ($request->isMethod('POST')) {
            //đăng nhập thành công
            if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
                dd($request);

                return redirect()->route('student.list');
            } else {
                dd($request);

                Session::flash('error','Sai mật khẩu hoặc email');
                return redirect()->route('login');
            }
        }
        return view('auth.login');
    }
}
