<?php

namespace App\Http\Controllers;

use App\Models\classroom;
use App\Models\lessones;
use App\Models\manager;
use App\Models\school;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\StoreclassroomRequest;
use App\Http\Requests\UpdateclassroomRequest;

class ClassroomController extends Controller
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
            $classrooms = classroom::where('school_id',$school->id)->get();
            return view('Admin.school.school_classrooms',compact('classrooms' , 'school' , 'manager'));
        }
        $classrooms = classroom::all();
        return view('Admin.classrooms.classrooms', compact('classrooms'));
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
            $school_classroom = "1";
            return view('Admin.classrooms.classrooms_add' ,  compact('school','school_classroom'));
        }

            $schools = school::all();
            $school_classroom = "0";
            return view('Admin.classrooms.classrooms_add' ,  compact('schools','school_classroom'));


           }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreclassroomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreclassroomRequest $request)
    {
        $validatour = $request->validated(
            [
                'school_id' => 'required',
                'name' => 'required',
                'limits' => 'required|numeric',
                'status' => 'required',
            ]
        );
        $classroom = new classroom;
        $classroom->name = $request->name;
        $classroom->limit = $request->limit;
        $classroom->status = $request->status;
        $classroom->school_id = $request->school_id;
        $classroom->save();
        return redirect()->route('admin.school_show_classrooms' , $request->school_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(classroom $classroom)
    {
        $students = lessones::join('students' , 'students.id' , '=' , 'lessones.student_id')->where('CR_id' , $classroom->id)->get();
        $courses = lessones::join('courses' , 'courses.id' , '=' , 'lessones.Course_id')->where('CR_id' , $classroom->id)->get();
        $classroom = classroom::find($classroom->id);
        $school = school::find($classroom->school_id);
        return view('Admin.classrooms.classrooms_show' , compact('classroom' , 'students' , 'school' , 'courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(classroom $classroom)
    {
        $schools = school::all();
        return view('Admin.classrooms.classrooms_edit' ,  compact('classroom','schools'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateclassroomRequest  $request
     * @param  \App\Models\classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateclassroomRequest $request, classroom $classroom)
    {

        $validatour = $request->validated(
            [
                'school_id' => 'required',
                'name' => 'required',
                'limits' => 'required|numeric',
                'status' => 'required',
            ]
        );
        $classroom->name = $request->name;
        $classroom->limit = $request->limit;
        $classroom->status = $request->status;
        $classroom->school_id = $request->school_id;
        $classroom->save();
        return redirect()->route('admin.school_show_classrooms' , $request->school_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(classroom $classroom)
    {
        $school_id = $classroom->school_id;

        $classroom = classroom::find($classroom->id);
        $classroom->delete();
        return redirect()->route('admin.school_show_classrooms' , $school_id);
    }
}
