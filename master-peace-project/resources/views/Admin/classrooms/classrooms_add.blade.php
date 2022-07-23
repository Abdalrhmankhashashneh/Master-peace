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

                <div class="body">
                    <form id="form_validation" method="POST" novalidate="novalidate" action="{{route('classrooms.store')}}" >
                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line error">
                                <input type="text" class="form-control" required="" aria-required="true" aria-invalid="true" value="" name="name">
                                <label class="form-label">Name</label>
                            </div>

                            <label id="name-error" class="error" for="name">This field is required.</label>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="limit" required="" aria-required="true">
                                <label class="form-label">Limits</label>
                            </div>
                            <div class="help-info">Numbers only</div>
                        </div>




                        <div class="form-group form-float">
                            <div class="switch">
                                <label class="control-label">Status</label>
                                <label><input type="checkbox" checked><span class="lever switch-col-green"></span></label>
                            </div>
                        </div>

                        <input type="hidden" name="status" value="1" >
                        @if($school_classroom == "1")
                        <input type="hidden" name="school_id" value="{{$school->id }}" >
                        @else
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <select name="school_id">
                                    @foreach($schools as $s)
                                        <option value="{{$s->id}}">{{$s->name}}</option>
                                    @endforeach
                                </select>
                                <label class="form-label">School</label>
                            </div>
                        @endif

                        <button class="btn btn-primary waves-effect" type="submit">Add classroom</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
