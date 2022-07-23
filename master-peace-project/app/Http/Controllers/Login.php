<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\school;
use App\Models\teacher;
use App\Models\student;
use App\Models\manager;
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
            return view('student.index', compact('student'));
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
                        $student = student::find($student->id);
                        return view('student.index' , compact('student'));
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
