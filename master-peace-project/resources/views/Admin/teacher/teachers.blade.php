@extends('Admin.masterpage.master')
@section('title')
    Admin||teachers
@endsection
@section('con')
<div class="container-fluid">
    <nav>
        <ul class="pager">
            <li class="previous">
                <a href="{{route('admin.index')}}" class="waves-effect"><span aria-hidden="true">←</span> Back </a>
            </li>

        </ul>
    </nav>
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
                    <form action="{{route('admin.school_show_teachers_search', 't' )}}" method="post">
                        @csrf
                        <input type="hidden" name="public_teacher" value="1">
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
                       @foreach ($teachers as$key => $teacher)

                       <tr>
                           <th scope="row">{{$key + 1}}</th>
                           <td>{{$teacher->name}}</td>
                           <td>{{$teacher->email}}</td>
                           <td>{{$teacher->status}}</td>
                           <td><a class="btn btn-block btn-lg btn-warning waves-effect" href="{{route('teachers.edit' , $teacher)}}">edit</a></td>
                           <td> <form method="POST" action="{{route('teachers.destroy' , $teacher)}}"> @csrf @method('DELETE') <input type="submit" class="btn btn-block btn-lg btn-danger waves-effect" value="delete"> <form></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-block btn-lg btn-success waves-effect" href="{{route('teachers.create'  )}}">Add Teacher</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
