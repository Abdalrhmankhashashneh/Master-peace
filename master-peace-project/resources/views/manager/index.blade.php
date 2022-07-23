@extends('Admin.masterpage.master')
@section('title')
    Raqib Login
@endsection
@section('name')
{{$manager->name }}
@endsection
@section('email')
{{$manager->email }}
@endsection
@section('con')

hello manager {{$manager->name }} <br>
    <a href="">logout</a>
@endsection
