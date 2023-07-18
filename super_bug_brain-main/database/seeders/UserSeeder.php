<?php

namespace Database\Seeders;

use App\Model\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Phi Long',
                'email' => 'philonog@gmail.com',
                'password' => Hash::make('123456'),
                'point' => '300',
                'ranker' => '0',
                'role' => '0',
                'status' => '1',
            ],
            [
                'name' => 'Văn Tân',
                'email' => 'vantan@gmail.com',
                'password' => Hash::make('123456'),
                'point' => '100',
                'ranker' => '0',
                'role' => '0',
                'status' => '0',
            ],
            [
                'name' => 'Quang Qui',
                'email' => 'duyen@gmail.com',
                'password' => Hash::make('123456'),
                'point' => '150',
                'ranker' => '0',
                'role' => '0',
                'status' => '1',
            ],
            [
                'name' => 'Công Thành',
                'email' => 'congthanh@gmail.com',
                'password' => Hash::make('123456'),
                'point' => '180',
                'ranker' => '0',
                'role' => '0',
                'status' => '1',
            ],
            [
                'name' => 'Anh Phi',
                'email' => 'anhphi@gmail.com',
                'password' => Hash::make('123456'),
                'point' => '1000',
                'ranker' => '0',
                'role' => '0',
                'status' => '1',
                
            ],    
            [
                'name' => 'Đức Trọng',
                'email' => 'ductrong@gmail.com',
                'password' => Hash::make('123456'),
                'point' => '1000',
                'ranker' => '0',
                'role' => '0',
                'status' => '1',
                
            ],    
        ]);
    }
}
