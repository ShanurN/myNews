<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = DB::table('users')->where('name', $request->name)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Session::put('user', $user->name);
            return redirect()->route('news.indexs')->with('success', 'Вы успешно вошли');
        }

        return back()->withErrors(['login' => 'Неверный логин или пароль']);
    }

    public function logout()
    {
        Session::forget('user');
        return redirect()->route('news.indexs');
    }
}
