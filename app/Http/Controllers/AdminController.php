<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view("Dashboard");

    }
    public function login()
    {
        // return view("login");
        session(["test"=>"hello"]);
        return response()->json(session("test"));
    }

    public function cekLogin(Request $request)
    {
        //validasi username dan password
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required',

            ]
        );
        // //ambil data dari username dan password dari from
        $data_user = $request->only(["username", "password"]);
        // // //periksan username dan password pada databse
        if (Auth::guard("admin")->attempt($data_user)) {
            // return redirect('/');
            return response()->json(session());

        }
        // return back()->with("pesan", "username dan password tidak terdaftar");
        return response()->json(session());
    }
}
