<?php

namespace App\Http\Controllers\Web;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;

class CartController extends Controller
{
    public function decrementCart($id,$qyt)
    {
        Cart::update($id, $qyt - 1);
        return response()->json(['status_wish' => true, 'message' => 'Done']);
    }

    public function incrementCart($id,$qyt)
    {
        Cart::update($id, $qyt + 1);
        return response()->json(['status_wish' => true, 'message' => 'Done']);
    }

    public function removeCart($id)
    {
        Cart::remove($id);

        if(Cart::count() == 0)
        {
            return response()->json(['status_wish' => true, 'message' => 'Your Product Remove From Cart Successfully','cart_count' => 0]);
        }else
        {
            return response()->json(['status_wish' => true, 'message' => 'Your Product Remove From Cart Successfully','cart_count' => Cart::total()]);
        }

    }

    public function addSingleCart($id)
    {
        $pdt = Product::find($id);


        $cart = Cart::add([

            'id' => $pdt->id,
            'name' => $pdt->title,
            'qty' => 1,
            'price' => $pdt->price,
        ]);



        return  response()->json(['status_wish' => true, 'message' => 'Done' , 'cart_count' => Cart::count()]);
    }


    public function addCart(Request $request)
    {
        $pdt = Product::find($request->product_id);
        $cart = Cart::add([

            'id' => $pdt->id,
            'name' => $pdt->title,
            'qty' => $request->qty,
            'price' => $pdt->price,
        ]);

        return redirect()->route('cart');
    }

    public function getCart()
    {
        $active = 'cart';
        return view('web.cart',compact('active'));
    }
}
