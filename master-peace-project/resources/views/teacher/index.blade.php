@extends('Admin.masterpage.master')

@section('title')
    Raqib Login
@endsection

@section('name')
{{$teacher->name }}
@endsection

@section('email')
{{$teacher->email }}
@endsection

@section('con')
hello teacher {{$teacher->name }} <br>
<form action="{{route('logout')}}" method="POST">
    @csrf
    <input type="submit" value="logout">
</form>
@endsection
