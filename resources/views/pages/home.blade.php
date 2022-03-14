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
                        <h1 class="mb-4 header-title">
                            Seafarer One Stop Services
                        </h1>
                        <p class="mb-4 header-subtitle">
                            One Way to connect to your dreams job
                        </p>
                        <a class="btn btn-primary" href="#" role="button">Join Now</a>
                    </div>
                    <div class="col d-none d-sm-block">
                        <img width="600" src="images/logososs.png" alt="" class="w-30" data-aos="fade-left">
                    </div>
                </div>
            </div>
        </section>
        <!-- end header -->

        <!-- Reached -->
        {{-- <section class="reached pt-50 pb-50">
            <div class="container-fluid">
                <div class="gap-4 d-flex flex-lg-row flex-column align-items-center justify-content-center gap-lg-5">
                    <div class="me-lg-35">
                        <p class="m-0 text-center reached-title text-lg-start color-palette-1 fw-bold">487</p>
                        <p class="m-0 text-center reached-text text-lg-start color-palette-2">Students</p>
                    </div>
                    <div class="vertical-line me-lg-35 ms-lg-35 d-lg-block d-none"></div>
                    <div class="mt-6 mb-6 horizontal-line me-lg-35 ms-lg-35 d-lg-none d-block"></div>
                    <div class="me-lg-35 ms-lg-35">
                        <p class="m-0 text-center reached-title text-lg-start color-palette-1 fw-bold">96</p>
                        <p class="m-0 text-center reached-text text-lg-start color-palette-2">Best Graduate</p>
                    </div>
                    <div class="mt-6 mb-6 horizontal-line me-lg-35 ms-lg-35 d-lg-none d-block"></div>
                    <div class="vertical-line me-lg-35 ms-lg-35 d-lg-block d-none"></div>
                    <div class="me-lg-35 ms-lg-35">
                        <p class="m-0 text-center reached-title text-lg-start color-palette-1 fw-bold">100+</p>
                        <p class="m-0 text-center reached-text text-lg-start color-palette-2">partnership</p>
                    </div>
                    <div class="mt-6 mb-6 horizontal-line me-lg-35 ms-lg-35 d-lg-none d-block"></div>
                    <div class="vertical-line me-lg-35 ms-lg-35 d-lg-block d-none"></div>
                    <div class="me-lg-35 ms-lg-35">
                        <p class="m-0 text-center reached-title text-lg-start color-palette-1 fw-bold">20+</p>
                        <p class="m-0 text-center reached-text text-lg-start color-palette-2">Countries</p>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- Testimoni -->
        {{-- <section class="student-testimonies">
            <div class="container">
                <h3 class="mb-4 font-weight-500">Testimoni Siswa</h3>
                <div id="carouselTestimonies" class="carousel slide dcd-light-shadow" data-ride="carousel">
                    <a class="carousel-control-prev" href="#carouselTestimonies" role="button" data-slide="prev" aria-label="Previous Testimony">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselTestimonies" role="button" data-slide="next" aria-label="Next Testimony">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <ol class="carousel-indicators">
                                            <li data-target="#carouselTestimonies" data-slide-to="0" class=""></li>
                                            <li data-target="#carouselTestimonies" data-slide-to="1" class=""></li>
                                            <li data-target="#carouselTestimonies" data-slide-to="2" class=""></li>
                                            <li data-target="#carouselTestimonies" data-slide-to="3" class=""></li>
                                            <li data-target="#carouselTestimonies" data-slide-to="4" class="active"></li>
                                    </ol>

                    <div class="carousel-inner">
                            <div class="carousel-item">
                                <div class="border-0 card borderless">
                                    <div class="p-0 row card-body testimony-content">
                                        <img src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-testimony-emrycho-cj.png" data-original="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-testimony-emrycho-cj.png" alt="Emrycho C.J. Simanungkalit" class="lazy col-md-5" width="445" height="390" style="display: block;">
                                        <noscript>
                                            <img src='https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-testimony-emrycho-cj.png' class='noscript noscript-img' alt='Emrycho C.J. Simanungkalit' class='lazy col-md-5' width='445' height='390'>
                                        </noscript>
                                        <div class="pr-0 col-lg-7 col-md-7 col-sm-12">
                                            <div class="p-4 p-lg-5">
                                                <div class="js-balanced-testimonies">
                                                    <p class="mb-4 font-weight-500">“Saya khusus mendedikasikan waktu saya untuk belajar ngoding. Di Dicoding belajarnya step by step, library-nya up-to-date. Kalau ada eror, nggak bingung. Di sini saya juga belajar untuk nggak asal coding. CV pun jadi bagus. Saya jadi percaya diri.”</p>
                                                    <small class="font-weight-500">
                                                        Emrycho C.J. Simanungkalit, <br>
                                                        Product Engineer - <b>Gojek</b><br>
                                                        Lulusan Android Developer Learning Path
                                                    </small>
                                                </div>
                                                <hr>
                                                <p class="mr-5 text-right"><a href="https://www.dicoding.com/blog/tips-dapat-tawaran-kerja-di-unicorn/" class="remove-style-link font-weight-bold btn-text-arrow-black">Baca kisahnya</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="border-0 card borderless">
                                    <div class="p-0 row card-body testimony-content">
                                        <img src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-testimony-said-faisal.png" data-original="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-testimony-said-faisal.png" alt="Said Faisal" class="lazy col-md-5" width="445" height="390" style="display: block;">
                                        <noscript>
                                            <img src='https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-testimony-said-faisal.png' class='noscript noscript-img' alt='Said Faisal' class='lazy col-md-5' width='445' height='390'>
                                        </noscript>
                                        <div class="pr-0 col-lg-7 col-md-7 col-sm-12">
                                            <div class="p-4 p-lg-5">
                                                <div class="js-balanced-testimonies">
                                                    <p class="mb-4 font-weight-500">“Join Dicoding! Banyak sekali materi yang bagus di sini. Pengalaman saya, dengan kelas Android di Dicoding saya jadi PD untuk ambil bidang Android di Tokopedia dan disetujui. Bahkan sebelum wisuda kuliah, saya telah berhasil lulus seleksi dan diterima kerja di unicorn tersebut."</p>
                                                    <small class="font-weight-500">
                                                        Said Faisal, <br>
                                                        Software Engineer Android - <b>Tokopedia</b><br>
                                                        Lulusan Android Developer Learning Path
                                                    </small>
                                                </div>
                                                <hr>
                                                <p class="mr-5 text-right"><a href="https://www.dicoding.com/blog/said-lulusan-digital-talent-scholarships/" class="remove-style-link font-weight-bold btn-text-arrow-black">Baca kisahnya</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="border-0 card borderless">
                                    <div class="p-0 row card-body testimony-content">
                                        <img src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-testimony-aida-fitryani.png" data-original="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-testimony-aida-fitryani.png" alt="Aida Fitryani" class="lazy col-md-5" width="445" height="390" style="display: block;">
                                        <noscript>
                                            <img src='https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-testimony-aida-fitryani.png' class='noscript noscript-img' alt='Aida Fitryani' class='lazy col-md-5' width='445' height='390'>
                                        </noscript>
                                        <div class="pr-0 col-lg-7 col-md-7 col-sm-12">
                                            <div class="p-4 p-lg-5">
                                                <div class="js-balanced-testimonies">
                                                    <p class="mb-4 font-weight-500">“Aplikasi karya saya &amp; tim di kantor sudah go-internasional. “Fueru” kini dinikmati puluhan ribu user Jepang. Salah satu bekalnya, sertifikasi Dicoding. Dengan belajar di sini, saya jadi tahu level skill coding saya. Materi ajar sangat lengkap. Fitur code review membuat saya paham bagian mana yang perlu ditingkatkan dari kode saya.”</p>
                                                    <small class="font-weight-500">
                                                        Aida Fitryani, <br>
                                                        Developer - <b>PT Mirai International Indonesia</b><br>
                                                        Lulusan Front-end Web Developer Learning Path
                                                    </small>
                                                </div>
                                                <hr>
                                                <p class="mr-5 text-right"><a href="https://www.dicoding.com/blog/talenta-digital-indonesia-go-internasional/" class="remove-style-link font-weight-bold btn-text-arrow-black">Baca kisahnya</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="border-0 card borderless">
                                    <div class="p-0 row card-body testimony-content">
                                        <img src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-testimony-arie-may-wibowo.png" data-original="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-testimony-arie-may-wibowo.png" alt="Arie May Wibowo" class="lazy col-md-5" width="445" height="390" style="display: block;">
                                        <noscript>
                                            <img src='https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-testimony-arie-may-wibowo.png' class='noscript noscript-img' alt='Arie May Wibowo' class='lazy col-md-5' width='445' height='390'>
                                        </noscript>
                                        <div class="pr-0 col-lg-7 col-md-7 col-sm-12">
                                            <div class="p-4 p-lg-5">
                                                <div class="js-balanced-testimonies">
                                                    <p class="mb-4 font-weight-500">“Yang kudapat dari kelas Dicoding adalah teknik belajar yang terstruktur dan komunitasnya yang bagus. Dalam waktu 2 tahun, Dicoding jadi salah satu andalanku dalam mempersiapkan diri demi  pindah karir. Sebelumnya geolog di perusahaan migas, kini aku lead developer di bank nasional!”</p>
                                                    <small class="font-weight-500">
                                                        Arie May Wibowo, <br>
                                                        Lead Front-end Developer - <b>Bank CIMB Niaga</b><br>
                                                        Lulusan Android Developer Learning Path
                                                    </small>
                                                </div>
                                                <hr>
                                                <p class="mr-5 text-right"><a href="https://www.dicoding.com/blog/3-rahasia-pindah-karir-developer/" class="remove-style-link font-weight-bold btn-text-arrow-black">Baca kisahnya</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <div class="border-0 card borderless">
                                    <div class="p-0 row card-body testimony-content">
                                        <img src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-testimony-fiorent-nicholas-yehardi.png" data-original="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-testimony-fiorent-nicholas-yehardi.png" alt="Fiorent Nicholas Yehardi" class="lazy col-md-5" width="445" height="390" style="display: block;">
                                        <noscript>
                                            <img src='https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-testimony-fiorent-nicholas-yehardi.png' class='noscript noscript-img' alt='Fiorent Nicholas Yehardi' class='lazy col-md-5' width='445' height='390'>
                                        </noscript>
                                        <div class="pr-0 col-lg-7 col-md-7 col-sm-12">
                                            <div class="p-4 p-lg-5">
                                                <div class="js-balanced-testimonies">
                                                    <p class="mb-4 font-weight-500">“Mengandalkan kuliah saja, tidak cukup. Dengan Dicoding, saya mantap tinggalkan dunia gaming  lantas belajar dunia Android yang ternyata menyenangkan. Yang nomor satu, Dicoding mengajarkan ilmu berorientasi kerja. Kini saya sangat terbantu dalam karir saya.”</p>
                                                    <small class="font-weight-500">
                                                        Fiorent Nicholas Yehardi, <br>
                                                        Android Developer - <b>Nusantara Beta Studio</b><br>
                                                        Lulusan Android Developer Learning Path
                                                    </small>
                                                </div>
                                                <hr>
                                                <p class="mr-5 text-right"><a href="https://www.dicoding.com/blog/bangkit-dari-keterpurukan-dengan-belajar-android/" class="remove-style-link font-weight-bold btn-text-arrow-black">Baca kisahnya</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                                    </div>
                </div>

                <a href="https://www.dicoding.com/story" target="_blank" class="float-right my-4 remove-style-link font-weight-bold">
                    Lihat semua
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-2" style="margin-top: -5px"> <path d="M18 13V19C18 19.5304 17.7893 20.0391 17.4142 20.4142C17.0391 20.7893 16.5304 21 16 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V8C3 7.46957 3.21071 6.96086 3.58579 6.58579C3.96086 6.21071 4.46957 6 5 6H11" stroke="#2D3E50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15 3H21V9" stroke="#2D3E50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M10 14L21 3" stroke="#2D3E50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </svg>
                </a>
            </div>
        </section> --}}

        <section class="seaedu">
            <div class="container">
                <!--<h2 class="section-seaedu-title">Apa itu Sea Education?</h2>
                <span class="section-seaeducation-line"></span>
                <p class="mx-auto text-center text-secondary w-75">
                Sea Education adalah sekolah kapal pesiar yang menjamin para alumni untuk dapat bekerja di kapal pesiar atau hotel bintang 5. Mengingat banyaknya peminat Sea Education, maka kami kini hadir di 3 kota besar yaitu Jakarta, Medan, dan Bali.
                </p>-->

                <h2 class="mt-4 text-center section-seaedu-title2">Our Services</h2>
                <span class="section-seaeducation-line"></span>
            </div>

        <div class="row align-content-center">
            <div class="col-lg-3 col-12">
            <div class="p-2 mb-5 shadow card seaedu-card bg-body">
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

            <div class="col-lg-3 col-12">
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

            <div class="col-lg-3 col-12">
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
    </div>
@endsection
