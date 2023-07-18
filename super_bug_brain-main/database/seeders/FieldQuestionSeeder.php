<?php

namespace Database\Seeders;

use App\Model\FieldQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FieldQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('field_questions')->insert([
            [
                'namefield' => 'Tiếng Anh',
                'status' => '1',
            ],
            [
                'namefield' => 'Bóng Đá',
                'status' => '1',
            ],
            [
                'namefield' => 'Hóa Học',
                'status' => '1',
            ],
            [
                'namefield' => 'Công Nghệ Thông Tin',
                'status' => '1',
            ]
        ]);
    }
}
