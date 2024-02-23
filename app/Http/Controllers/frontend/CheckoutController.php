<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class CheckoutController extends Controller
{
    public function index()
    {

        if (Auth::check()) {
            $auth = Auth::user();
            $userdetail = Auth::user()->load('userdetail')->userdetail;

            return view('home.checkout.checkout', compact('auth', 'userdetail'));
        } else {
            return view('home.checkout.guestcheckout');
        }
    }

    public function pay()
    {
        \Stripe\Stripe::setApiKey(config('stripe.STRIPE_SECRET'));

        foreach (session('cart') as $id => $details) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'jpy',
                    'product_data' => [
                        'name' => $details['product_name'],
                        'images' => [$details['photo']],
                    ],
                    'unit_amount' => $details['price'],
                ],
                'quantity' => $details['quantity'],
            ];
        }
        $session = \Stripe\Checkout\Session::create([
            'line_items' =>  $lineItems,
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('cart'),
        ]);
        return redirect()->away($session->url);
    }

    public function success()
    {
        session()->forget('cart');

        return view('home.checkout.success');
    }
}
