<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $transactions = Auth::user()->transactions;
        
        return view('user.dashboard', compact('transactions'));
    }

    //
}
