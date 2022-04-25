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
                            Seafarer One <br> Stop Services
                        </h1>
                        <p class="mb-4 header-subtitle"data-aos="fade-right">
                            Easy, Transparent, Reliable <br>
                            Stop Worriying, Start Sailing
                        </p>
                    </div>
                    <div class="col d-none d-sm-block">
                        <img width="500" src="{{ asset('/images/logo.png')}}" alt="company logo" class="w-30" data-aos="fade-left">
                    </div>
                </div>
            </div>
        </section>
        <!-- end header -->

        <section class="sea-service align-self-center">
            <div class="container">
                <div class="row justify-content-center">
                    <h1 class="service-title mt-4 mb-4"  data-aos="fade-up">Our Services</h1>
                </div>
            </div>

            <div class="row">
                <div class="container">

                    <div class="row justify-content-center">

                        <div class="col-lg-3 col-md-3 col-sm-10 col-10">
                            <div class="p-2 mb-5 shadow card bg-body">
                                <div class="card-body">
                                    <h5 class="dashboard-card-title">Crewing Assitancy</h5>
                                    <p class="dashboard-card-subtitle">
                                        Career consultation and job opportunities without worry and hassle
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-10 col-10">
                            <div class="p-2 mb-5 shadow card bg-body">
                                <div class="card-body">
                                    <h5 class="dashboard-card-title">Document Assistancy</h5>
                                    <p class="dashboard-card-subtitle">
                                        Complete the education program and get a certificate from us
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-10">
                            <div class="p-2 mb-5 shadow card bg-body">
                                <div class="card-body">
                                    <h5 class="dashboard-card-title">Career Consultancy</h5>
                                    <p class="dashboard-card-subtitle">
                                        at International Hotels Malaysia, Singapore, China, Maldives, Thailand
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
@endsection
