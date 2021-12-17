<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function users(Type $var = null)
    {
        $users = User::all();
        $transactions = Transaction::all();
        $pending = Transaction::where('status', 'pending');
        $amount = Transaction::where('amount', '>' , 500)->get();
    }
    //
}
