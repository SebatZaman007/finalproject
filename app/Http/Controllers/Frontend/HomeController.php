<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Bannerimage;
use App\Models\Bill;
use App\Models\Cart;
use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            return redirect('redirect');
        }

        else{

            $banner=Bannerimage::latest()->first();
            $about=About::latest()->first();
            $client=Client::latest()->get();
            $product=Product::get()->all();
            return view('frontend.master',compact('banner','about','client','product'));
        }


    }

    public function redirect(){

        $usertype=Auth::user()->user_type;
        if($usertype=='1'){
            return view('Admin.master');

        }
        else{
            //cart count
            $user=auth()->user();
            $count=Cart::where('phone',$user->phone)->count();
            //
            $banner=Bannerimage::latest()->first();
            $about=About::latest()->first();
            $client=Client::latest()->get();
            $product=Product::get()->all();
            return view('frontend.master',compact('banner','about','client','product','count'));
        }
    }

    public function about(){
        if(Auth::id()){

            $user=auth()->user();
            $count=Cart::where('phone',$user->phone)->count();

            $banner=Bannerimage::latest()->first();
            $about=About::latest()->first();
            $client=Client::latest()->get();
            $product=Product::get()->all();
            return view('frontend.pages.about.about',compact('banner','about','client','product','count'));
        }

        else{

            $banner=Bannerimage::latest()->first();
            $about=About::latest()->first();
            $client=Client::latest()->get();
            $product=Product::get()->all();
            return view('frontend.pages.about.about',compact('banner','about','client','product'));
        }

    }

    public function contact(){
        if(Auth::id()){

            $user=auth()->user();
            $count=Cart::where('phone',$user->phone)->count();

            $banner=Bannerimage::latest()->first();
            $about=About::latest()->first();
            $client=Client::latest()->get();
            $product=Product::get()->all();
            return view('frontend.pages.contact.contact',compact('banner','about','client','product','count'));
        }

        else{

            $banner=Bannerimage::latest()->first();
            $about=About::latest()->first();
            $client=Client::latest()->get();
            $product=Product::get()->all();
            return view('frontend.pages.contact.contact',compact('banner','about','client','product'));
        }
    }

    public function addCart(Request $request,$id){

        if(Auth::id()){
            $user=auth()->user();
            $product=Product::find($id);

            $cart= new Cart;
            $cart->name=$user->name;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->product_title=$product->product_name;
            $cart->price=$product->product_price;
            $cart->quantity=$request->quantity;

            $cart->save();
            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }

    public function showCart(){
        $user=auth()->user();
        $cart=Cart::where('phone',$user->phone)->get();
            $count=Cart::where('phone',$user->phone)->count();
            $banner=Bannerimage::latest()->first();
        return view('frontend.product.showcart',compact('count','banner','cart'));
    }

    public function deleteCart($id){
        Cart::where('id',$id)->delete();
        return redirect()->back();
    }

    public function confirmOrder(Request $request){
        $user=auth()->user();
        $name=$user->name;
        $phone=$user->phone;
        $address=$user->address;

        foreach ($request->productname as $key=>$productname) {

            $order=new Order();
            $order->product_name=$request->productname[$key];
            $order->price=$request->price[$key];
            $order->quantity=$request->quantity[$key];
            $order->name=$name;
            $order->phone=$phone;
            $order->address=$address;
            $order->status='not delivered';
            $order->save();

          }
          DB::table('carts')->where('phone',$phone)->delete();
          return redirect()->back();

    }

    public function checkout(Request $request){
        $user_id=Auth::user()->id;
        $user_details=User::find($user_id);
        $user=auth()->user();
        $count=Cart::where('phone',$user->phone)->count();


        return view('frontend.pages.checkout.checkout',compact('user_details','count'));
    }

    public function billStore(Request $request){
        $user_id=Auth::user()->id;
        $user_details=User::find($user_id);
        $user=auth()->user();
        $count=Cart::where('phone',$user->phone)->count();

        Bill::create([
            // 'billuser_id'=>$user_details->billuser_id,
            'billuser_name'=>$request->billuser_name,
            'billuser_address'=>$request->billuser_address,
            'billuser_phone'=>$request->billuser_phone,
            'billuser_email'=>$request->billuser_email,
        ]);

        return redirect()->back();
    }

    public function finalOrder(){
        $user=auth()->user();
        $cart=Cart::where('phone',$user->phone)->get();
            $count=Cart::where('phone',$user->phone)->count();
            $banner=Bannerimage::latest()->first();
            $count=Cart::where('phone',$user->phone)->count();
        return view('frontend.product.confirmorder',compact('cart','banner','count'));
    }
}
