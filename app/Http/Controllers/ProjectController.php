<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    //
    function index(){
        return view('index');
    }

    function products(){
        $drinks = DB::table('products')->where('category','drinks')->get();
        $snacks = DB::table('products')->where('category','snacks')->get();

        return view('products',['drinks'=>$drinks,'snacks'=>$snacks]);

    }

    function single_product(Request $request,$id){
        $product_array= DB::table('products')->where('id',$id)->get();
        return view('single_product',['product_array'=>$product_array]);
    }
}
