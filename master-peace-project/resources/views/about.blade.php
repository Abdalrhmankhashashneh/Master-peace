@extends('masterpage.master')
@section('title')
    Home
@endsection
@section('content')
    <!-- Page Header End -->
    <div class="container-xxl py-5 page-header position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-4">Learn More About Our Work And Our Cultural Activities</h1>
                    <p>made with a lot of effort and searching to boost the efficiency of our
                        schools , and to give the parents a tool to keep updated with their children's , their skills ,
                        activities , homeworks . also involved in the ideas of many projects that seek to provide
                        different services, and a major contributor to the establishment of these projects and their
                        development into reality on the ground.</p>
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="">Read More</a>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle flex-shrink-0" src="{{ asset('img/user.png ') }}" alt=""
                                    style="width: 45px; height: 45px;">
                                <div class="ms-3">
                                    <h6 class="text-primary mb-1">Abd-Alrhman khashahsneh</h6>
                                    <small>CEO & Founder</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-fluid w-75 rounded-circle bg-light p-3" src="{{ asset('img/about-1.jpg ') }} "
                                alt="">
                        </div>
                        <div class="col-6 text-start" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{ asset('img/about-2.jpg ') }}"
                                alt="">
                        </div>
                        <div class="col-6 text-end" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{ asset('img/about-3.jpg ') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">CEO & Founder</h1>

            </div>
            <div class="row g-4">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded-circle w-75" src="{{ asset('img/team-2.jpg') }}" alt="">
                        <div class="team-text text-center">
                            <h3>Abd-Alrhman Khashashneh</h3>
                            <p>Full Stack WebDevloper</p>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary  mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary  mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 d-flex flex-column justify-content-center p-5">

                        <p class="mb-4">A full stack web developer , with a abcelores degree in computer science , The
                            owner of Raqib Idea , made with a lot of effort and searching to boost the efficiency of our
                            schools , and to give the parents a tool to keep updated with their children's , their skills ,
                            activities , homeworks . also involved in the ideas of many projects that seek to provide
                            different services, and a major contributor to the establishment of these projects and their
                            development into reality on the ground.
                        </p>
                        <a target=”_blank” class="btn btn-primary py-3 px-5"
                            href="https://abdalrhmankhashashneh.github.io/Portfolio/">
                            Check CV <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
