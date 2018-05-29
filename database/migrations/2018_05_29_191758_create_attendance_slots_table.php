<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendanceSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_slots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class_id');
            $table->integer('time_slot_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes');
            $table->foreign('time_slot_id')->references('id')->on('time_slots');
            $table->string('subject');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_slots');
    }
}
