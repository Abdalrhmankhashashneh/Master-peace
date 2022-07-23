@extends('Admin.masterpage.master')

@section('title')
    Raqib Login
@endsection

@section('name')
{{$manager->name }}
@endsection
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

@section('email')
{{$manager->email }}
@endsection

@section('con')
hello manager {{$manager->name }} <br>
<form action="{{route('logout')}}" method="POST">
    @csrf
    <input type="submit" value="logout">
</form>
@endsection
