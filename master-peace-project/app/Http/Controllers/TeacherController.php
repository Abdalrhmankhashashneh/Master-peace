<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use App\Models\school;
use App\Models\manager;
use Session ;
use App\Http\Requests\StoreteacherRequest;
use App\Http\Requests\UpdateteacherRequest;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('manager')){
            $manager = manager::find(Session::get('manager'));
            $school = school::find($manager->school_id);
            $teachers = teacher::where('school_id',$school->id)->get();
            return view('Admin.school.school_teachers',compact('teachers' , 'school' , 'manager'));
        }
        $teachers = teacher::all();
        return view('Admin.teacher.teachers' , compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->id){
        $school = school::find($request->id);
        $school_teacher = "1";
        return view('Admin.teacher.teacher_add' ,  compact('school','school_teacher'));
    }
    else{
        $schools = school::all();
        $school_teacher = "0";
        return view('Admin.teacher.teacher_add' ,  compact('schools','school_teacher'));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreteacherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreteacherRequest $request  )
    {
        $validate = $request->validated(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:teachers',
                'password' => 'required|string|min:6',
                'school_id' => 'required',
                'status' => 'required',
            ]
        );


        $teacher = new teacher;
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->password = $request->password;
        $teacher->status = $request->status;
        $teacher->school_id = $request->school_id;
        $teacher->save();

        return redirect()->route('admin.school_show_teachers' ,  $request->school_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(teacher $teacher)
    {
        $teacher = teacher::find($teacher->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(teacher $teacher)
    {
        $teacher = teacher::find($teacher->id);
        return view('Admin.teacher.teacher_edit' ,  compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateteacherRequest  $request
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateteacherRequest $request, teacher $teacher)
    {
        $validate = $request->validated(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:teachers',
                'password' => 'required|string|min:6',
                'school_id' => 'required',
                'status' => 'required',
            ]
        );

        $teacher = teacher::find($teacher->id);
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->password = $request->password;
        $teacher->status = $request->status;
        $teacher->school_id = $request->school_id;
        $teacher->save();

        return redirect()->route('admin.school_show_teachers' ,  $request->school_id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(teacher $teacher)
    {
        $teacher = teacher::find($teacher->id);
        $school_id = $teacher->school_id;
        $teacher->delete();
        return redirect()->route('admin.school_show_teachers' ,  $school_id);
    }
}
