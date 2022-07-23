@extends('Admin.masterpage.master')
@section('title')
    Admin||schools
@endsection
@section('con')
<div class="container-fluid">
<div> <h1>{{$school->name }} School </h1></div>
<div class="row">
    <a href="{{route('admin.school_show_teachers' , $school->id)}}">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-teal hover-expand-effect">
            <div class="icon">
                <i class="material-icons">person</i>
            </div>
            <div class="content">
                <div class="text">Teachers </div>
                <div class="number">{{$teachers}}</div>
            </div>
        </div>
    </div>
    </a>
    <a href="{{route('admin.school_show_students' , $school->id)}}">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-green hover-expand-effect">
            <div class="icon">
                <i class="material-icons">school</i>
            </div>
            <div class="content">
                <div class="text">Student</div>
                <div class="number">{{$students}}</div>
            </div>
        </div>
    </div>
    </a>
    <a href="{{route('admin.school_show_classrooms' , $school->id)}}">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-light-green hover-expand-effect">
            <div class="icon">
                <i class="material-icons">local_library</i>
            </div>
            <div class="content">
                <div class="text">classrooms</div>
                <div class="number">{{$classrooms}}</div>
            </div>
        </div>
    </div>
    </a>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-lime hover-expand-effect">
            <div class="icon">
                <i class="material-icons">person_pin</i>
            </div>
            <div class="content">
                <div class="text">Manager</div>
                <div class="number">{{$managers}}</div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
