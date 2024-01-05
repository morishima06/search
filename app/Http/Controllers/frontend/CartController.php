<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function cart()
    {
        return view('home.cart');
    }
    public function addToCart(Request $request)
    {
        $id = $request->input('product_id');
        $product = Product::find($id);

        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [
                $id => [
                    "product_name" => $product->product_name,
                    "brand_name" => $product->brand_name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->image_path1
                ]
            ];

            session()->put('cart', $cart);
            return back();
        }

        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;
            session()->put('cart', $cart); // this code put product of choose in cart
            return back();
        }

        $cart[$id] = [
            "product_name" => $product->product_name,
            "brand_name" => $product->brand_name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->image_path1
        ];
        session()->put('cart', $cart); // this code put product of choose in cart
        return back();
    }

    public function decQty(Request $request)
    {
        $id = $request->input('product_id');
        $cart = session()->get('cart');

        $product = Product::find($id);
        if (isset($cart[$id])) {

            if ($cart[$id]['quantity'] ==  1) {

                return back();
            } else {
                $cart[$id]['quantity']--;
                session()->put('cart', $cart);

                return back();
            }
        }
    }

    public function incQty(Request $request)
    {
        $id = $request->input('product_id');
        $cart = session()->get('cart');

        $product = Product::find($id);
        if (isset($cart[$id])) {

            if ($cart[$id]['quantity'] >=  $product->qty) {

                return response()->json(['status' => 'これ以上は追加できません']);
            } else {
                $cart[$id]['quantity']++;
                session()->put('cart', $cart);

                return back();
            }
        }
    }

    public function deleteToCart(Request $request)
    {
        if ($request->product_id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->product_id])) {

                unset($cart[$request->product_id]);
                session()->put('cart', $cart);
                return back();
            }
        }
    }
}
