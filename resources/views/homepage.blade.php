@extends('layout.main')

@section('content')
<section id="hero" class="position-relative overflow-hidden py-4" style="background: url(images/banner-img.png)">
    <div class="container py-5 mt-5">
        <div class="row align-items-center py-5 mt-5">
            <div class="col-md-6 mb-5 mb-md-0">
                <h6 class="text-white">JOB MATCHING</h6>
                <h2 class="text-white fw-bold display-2">
                    Your Future, Your Choice
                </h2>
                <p class="text-white">
                    Explore a dynamic world of job opportunities tailored just for
                    you. Elevate your career journey with personalized job matching
                    and discover the perfect fit for your professional aspirations.
                    Unleash your potential with our intelligent job matching platform.
                </p>
            </div>
            <div class="col-md-5 offset-md-1">
                <form class="hero-form p-5">
                    <h3>Lets started</h3>
                    <div class="d-grid">
                        <a href="/form" class="btn btn-primary btn-lg">
                            TRY NOW
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="services" class="my-5 pt-5">
    <div class="container pt-5">
        <h6 class="">Our Services</h6>
        <h2 class=" fw-bold display-4 mb-4">Our advantages</h2>
        <div class="row">
            <div class=" mt-4 col-md-6 col-lg-3">
                <div class="services-components text-center py-5 px-3">
                    <iconify-icon class="services-icon my-2" icon="streamline:ai-technology-spark"></iconify-icon>
                    <h5 class="services-heading mb-3">The latest technology</h5>
                    </p>
                </div>
            </div>
            <div class=" mt-4 col-md-6 col-lg-3">
                <div class="services-components text-center py-5 px-3">
                    <iconify-icon class="services-icon my-2" icon="material-symbols:editor-choice-rounded"></iconify-icon>
                    <h5 class="services-heading mb-3">
                        Guaranteed right choices</h5>
                    </p>
                </div>
            </div>
            <div class=" mt-4 col-md-6 col-lg-3">
                <div class="services-components text-center py-5 px-3">
                    <iconify-icon class="services-icon my-2" icon="mingcute:display-line"></iconify-icon>
                    <h5 class="services-heading mb-3">Attractive UI</h5>
                </div>
            </div>
            <div class=" mt-4 col-md-6 col-lg-3">
                <div class="services-components text-center py-5 px-3">
                    <iconify-icon class="services-icon my-2" icon="ph:bag-fill"></iconify-icon>
                    <h5 class="services-heading mb-3">Many Jobs choices</h5>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="testimonial" class="position-relative py-5">
    <div class="testimonial-pattern-overlay pattern-left position-absolute">
        <img src="{{asset('images/pattern-testimonial.png')}}" alt="pattern" />
    </div>
    <div class="testimonial-pattern-overlay pattern-right position-absolute">
        <img src="{{asset('images/right-pattern-testimonial.png')}}" alt="pattern" />
    </div>

    <div class="container py-5">
        <h6 class="text-white">Homeowners reviews</h6>
        <h2 class="text-white fw-bold display-4 mb-4">Our happy customers</h2>

        <div class="swiper testimonial-swiper mb-4">
            <div class="swiper-wrapper">
                <div class="swiper-slide testimonial-content p-5">
                    <p>
                        “A pellen tesque pretium feugiat vel mobi sagittis lorem habi
                        tasse cursus ipsum quis nec eget facilisis. Quis nibh ut bindum
                        nisl quis placerat proin tortor mattis.”
                    </p>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('images/customer.jpg')}}" alt="image" class="img-fluid" />
                        </div>
                        <div class="col-md-9">
                            <h5>Kelly Garcia</h5>
                            <div class="d-flex">
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide testimonial-content p-5">
                    <p>
                        “A pellen tesque pretium feugiat vel mobi sagittis lorem habi
                        tasse cursus ipsum quis nec eget facilisis. Quis nibh ut bindum
                        nisl quis placerat proin tortor mattis.”
                    </p>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('images/customer.jpg')}}" alt="image" class="img-fluid" />
                        </div>
                        <div class="col-md-9">
                            <h5>Kelly Garcia</h5>
                            <div class="d-flex">
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide testimonial-content p-5">
                    <p>
                        “A pellen tesque pretium feugiat vel mobi sagittis lorem habi
                        tasse cursus ipsum quis nec eget facilisis. Quis nibh ut bindum
                        nisl quis placerat proin tortor mattis.”
                    </p>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('images/customer.jpg')}}" alt="image" class="img-fluid" />
                        </div>
                        <div class="col-md-9">
                            <h5>Kelly Garcia</h5>
                            <div class="d-flex">
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide testimonial-content p-5">
                    <p>
                        “A pellen tesque pretium feugiat vel mobi sagittis lorem habi
                        tasse cursus ipsum quis nec eget facilisis. Quis nibh ut bindum
                        nisl quis placerat proin tortor mattis.”
                    </p>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('images/customer.jpg')}}" alt="image" class="img-fluid" />
                        </div>
                        <div class="col-md-9">
                            <h5>Kelly Garcia</h5>
                            <div class="d-flex">
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide testimonial-content p-5">
                    <p>
                        “A pellen tesque pretium feugiat vel mobi sagittis lorem habi
                        tasse cursus ipsum quis nec eget facilisis. Quis nibh ut bindum
                        nisl quis placerat proin tortor mattis.”
                    </p>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('images/customer.jpg')}}" alt="image" class="img-fluid" />
                        </div>
                        <div class="col-md-9">
                            <h5>Kelly Garcia</h5>
                            <div class="d-flex">
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                                <iconify-icon icon="ion:star" class="rate pe-1"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination mb-5"></div>
    </div>
</section>

<section id="blog" class="my-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-3">
                <div class="mb-3">
                    <h6 class="">Our Recomendations</h6>
                    <h2 class="fw-bold display-4 mb-3">Job Finder Platforms</h2>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="mb-3">
                    <a href="https://www.jobstreet.co.id"><img src="{{asset('images/blog1.jpg')}}" alt="image" class="img-fluid" /></a>
                    <h6 class="my-3">Posted by: Admin</h6>
                    <a href="https://www.jobstreet.co.id" class="text-decoration-none">
                        <h5 class="mb-3">Jobstreet.co.id</h5>
                    </a>
                    <p>
                        Search jobs & career advice with JobStreet. Find job vacancies across Singapore, Malaysia, Philippines, Indonesia & Vietnam.
                    </p>
                    <a href="https://www.jobstreet.co.id" class="btn btn-primary mt-3 mb-5">Websites</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="mb-3">
                    <a href="https://glints.com/id"><img src="{{asset('images/blog2.jpg')}}" alt="image" class="img-fluid" /></a>
                    <h6 class="my-3">Posted by: Admin</h6>
                    <a href="https://glints.com/id" class="text-decoration-none">
                        <h5 class="mb-3">Glints.com</h5>
                    </a>
                    <p>
                        Explore internships, graduate jobs & career development resources on Glints. Do what you love on our career discovery & development platform.
                    </p>
                    <a href="https://glints.com/id" class="btn btn-primary mt-3 mb-5">Websites</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="mb-3">
                    <a href="https://www.kalibrr.id/"><img src="{{asset('images/blog3.jpg')}}" alt="image" class="img-fluid" /></a>
                    <h6 class="my-3">Posted by: Admin</h6>
                    <a href="https://www.kalibrr.id/" class="text-decoration-none">
                        <h5 class="mb-3">Kalibrr.id</h5>
                    </a>
                    <p>
                        Find your dream career with Kalibrr online job search platform, discover the opportunity of working aboard with AI Powered search.
                    </p>
                    <a href="https://www.kalibrr.id/" class="btn btn-primary mt-3 mb-5">Websites</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection