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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        {
            $products = Product::orderByRaw('RAND()')
                ->take(5)
                ->get();
            $newitems = DB::table('products')
                ->orderBy('id', 'desc')
                ->take(5)
                ->get();
            return view('product', ['products'=>$products, 'newitems'=>$newitems]);
        }    
    }

    public function catalogue()
    {
        //
        {
            $products = Product::all();
            return view('catalogue', ['products'=>$products]);
        }    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Product::find($id);
        return view('detail', ['product'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $data = Product::where('name', 'like', '%'.$request->input('query').'%')->get();
        return view('search', ['products'=>$data]);
    }

    public function addToCart(Request $request)
    {
        if($request->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();

            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    static function cartItem()
    {
        $userID = Session::get('user')['id'];
        return Cart::where('user_id', $userID)->count();
    }

    public function cartlist()
    {
        $userID = Session::get('user')['id'];
        $products = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $userID)
            ->select('products.*', 'carts.id as carts_id')
            ->get();

        return view('cartlist', ['products'=>$products]);
    }

    public function removeItem($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    public function order()
    {
        $userID = Session::get('user')['id'];
        $total = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $userID)
            ->select('products.*', 'carts.id as carts_id')
            ->sum('products.price');

        return view('order', ['total'=>$total]);
    }

    public function orderCheckout(Request $request)
    {
        $userID = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userID)->get();
        
        foreach($allCart as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $request->payment;
            $order->payment_status = "pending";
            $order->address = $request->address;
            $order->save();
            Cart::where('user_id', $userID)->delete();
        }

        $request->input();
        
        return redirect('/');
    }

    public function myOrders()
    {
        $userID = Session::get('user')['id'];
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userID)
            // ->select('products.*', 'orders.id as orders_id')
            ->get();

        return view('myorders', ['orders'=>$orders]);
    }
}
