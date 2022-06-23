<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\users;
 
class userregister extends Controller
{
    public function Register(Request $req){
        $present=users::where('uname',$req->input('uname'))->count();
        $res=false;
        if($present===0){
            $user=new users();
            $user->name=$req->input('name');
            $user->uname=$req->input('uname');
            $user->password=password_hash($req->input('password'),PASSWORD_DEFAULT);
            $user->gender=$req->input('gender');
            $user->age=$req->input('age');
            $user->email=$req->input('email');
            $user->mobileno=$req->input('mobile');
            $res=$user->save();
        }
        session()->put('fill',true);
        session()->put('res',$res);
        return redirect('registrationpage');
    }
    public function Login(Request $req){
        $find=users::where('uname',$req->input('uname'))->get();
        $num=count($find);
        if($num){
            if(password_verify($req->input('password'),$find[0]['password'])){
                session()->put('logged',true);
                session()->put('p_id',$find[0]['p_id']);
                session()->put('name',$find[0]['name']);
                session()->put('uname',$find[0]['uname']);
                session()->put('password',$find[0]['password']);
                session()->put('email',$find[0]['email']);
                session()->put('mobile',$find[0]['mobileno']);
                return redirect('userpage');
            }
        }
        session()->put('err',true);
        return redirect('loginpage');   
    }
    public function ChangePassword(Request $req){
        session()->put('change',true);
        if(password_verify($req->input('opassword'),session('password'))){
            $res=users::where('uname',session('uname'))->update(['password'=>password_hash($req->input('password'),PASSWORD_DEFAULT)]);
            if($res){
                session()->put('password',password_hash($req->input('password'),PASSWORD_DEFAULT));
                session()->put('res',true);
                return redirect('userpage');
            }
            else{
                session()->put('res',2);
                return redirect('userpage');
            }
        }
        else{
            session()->put('res',false);
            return redirect('userpage');
        }
    }
}
