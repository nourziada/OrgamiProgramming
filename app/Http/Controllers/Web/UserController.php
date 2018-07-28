<?php

namespace App\Http\Controllers\Web;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Cart;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function updateAccount(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:6|confirmed',
        ]);


        $user->name = $request->name;
        if($request->has('password') && $request->password != null)
        {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        Session::flash('successProfile','');
        return redirect()->back();


    }

    public function getProfile()
    {
        $orders = Order::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->get();
        return view('web.user.profile',compact('orders'));
    }

    public function sendCheckOut(Request $request)
    {

        foreach(Cart::content() as $pdt)
        {
            $order = new Order;
            $order->name = $request->name;
            $order->mobile = $request->mobile;
            $order->address = $request->address;
            $order->user_id = Auth::user()->id;
            $order->product_id = $pdt->id;
            $order->qty = $pdt->qty;
            $order->save();
        }

        Cart::destroy();

        Session::flash('successOrder',' تم تسجيلك في موقعنا بنجاح ');
        return redirect()->route('index');


    }

    public function getCheckOut()
    {
        return view('web.user.checkout');
    }
}
