@extends('Admin.masterpage.master')
@section('title')
    Admin||schools
@endsection
@if(Session::has('manager'))
@section('links')
<li class="active">
    <a href="{{route('classrooms.index')}}">
        <i class="material-icons">content_paste</i>
        <span>classrooms</span>
    </a>
</li>
<li class="active">
    <a href="{{route('teachers.index')}}">
        <i class="material-icons">person</i>
        <span>Teachers </span>
    </a>
</li>
<li class="active">
    <a href="{{route('students.index')}}">
        <i class="material-icons">people</i>
        <span>Students </span>
    </a>
</li>
@endsection
@endif
@section('con')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        BASIC TABLES
                        <small>Basic example without any additional modification classes</small>
                    </h2>

                </div>
                <div class="body table-responsive">
                    <form action="{{route('admin.school_show_students_search', $school->id)}}" method="post">
                        @csrf
                    <div class="col-sm-6" >

                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Username" name="search">
                                </div>
                            </div>
                        </div>
                    <div class="col-sm-6" >
                               <input type="submit" class="btn bg-purple waves-effect" value="Search">
                    </div>
                    </form>

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
                <a class="btn btn-block btn-lg btn-success waves-effect" href="{{route('students.create' ,['id' => $school->id] )}}">Add Students </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
