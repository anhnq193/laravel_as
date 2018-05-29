<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('students') -> insert(
            [[
                'id' => 'D0001',
                'name' => 'Tran Van A'
            ],[
                'id' => 'D0002',
                'name' => 'Tran Văn B'
            ],[
                'id' => 'D0003',
                'name' => 'Tran Thi C'
            ],[
                'id' => 'D0004',
                'name' => 'Mai Van A'
            ],[
                'id' => 'D0005',
                'name' => 'Mai Quang B'
            ],[
                'id' => 'D0006',
                'name' => 'Mai Quang C'
            ],[
                'id' => 'D0007',
                'name' => 'Dinh Quang A'
            ],[
                'id' => 'D0008',
                'name' => 'Dinh Quang B'
            ],[
                'id' => 'D0009',
                'name' => 'Dinh Quang C'
            ],[
                'id' => 'D0010',
                'name' => 'Nguyen Van A'
            ],[
                'id' => 'D0011',
                'name' => 'Nguyen Van B'
            ],[
                'id' => 'D0012',
                'name' => 'Nguyen Van C'
            ],[
                'id' => 'D0013',
                'name' => 'Vo Thi A'
            ],[
                'id' => 'D0014',
                'name' => 'Vo Thi B'
            ],[
                'id' => 'D0015',
                'name' => 'Vo Thi C'
            ]
            ]
        );
    }
}
