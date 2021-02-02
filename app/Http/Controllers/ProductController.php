<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use Session;
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
    function search(Request $rqst){
        $data= Product::where('name','like','%'.$rqst->input('query').'%')->get();
        return view('search',['queries'=>$data]);
    }
    function addToCart(Request $rqst){
        if ($rqst->session()->has('user')) {
            $addtocart = new Cart;
            $addtocart->user_id= $rqst->session()->get('user')['id'];
            $addtocart->product_id= $rqst->product_id;
            $addtocart->save();
            return redirect('/');
        }else {
            return redirect('/login');
        }
        
    }
    static function cartItemCount()
        {
            $userId= Session::get('user')['id'];
            return Cart::where('user_id',$userId)->count();        
        }
    
    function cartList(){
        $userId= Session::get('user')['id'];
        $cartItems=DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$userId)->select('products.*','cart.id as cart_id')->get();

        return view('cart',['cartitems'=>$cartItems]);
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('cart');
    }

}
