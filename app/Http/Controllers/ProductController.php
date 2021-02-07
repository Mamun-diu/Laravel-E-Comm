<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    function index(){
        $data = Product::all();
        return view('product',compact('data'));

    }
    function details($id){
        $data = Product::find($id);
        return view('details')->with('product',$data);

    }
    function search(Request $req){
        $data = Product::
        where('name','like','%'.$req->input('query').'%')
        ->get();
        return view('search')->with('products',$data);
    }
    function addToCart(Request $req){

        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }
    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    function cartList(){
        if(Session::has('user')){
            $userId = Session::get('user')['id'];
            $data = DB::table('ecom_cart')
            ->join('ecom_products', 'ecom_cart.product_id', 'ecom_products.id')
            ->select('ecom_products.*','ecom_cart.id as cart_id')
            ->where('ecom_cart.user_id',$userId)
            ->get();
            return view('cartlist')->with('products',$data);
        }else{
            return redirect('/login');
        }

    }
    function removeCart($id){
       Cart::destroy($id);
       return redirect('/cartlist');
    }
    function orderNow(){
        $userId = Session::get('user')['id'];
         $total = DB::table('ecom_cart')
        ->join('ecom_products', 'ecom_cart.product_id', 'ecom_products.id')
        ->where('ecom_cart.user_id',$userId)
        ->sum('ecom_products.price');
        return view('ordernow')->with('total',$total);
    }

    function orderPlace(Request $req){
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart){
            $order = new Order;
            $order->product_id = $cart->product_id;
            $order->user_id = $cart->user_id;
            $order->address = $req->address;
            $order->status = 'pending';
            $order->payment_method = $req->payment;
            $order->payment_status = 'pending';
            $order->save();
        }
        Cart::where('user_id',$userId)->delete();
        return redirect('/');
    }
    function myOrder(){

        if(Session::has('user')){
        $userId = Session::get('user')['id'];
        $product = DB::table('ecom_orders')
        ->join('ecom_products','ecom_orders.product_id', 'ecom_products.id')
        ->where('ecom_orders.user_id',$userId)

        ->get();

        return view('myorder')->with('products',$product);
        }else{
            return redirect('/login');
        }

    }
}
