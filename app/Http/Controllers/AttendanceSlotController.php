<?php

namespace App\Http\Controllers;

use App\AttendanceSlot;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = Carbon::now();
        $attSlot = DB::table('attendance_slots')
            ->join('time_slots', 'attendance_slots.time_slot_id', '=', 'time_slots.id')
            ->get();
        return view('attendance_slot') ->with('list_slot', $attSlot)-> with('time', $now->toDateString());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attSlot = DB::table('attendance_slots')->where('attendance_slots.id', $id)
            ->join('student_classes', 'attendance_slots.class_id', '=', 'student_classes.class_id')
            ->join('students', 'students.id', '=', 'student_classes.student_id')
            ->get();

        return view('attendance_detail') -> with( 'list_student',  $attSlot);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
