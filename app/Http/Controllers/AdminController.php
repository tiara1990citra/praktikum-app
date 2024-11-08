<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view("login");
    }

    public function cekLogin(Request $request){
        //validasi username dan password
        $request->validate(
            [
                'username'=>'required',
                'password'=>'required',

            ]);
//ambil data dari username dan password dari from
        $data_user = $request->only(["username","password"]);
//periksan username dan password pada databse
if(auth()->guard("admin")->attempt($data_user)){
return redirect("/");
}
return back()->with("pesan","username dan password tidak terdaftar");
    }  
}

        

