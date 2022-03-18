@extends('layouts.app')

@section('title')
    Seafarer Services Homepage
@endsection


@section('content')
    <div class="page-content page-home">
        <!-- header -->
        <section class="sea-header" data-aos="fade-down">
            <div class="container">
                <div class="row">
                    <div class="col align-self-center">
                        <h1 class="mb-3 header-title" data-aos="fade-right">
                            Seafarer One Stop Services
                        </h1>
                        <p class="mb-4 header-subtitle"data-aos="fade-right">
                            Easy, Transparent, Reliable <br>
                            Stop Worriying, Start Sailing
                        </p>
                    </div>
                    <div class="col d-none d-sm-block">
                        <img width="500" src="images/logososs.png" alt="" class="w-30" data-aos="fade-left">
                    </div>
                </div>
            </div>
        </section>
        <!-- end header -->

        <section class="services-section align-self-center">
            <div class="container">
                <div class="row">
                    <h1 class="mt-4 text-center section-seaedu-title2">Our Services</h1>
                </div>
            </div>

            <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-10 col-10">
                        <div class="p-2 mb-5 shadow card bg-body">
                            <div class="seaedu-card__img">
                                <img src="{{ url('frontend/assets/consultancy.png') }}" alt="" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-seaedu-title">Crewing Assitancy</h5>
                                <p class="card-seatext">
                                    Career consultation and job opportunities without worry and hassle
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-10 col-10">
                        <div class="p-2 mb-5 shadow card seaedu-card bg-body">
                            <div class="seaedu-card__img">
                                <img src="{{ url('frontend/assets/certificate.png') }}" alt="" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-seaedu-title">Document Assistancy</h5>
                                <p class="card-seatext">
                                    Complete the education program and get a certificate from us
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-10">
                        <div class="p-2 mb-5 shadow card seaedu-card bg-body">
                            <div class="seaedu-card__img">
                                <img src="{{ url('frontend/assets/training.png') }}" alt="" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-seaedu-title">Career Consultancy</h5>
                                <p class="card-seatext">
                                    at International Hotels Malaysia, Singapore, China, Maldives, Thailand, etc and get paid
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
@endsection
