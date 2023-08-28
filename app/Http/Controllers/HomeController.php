<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index(){
        $product=Product::paginate(3);
        return view('home.userpage',compact('product'));
    }
    public function redirect(){
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            $total_product=product::all()->count();
            $total_order=order::all()->count();
            $total_user=user::all()->count();
            $order=order::all();

            $total_revenue=0;
            
            foreach($order as $order)
            {
                $total_revenue=$total_revenue +$order->price;
            }

            $total_delivered=order::where('delivery_status','=','Disetujui')->get()->count();
            $total_processing=order::where('delivery_status','=','Proses')->get()->count();
            
            return view('admin.home',compact('total_product','total_order','total_user','total_revenue','total_delivered','total_processing'));
        }
        else{
           $product=Product::paginate(3);
        return view('home.userpage',compact('product'));
        }
    }

    public function kompleks($id){
        $product=product::find($id);
        return view('home.kompleks',compact('product'));
    }
    public function batal_order($id){
      $order=order::find($id);
      $order->delivery_status='Apakah Anda Yakin Ingin Membatalkan Pesanan';
        $order->delete();

      return redirect()->back();
    }
    public function show_order(){

       if(Auth::id()){
        $user=Auth::user();
        $userid=$user->id;
        $order=order::where('user_id','=',$userid)->get();
        return view('home.order',compact('order'));
       }
       else{
        return redirect('login');
       }
    }
  public function cod()
{
    $user = Auth::user();
    $userid = $user->id;

    $data = cart::where('user_id', '=', $userid)->get();
    foreach ($data as $cartData) {
        $order = new Order;
        $order->name = $cartData->nama;
        $order->email = $cartData->email;
        $order->phone = $cartData->phone;
        $order->address = $cartData->address;
        $order->user_id = $cartData->user_id;
        $order->product_title = $cartData->product_title;
        $order->price = $cartData->price;
        $order->quantity = $cartData->quantity;
        $order->image = $cartData->image;
        $order->product_id = $cartData->product_id;
        $order->payment_status = 'Cash On Delivery';
        $order->delivery_status = 'Proses';

        if ($order->save()) {
            $cart_id = $cartData->id;
            $cart = cart::find($cart_id);
            if ($cart->delete()) {
                continue;
            } else {
                return redirect()->back()->with('error', 'Pesanan Anda Gagal Proses');
            }
        } else {
            return redirect()->back()->with('error', 'Pesanan Anda Gagal Proses');
        }
    }

    return redirect()->back()->with('success', 'Pesanan Anda Sedang Kami Proses');
}

    public function removeKeranjang($id){
        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back();
    }
    public function show_keranjang(){
        if(Auth::id()){
        $id=Auth:: user()->id;
        $cart=cart::where('user_id','=',$id)->get();
        return view('home.show_keranjang',compact('cart'));
        }
        else{
            return redirect('login');
        }
     
    }
  public function keranjang(Request $request,$id) {
    if(Auth::id()) {
       $user=Auth::user();
       $product=product::find($id);
       $cart=new cart;
       $cart->nama=$user->name;
       $cart->email=$user->email;
       $cart->address=$user->address;
       $cart->phone=$user->phone;
       $cart->user_id=$user->id;
       $cart->product_title=$product->title;
       
       if($product->discount_price!=null)
       {
        $cart->price=$product->discount_price * $request->quantity;
       }else
       {
        $cart->price=$product->price * $request->quantity;
       }
       $cart->image=$product->image;
       $cart->product_id=$product->id;
       $cart->quantity=$request->quantity;

       $cart->save();

       return redirect()->back();
       
    } else {
        return redirect('login');
    }
}


  
}