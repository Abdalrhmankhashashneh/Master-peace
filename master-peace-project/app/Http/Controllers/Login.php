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
    public function index()
    {
        return view('login');
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
                    dd($teacher);
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
                        dd($student);
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
    public function Logout()
    {
        return view('index');
    }
}
