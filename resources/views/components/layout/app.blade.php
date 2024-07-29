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
    <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}" type="text/css">
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
                            <a class="nav-link text-primary" href="#">All Products</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary" href="#">New Arrival</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary" href="#">Best Seller</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary" href="#">Necklace</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary" href="#">Earrings</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary" href="#">Rings</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary" href="#">All Golds</a>
                        </li>
                        <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                            <a class="nav-link text-primary" href="#">All Silvers</a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="d-flex gap-3 gap-sm-4 me-5">
                <a href="{{ route('login') }}" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#C5AE7C"
                        class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg>
                </a>
            </div>
        </div>
    </header>
    {{ $slot }}
    <div class="container px-lg-5 px-4">
        <footer class="py-3">
            <div class="row d-flex align-items-between justify-content-between">
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
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQ</a></li>
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

            <div class="d-flex flex-column flex-sm-row justify-content-end py-2 border-top">
                <p>&copy; 2024 Orotime Jewelry. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ asset('js/theme.js') }}"></script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

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
