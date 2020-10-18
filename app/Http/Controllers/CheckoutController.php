<?php

namespace App\Http\Controllers;

use App\Mail\TransactionSuccess;
use App\TransactionDetail;
use App\TravelPackages;
use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

/*--- Midtrans --- 

use Midtrans/Config;
use Midtrans/Snap;

*/

class CheckoutController extends Controller
{
     public function index(Request $request, $id)
    {
        $data = [
            'item' => Transaction::with(['detail','travel_package','user'])->findOrFail($id)
        ];
        return view('pages.checkout', $data);
    }

    public function process(Request $request, $id)
    {
        $travelPackage = TravelPackages::findOrFail($id);
        $transaction = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'additional_visa' => 0,
            'transaction_total' => $travelPackage->price,
            'transaction_status' => 'in_cart'
        ]);
        TransactionDetail::create([
            'transaction_id' => $transaction->id,
            'username' => Auth::user()->username,
            'nationality' => 'ID',
            'is_visa' => false,
            'doe_passport' => Carbon::now()->addYears(5)
        ]);
        return redirect()->route('checkout', $transaction->id);
    }

    public function create(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'is_visa' => 'required|boolean',
            'doe_passport' => 'required'
        ]);
        
        $getVar = $request->all();
        // dd($getVar);
        $getVar['transaction_id'] = $id;
        TransactionDetail::create($getVar);
        $transaction = Transaction::with(['travel_package'])->find($id);

        if($request->is_visa)
        {
            $transaction->transaction_total += 190;
            $transaction->additional_visa += 190;
        }
        $transaction->transaction_total += $transaction->travel_package->price;
        $transaction->save(); 

        return redirect()->route('checkout', $id);
    }

    public function remove(Request $request, $id)
    {
        $item = TransactionDetail::findOrFail($id);
        $transaction = Transaction::with(['detail','travel_package'])->findOrFail($item->transaction_id);
        // dd($transaction);

        if($item->is_visa)
        {
            $transaction->transaction_total -= 190;
            $transaction->additional_visa -= 190;
        }
        $transaction->transaction_total -= $transaction->travel_package->price;
        $transaction->save(); 
        $item->delete();

        return redirect()->route('checkout', $item->transaction_id);
    }


    public function success(Request $request, $id)
    {
        $transaction = Transaction::with(['detail','travel_package.gallery','user'])->findOrFail($id);
        $transaction->transaction_status = 'pending';
    
        /* Midtrans ----------------------------------------------------------------
    
        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        $midtransParams = [
            'transaction_details' => [
                'order_id' => 'JAVATRIP|'.$transaction->id,
                'gross_amount' => (int) $transaction->transaction_total
            ],
            'customer_details' => [
                'first_name' => $transaction->user->name,
                'email' => $transaction->user->email
            ],
            'enabled_payments' => ['gopay'],
             'vtweb' = []
        ];

        try {
            // Get Snap Payment Page URL
            $paymentUrl = Snap::createTransaction($midtransParams)->redirect_url;
            // Redirect to Snap Payment Page
            header('Location: ' . $paymentUrl);
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }

         ------------------------------------------------------------ End Midtrans */

        Mail::to($transaction->user)->send(
            new TransactionSuccess($transaction)
        );
        return view('pages.success');
    }
}
