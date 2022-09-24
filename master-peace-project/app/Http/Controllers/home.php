<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\school;
use Session;
class home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = School::all();
        return view('index', compact('data'));


    }
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {

        return view('about');
    }
    /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function login()
 {
    if(Session::has('manager') || Session::has('teacher') || Session::has('student')){
        return redirect()->route('profile');
    }

     return view('login');
 }
    /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function contact()
 {
     return view('contact');
 }
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function school()
    {
        $schools = School::all();
        return view('classes' , compact('schools'));
    }


}
