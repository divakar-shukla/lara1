<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Closure;

class UserController extends Controller
{

    public function showAll(){
        $user = DB::table("users")->get();
        return view('welcome', ["user" =>$user]);            
    }
    public function paginate(){
        $user = DB::table("users")->paginate(3, ['id','name','email','password'], 'search')->appends(["sort"=>"votes"]);
        // return $user;
        return view('paginate', ["user" =>$user]);
    }

   public function joinMethod(){
    $students = DB::table('students')
    ->join('users', 'students.student_id', '=', 'users.id')
    ->select('students.*', 'users.email')
    ->get();
    return $students;
   }
   public function countMethod(){
    $students = DB::table('students')
    ->join('users', 'students.student_id', '=', 'users.id')
    ->select(DB::row("count(*) as students_count, students.student_id"))
    ->get();
    return $students;
   }

    public function showUser( $id ){
      $user = DB::table("users")->select("name", "id as number", "email", )->where("id", ">", $id)->get();
        return view('welcome', ["user" =>$user]);
        // return $user;

    }
    public function validat(Request $req){

        //object method
    //     return $req->validate([
    //         'name'=>['required', new UpperCase()],
    //         'email'=>'required|email', 
    //         'password'=>'required|numeric|min:20',
    //         'token'=>'required',
    //     ],[
    //         'email.required'=>'Email Address is most important.',
    //         'token.required'=>'Please fill Token'
    //     ]
    // );


//closure

        return $req->validate([
            'name'=>['required', function($attribute, $value, $fail){
                if(strtoupper($value) != $value){
                    $fail('We are use closure Method');
                }

            }],
            'email'=>'required|email', 
            'password'=>'required|numeric|min:20',
            'token'=>'required',
        ],[
            'email.required'=>'Email Address is most important.',
            'token.required'=>'Please fill Token'
        ]
    );

    // return  $req->all();
            }
    public function insertData(){
        $id = DB::table("users")->insert([
        [
            "name"=>"Anjum Narayan",
            "email"=>"anju@gmail.com",
            "password"=> "hfhueyu37734bn43742@",
            "remember_token"=> "%%%&#@%$%vhjk",
            "created_at"=>now(),
            "updated_at"=>now()
        ],
        [
            "name"=>"Nayan Tiwari",
            "email"=>"nayan@gmail.com",
            "password"=> "hfhueyu37734bn43742@",
            "remember_token"=> "%%%&#@%$%vhjk",
            "created_at"=>now(),
            "updated_at"=>now()
        ],
        [
            "name"=>"Shobhit Jain",
            "email"=>"shobhit@gmail.com",
            "password"=> "hfhueyu37734bn43742@",
            "remember_token"=> "%%%&#@%$%vhjk",
            "created_at"=>now(),
            "updated_at"=>now()
        ]
        ]);

        if($id){
            echo "Data inserted successfuly.";
        }else{
            echo "Something went wrong.";
        }
    }


}
