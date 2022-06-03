<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userIndex(){
        $usertable=User::get()->all();
        return view('Admin.user.index',compact('usertable'));
    }



    public function userDelete($id){
        User::where('id',$id)->delete();
        return redirect()->route('user.index');
    }
}
