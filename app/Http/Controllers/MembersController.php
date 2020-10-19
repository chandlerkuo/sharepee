<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
