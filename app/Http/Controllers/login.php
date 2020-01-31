<?php

namespace App\Http\Controllers;
use App\users;
use APP\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
    function masuk(Request $kiriman){
        $data1= users::where('email', $kiriman->email)->where('password', $kiriman->password)->get();
        $data2= admin::where('email', $kiriman->email)->where('password', $kiriman->password)->get();

        if(count($data1)>0){
            //berhasil login users
            Auth::guard('users')->LoginUsingId($data1[0]['id']);
            return redirect('/seputarlaman/login');

        }else if(count($data2)>0){
            //berhasil login untuk pengurus
            Auth::guard('admin')->LoginUsingId($data2[0]['id']);
            return redirect('/seputarlaman/login');

        }else{
            //gagal login
            return "gagal login";
        }

    }

    function keluar(){

        if(Auth::guard('users')->check()){
            Auth::guard('users')->logout();
        }else if (Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
        }

    return redirect ('/login');

    }
}
