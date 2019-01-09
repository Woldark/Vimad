<?php

namespace App\Http\Controllers;

class ChangePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showChangePassword()
    {
        return view('changepassword');
    }
}
