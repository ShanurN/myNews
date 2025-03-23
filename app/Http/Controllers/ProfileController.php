<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class ProfileController extends Controller
{
    public function index()
    {
        if (!Session::get('user')) {
            return redirect()->route('login.form');
        }
        return view('profile.index');
    }
}
