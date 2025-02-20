<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([

                    //ADMIN
            [
                "name" => "Adeolu waade",
                "username" =>  "waade",
                "email" =>  "adeoluwaade13@gmail.com",
                "password" =>  Hash::make('okgbrand1234'),
                "role" =>  "admin",
                "status" =>  "1",
            ],
                      //staff
                      [
                        "name" => "Obafemi Godwin",
                        "username" =>  "Godwin",
                        "email" =>  "obafemikelvingodwin19@gmail.com",
                        "password" =>  Hash::make('okgbrand1234'),
                        "role" =>  "admin",
                        "status" =>  "1",
                    ],

                    [
                        "name" => "Okome Kesiena",
                        "username" =>  "Khazz",
                        "email" =>  "Kesienokome1@gmail.com",
                        "password" =>  Hash::make('okgbrand1234'),
                        "role" =>  "admin",
                        "status" =>  "1",
                    ],
            ]
        );
    }
}
