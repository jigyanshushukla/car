@extends('Front.main')
@section('content')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Cars</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Categories</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- Car categories Start -->
<div class="container-fluid categories py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Vehicle <span class="text-primary">Categories</span></h1>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
            </p>
        </div>
        <div class="categories-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top">
                        <img src="{{asset('assets/img/car-1.png')}}" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Mercedes Benz R3</h4>
                        <div class="categories-review mb-4">
                            <div class="me-3">4.5 Review</div>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-body"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$99:00/Day</h4>
                        </div>
                        <div class="row gy-2 gx-0 text-center mb-4">
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-users text-dark"></i> <span class="text-body ms-1">4 Seat</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-car text-dark"></i> <span class="text-body ms-1">AT/MT</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-gas-pump text-dark"></i> <span class="text-body ms-1">Petrol</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-car text-dark"></i> <span class="text-body ms-1">2015</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-cogs text-dark"></i> <span class="text-body ms-1">AUTO</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-road text-dark"></i> <span class="text-body ms-1">27K</span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top">
                        <img src="{{asset('assets/img/car-2.png')}}" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Toyota Corolla Cross</h4>
                        <div class="categories-review mb-4">
                            <div class="me-3">3.5 Review</div>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-body"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$128:00/Day</h4>
                        </div>
                        <div class="row gy-2 gx-0 text-center mb-4">
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-users text-dark"></i> <span class="text-body ms-1">4 Seat</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-car text-dark"></i> <span class="text-body ms-1">AT/MT</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-gas-pump text-dark"></i> <span class="text-body ms-1">Petrol</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-car text-dark"></i> <span class="text-body ms-1">2015</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-cogs text-dark"></i> <span class="text-body ms-1">AUTO</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-road text-dark"></i> <span class="text-body ms-1">27K</span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top">
                        <img src="{{asset('assets/img/car-3.png')}}" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Tesla Model S Plaid</h4>
                        <div class="categories-review mb-4">
                            <div class="me-3">3.8 Review</div>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-body"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$170:00/Day</h4>
                        </div>
                        <div class="row gy-2 gx-0 text-center mb-4">
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-users text-dark"></i> <span class="text-body ms-1">4 Seat</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-car text-dark"></i> <span class="text-body ms-1">AT/MT</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-gas-pump text-dark"></i> <span class="text-body ms-1">Petrol</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-car text-dark"></i> <span class="text-body ms-1">2015</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-cogs text-dark"></i> <span class="text-body ms-1">AUTO</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-road text-dark"></i> <span class="text-body ms-1">27K</span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top">
                        <img src="{{asset('assets/img/car-4.png')}}" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Hyundai Kona Electric</h4>
                        <div class="categories-review mb-4">
                            <div class="me-3">4.8 Review</div>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$187:00/Day</h4>
                        </div>
                        <div class="row gy-2 gx-0 text-center mb-4">
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-users text-dark"></i> <span class="text-body ms-1">4 Seat</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-car text-dark"></i> <span class="text-body ms-1">AT/MT</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-gas-pump text-dark"></i> <span class="text-body ms-1">Petrol</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-car text-dark"></i> <span class="text-body ms-1">2015</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-cogs text-dark"></i> <span class="text-body ms-1">AUTO</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-road text-dark"></i> <span class="text-body ms-1">27K</span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Car categories End -->

<!-- Car Steps Start -->
<div class="container-fluid steps py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize text-white mb-3">Cental<span class="text-primary"> Process</span></h1>
            <p class="mb-0 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
            </p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="steps-item p-4 mb-4">
                    <h4>Come In Contact</h4>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem!</p>
                    <div class="setps-number">01.</div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="steps-item p-4 mb-4">
                    <h4>Choose A Car</h4>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem!</p>
                    <div class="setps-number">02.</div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="steps-item p-4 mb-4">
                    <h4>Enjoy Driving</h4>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem!</p>
                    <div class="setps-number">03.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Car Steps End -->

<!-- Banner Start -->
<div class="container-fluid banner py-5 wow zoomInDown" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="banner-item rounded">
            <img src="{{asset('assets/img/banner-1.jpg')}}" class="img-fluid rounded w-100" alt="">
            <div class="banner-content">
                <h2 class="text-primary">Rent Your Car</h2>
                <h1 class="text-white">Interested in Renting?</h1>
                <p class="text-white">Don't hesitate and send us a message.</p>
                <div class="banner-btn">
                    <a href="#" class="btn btn-secondary rounded-pill py-3 px-4 px-md-5 me-2">WhatchApp</a>
                    <a href="#" class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- Banner End -->