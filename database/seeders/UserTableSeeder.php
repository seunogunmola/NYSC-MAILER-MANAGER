<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
        DB::table('users')->insert(
            [
                //ADMIN
                [
                    'name'=>'Admin User',
                    'username'=>'admin',
                    'email'=>'admin@nmms.com',
                    'password'=>Hash::make('admin'),
                    'role'=>'admin',
                    'status'=>'active',
                ],
                //USER
                [
                    'name'=>'Customer User',
                    'username'=>'user',
                    'email'=>'user@nmms.com',
                    'password'=>Hash::make('user'),
                    'role'=>'user',
                    'status'=>'active',
                ]
            ]
        );
    }
}
