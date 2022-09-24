@extends('masterpage.master')
@section('title')
    Home
@endsection
@section('content')
    <!-- Page Header End -->
    <div class="container-fluid py-5 page-header position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Schools</h1>

        </div>
    </div>
    <!-- Page Header End -->


    <!-- Classes Start -->
    <div class="container-fluid py-5">
        <div class="container-fluid">
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Schools</h1>
                <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod
                    sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="row g-4">
                @foreach ($schools as $school)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">

                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('img/classes-1.png') }}" alt="">
                            </div>


                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">{{ $school->name }} </a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">

                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">{{ $school->des }}</h6>

                                        </div>
                                    </div>

                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Age:</h6>
                                            <small>3-5 Years</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Time:</h6>
                                            <small>9-10 AM</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Capacity:</h6>
                                            <small>{{ $school->limits }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Classes End -->


    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">

                            <h1 class="mb-4">Join our comminty now </h1>
                            <form method="POST" action="{{ route('contact') }}">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-sm-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="gname"
                                                placeholder="Gurdian Name" name="name" required>
                                            <label for="gname">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" id="gmail"
                                                placeholder="Gurdian Email" name="email" required email>
                                            <label for="gmail"> Email</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px"
                                                name="description" required maxlength="150" minlength="10"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded" src="{{ asset('img/appointment.jpg') }}"
                                style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Our Clients Say!</h1>
                <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod
                    sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-5">
                    <p class="fs-5">Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor
                        amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testimonial-1.jpg') }}"
                            style="width: 90px; height: 90px;">
                        <div class="ps-3">
                            <h3 class="mb-1">Client Name</h3>
                            <span>Profession</span>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-5">
                    <p class="fs-5">Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor
                        amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testimonial-2.jpg ') }}"
                            style="width: 90px; height: 90px;">
                        <div class="ps-3">
                            <h3 class="mb-1">Client Name</h3>
                            <span>Profession</span>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-5">
                    <p class="fs-5">Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor
                        amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testimonial-3.jpg ') }}"
                            style="width: 90px; height: 90px;">
                        <div class="ps-3">
                            <h3 class="mb-1">Client Name</h3>
                            <span>Profession</span>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial End -->
@endsection
