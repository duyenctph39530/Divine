<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.list_user', compact('users'));
    }

    public function login()
    {
        return view('user.login');
    }
    public function postLogin(Request $request)
    {
        $data = $request->only('username', 'password');
        if (Auth::attempt($data)) {
            if (Auth::user()->role == "admin") {
                return redirect()->route('dashboard');

            }
            return redirect()->route('home.product');
        } else {
            return redirect()->route('login-user')->with('mes', 'Đăng nhập không thành công!');

        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login-user');

    }
    public function register()
    {
        return view('user.register');
    }
    public function postRegister(Request $request)
    {
        $data = $request->validate([
            'fullname' => 'required',
            'username' => ['required', 'unique:users'],
            'avatar' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:3', 'max:50'],
        ]);
        $data = $request->except('avatar');

        $data['avatar'] = " ";
        if ($request->hasFile('avatar')) {
            $path_img = $request->file('avatar')->store('images');
            $data['avatar'] = $path_img;
        }

        User::create($data);
        return redirect()->route('login-user')->with('mes', 'Đăng ký thành công!');
    }
    public function detail_user(User $user)
    {
        $users = User::all();
        return view('user.detail_user', compact('users'));
    }
    public function updateUser(Request $request, User $user)
    {
        $user = Auth::user();
        $data = $request->validate([
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'avatar' => 'nullable|image|max:2048',
        ]);
        $data = $request->except('avatar');
        $old_img= $user->avatar;
        $data['avatar']=$old_img;
        if($request->hasFile('avatar')){
            $path_img=$request->file('avatar')->store('images');
            $data['avatar']=$path_img;
        }
        $user->update($data);
        if(isset($path_img)){
            if(file_exists('storage/'.$old_img)){
                unlink('storage/'.$old_img);
            }
        }
        return redirect()->back()->with('mes','Cập nhật thành công!');
    }
    public function changePassword()
    {
       return view('user.change_password');
    }
    public function updatePassword( Request $request)
    {
        $data = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:3|string|confirmed',
        ]);
        $user = Auth::user();
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->with('mes', 'Mạt khẩu cũ không đúng hãy nhập lại!');
        }
        $user->password = Hash::make($request->new_password);

        $user->save();
        return redirect()->route('changePassword')->with('mes', 'Đổi mật khẩu thành công');
    }
    public function toggleActive( Request $request, User $user)
    {
        $user->active=!$user->active;
        $user->save();
        return redirect()->route('list-user')->with('mes','Tài khoản đã được cập nhật'); 
    }
    
}
