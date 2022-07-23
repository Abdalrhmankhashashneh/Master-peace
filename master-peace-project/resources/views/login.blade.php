@extends('masterpage.master')
@section('title')
    Raqib Login
@endsection
@section('style')
<style>

.g-0{
    display: flex;
    width: 100%;
    min-height: 40vh;
    justify-content: center;
    align-items: center;

}
.sss{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 75vh ;

}
form{
    display: flex;
    width: 50%;
    flex-direction: column;
    justify-content: center;
    align-items: center;

}
.img_c{
display: flex;
    width: 100%;
    height:15vh;
    justify-content: center;
margin-bottom: 15px;
}
</style>
@endsection
@section('s')
@php
$s ="off"
@endphp

@endsection
@section('content')

<div class="bg-light rounded sss">
    <div class="row g-0">
        <div class="img_c">
            <img src="{{asset('raqib_logo.png')}}" alt="">
        </div>
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                    <div class="row g-3">

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control border-0" id="email" placeholder="Email" name="email">
                                <label for="Email">Email</label>
                            </div>
                        </div>
                        <div class="col-12">

                         <div class="col-12">
                            <div class="form-floating">
                                <input type="password" class="form-control border-0" id="password" placeholder="Password" name="password">
                                <label for="password">Password</label>
                            </div>
                         </div>

                         <div class="col-12 mb-2">
                            <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                        </div>

                    </div>
                </form>



    </div>
</div>
</div>
@endsection
