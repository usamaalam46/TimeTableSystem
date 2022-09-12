<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Notifications\TeacherRegisterNotification;
use Spatie\Permission\Models\Role;
use Session;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teachers=User::where('is_teacher', 1)->get()->toArray();
        return view(
            'admin.teacher.index',
            [
            'teachers'=>$teachers,
        ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.teacher.create');
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
        $teacher=new User();
        $password=Str::random(8);
        $teacher->name=$request->name;
        $teacher->email=$request->email;
        $teacher->password=Hash::make($password);
        $teacher->is_teacher=1;
        $teacher->save();
        $info=[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$password,
        ];
        $teacher->notify(new TeacherRegisterNotification($info));
        $teacher->assignRole('teacher');
        return redirect('/teachers');
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
        $teacher=User::where('id', $id)->first();
        return view('admin.teacher.edit', [
            'teacher'=>$teacher
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
        $teacher=User::where('id', $id)->first();
        $teacher->name=$request->name;
        $teacher->update=$request->email;
        $teacher->save();
        return redirect()->back()->with('success', 'Updated Successfully');
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
        $teacher=User::where('id', $id)->first();
        $teacher->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
