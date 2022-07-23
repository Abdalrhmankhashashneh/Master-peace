@extends('Admin.masterpage.master')
@section('title')
    Admin||classrooms
@endsection
@section('con')
<div class="container-fluid">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Classroom Students
                        <small>All classroom student </small>
                    </h2>

                </div>
                <div class="body table-responsive">


                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NAME</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                       @foreach ($students as$key => $student)

                       <tr>
                           <th scope="row">{{$key + 1}}</th>
                           <td>{{$student->name}}</td>
                           <td>{{$student->email}}</td>
                           <td>{{$student->status}}</td>
                           <td><a class="btn btn-block btn-lg btn-warning waves-effect" href="{{route('students.edit' , $student)}}">edit</a></td>
                           <td> <form method="POST" action="{{route('students.destroy' , $student)}}"> @csrf @method('DELETE') <input type="submit" class="btn btn-block btn-lg btn-danger waves-effect" value="delete"> <form></td>
                            <td><a class="btn btn-block btn-lg btn-info waves-effect" href="{{route('students.show' , $student)}}">show</a></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="header">
                    <h2>
                        Classroom  Courses
                        <small>all Classroom Corses</small>
                    </h2>

                </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Course Name</th>
                            </tr>
                        </thead>
                        <tbody>
                       @foreach ($courses as$key => $course)

                       <tr>
                           <th scope="row">{{$key + 1}}</th>
                           <td>{{$course->name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


                </div>
            </div>
        </div>
    </div>

</div>
@endsection
