<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Debug\VirtualRequestStack;

class UserController extends Controller
{
    

    public function users(Request $request)
    {
        $users = User::get();
        return view('users', compact('users'));
    }

    
}
