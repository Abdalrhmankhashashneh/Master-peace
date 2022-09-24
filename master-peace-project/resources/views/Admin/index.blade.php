@extends('Admin.masterpage.master')
@section('title')
    Admin||Home
@endsection
@section('content')
@endsection
@section('con')
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">playlist_add_check</i>
                    </div>
                    <div class="content">
                        <div class="text">Schools</div>
                        <div class="number count-to" data-from="0" data-to="{{ $schools }}" data-speed="15"
                            data-fresh-interval="20">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">help</i>
                    </div>
                    <div class="content">
                        <div class="text">Students</div>
                        <div class="number count-to" data-from="0" data-to="{{ $students }}" data-speed="1000"
                            data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">forum</i>
                    </div>
                    <div class="content">
                        <div class="text">Teachers</div>
                        <div class="number count-to" data-from="0" data-to="{{ $teachers }}" data-speed="1000"
                            data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text">managers</div>
                        <div class="number count-to" data-from="0" data-to="{{ $managers }}" data-speed="1000"
                            data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->



        <div class="row clearfix">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @foreach ($contacts as $contact)
                @if ($contact->status != 0)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="header bg-red">
                                <h2>
                                    {{ $contact->name }} <small>{{ $contact->email }}</small>
                                </h2>

                            </div>
                            <div class="body">
                                {{ $contact->description }}

                            </div>
                            <a href="{{ route('contact_change', $contact->id) }}" class="btn btn-success ml-2">done</a>

                        </div>
                    </div>
                @endif
            @endforeach
            @foreach ($contacts as $contact)
                @if ($contact->status == 0)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="header bg-green">
                                <h2>
                                    {{ $contact->name }} <small>{{ $contact->email }}</small>
                                </h2>

                            </div>
                            <div class="body">
                                {{ $contact->description }}
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    </div>




    </div>
@endsection
