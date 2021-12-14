<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function fund(Request $request )
    {
        $data = $request->validate([
            'amount' => 'required|integer|min:100',
            'password' => 'required'
        ]);

        if (!Hash::check($request->password, Auth::user()->password)) {
            return back()->with(['error'=> 'Incorrect account password']);
        }

        dd($request->all());
    }
}
