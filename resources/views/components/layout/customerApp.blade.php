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
    <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}" id="theme-styles">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <script src="{{ asset('js/customizer.min.js') }}"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <div class="bg-orotime">
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

    <header class="navbar navbar-expand-lg bg-body navbar-sticky sticky-top px-0">
        <div class="container-fluid mx-lg-5 flex-nowrap">

            <button type="button" class="navbar-toggler me-4 me-lg-0" data-bs-toggle="offcanvas"
                data-bs-target="#navbarNavMobile" aria-controls="navbarNavMobile" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="col-6 col-lg-2">
                <input type="text" name="seach-product" id="search-product" class="form-control"
                    placeholder="What are you looking for?">
            </div>

            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                id="navbarNavMobile" aria-labelledby="navbarNavMobileLabel">
                <div class="offcanvas-header py-3">
                    <h5 class="offcanvas-title" id="navbarNavMobileLabel">Orotime Jewelry</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-3 pb-4 py-lg-0 mx-lg-auto">
                    <ul class="navbar-nav position-relative">
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary" href="{{ route('homepage') }}">Home</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary"
                                href="{{ route('getCategory', ['cat' => 'New Arrival']) }}">New Arrival</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary"
                                href="{{ route('getCategory', ['cat' => 'Best Seller']) }}">Best Seller</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary"
                                href="{{ route('getCategory', ['cat' => 'Necklace']) }}">Necklace</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary"
                                href="{{ route('getCategory', ['cat' => 'Earrings']) }}">Earrings</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary"
                                href="{{ route('getCategory', ['cat' => 'Rings']) }}">Rings</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary"
                                href="{{ route('getCategory', ['cat' => 'All Golds']) }}">All Golds</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary"
                                href="{{ route('getCategory', ['cat' => 'All Silvers']) }}">All Silvers</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="nav-item dropdown d-flex gap-3 gap-sm-4 me-1 me-lg-5">
                <a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#navbarDropdownUser" role="button"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-l ">
                        <img class="rounded-circle" style="width: 45px"
                            src="{{ asset('images/customer-images/user_profile.jpg') }}" alt="Admin" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow"
                    aria-labelledby="navbarDropdownUser" style="width: 17vw">
                    <div class="card border-0 ">
                        <div class="card-body p-0">
                            <div class="text-center pt-4 pb-3">
                                <div class="avatar avatar-xl ">
                                    <img class="rounded-circle "
                                        src="{{ asset('images/customer-images/user_profile.jpg') }}"
                                        style="width: 45px" alt="" />
                                </div>
                                <span class="mt-2 pb-0 text-body-emphasis">Shiro George Alfeser</span><br>
                                <span class="text-muted fw-lighter">Customer</span>
                            </div>
                        </div>
                        <div class="overflow-auto scrollbar border-top shadow-top g-5" style="height: 11rem;">
                            <ul class="navbar-nav d-flex flex-column py-2">
                                <li class="nav-item">
                                    <a class="nav-link px-3 text-dark pb-3" href="{{ route('cus-info') }}">
                                        <i class="fs-base p-1" data-feather="user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-3 text-dark pb-3" href="{{ route('cus-order') }}">
                                        <i class="fs-base p-1" data-feather="pie-chart"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-3 text-dark pb-3" href="#!">
                                        <i class="fs-base p-1" data-feather="help-circle"></i>
                                        Help Center
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer p-0 border-top border-translucent">
                            <div class="px-3">
                                <a class="btn btn-primary btn-sm my-2 d-flex flex-center w-100 border" href="#!">
                                    <span class="me-2" data-feather="log-out"> </span>
                                    Sign out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    {{ $slot }}

    <div class="container px-5 pt-lg-5 pt-3">
        <footer class="py-3">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5 class="text-primary">Collections</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">All
                                Collection</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">All Gold</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">All Silver</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Best Seller</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Best Reviews</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Bracelets</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Earrings</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Rings</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Necklace</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5 class="text-primary">Customer Policies</h5>
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
                        <p>Sing up for our newsletter and receive discounts and offers.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                    <div class="my-2">
                        <span class="pe-2">
                            <a href="http://" class="text-decoration-none text-primary">
                                <i data-feather="instagram"></i>
                            </a>
                        </span>
                        <span class="pe-2">
                            <a href="http://" class="text-decoration-none text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                    <path
                                        d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                                </svg>
                            </a>
                        </span>
                        <span class="pe-2">
                            <a href="http://" class="text-decoration-none text-primary">
                                <i data-feather="facebook"></i>
                            </a>
                        </span>
                        <span class="pe-2">
                            <a href="http://" class="text-decoration-none text-primary">
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
</body>
<script src="{{ asset('js/theme.min.js') }}"></script>
<script src="{{ asset('js/choices.min.css') }}"></script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script>
    var typed = new Typed('#mainTyped', {
        strings: ['<i>Top Price</i>', '<i>High Quality</i>', '<i>High Value</i>', '<i>Shop Now</i>'],
        typeSpeed: 100,
        loop: true,
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
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>
<script>
    feather.replace();
</script>

</html>
