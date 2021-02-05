<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
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
    function buyNow(Request $rqst){
        if ($rqst->session()->has('user')) {
            $addtocart = new Cart;
            $addtocart->user_id= $rqst->session()->get('user')['id'];
            $addtocart->product_id= $rqst->product_id;
            $addtocart->save();
            return redirect('/cart');
        }else {
            return redirect('/login');
        }
        
    }
    static function cartItemCount()
        {
            $userId= Session::get('user')['id'];
            return Cart::where('user_id',$userId)->count();        
        }
    
    function orderSum(){
        $userId= Session::get('user')['id'];
        return DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$userId)->sum('products.price');
    }
    
    function cartList(){
        $userId= Session::get('user')['id'];
        $cartItems=DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$userId)->select('products.*','cart.id as cart_id')->get();
        $total=ProductController::orderSum();
        return view('cart',['cartitems'=>$cartItems,'total'=>$total]);
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('cart');
    }

    function orderNow(){
        $orderPrice = ProductController::orderSum();
        return view('ordernow',['orderprice'=>$orderPrice]);
    }
    function orderPlace(Request $rqst){
        $userId= Session::get('user')['id'];
        $fullcart = Cart::where('user_id',$userId)->get();
        foreach ($fullcart as $cart) {
            $order=new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="Done";
            $order->fullname=$rqst['fullname'];
            $order->email=$rqst['email'];
            $order->phone=$rqst['phone'];
            $order->address=$rqst['address'];
            $order->country=$rqst['country'];
            $order->state=$rqst['state'];
            $order->pin=$rqst['pin'];
            $order->save();
        }
        Cart::where('user_id',$userId)->delete();
        // return $rqst;
        return redirect('/');
    }
    function myOrders(){
        $userId= Session::get('user')['id'];
        $orders=DB::table('orders')->join('products','orders.product_id','=','products.id')->where('orders.user_id',$userId)->select('products.*','orders.id as order_id',)->orderBy('orders.id', 'desc')->get();
        return view('myorder',['orders'=>$orders]);
    }
}
