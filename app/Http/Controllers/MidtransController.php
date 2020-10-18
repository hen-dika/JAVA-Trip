<?php

namespace App\Http\Controllers;

use App\Mail\TransactionSuccess;
use App\Transaction;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Notification;

class MidtransController extends Controller
{
    public function notificationHandler(Request $request)
    {
        // Midtrans configuration
        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        // Midtrans Notification
        $notification = new Notification();

        // Get transaction id
        $order_id = explode('|', $notification->order_id);

        // 
        $status = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status;
        $order = $order_id[1];

        // Find transaction
        $transaction = Transaction::findOrFail($order);

        // Handle notification
        if ($status == 'capture') {
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    $transaction->transaction_status = 'CHALLENGE';  
                } else {
                    $transaction->transaction_status = 'SUCCESS';
                }
            }
        }  
        else if ($status == 'settlement' ) {
            $transaction->transaction_status = 'SUCCESS';
        }
        else if ($status == 'pending' ) {
            $transaction->transaction_status = 'PENDING';
        } 
        else if ($status == 'deny' ) {
            $transaction->transaction_status = 'FAILED';
        } 
        else if ($status == 'expired' ) {
            $transaction->transaction_status = 'EXPIRED';
        } 
        else if ($status == 'cancel' ) {
            $transaction->transaction_status = 'FAILED';
        }

        $transaction->save();

        if ($transaction) {
            if ($status == 'capture' && $fraud == 'accept') {
                Mail::to($transaction->user)->send(
                    new TransactionSuccess($transaction)
                );
            } 
            else if ($status == 'settlement') {
                Mail::to($transaction->user)->send(
                    new TransactionSuccess($transaction)
                );
            }
            else if ($status == 'success') {
                Mail::to($transaction->user)->send(
                    new TransactionSuccess($transaction)
                );
            }
            else if ($status == 'capture' && $fraud == 'challenge') {
               return response()->json([
                   'meta' => [
                       'code' => 200,
                       'message' => 'Midtrans payment challenge'
                   ]
               ]);
            }
            else {
                return response()->json([
                    'meta' => [
                        'code' => 200,
                        'message' => 'Midtrans payment not settlement'
                    ]
                ]);
            }
            return response()->json([
                'meta' => [
                    'code' => 200,
                    'message' => 'Midtrans payment success'
                ]
            ]);
        }

    }

    public function finishRedirect(Request $request)
    {
        return view('pages.success');
    }
    
    public function unfinishRedirect(Request $request)
    {
        return view('pages.unfinish');
    }

    public function errorRedirect(Request $request)
    {
        return view('pages.failed');
    }


}
