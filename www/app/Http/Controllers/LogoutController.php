<?php

namespace App\Http\Controllers;

use App\Http\Request\LoginRequest;

class LogoutController extends Controller
{
    public function logout()
    {
        auth()->logout();
        
        return redirect()->route('auth.login');
    }
}
