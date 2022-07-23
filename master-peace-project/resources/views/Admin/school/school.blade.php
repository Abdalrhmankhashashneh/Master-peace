@extends('Admin.masterpage.master')
@section('title')
    Admin||schools
@endsection
@section('con')
<div class="container-fluid">
    <nav>
        <ul class="pager ">
            <li class="previous">
                <a href="{{route('admin.index')}}" class="waves-effect"><span aria-hidden="true">←</span> Back </a>
            </li>

        </ul>
    </nav>
    <div class="block-header">
        <h1 class="align-center"> Schools </h1>
    </div>

    @if($schools->count() > 0 )
    <div class="row clearfix">
    @foreach($schools as $school)
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>
                        {{$school->name}} <small>Description text here...</small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{{route('admin.school_show',$school->id)}}" class="btn btn-block btn-lg btn-sucssess waves-effect">open</a></li>
                                <li><a href="{{route('admin.school_edit',$school->id)}}" class="btn btn-block btn-lg btn-sucssess waves-effect">edit</a></li>
                                <li><form class=" waves-effect waves-block" action="{{route('admin.school_delete' , $school->id)}}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                <input class="btn btn-block btn-lg btn-danger waves-effect" type="submit"  value="Delete" >
                                </form></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                </div>
            </div>
        </div>
        @endforeach
    </div>
@else
<div class="alert bg-pink alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    Lorem ipsum dolor sit amet, id fugit tollit pro, illud nostrud aliquando ad est, quo esse dolorum id
</div>
@endif
<div class="row clearfix align-center">


        <a href="{{route('admin.school_add')}}">
        <button type="button" class="btn bg-pink waves-effect">
            <i class="material-icons">report_problem</i>
            <span>Add School </span>
        </button>
        </a>
    </div>
@endsection
