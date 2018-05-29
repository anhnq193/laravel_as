<?php

use Illuminate\Database\Seeder;

class AttendanceDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('attendance_details') -> insert(
            [[
                'attendance_slot' => '1',
                'student_id' => 'D0001',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],[
                'attendance_slot' => '2',
                'student_id' => 'D0003',
                'status' => '0',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],[
                'attendance_slot' => '3',
                'student_id' => 'D002',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],[
                'attendance_slot' => '4',
                'student_id' => 'D0004',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],[
                'attendance_slot' => '5',
                'student_id' => 'D0005',
                'status' => '0',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
            ]
        );
    }
}
