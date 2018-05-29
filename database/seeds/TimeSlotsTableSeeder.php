<?php

use Illuminate\Database\Seeder;

class TimeSlotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('time_slots') -> insert(
            [[
                'time' => '8h-12h'
            ],[
                'time' => '13h30-17h30'
            ],[
                'time' => '17h-21h'
            ]
            ]
        );
    }
}
