@extends('Admin.masterpage.master')
@section('title')
    Admin||schools
@endsection
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
                    <form action="{{route('admin.school_show_teachers_search', $school->id)}}" method="post">
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
                       @foreach ($teachers as$key => $teacher)

                       <tr>
                           <th scope="row">{{$key + 1}}</th>
                           <td>{{$teacher->name}}</td>
                           <td>{{$teacher->email}}</td>
                           <td>{{$teacher->status}}</td>
                           <td><a class="btn btn-block btn-lg btn-warning waves-effect">edit</a></td>
                           <td><a class="btn btn-block btn-lg btn-danger waves-effect">delete</a></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-block btn-lg btn-success waves-effect" href="{{route('teachers.create' ,['id' => $school->id] )}}">Add Teacher</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
