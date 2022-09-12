<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\StudentClass;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class ScheduleClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $schedules=Schedule::with('teacher', 'class', 'subject')->get();
        return view('admin.schedule.index', [
            'schedules'=>$schedules
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $teachers=User::where('is_teacher', 1)->get();
        $classes=StudentClass::all();
        $subjects=Subject::all();
        return view('admin.schedule.create', [
            'teachers'=>$teachers,
            'classes'=>$classes,
            'subjects'=>$subjects
        ]);
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
        $start_time=Carbon::parse($request->start_time);
        $end_time=Carbon::parse($request->end_time);
        $duration = $end_time->diffInSeconds($start_time);
        $schedule=Schedule::where([
            'teacher_id'=>$request->teacher,
            'subject_id'=>$request->subject,
            'class_id'=>$request->class,
            'start_time'=>$start_time->toTimeString(),
            'end_time'=>$end_time->toTimeString(),
        ])->first();
        if ($schedule==null) {
            $schedule=new Schedule();
            $schedule->teacher_id=$request->teacher;
            $schedule->class_id=$request->class;
            $schedule->start_time=$start_time->toTimeString();
            $schedule->end_time=$end_time->toTimeString();
            if ($duration==2700) {
                $schedule->duration=$duration;
            }
            $schedule->subject_id=$request->subject;
            $schedule->save();
            return redirect('/schedule');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $schedule=Schedule::where('id', $id)->first();
        $classes=StudentClass::all();
        $teachers=User::where('is_teacher', 1)->get();
        $subjects=Subject::all();
        return view('admin.schedule.edit', [
            'schedule'=>$schedule,
            'classes'=>$classes,
            'subjects'=>$subjects,
            'teachers'=>$teachers
        ]);
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
        $start_time=Carbon::parse($request->start_time);
        $end_time=Carbon::parse($request->end_time);
        $duration = $end_time->diffInSeconds($start_time);
        $schedule=Schedule::where('id', $id)->first();
        $schedule->teacher_id=$request->teacher;
        $schedule->class_id=$request->class;
        $schedule->start_time=$start_time->toTimeString();
        $schedule->end_time=$end_time->toTimeString();
        if ($duration==2700) {
            $schedule->duration=$duration;
        }
        $schedule->subject_id=$request->subject;
        $schedule->save();
        return redirect('/schedule');
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
        $schedule=Schedule::where('id', $id)->first();
        $schedule->delete();
        return redirect('/schedule');
    }
}
