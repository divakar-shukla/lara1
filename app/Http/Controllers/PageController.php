<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function insertdata(Request $req){
     $is_insert = DB::table('users')->insert([
        'name'=> $req->name,
        'email'=> $req->email,
        'email_verified_at'=> now(),
        'password'=> $req->password,
        'remember_token'=>$req->token,
        'updated_at'=>now(),
        'created_at'=>now()
       ]);
       if($is_insert){
        return redirect('http://127.0.0.1:8000/');
       }
    }

}
