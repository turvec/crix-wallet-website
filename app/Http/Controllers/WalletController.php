<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WalletController extends Controller
{
    public function fund(Request $request )
    {
       
        $data = $request->validate([
            'amount' => 'required|integer|min:100',
            'password' => 'required',
            'reference' => 'required|unique:transactions,reference,'
        ]);

        if (!Hash::check($request->password, Auth::user()->password)) {
            return back()->with(['error'=> 'Incorrect account password']);
        }
        $transaction = Auth::user()->transaction()->create([
            'amount' => $request->amount,
            'transaction_type_id' => 1,
            'is_credit' => true,
            'reference' => $request->reference

            ]);
            try{
                return \Paystack::getAuthorizationUrl()->redirectNow();
            }catch(\Exception $e) {
                $transaction->status = 'failed';
                $transaction->save();

                return back()->with(['error' => 'Error while processing payment']);
            }        
    }
    public function fundCallback()
    {
        //Get payment details from paystack
        $paymentDetails = \Paystack::getPaymentData();

        //Get reference from payment detials gotten from paystack
        $reference = $paymentDetails['data']['reference'];

        //Get transaction from db
        $transaction = Transaction::where('reference', $reference)->first();

        //check if txn has been paid
        if ($transaction->status == 'success') {
            return back()->with(['error' => 'Failed transaction, please try again']);
        }

        //get user's wallet
        $wallet = $transaction->user->wallet;

        //credit user wallet
        $crx =  $transaction->amount / 100;
        $wallet->balance = $wallet->balance + $crx;
        $wallet->save();

        //Update transaction

        $transaction->status = 'success';
        $transaction->save();

        //return success message
        return back()->with(['success' => 'Account credited succesfully']);
    }
}
