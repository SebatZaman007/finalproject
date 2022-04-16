<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productIndex(){
        $product=Product::get()->all();
     
        return view('Admin.products.index',compact('product'));
    }

    public function productCreate(){
        return view('Admin.products.create');
    }

    public function productStore(Request $request){
        if (!empty($request->product_image)) {
            $product_image = fileUpload($request['product_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }
        Product::create([

            'product_image'=>$product_image,
            'product_name'=>$request->product_name,
            'product_price'=>$request->product_price,
            'product_quantity'=>$request->product_quantity,
            'product_description'=>$request->product_description
        ]);

        return redirect()->back();
    }

    public function productEdit($id){
        $edit=Product::where('id',$id)->first();
        return view('Admin.products.edit',compact('edit'));
    }

    public function productUpdate(Request $request){
        $id=$request->id;
        if (!empty($request->product_image)) {
             $product_image = fileUpload($request['product_image'], BlogImage());
        } else {
            $var=Product::where('id',$id)->first();
           $product_image= $var->product_image;
        }

        Product::where('id',$id)->update([
            'product_image'=>$product_image,
            'product_name'=>$request->product_name,
            'product_price'=>$request->product_price,
            'product_quantity'=>$request->product_quantity,
            'product_description'=>$request->product_description

        ]);

        return redirect()->route('product.index');
    }

    public function productDelete($id){
        Product::where('id',$id)->delete();
        return redirect()->route('product.index');
    }
}
