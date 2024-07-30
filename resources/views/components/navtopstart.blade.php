<nav class="navbar navbar-vertical navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">

                <li class="nav-item my-2">
                    <div class="nav-item-wrapper">
                        <a class="nav-link {{ Request::routeIs('admin') ? 'active' : '' }} " href="{{ route('admin') }}">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon-wrapper"><span
                                        class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                    class="nav-link-icon">
                                    <i data-feather="bar-chart" class="fs-base pe-2"></i>
                                </span><span class="nav-link-text">Dashboard</span>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="nav-item my-2">

                    <div class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1 {{ Request::routeIs('product-details') || Request::routeIs('product-add') || Request::routeIs('admin-product-list') || Request::routeIs('product-category') ? 'active' : '' }}"
                            href="#col-products" role="button" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="col-products">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon-wrapper"><span
                                        class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                    class="nav-link-icon">
                                <i data-feather="package" class="fs-base pe-2"></i>
                                </span><span class="nav-link-text">Products</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="col-products">
                                <li class="nav-item">
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent show" data-bs-parent="#e-commerce"id="nv-admin">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ route('admin-product-list', ['cate' => 'all']) }}">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Products List</span></div>
                                                </a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('product-add') }}">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Add product</span></div>
                                                </a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ route('product-category') }}">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Category</span></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="nav-item my-2">

                    <div class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1 {{ Request::routeIs('user-type') || Request::routeIs('user-details') ? 'active' : '' }}"
                            href="#col-users" role="button" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="col-users">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon-wrapper">
                                    <span class="fas fa-caret-right dropdown-indicator-icon"></span>
                                </div>
                                <span class="nav-link-icon">
                                    <i data-feather="user" class="fs-base pe-2"></i>
                                </span>
                                <span class="nav-link-text">Users</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="col-users">
                                <li class="nav-item">
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent show" data-bs-parent="#e-commerce"
                                            id="nv-admin">

                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ route('user-type', ['type' => 'customer']) }}">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-text">Customer</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('user-type', ['type' => 'csr']) }}">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-text">CSR</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ route('user-type', ['type' => 'referral']) }}">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-text">Referral</span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="nav-item my-2">

                    <div class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1 {{ Request::routeIs('order-list') ? 'active' : '' }}"
                            href="{{ route('order-list') }}">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon-wrapper">
                                    <span class="fas fa-caret-right dropdown-indicator-icon"></span>
                                </div>
                                <span class="nav-link-icon">
                                    <i data-feather="shopping-bag" class="fs-base pe-2"></i>
                                </span>
                                <span class="nav-link-text">Orders</span>
                            </div>
                        </a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault">
    <div class="collapse navbar-collapse justify-content-between">
        <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                    class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="#">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <h5 class="logo-text ms-2 d-none d-sm-block">Orotime</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}'
            style="width:25rem;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                    class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search"
                    placeholder="Search..." aria-label="Search" />
                <i data-feather="search" class="search-box-icon fs-base pe-2"></i>
            </form>
            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" style="min-width: 2.25rem" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    data-bs-auto-close="outside">
                    <i data-feather="bell" class="fs-base pe-1"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret"
                    id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                    <div class="card position-relative border-0">
                        <div class="card-header p-2">
                            <div class="d-flex justify-content-between">
                                <h5 class="text-body-emphasis mb-0">Notifications</h5><button
                                    class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as
                                    read</button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="scrollbar-overlay" style="height: 27rem;">
                                <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="{{ asset('images/orotime-images/orologo.png') }}"
                                                    alt="" /></div>
                                            <div class="flex-1 me-sm-3">
                                                <h4 class="fs-9 text-body-emphasis">Shiro Geo</h4>
                                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal">
                                                    <span class='me-1 fs-10'>Post A Product<span
                                                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span>
                                                </p>
                                                <p class="text-body-secondary fs-9 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:41
                                                        AM </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="dropdown notification-dropdown"><button
                                                class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                            <div class="dropdown-menu py-2"><a class="dropdown-item"
                                                    href="#!">Mark as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer p-0 border-top border-translucent border-0">
                            <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a
                                    class="fw-bolder" href="#">Notification history</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser"
                    href="#navbarDropdownUser" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                    aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-l ">
                        <img class="rounded-circle " src="{{ asset('images/customer-images/user_profile.jpg') }}"
                            alt="Admin" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
                    aria-labelledby="navbarDropdownUser">
                    <div class="card position-relative border-0">
                        <div class="card-body p-0">
                            <div class="text-center pt-4 pb-3">
                                <div class="avatar avatar-xl ">
                                    <img class="rounded-circle "
                                        src="{{ asset('images/customer-images/user_profile.jpg') }}"
                                        alt="" />
                                </div>
                                <span class="mt-2 pb-0 text-body-emphasis">Shiro George Alfeser</span><br>
                                <span class="text-muted fw-lighter">Customer</span>
                            </div>
                        </div>
                        <div class="overflow-auto scrollbar border-top shadow-top g-5" style="height: 10rem;">
                            <ul class="nav d-flex flex-column my-2 pb-1">
                                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                            class="me-2 text-body align-bottom"
                                            data-feather="user"></span><span>Profile</span></a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span
                                            class="me-2 text-body align-bottom"
                                            data-feather="pie-chart"></span>Dashboard</a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                            class="me-2 text-body align-bottom" data-feather="lock"></span>Posts
                                        &amp; Activity</a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                            class="me-2 text-body align-bottom"
                                            data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                                            class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help
                                        Center</a></li>
                            </ul>
                        </div>
                        <div class="card-footer p-0 border-top border-translucent">
                            <div class="px-3"> <a class="btn btn-oro-secondary mt-2 d-flex flex-center w-100"
                                    href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign
                                    out</a></div>
                            <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a
                                    class="text-body-quaternary me-1" href="#!">Privacy
                                    policy</a>&bull;<a class="text-body-quaternary mx-1"
                                    href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1"
                                    href="#!">Cookies</a></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
