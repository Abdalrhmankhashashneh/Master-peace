@extends('masterpage.master')
@section('title')
    Raqib Login
@endsection
@section('style')
<style>

.g-0{
    display: flex;
    width: 100%;
    min-height: 70vh;
    justify-content: center;
    align-items: center;

}
form{
    display: flex;
    width: 50%;
    flex-direction: column;
    justify-content: center;
    align-items: center;

}
img{
    display: flex;
    width: 100px;

    justify-content: center;
    align-items: center;

}
</style>
@endsection
@section('content')

<div class="bg-light rounded">
    <div class="row g-0">
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

                         <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                        </div>

                    </div>
                </form>



    </div>
</div>

@endsection
