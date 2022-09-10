@extends('Admin.masterpage.master')

@section('title')
    Raqib Login
@endsection

@section('name')
    {{ $teacher->name }}
@endsection

@section('email')
    {{ $teacher->email }}
@endsection
@section('links')
    <li class="active">
        <a href="{{ route('students.index') }}">
            <i class="material-icons">people</i>
            <span>Students </span>
        </a>
    </li>
@endsection
@section('con')
    hello teacher {{ $teacher->name }} <br>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="submit" value="logout">
    </form>
@endsection
