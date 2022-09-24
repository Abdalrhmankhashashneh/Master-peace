<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\school;
use App\Models\teacher;
use App\Models\student;
use App\Models\manager;
use App\Models\comments;
use App\Models\activities;
use App\Models\lessones;
use Session;

class Login extends Controller
{
    public function profile()
    {
        if(Session::has('manager')){
            $manager = manager::where('id', Session::get('manager'))->first();
            return view('manager.index', compact('manager'));
        }
        elseif(Session::has('teacher')){
            $teacher = teacher::where('id', Session::get('teacher'))->first();
            return view('teacher.index', compact('teacher'));
        }
        elseif(Session::has('student')){
            $student = student::where('id', Session::get('student'))->first();
            $school = school::find($student->school_id);
            $comments = comments::where('student_id', $student->id)->get();
            $activities = activities::where('student_id', $student->id)->get();
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
            return view('student.index' , compact('student' , 'school' , 'comments' , 'activities' , 'info'));

        }
        else{
            return redirect()->route('login');
        }
    }

    public function login(Request $request)
    {

        $email = $request->email;
        $password = $request->password;



        $manager = manager::where('email', $email)->first();
        if($manager)
        {
            if($manager->password == $password)
            {
                Session::put('manager', $manager->id);
                $manager = manager::find($manager->id);
                return view('manager.index' , compact('manager'));
            }
            else
            {
                return redirect('/Raqib/login')->with('error', 'Password is incorrect');
            }
        }
        else
        {
            $teacher = teacher::where('email', $email)->first();
            if($teacher)
            {

                if($teacher->password == $password)
                {
                    Session::put('teacher', $teacher->id);
                    $teacher = teacher::find($teacher->id);
                    return view('teacher.index' , compact('teacher'));
                }
                else
                {
                    dd('Password is incorrect');
                    return redirect('/Raqib/login')->with('error', 'Password is incorrect');
                }
            }
            else
            {
                $student = student::where('email', $email)->first();
                if($student)
                {
                    if($student->password == $password)
                    {
                        Session::put('student', $student->id);
                        $school = school::find($student->school_id);
                        $comments = comments::where('student_id', $student->id)->get();
                        $activities = activities::where('student_id', $student->id)->get();

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
                        return view('student.index' , compact('student' , 'school' , 'comments' , 'activities' , 'info'));
                    }
                    else
                    {
                        return redirect('/Raqib/login')->with('error', 'Password is incorrect');
                    }
                }
                else
                {
                    return redirect('/Raqib/login')->with('error', 'Email is incorrect');
                }
            }
        }

        dd($email,$password);

    }

    public function register(){
        return view('register');
    }
    public function Logout(){
        Session::flush();
        return redirect('/Raqib/login');
    }

}
