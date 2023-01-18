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
                    'email'=>'admin@teracommerce.com',
                    'password'=>Hash::make('admin'),
                    'role'=>'admin',
                    'status'=>'active',
                ],
                //VENDOR
                [
                    'name'=>'Vendor User',
                    'username'=>'vendor',
                    'email'=>'vendor@teracommerce.com',
                    'password'=>Hash::make('vendor'),
                    'role'=>'vendor',
                    'status'=>'active',
                ],
                //USER
                [
                    'name'=>'Customer User',
                    'username'=>'user',
                    'email'=>'user@teracommerce.com',
                    'password'=>Hash::make('user'),
                    'role'=>'user',
                    'status'=>'active',
                ]
            ]
        );
    }
}
