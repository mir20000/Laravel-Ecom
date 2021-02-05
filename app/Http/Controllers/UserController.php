<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    function login(Request $req){
        $user = User::where(['email'=>$req->email])->first();
        if ($user && Hash::check($req->password,$user->password))
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }else {
            return redirect('login');
        }
    }
    function signUp(Request $rqst){
        $user = new User;
        $user->name= $rqst->name;
        $user->email=$rqst->email;
        $user->password=Hash::make($rqst->password);
        $user->save();
        return redirect('login');
    }
}
