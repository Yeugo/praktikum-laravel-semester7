<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Symfony\Component\HttpKernel\Debug\VirtualRequestStack;

class UserController extends Controller
{
    

    public function users(Request $request)
    {
        $users = User::get();
        return view('users.index', compact('users'));
    }

    public function printPdf()
    {
        $users = User::get();
        $data = [
            'title' => 'Welcome To fti.uniska-bjm ac.id',
            'date' => date('m/d/Y'),
            'users' => $users
        ];
        $pdf = PDF::loadview('users.userPdf', $data);
        $pdf->setPaper('A4','landscape');
        return $pdf->stream('Data User.pdf',array("attachment" =>false));
    }

    public function userExcell()
    {
        $users = User::get();
        $data = [
            'title' => 'Welcome To fti.uniska-bjm ac.id',
            'date' => date('m/d/Y'),
            'users' => $users
        ];
        return view('users.userExcell', $data);
    }
}
