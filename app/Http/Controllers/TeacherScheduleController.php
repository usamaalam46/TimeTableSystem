<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Auth;

class TeacherScheduleController extends Controller
{
    //
    public function index()
    {
        $teacherSchedules=Schedule::with('teacher', 'subject', 'class')->where('teacher_id', Auth::user()->id)->get();
        if ($teacherSchedules->isNotEmpty()) {
            return view('teacher.index', [
                'teacherSchedules'=>$teacherSchedules
            ]);
        }
    }
}
