<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\queries;

class contactquery extends Controller
{
    public function SubmitQuery(Request $req){
        $query=new queries();
        $query->name=$req->input('name');
        $query->email=$req->input('email');
        $query->query_detail=$req->input('query');
        $res=$query->save();
        session()->put('fill',true);
        session()->put('res',$res);
        return redirect('contactus');
    }
}
?>