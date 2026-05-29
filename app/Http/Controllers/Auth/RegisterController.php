<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return inertia('auth/Signup');
    }

    public function store(Request $request)
    {
        // criar usuário aqui

        return redirect('/member/profile/create');
    }
}