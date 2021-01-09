<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function Auth_Register(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required|email|unique:table_users',
            'password'=>'required|min:5|max:10',
        ]);
        $data = new model_auth;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = Hash::make($req->password);
        $query = $data->save();
        if($query){
            return back()->with('success','Ban da dk thanh cong');
        }
        else{
            return back()->with('fail','database dang gap loi');
        }
    }
    public function check(Request $req){
        $data_login = model_auth::where('email','=',$req->email1)->first();
        if($data_login){
            Session()->put('login',$req->email1);
            return redirect("home");
        }
    }
}
