<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bannerimage;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function bannerIndex(){
        $banner=Bannerimage::get()->all();
        return view('Admin.CMS.banner image.index',compact('banner'));
    }

    public function bannerCreate(){
        return view('Admin.CMS.banner image.create');
    }

    public function bannerStore(Request $request){
        if (!empty($request->banner_image)) {
            $banner_image = fileUpload($request['banner_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }
        Bannerimage::create([

            'banner_image'=>$banner_image,
            'banner_description'=>$request->banner_description

        ]);

        return redirect()->back();
    }

    public function bannerEdit($id){
        $edit=Bannerimage::where('id',$id)->first();
        return view('Admin.CMS.banner image.edit',compact('edit'));
    }

    public function bannerUpdate(Request $request){
        $id=$request->id;
        if (!empty($request->banner_image)) {
             $banner_image = fileUpload($request['banner_image'], BlogImage());
        } else {
            $var=Bannerimage::where('id',$id)->first();
           $banner_image= $var->banner_image;
        }

        Bannerimage::where('id',$id)->update([
            'banner_image'=>$banner_image,
            'banner_description'=>$request->banner_description

        ]);

        return redirect()->route('banner.index');
    }

    public function bannerDelete($id){
        Bannerimage::where('id',$id)->delete();
        return redirect()->route('banner.index');
    }

    }



