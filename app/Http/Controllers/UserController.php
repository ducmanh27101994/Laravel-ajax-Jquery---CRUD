<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestRegister;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    function indexLogin(){
        return view('login.login');
    }

    function indexRegister(){
        return view('login.register');
    }

    function storeRegister(Request $request){
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->admin = $request->admin;
        $user->password = Hash::make($request->password);
        $user->passwordConfirm = $request->passwordConfirm;

        $user->save();

        return redirect()->route('login');
    }


    function storeLogin(Request $request){

//        $getUser = DB::table('users')->select('*')->where([
//            ['email','=',$request->email],
//            ['password','=',$request->password]
//        ])->get();
//
//        foreach ($getUser as $key =>$user){
//            if ($user->email == $request->email && $user->password == $request->password){
//                Session::put('isAuth',true);
//                return redirect()->route('products.index');
//            }
//        }
        $data = [
            'username'=>$request->username,
            'password'=>$request->password
        ];

        if (!Auth::attempt($data)){
            return redirect()->route('login');
        }

        return redirect()->route('products.index');
    }

    function logOut(){
        Session::remove('isAuth');
        return redirect()->route('login');
    }




}
