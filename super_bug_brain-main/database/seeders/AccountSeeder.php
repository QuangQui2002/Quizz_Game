<?php

namespace Database\Seeders;

use App\Model\Account;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            [
                'name' => 'Admin',
                'email' => 'administrator@gmail.com',
                'password' => Hash::make('123456'),
                'role' => '1',
                'status' => '1',
            ],
            [
                'name' => 'Quang Qui',
                'email' => 'quangqui@gmail.com',
                'password' => Hash::make('123456'),
                'role' => '1',
                'status' => '1',
            ],
            [
                'name' => 'Công Thành',
                'email' => 'congthanh@gmail.com',
                'password' => Hash::make('123456'),
                'role' => '1',
                'status' => '1',
            ],
            [
                'name' => 'Đức Trọng',
                'email' => 'ductrong@gmail.com',
                'password' => Hash::make('123456'),
                'role' => '1',
                'status' => '1',
            ],
        ]);
    }
}
