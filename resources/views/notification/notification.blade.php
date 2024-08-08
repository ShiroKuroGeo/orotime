<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notification</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/oro.min.css') }}" type="text/css">
    <script src="https://cdn.tiny.cloud/1/rxsffkdjenly82awb597asru9t6wxj98qruof2ilhydd1e72/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        tinymce.init({
            selector: '#editor'
        });
    </script>
</head>

<body class="bg-lighter">
    <div class="container-fluid">
        <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="navbar-logo">
                    <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                        aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                            class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="{{ url()->previous() }}">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <h5 class="logo-text ms-2 d-none d-sm-block">Orotime</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <a href="{{ URL::previous() }}">
                    Back
                </a>
            </div>
        </nav>
        <div class="content">
            <h2 class="mb-5">Notifications</h2>
            <h5 class="text-body-emphasis mb-3">Today</h5>
            <div class="mx-n4 mx-lg-n6 mb-5 border-bottom">
                <div class="d-flex align-items-center justify-content-between py-3 px-lg-6 px-4 notification-card border-top read">
                    <div class="d-flex">
                        <div class="avatar avatar-xl me-3">
                            <img class="rounded-circle" src="{{ asset('images/customer-images/user_profile.jpg') }}" alt="" />
                        </div>
                        <div class="me-3 flex-1 mt-2 active">
                            <h4 class="fs-9 text-body-emphasis">Inoc Shiro George Alfeser</h4>
                            <p class="fs-9 text-body-highlight">
                                <span class="me-1">
                                    Approve Order
                                </span>
                                <span class="fw-bold">
                                    &quot;Your order has been approved by Inoc Kuro George Alfeser &quot;
                                </span>
                                <span class="ms-2 text-body-tertiary text-opacity-85 fw-bold fs-10">10m</span>
                            </p>
                            <p class="text-body-secondary fs-9 mb-0">
                                <span class="me-1 fas fa-clock"></span>
                                <span class="fw-bold">10:41 AM </span>
                                    August 7,2021
                            </p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                            <i data-feather="more-horizontal" style="width: 16px; height: 16px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end py-2">
                            <a class="dropdown-item" href="#!">Mark as unread</a>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="text-semibold text-body-emphasis mb-3">Yesterday</h5>
            <div class="mx-n4 mx-lg-n6 mb-9 border-bottom">
                @for ($i = 0; $i < 5; $i++)
                    <div class="d-flex align-items-center justify-content-between py-3 px-lg-6 px-4 notification-card border-top read">
                        <div class="d-flex">
                            <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="{{ asset('images/customer-images/user_profile.jpg') }}" alt="" />
                            </div>
                            <div class="me-3 flex-1 mt-2">
                                <h4 class="fs-9 text-body-emphasis">Inoc Shiro George Alfeser</h4>
                                <p class="fs-9 text-body-highlight">
                                    <span class="me-1">
                                        Post a Product
                                    </span>
                                    <span class="fw-bold">
                                        &quot; Golden Ring with thorn &quot;
                                    </span>
                                    <span class="ms-2 text-body-tertiary text-opacity-85 fw-bold fs-10">10m</span>
                                </p>
                                <p class="text-body-secondary fs-9 mb-0">
                                    <span class="me-1 fas fa-clock"></span>
                                    <span class="fw-bold">10:41 AM </span>
                                        August 7,2021
                                </p>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                <i data-feather="more-horizontal" style="width: 16px; height: 16px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end py-2">
                                <a class="dropdown-item" href="#!">Mark as unread</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <footer class="footer position-absolute">
                <div class="row g-0 justify-content-between align-items-center h-100">
                    <div class="col-12 col-sm-auto text-center">
                        <p>&copy; 2024 Orotime Jewelry. All rights reserved.</p>
                    </div>
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-body-tertiary text-opacity-85">{{ version() }}</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/echarts@5.5.1/dist/echarts.min.js"></script>
<script src="{{ asset('js/adminJquery.js') }}"></script>
<script>
    feather.replace()
</script>

</html>
