@extends('Admin.masterpage.master')

@section('title')
    Raqib profile
@endsection

@section('name')
    {{ $student->name }}
@endsection

@section('email')
    {{ $student->email }}
@endsection

@section('con')
    hello student {{ $student->name }} <br>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="submit" value="logout">
    </form>
@endsection
