<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
                "name"=> "Akash Shukla",
                "email"=>"aakashshukla@gmail.com",
                "password"=>"hfhueyu37734bn43742@",
                "remember_token"=>"%%%&#@%$%vhjk"
    
            ],
            [
                "name"=> "Aman Shukla",
                "email"=>"amanshukla@gmail.com",
                "password"=>"hfhueyu3x7734bn43742@",
                "remember_token"=>"%%%&x#@%$%vhjk"
    
            ],
            [
                "name"=> "Suraj Shukla",
                "email"=>"aanshukla@gmail.com",
                "password"=>"hfhyu3x7734bn43742@",
                "remember_token"=>"%%s%&x#@%$%vhjk"
    
            ],
            [
                "name"=> "Ankit Shukla",
                "email"=>"ankitshukla@gmail.com",
                "password"=>"hfhyu3x77ss34bn43742@",
                "remember_token"=>"%%sx%&x#@%$%vhjk"
    
            ],
            [
                "name"=> "Manoj Shukla",
                "email"=>"manojshukla@gmail.com",
                "password"=>"hfhyu3x77ss34b742@",
                "remember_token"=>"%%sx%&x#@%cc$%vhjk"
    
            ]
            
            ];

        $userc = collect($user);
        $userc->each(function($element){
            user::insert($element);
        });
  
        
    }
}
