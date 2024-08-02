<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.list_user', compact('users'));
    }

    public function login()
    {
        return view('client.login');
    }
    public function postLogin( Request $request)
    {
        $data=$request->only('username','password');
        if(Auth::attempt($data)){
            return redirect()->route('home.product');
        }else{
            return redirect()->route('login-user')->with('mes','Đăng nhập không thành công!');

        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login-user');

    }
    public function register()
    {
        return view('client.logout');
    }
    public function postRegister( Request $request)
    {
        $data= $request->validate([
            'fullname'=>'required',
            'username'=>['required','unique:users'],
            'avatar'=>['required'],
            'email'=>['required','email','unique:users'],
            'password'=>['required','min:3','max:50'],
        ]);
       
        User::create($data);
        return redirect()->route('login-user')->with('mes','Đăng ký thành công!');
    }
}
