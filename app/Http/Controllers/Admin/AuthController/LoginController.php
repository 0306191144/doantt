<?php

namespace App\Http\Controllers\Admin\AuthController;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class LoginController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function index()
    {
        return (view('Admin.Login.login
        ', [
            'title' => 'đăng nhập hệ thống'
        ]));
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (Auth::attempt([
            "email" => $request->email,
            "password" => $request->password,
        ])) {

            return redirect()->route('Admin.Home');
        } else {
            $request->session()->put(key: 'error', value: 'email or pass do not have');
            return  redirect()->route('login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $request->session()->flush();

        return redirect()->route('login');
    }
}