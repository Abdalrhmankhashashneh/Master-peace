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
                    <h2>School edit </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" novalidate="novalidate" action="{{route('admin.school_store')}}" >
                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line error">
                                <input type="text" class="form-control" required="" aria-required="true" aria-invalid="true" value="" name="school_name">
                                <label class="form-label">Name</label>
                            </div>
                            <label id="name-error" class="error" for="name">This field is required.</label>
                            <div class="switch">
                                <label class="control-label">Status</label>
                                <label><input type="checkbox" checked><span class="lever switch-col-green"></span></label>
                            </div>
                        </div>
                        <input type="hidden" name="status" value="2">
                        <button class="btn btn-primary waves-effect" type="submit">Add School</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
