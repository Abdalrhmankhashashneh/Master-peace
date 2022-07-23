@extends('Admin.masterpage.master')
@section('title')
    Admin||schools
@endsection
@section('con')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">

                <div class="body">
                    <form id="form_validation" method="POST" novalidate="novalidate" action="{{route('classrooms.update' , $classroom)}}" >
                        @csrf
                        @method('PUT')
                        <div class="form-group form-float">
                            <div class="form-line error">
                                <input type="text" class="form-control" required="" aria-required="true" aria-invalid="true" value="{{$classroom->name}}" name="name">
                                <label class="form-label">Name</label>
                            </div>

                            <label id="name-error" class="error" for="name">This field is required.</label>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="limit" required="" aria-required="true" value="{{$classroom->limit}}">
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
                        <input type="hidden" name="school_id" value="{{ $classroom->school_id }}" >


                        <button class="btn btn-primary waves-effect" type="submit">Edit Classroom</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
