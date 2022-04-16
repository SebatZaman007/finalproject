<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clientIndex(){
        $client=Client::get()->all();
        return view('Admin.CMS.client.index',compact('client'));
    }

    public function clientCreate(){
        return view('Admin.CMS.client.create');
    }

    public function clientStore(Request $request){
        if (!empty($request->client_image)) {
            $client_image = fileUpload($request['client_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }
        Client::create([

            'client_image'=>$client_image,
            'client_name'=>$request->client_name,
            'client_comment'=>$request->clienclient_commentt_name,

        ]);

        return redirect()->back();
    }

    public function clientEdit($id){
        $edit=Client::where('id',$id)->first();
        return view('Admin.CMS.client.edit',compact('edit'));
    }

    public function clientUpdate(Request $request){
        $id=$request->id;
        if (!empty($request->client_image)) {
             $client_image = fileUpload($request['client_image'], BlogImage());
        } else {
            $var=Client::where('id',$id)->first();
           $client_image= $var->client_image;
        }

        Client::where('id',$id)->update([
            'client_image'=>$client_image,
            'client_name'=>$request->client_name,
            'client_comment'=>$request->clienclient_commentt_name,
        ]);

        return redirect()->route('banner.index');
    }

    public function clientDelete($id){
        Client::where('id',$id)->delete();
        return redirect()->route('banner.index');
    }
}
