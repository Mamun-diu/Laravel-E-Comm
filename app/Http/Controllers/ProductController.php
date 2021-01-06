<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
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
}
