<?php

namespace App\Http\Controllers;

use App\Http\Request\LoginRequest;
use App\Http\Request\SaveSchoolClassRequest;
use App\Models\SchoolClass;

class LoginController extends Controller
{
    public function form()
    {
        return view('auth.login');
    }
    
    public function attempt(LoginRequest $request)
    {
        if (!auth()->attempt($request->only(['email', 'password']), true)) {
            return redirect()->back()->withInput()->withErrors(trans('auth.failed'));
        }
        
        return redirect()->route('students.index');
    }
}
