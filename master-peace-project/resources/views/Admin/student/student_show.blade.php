@extends('Admin.masterpage.master')
@section('title')
    Admin||Students
@endsection
@section('con')
<div class="container-fluid">

    <nav>
        <ul class="pager">
            <li class="previous">
                <a href="{{route('students.index')}}" class="waves-effect"><span aria-hidden="true">←</span> Back </a>
            </li>

        </ul>
    </nav>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        {{$student->name}}
                        <small>this table for student info </small>
                    </h2>

                </div>
                <div class="body table-responsive">


                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>School</th>
                                <th>Teacher</th>
                                <th>Class</th>
                                <th> topic </th>
                            </tr>
                        </thead>
                        <tbody>
                       @for ($i = 0; $i < $info['counter']; $i++)


                       <tr>
                           <th scope="row">{{$i + 1 }}</th>
                           <td>{{$school->name}}</td>
                           <td>{{$info['teachers'][$i]['name']}}</td>
                           <td>{{$info['classrooms'][$i]['name']}}</td>
                           <td>{{$info['courses'][$i]['name']}}</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
