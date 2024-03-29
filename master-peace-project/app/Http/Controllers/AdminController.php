<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\school;
use App\Models\teacher;
use App\Models\student;
use App\Models\manager;
use App\Models\classroom;
use App\Models\contact;
use Session;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = school::all()->count();
        $teachers = teacher::all()->count();
        $students = student::all()->count();
        $managers = manager::all()->count();
        $contacts = contact::orderBy('id', 'desc')->get();
        $classrooms = classroom::all()->count();
        return view('Admin.index' , compact('schools' , 'teachers' , 'students' , 'managers' , 'classrooms' , 'contacts'));

    }

    public function login()
    {
        return view('Admin.login');
    }

    public function login_v(Request $request)
    {
        $admin = admin::where('email', $request->email)->where('password', $request->password)->first();
        if($admin){
            Session::flush();
            Session::put('admin', $admin);
            return redirect()->route('admin.index');
        }
        else{
            return redirect()->route('admin.login')->with('error', 'Invalid email or password');
        }
    }

    public function logout()
    {
        Session::forget('admin');
        return redirect()->route('admin.login');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.school');
    }

    public function school()
    {
        $schools = school::all();
        return view('Admin.school.school' , compact('schools'));
    }


    public function school_create()
    {
        return view('Admin.school.school_add');
    }

    public function school_store(Request $request)
    {
        $school = new school;
        $school->name = $request->school_name;
        $school->status = $request->status;
        $school->save();
        return redirect()->route('admin.school');
    }

    public function school_edit($id)
    {
        $school = school::find($id);
        return view('Admin.school.school_edit' , compact('school'));
    }

    public function school_update(Request $request, $id)
    {
        $school = school::find($id);
        $school->name = $request->school_name;
        $school->status = $request->status;
        $school->save();
        return redirect()->route('admin.school');
    }

    public function school_delete($id)
    {
        $school = school::find($id);
        $school->delete();
        return redirect()->route('admin.school');
    }

    public function school_show($id)
    {
        $school = school::find($id);
        $teachers = teacher::where('school_id', $id)->count();
        $students = student::where('school_id', $id)->count();
        $managers = manager::where('school_id', $id)->count();
        $classrooms = classroom::where('school_id', $id)->count();

        return view('Admin.school.school_show' , compact('school','teachers','students','managers','classrooms'));
    }

    public function school_search(Request $request)
    {
        $schools = school::where('name', 'like', '%'.$request->search.'%')->get();
        return view('Admin.school.school' , compact('schools'));
    }

    public function school_teachers($id){

        $teachers = teacher::where('school_id', $id)->get();
        $school = school::find($id);
        return view('Admin.school.school_teachers' , compact('teachers' , 'school'));
    }



    public function school_search_teachers(Request $request , $id)
    {

        if($request->public_teacher == "1"){
            $teachers = teacher::where('name', 'like', '%'.$request->search.'%')->get();
             return view('Admin.teacher.teachers' , compact('teachers'));
        }
        $teachers = teacher::where('school_id', $id)->where('name', 'like', '%'.$request->search.'%')->get();
        $school = school::find($id);
        return view('Admin.school.school_teachers' , compact('teachers' , 'school'));
    }

    public function school_students($id){
        $students = student::where('school_id', $id)->get();
        $school = school::find($id);
        return view('Admin.school.school_student' , compact('students' , 'school'));
    }

    public function school_search_students(Request $request , $id)
    {
        if($request->public_teacher == "1"){
            $students = student::where('name', 'like', '%'.$request->search.'%')->get();
            return view('Admin.student.students' , compact('students'));
        }
        $students = student::where('school_id', $id)->where('name', 'like', '%'.$request->search.'%')->get();
        $school = school::find($id);
        return view('Admin.school.school_student' , compact('students' , 'school'));
    }


    public function school_classrooms($id){
        $classrooms = classroom::where('school_id', $id)->get();
        $school = school::find($id);
        return view('Admin.school.school_classrooms' , compact('classrooms' , 'school'));
    }

    public function school_search_classrooms(Request $request , $id ){
        if($request->public == "1"){
            $classrooms = classroom::where('name', 'like', '%'.$request->search.'%')->get();
            return view('Admin.classrooms.classrooms' , compact('classrooms'));
        }
        $classrooms = classroom::where('school_id', $id)->where('name', 'like', '%'.$request->search.'%')->get();
        $school = school::find($id);
        return view('Admin.school.school_classrooms' , compact('classrooms' , 'school'));
    }



}
