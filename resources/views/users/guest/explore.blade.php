<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name', 'Orotime Jewelry'))</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/oro.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <div style="background-color: #C5AE7C">
        <div class="container-fluid ps-lg-5 ps-4 py-1">
            <span class="pe-2">
                <a href="http://" class="text-decoration-none text-white">
                    <i data-feather="instagram"></i>
                </a>
            </span>
            <span class="pe-2">
                <a href="http://" class="text-decoration-none text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-tiktok" viewBox="0 0 16 16">
                        <path
                            d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                    </svg>
                </a>
            </span>
            <span class="pe-2">
                <a href="http://" class="text-decoration-none text-white">
                    <i data-feather="facebook"></i>
                </a>
            </span>
        </div>
    </div>
    <main class="main" id="top">

        <div class="booking-hero-header d-flex align-items-center">
            <div class="bg-holder bg-holder overlay bg-opacity-50" style="background-image:url({{ asset('images/orotime-images/Flyer1.jpg') }});">
                <video class="bg-video" autoplay="autoplay" loop="loop" muted="muted" playsinline="playsinline">
                    <source src="{{ asset('video/jewelryvideo.mp4') }}" type="video/mp4" />
                </video>
            </div>
            <div class="container-medium position-relative z-5">
                <h2 class="text-secondary-lighter fs-5 fs-md-3 fw-normal mb-3">What is your referred</h2>
                <h1 class="fs-4 fs-md-1 text-white fw-normal mb-6 overflow-hidden">
                    NOBLE METALS <br>
                    <span class="typed-text text-primary" id="mainTyped"></span>
                </h1>
            </div>
        </div>

        <section class="pt-6 pt-md-10 pb-10">
            <div class="container-medium">
                <div class="bg-holder d-none d-xl-block"
                    style="background-image:url({{ asset('images/orotime-images/exploreMorePage.jpg') }}); background-size: 100% 100% ;background-position:left;">
                </div>
                <div class="bg-holder d-none d-xl-block"
                    style="background-image:url({{ asset('images/orotime-images/exploreMorePage.jpg') }}); background-size: 100% 100% ;background-position:right;">
                </div>
                <div class="row g-3 position-relative">

                    <div class="col-lg-6">
                        <div class="row g-3">

                            <div class="col-md-7">
                                <h4 class="fw-semibold mb-3">Season of</h4>
                                <h2 class="fs-4 fw-bold mb-3 mb-md-4"> Silver &amp; Gold
                                </h2>
                                <p class="mb-3 mb-md-0 text-body-tertiary fw-semibold">
                                    This is the perfect season for gold and silver As autumn's 
                                    warm hues and the upcoming holiday sparkle create a stunning backdrop, 
                                    now is the ideal time to embrace the elegance of gold and the sophistication 
                                    of silver in your designs and decorations.
                                </p>
                            </div>

                            <div class="col-6 col-md-5">
                                <div class="img-zoom-hover position-relative h-100 rounded-3 overflow-hidden">
                                    <a href="{{ route('CategoryProduct', ['cat' => 'new zealand']) }}">
                                        <img class="w-100 h-100 object-fit-cover" src="{{ asset('images/orotime-images/newZealand.jpg') }}" alt="" />
                                    </a>
                                    <div class="backdrop-faded">
                                        <a class="fw-bold fs-7 text-white stretched-link" href="{{ route('CategoryProduct', ['cat' => 'new zealand']) }}">New Zealand</a>
                                        <p class="mb-0 text-white fs-9">17 Golds &amp; 19 Silvers</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-5">
                                <div class="img-zoom-hover position-relative h-100 rounded-3 overflow-hidden">
                                    <a href="{{ route('CategoryProduct', ['cat' => 'japan']) }}">
                                        <img class="w-100 h-100 object-fit-cover" src="{{ asset('images/orotime-images/japan.jpg') }}" alt="" />
                                    </a>
                                    <div class="backdrop-faded">
                                        <a class="fw-bold fs-7 text-white" href="{{ route('CategoryProduct', ['cat' => 'japan']) }}">Japan</a>
                                        <p class="mb-0 text-white fs-9">17 Golds &amp; 19 Silvers</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="img-zoom-hover position-relative h-100 rounded-3 overflow-hidden">
                                    <a href="{{ route('CategoryProduct', ['cat' => 'china']) }}">
                                        <img class="w-100 h-md-100 object-fit-cover" src="{{ asset('images/orotime-images/china.jpg') }}" alt="" height="220" />
                                    </a>
                                    <div class="backdrop-faded">
                                        <a class="fw-bold fs-7 text-white" href="{{ route('CategoryProduct', ['cat' => 'china']) }}">China</a>
                                        <p class="mb-0 text-white fs-9">14 Golds &amp; 19 Silvers</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="d-flex flex-column gap-3 h-100">
                            <div class="img-zoom-hover position-relative h-100 rounded-3 overflow-hidden">
                                <a href="{{ route('CategoryProduct', ['cat' => 'indonesia']) }}">
                                    <img class="w-100 h-lg-100 object-fit-cover" src="{{ asset('images/orotime-images/indonesia.jpg') }}" alt="" height="220" />
                                </a>
                                <div class="backdrop-faded">
                                    <a class="fw-bold fs-7 text-white" href="{{ route('CategoryProduct', ['cat' => 'indonesia']) }}">Indonesia</a>
                                    <p class="mb-0 text-white fs-9">140 Golds &amp; 100 Silvers</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="bg-holder d-none d-md-block"
                style="background-image:url(../../assets/img/bg/bg-left-28.png);background-size:7%;background-position:left 27%;">
            </div>
            <div class="bg-holder d-none d-md-block"
                style="background-image:url(../../assets/img/bg/bg-right-28.png);background-size:16%;background-position:right -25px;">
            </div>
            <div class="container-medium text-center mb-11 position-relative">
                <h3 class="mb-2 text-body-emphasis">Buy more, receive higher discounts!</h3>
                <p class="text-body-tertiary mb-0">
                    Maximize your savings by increasing your purchase quantity and enjoy even greater discounts on every item.
                </p>
            </div>
            <div class="container-medium px-sm-0">
                <div class="swiper-theme-container swiper-slide-nav-top">
                    <div class="row g-0 justify-content-center">
                        <div class="col-sm-11 col-md-8 col-lg-6 col-xl-12">
                            <div class="row gy-5 gx-xl-7 justify-content-between pe-4">
                                <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30" slides-per-view="2" breakpoints='{"320": {"slidesPerView": 1}, "768": {"slidesPerView": 2}, "1024": {"slidesPerView": 4}}'>
                                    @for ($i = 1; $i < 11; $i++)
                                        <swiper-slide>
                                            <div class="position-relative text-decoration-none product-card bg-muted h-100">
                                                <div class="d-flex flex-column justify-content-between h-100">
                                                    <div class="text-start">
                                                        <div class="rounded-3 position-relative mb-3">
                                                            <button class="btn btn-wish btn-wish-primary z-2 d-toggle-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist">
                                                                <span data-feather="heart" style="width: 16px; height: 16px" class="d-block-hover" data-fa-transform="down-1"></span>
                                                                <span data-feather="heart" style="width: 16px; height: 16px" class="d-none-hover" data-fa-transform="down-1"></span>
                                                            </button>
                                                            <img class="img-fluid" src="{{ asset('images/orotime-images/bracelet.jpg') }}" alt="" />
                                                        </div>
                                                        <a class="stretched-link" href="#">
                                                            <h6 class="mb-2 lh-sm line-clamp-3 product-name ps-3">Golder Ring</h6>
                                                        </a>
                                                        <p class="fs-9 ps-3">
                                                            <span data-feather="star" class="text-warning"></span>
                                                            <span data-feather="star" class="text-warning"></span>
                                                            <span data-feather="star" class="text-warning"></span>
                                                            <span data-feather="star" class="text-warning text-warning-light"></span>
                                                            <span data-feather="star" class="text-warning text-warning-light"></span>
                                                            <span class="text-body-quaternary fw-semibold ms-1">(67 people rated)</span>
                                                        </p>
                                                    </div>
                                                    <div class="text-start ps-3">
                                                        <p class="fs-9 fw-bold mb-2">Necklace</p>
                                                        <div class="d-flex align-items-center mb-1">
                                                            <p class="me-2 text-body text-decoration-line-through mb-0">$125.00</p>
                                                            <h3 class="text-body-emphasis mb-0">$89.00</h3>
                                                        </div>
                                                        <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 Available</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </swiper-slide>
                                    @endfor
                                </swiper-container>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-6">
            <div class="bg-holder d-none d-xl-block"
                style="background-image:url(../../assets/img/bg/bg-left-29.png);background-size:auto;background-position:-15%;">
            </div>
            <div class="container-medium position-relative">
                <h3 class="mb-2 text-body-emphasis text-center text-xl-start">Buy more, receive higher discounts!</h3>
                <div class="d-xl-flex justify-content-between mb-5 text-center">
                    <p class="mb-0 text-body-tertiary">Maximize your savings by increasing your purchase quantity and enjoy even greater discounts on every item.</p>
                    <button class="btn btn-link p-0 fs-8"> 
                        View all
                        <span class="fa-solid fa-chevron-right ms-2" data-fa-transform="shrink-3"> </span> 
                    </button>
                </div>
                <div class="row g-0 justify-content-center">
                    <div class="col-sm-11 col-md-8 col-lg-6 col-xl-12">
                        <div class="row gy-5 gx-xl-7 justify-content-between pe-4">
                            @for ($i = 1; $i <= 3; $i++)
                                <div class="col-xl-4">
                                    <div class="card card-img-shift border-0 mx-auto">
                                        <div class="rounded-3 overflow-hidden w-100 position-relative z-5">
                                            <img class="w-100" src="{{ asset('images/orotime-images/japan.jpg') }}" alt="" height="250" />
                                            <button class="btn btn-wish position-absolute top-0 end-0 mt-3 me-3">
                                                <span data-feather="heart" style="width: 16px; height: 16px"></span>
                                            </button>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="card-content">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
                                                    <div>
                                                        <span class="badge badge-oro px-1 me-2 badge-oro-warning">Sales Fales</span>
                                                    </div>
                                                    <h6>
                                                        <span class="fa-solid fa-star text-warning me-1"></span>
                                                        &#8369; 4.8k
                                                    </h6>
                                                </div>
                                                <a class="fw-bold fs-7 text-body-emphasis mb-2 text-primary-hover" href="#!">Golden Ring 18k Japan</a>
                                                <a class="fw-semibold text-body-tertiary mb-3 d-block" href="#!">
                                                    <span class="me-1" data-feather="map-pin"></span>
                                                    Japan
                                                </a>
                                                <h6 class="fe-semibold text-body-tertiary d-flex align-items-center gap-1 mb-4">
                                                    Installment <span class="fw-bolder fs-7 text-body-highlight"> $60.00 </span> / per every 15 days 
                                                </h6>
                                                <button class="btn btn-primary px-5">Buy</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container px-lg-5 px-4">
            <footer class="py-3">
                <div class="row d-flex align-items-between justify-content-between">
                    <div class="col-6 col-md-2 mb-3">
                        <h5 class="text-primary-dark">Collections</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a
                                    href="{{ route('CategoryProduct', ['cat' => 'all Collections']) }}"
                                    class="nav-link p-0 text-muted">All Collection</a></li>
                            <li class="nav-item mb-2"><a href="{{ route('CategoryProduct', ['cat' => 'all golds']) }}"
                                    class="nav-link p-0 text-muted">All Gold</a></li>
                            <li class="nav-item mb-2"><a href="{{ route('CategoryProduct', ['cat' => 'all silvers']) }}"
                                    class="nav-link p-0 text-muted">All Silver</a>
                            </li>
                            <li class="nav-item mb-2"><a href="{{ route('CategoryProduct', ['cat' => 'best sellers']) }}"
                                    class="nav-link p-0 text-muted">Best Seller</a>
                            </li>
                            <li class="nav-item mb-2"><a href="{{ route('CategoryProduct', ['cat' => 'best reviews']) }}"
                                    class="nav-link p-0 text-muted">Best Reviews</a>
                            </li>
                            <li class="nav-item mb-2"><a href="{{ route('CategoryProduct', ['cat' => 'bracelets']) }}"
                                    class="nav-link p-0 text-muted">Bracelets</a>
                            </li>
                            <li class="nav-item mb-2"><a href="{{ route('CategoryProduct', ['cat' => 'earrings']) }}"
                                    class="nav-link p-0 text-muted">Earrings</a></li>
                            <li class="nav-item mb-2"><a href="{{ route('CategoryProduct', ['cat' => 'rings']) }}"
                                    class="nav-link p-0 text-muted">Rings</a></li>
                            <li class="nav-item mb-2"><a href="{{ route('CategoryProduct', ['cat' => 'necklaces']) }}"
                                    class="nav-link p-0 text-muted">Necklace</a></li>
                        </ul>
                    </div>
    
                    <div class="col-6 col-md-2 mb-3">
                        <h5 class="text-primary-dark">Customer Policies</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Privacy
                                    Policy</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Refund Policy</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Return Policy</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms &
                                    Conditions</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms &
                                    Services</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms & User</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact Us</a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="col-md-5 offset-md-1 mb-3">
                        <form>
                            <h5>Join Us</h5>
                            <p>Sign up for our newsletter and receive discounts and offers.</p>
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                <button class="btn btn-primary" type="button">Subscribe</button>
                            </div>
                        </form>
                        <div class="my-2">
                            <span class="pe-2">
                                <a href="http://" class="text-decoration-none text-primary-dark">
                                    <i data-feather="instagram"></i>
                                </a>
                            </span>
                            <span class="pe-2">
                                <a href="http://" class="text-decoration-none text-primary-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                        <path
                                            d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                                    </svg>
                                </a>
                            </span>
                            <span class="pe-2">
                                <a href="http://" class="text-decoration-none text-primary-dark">
                                    <i data-feather="facebook"></i>
                                </a>
                            </span>
                            <span class="pe-2">
                                <a href="http://" class="text-decoration-none text-primary-dark">
                                    <i data-feather="message-circle"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
    
                <div class="d-flex flex-column flex-sm-row justify-content-between py-2 border-top">
                    <p>&copy; 2024 Orotime Jewelry. All rights reserved.</p>
                    <p>{{ version() }}</p>
                </div>
            </footer>
        </div>
    </main>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script>
    var typed = new Typed('#mainTyped', {
        strings: ['<i class="fw-bold" style="color: #F5DEB3">Gold ?</i>', '<i class="fw-bold" style="color: #D3D3D3">Silver ?</i>'],
        typeSpeed: 150,
        loop: true,
    });
</script>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>
<script>
    hljs.initHighlightingOnLoad();

    $('.hero__scroll').on('click', function(e) {
        $('html, body').animate({
            scrollTop: $(window).height()
        }, 1200);
    });
</script>
<script>
    feather.replace();
</script>


</html>
