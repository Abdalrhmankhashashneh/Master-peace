<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\manager;
use App\Models\school;
use App\Models\lessones;
use App\Models\teacher;
use App\Models\assigment;
use Session ;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
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
            $students = student::where('school_id',$school->id)->get();
            return view('Admin.school.school_student',compact('students' , 'school' , 'manager'));
        }

        $students = student::all();
        return view('Admin.student.students', compact('students'));

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
        return view('Admin.student.student_add' ,  compact('school','school_teacher'));
    }
    else
    {
        $schools = school::all();
        $school_teacher = "0";
        return view('Admin.teacher.teacher_add' ,  compact('schools','school_teacher'));
    }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorestudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorestudentRequest $request)
    {

        $validate = $request->validated(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:students',
                'password' => 'required|string|min:6',
                'school_id' => 'required',
            ]
        );
        $student = new student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->school_id = $request->school_id;
        $student->save();
        return redirect()->route('admin.school_show_students' , $request->school_id)->with('success', 'Student added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        $student = student::find($student->id);
        $classrooms = lessones::join('classrooms' , 'lessones.CR_id' , '=' , 'classrooms.id')->where('student_id', $student->id)->get()->toArray();
        $courses = lessones::join('courses' , 'lessones.Course_id' , '=' , 'courses.id')->where('student_id', $student->id)->get()->toArray();
        $teachers = lessones::join('teachers' , 'lessones.Teacher_id' , '=' , 'teachers.id')->where('student_id', $student->id)->get()->toArray();
        $counter = lessones::join('teachers' , 'lessones.Teacher_id' , '=' , 'teachers.id')->where('student_id', $student->id)->get()->count();
        $school = school::find($student->school_id);
        $info = [
            'classrooms' => $classrooms,
            'courses' => $courses,
            'teachers' => $teachers,
            'counter' => $counter,
        ];



        return view('Admin.student.student_show', compact('info' , 'school' , 'student'));
    }

    public function show_student_info($id)
    {
        $teachers = lessones::join('teachers' , 'lessones.Teacher_id' , '=' , 'teachers.id')->where('student_id', $id)->get();
        $student = student::find($id);
        return view('Admin.teacher.teachers', compact('teachers',));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        $school = school::find($student->school_id);

        return view('Admin.student.student_edit' ,  compact('student','school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestudentRequest  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatestudentRequest $request, student $student)
    {

        $validate = $request->validated(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:students,email,'.$student->id,
                'password' => 'required|string|min:6',
                'school_id' => 'required',
            ]
        );
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->school_id = $request->school_id;
        $student->save();
        return redirect()->route('admin.school_show_students' , $request->school_id)->with('success', 'Student updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        $student = student::find($student->id);
        $student->delete();
        return redirect()->back();
    }


}
