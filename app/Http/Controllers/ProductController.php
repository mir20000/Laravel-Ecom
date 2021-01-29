<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function index(){
        $data = Product::all();
        return view('product',['datas'=>$data]);
        //return "welcome to product page <a href='/logout'> Logout</a>";
    }

    function product_details($id){
        $data= Product::find($id);
        return view('details',['product'=>$data]);
    }
}
