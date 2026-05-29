<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecoverPasswordController extends Controller
{
    public function forgot()
    {
        return inertia('auth/ForgotPassword');
    }

    public function reset()
    {
        return inertia('auth/ResetPassword');
    }
}
