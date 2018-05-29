<?php

use Illuminate\Database\Seeder;

class AttendanceSlotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('attendance_slots') -> insert(
            [[
                'class_id' => 'T1701M',
                'time_slot_id' => '1',
                'subject' => 'ADF',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],[
                'class_id' => 'T1702M',
                'time_slot_id' => '3',
                'subject' => 'MLJ',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],[
                'class_id' => 'T1703M',
                'time_slot_id' => '2',
                'subject' => 'AP',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],[
                'class_id' => 'T1704M',
                'time_slot_id' => '1',
                'subject' => 'WADP',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],[
                'class_id' => 'T1705M',
                'time_slot_id' => '3',
                'subject' => 'IBD',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
            ]
        );
    }
}
