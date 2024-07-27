<x-layout.ref>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search search-box-icon" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </form>
                <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                    data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
            </div>
            <ul class="navbar-nav navbar-nav-icons flex-row">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" style="min-width: 2.25rem" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        data-bs-auto-close="outside">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-bell-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                        </svg>
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
                                    <div
                                        class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
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
                        href="#navbarDropdownUser" role="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
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
                                    <h6 class="mt-2 text-body-emphasis">Shiro George Alfeser</h6>
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
                                                class="me-2 text-body align-bottom"
                                                data-feather="help-circle"></span>Help
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
    <main class="main" id="top">

        <section class="py-0">
            <div class="container-small">
                <div class="ecommerce-topbar">
                    <nav class="navbar navbar-expand-lg navbar-light px-0">
                        <div class="row gx-0 gy-2 w-100 flex-between-center">
                            <div class="col-auto order-md-1">
                                <ul class="navbar-nav navbar-nav-icons flex-row me-n2">
                                    <li class="nav-item d-flex align-items-center">
                                        <div class="theme-control-toggle fa-icon-wait px-2"><input
                                                class="form-check-input ms-0 theme-control-toggle-input"
                                                type="checkbox" data-theme-control="oroTheme" value="dark"
                                                id="themeControlToggle" /><label
                                                class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                                for="themeControlToggle" data-bs-toggle="tooltip"
                                                data-bs-placement="left" data-bs-title="Switch theme"
                                                style="height:32px;width:32px;"><span class="icon"
                                                    data-feather="moon"></span></label><label
                                                class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                                for="themeControlToggle" data-bs-toggle="tooltip"
                                                data-bs-placement="left" data-bs-title="Switch theme"
                                                style="height:32px;width:32px;"><span class="icon"
                                                    data-feather="sun"></span></label></div>
                                    </li>
                                    <li class="nav-item"><a
                                            class="nav-link px-2 icon-indicator icon-indicator-primary"
                                            href="../../../apps/e-commerce/landing/cart.html" role="button"><span
                                                class="text-body-tertiary" data-feather="shopping-cart"
                                                style="height:20px;width:20px;"></span><span
                                                class="icon-indicator-number">3</span></a></li>
                                    <li class="nav-item dropdown"><a
                                            class="nav-link px-2 icon-indicator icon-indicator-sm icon-indicator-danger"
                                            id="navbarTopDropdownNotification" href="#" role="button"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                            aria-haspopup="true" aria-expanded="false"><span
                                                class="text-body-tertiary" data-feather="bell"
                                                style="height:20px;width:20px;"></span></a>
                                        <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret mt-2"
                                            id="navbarDropdownNotfication"
                                            aria-labelledby="navbarDropdownNotfication">
                                            <div class="card position-relative border-0">
                                                <div class="card-header p-2">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="text-body-emphasis mb-0">Notifications</h5><button
                                                            class="btn btn-link p-0 fs-9 fw-normal"
                                                            type="button">Mark all as read</button>
                                                    </div>
                                                </div>
                                                <div class="card-body p-0">
                                                    <div class="scrollbar-overlay" style="height: 27rem;">
                                                        <div
                                                            class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3">
                                                                        <img class="rounded-circle"
                                                                            src="../../../assets/img/team/40x40/30.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <div class="flex-1 me-sm-3">
                                                                        <h4 class="fs-9 text-body-emphasis">Jessie
                                                                            Samson</h4>
                                                                        <p
                                                                            class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal">
                                                                            <span class='me-1 fs-10'>💬</span>Mentioned
                                                                            you in a comment.<span
                                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span>
                                                                        </p>
                                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                                class="me-1 fas fa-clock"></span><span
                                                                                class="fw-bold">10:41 AM </span>August
                                                                            7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown notification-dropdown"><button
                                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        data-boundary="window" aria-haspopup="true"
                                                                        aria-expanded="false"
                                                                        data-bs-reference="parent"><span
                                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                                    <div class="dropdown-menu py-2"><a
                                                                            class="dropdown-item" href="#!">Mark
                                                                            as unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3">
                                                                        <div class="avatar-name rounded-circle">
                                                                            <span>J</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-1 me-sm-3">
                                                                        <h4 class="fs-9 text-body-emphasis">Jane Foster
                                                                        </h4>
                                                                        <p
                                                                            class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal">
                                                                            <span class='me-1 fs-10'>📅</span>Created
                                                                            an event.<span
                                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span>
                                                                        </p>
                                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                                class="me-1 fas fa-clock"></span><span
                                                                                class="fw-bold">10:20 AM </span>August
                                                                            7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown notification-dropdown"><button
                                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        data-boundary="window" aria-haspopup="true"
                                                                        aria-expanded="false"
                                                                        data-bs-reference="parent"><span
                                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                                    <div class="dropdown-menu py-2"><a
                                                                            class="dropdown-item" href="#!">Mark
                                                                            as unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3">
                                                                        <img class="rounded-circle avatar-placeholder"
                                                                            src="../../../assets/img/team/40x40/avatar.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <div class="flex-1 me-sm-3">
                                                                        <h4 class="fs-9 text-body-emphasis">Jessie
                                                                            Samson</h4>
                                                                        <p
                                                                            class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal">
                                                                            <span class='me-1 fs-10'>👍</span>Liked
                                                                            your comment.<span
                                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span>
                                                                        </p>
                                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                                class="me-1 fas fa-clock"></span><span
                                                                                class="fw-bold">9:30 AM </span>August
                                                                            7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown notification-dropdown"><button
                                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        data-boundary="window" aria-haspopup="true"
                                                                        aria-expanded="false"
                                                                        data-bs-reference="parent"><span
                                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                                    <div class="dropdown-menu py-2"><a
                                                                            class="dropdown-item" href="#!">Mark
                                                                            as unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3">
                                                                        <img class="rounded-circle"
                                                                            src="../../../assets/img/team/40x40/57.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <div class="flex-1 me-sm-3">
                                                                        <h4 class="fs-9 text-body-emphasis">Kiera
                                                                            Anderson</h4>
                                                                        <p
                                                                            class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal">
                                                                            <span class='me-1 fs-10'>💬</span>Mentioned
                                                                            you in a comment.<span
                                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                                        </p>
                                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                                class="me-1 fas fa-clock"></span><span
                                                                                class="fw-bold">9:11 AM </span>August
                                                                            7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown notification-dropdown"><button
                                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        data-boundary="window" aria-haspopup="true"
                                                                        aria-expanded="false"
                                                                        data-bs-reference="parent"><span
                                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                                    <div class="dropdown-menu py-2"><a
                                                                            class="dropdown-item" href="#!">Mark
                                                                            as unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3">
                                                                        <img class="rounded-circle"
                                                                            src="../../../assets/img/team/40x40/59.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <div class="flex-1 me-sm-3">
                                                                        <h4 class="fs-9 text-body-emphasis">Herman
                                                                            Carter</h4>
                                                                        <p
                                                                            class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal">
                                                                            <span class='me-1 fs-10'>👤</span>Tagged
                                                                            you in a comment.<span
                                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                                        </p>
                                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                                class="me-1 fas fa-clock"></span><span
                                                                                class="fw-bold">10:58 PM </span>August
                                                                            7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown notification-dropdown"><button
                                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        data-boundary="window" aria-haspopup="true"
                                                                        aria-expanded="false"
                                                                        data-bs-reference="parent"><span
                                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                                    <div class="dropdown-menu py-2"><a
                                                                            class="dropdown-item" href="#!">Mark
                                                                            as unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between position-relative">
                                                                <div class="d-flex">
                                                                    <div class="avatar avatar-m status-online me-3">
                                                                        <img class="rounded-circle"
                                                                            src="../../../assets/img/team/40x40/58.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <div class="flex-1 me-sm-3">
                                                                        <h4 class="fs-9 text-body-emphasis">Benjamin
                                                                            Button</h4>
                                                                        <p
                                                                            class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal">
                                                                            <span class='me-1 fs-10'>👍</span>Liked
                                                                            your comment.<span
                                                                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span>
                                                                        </p>
                                                                        <p class="text-body-secondary fs-9 mb-0"><span
                                                                                class="me-1 fas fa-clock"></span><span
                                                                                class="fw-bold">10:18 AM </span>August
                                                                            7,2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown notification-dropdown"><button
                                                                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        data-boundary="window" aria-haspopup="true"
                                                                        aria-expanded="false"
                                                                        data-bs-reference="parent"><span
                                                                            class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                                    <div class="dropdown-menu py-2"><a
                                                                            class="dropdown-item" href="#!">Mark
                                                                            as unread</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0 border-top border-translucent border-0">
                                                    <div
                                                        class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85">
                                                        <a class="fw-bolder"
                                                            href="../../../pages/notifications.html">Notification
                                                            history</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown"><a class="nav-link px-2" id="navbarDropdownUser"
                                            href="#" role="button" data-bs-toggle="dropdown"
                                            data-bs-auto-close="outside" aria-haspopup="true"
                                            aria-expanded="false"><span class="text-body-tertiary"
                                                data-feather="user" style="height:20px;width:20px;"></span></a>
                                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border mt-2"
                                            aria-labelledby="navbarDropdownUser">
                                            <div class="card position-relative border-0">
                                                <div class="card-body p-0">
                                                    <div class="text-center pt-4 pb-3">
                                                        <div class="avatar avatar-xl ">
                                                            <img class="rounded-circle "
                                                                src="../../../assets/img/team/72x72/57.webp"
                                                                alt="" />
                                                        </div>
                                                        <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                                                    </div>
                                                    <div class="mb-3 mx-3"><input class="form-control form-control-sm"
                                                            id="statusUpdateInput" type="text"
                                                            placeholder="Update your status" /></div>
                                                </div>
                                                <div class="overflow-auto scrollbar" style="height: 10rem;">
                                                    <ul class="nav d-flex flex-column mb-2 pb-1">
                                                        <li class="nav-item"><a class="nav-link px-3 d-block"
                                                                href="#!"> <span
                                                                    class="me-2 text-body align-bottom"
                                                                    data-feather="user"></span><span>Profile</span></a>
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link px-3 d-block"
                                                                href="#!"><span
                                                                    class="me-2 text-body align-bottom"
                                                                    data-feather="pie-chart"></span>Dashboard</a></li>
                                                        <li class="nav-item"><a class="nav-link px-3 d-block"
                                                                href="#!"> <span
                                                                    class="me-2 text-body align-bottom"
                                                                    data-feather="lock"></span>Posts &amp; Activity</a>
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link px-3 d-block"
                                                                href="#!"> <span
                                                                    class="me-2 text-body align-bottom"
                                                                    data-feather="settings"></span>Settings &amp;
                                                                Privacy </a></li>
                                                        <li class="nav-item"><a class="nav-link px-3 d-block"
                                                                href="#!"> <span
                                                                    class="me-2 text-body align-bottom"
                                                                    data-feather="help-circle"></span>Help Center</a>
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link px-3 d-block"
                                                                href="#!"> <span
                                                                    class="me-2 text-body align-bottom"
                                                                    data-feather="globe"></span>Language</a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-footer p-0 border-top border-translucent">
                                                    <ul class="nav d-flex flex-column my-3">
                                                        <li class="nav-item"><a class="nav-link px-3 d-block"
                                                                href="#!"> <span
                                                                    class="me-2 text-body align-bottom"
                                                                    data-feather="user-plus"></span>Add another
                                                                account</a></li>
                                                    </ul>
                                                    <hr />
                                                    <div class="px-3"> <a
                                                            class="btn btn-oro-secondary d-flex flex-center w-100"
                                                            href="#!"> <span class="me-2"
                                                                data-feather="log-out"> </span>Sign out</a></div>
                                                    <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a
                                                            class="text-body-quaternary me-1" href="#!">Privacy
                                                            policy</a>&bull;<a class="text-body-quaternary mx-1"
                                                            href="#!">Terms</a>&bull;<a
                                                            class="text-body-quaternary ms-1"
                                                            href="#!">Cookies</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="search-box ecommerce-search-box w-100">
                                    <form class="position-relative"><input
                                            class="form-control search-input search form-control-sm" type="search"
                                            placeholder="Search" aria-label="Search" />
                                        <span class="fas fa-search search-box-icon"></span>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </section>

        <section class="pt-5 pb-9">
            <div class="product-filter-container"><button
                    class="btn btn-sm btn-oro-secondary text-body-tertiary mb-5 d-lg-none" data-oro-toggle="offcanvas"
                    data-oro-target="#productFilterColumn"><span
                        class="fa-solid fa-filter me-2"></span>Filter</button>
                <div class="row">
                    <div class="col-lg-3 col-xxl-2 ps-2 ps-xxl-3">
                        <div class="oro-offcanvas-filter bg-body scrollbar oro-offcanvas oro-offcanvas-fixed"
                            id="productFilterColumn" style="top: 92px">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 class="mb-0">Filters</h3><button class="btn d-lg-none p-0"
                                    data-oro-dismiss="offcanvas"><span class="uil uil-times fs-8"></span></button>
                            </div>

                            <a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse"
                                href="#collapseColorFamily" role="button" aria-expanded="true"
                                aria-controls="collapseColorFamily">
                                <div class="d-flex align-items-center justify-content-between w-100">
                                    <div class="fs-8 text-body-highlight">Color family</div><span
                                        class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                                </div>
                            </a>
                            <div class="collapse show" id="collapseColorFamily">
                                <div class="mb-2">
                                    <div class="form-check mb-0"><input class="form-check-input mt-0"
                                            id="flexCheckGold" type="checkbox" name="color" checked><label
                                            class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0"
                                            for="flexCheckGold">Gold</label></div>
                                    <div class="form-check mb-0"><input class="form-check-input mt-0"
                                            id="flexCheckSilver" type="checkbox" name="color"><label
                                            class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0"
                                            for="flexCheckSilver">Silver</label></div>
                                    <div class="form-check mb-0"><input class="form-check-input mt-0"
                                            id="flexCheckSilverGold" type="checkbox" name="color"><label
                                            class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0"
                                            for="flexCheckSilverGold">Silver Gold</label></div>
                                </div>
                            </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse"
                                href="#collapseBrands" role="button" aria-expanded="true"
                                aria-controls="collapseBrands">
                                <div class="d-flex align-items-center justify-content-between w-100">
                                    <div class="fs-8 text-body-highlight">Brands</div><span
                                        class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                                </div>
                            </a>
                            <div class="collapse show" id="collapseBrands">
                                <div class="mb-2">
                                    <div class="form-check mb-0"><input class="form-check-input mt-0"
                                            id="flexCheckNecklace" type="checkbox" name="brands" checked><label
                                            class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0"
                                            for="flexCheckNecklace">Necklace
                                        </label></div>
                                    <div class="form-check mb-0"><input class="form-check-input mt-0"
                                            id="flexCheckRing" type="checkbox" name="brands"><label
                                            class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0"
                                            for="flexCheckRing">Ring
                                        </label></div>
                                    <div class="form-check mb-0"><input class="form-check-input mt-0"
                                            id="flexCheckEarning" type="checkbox" name="brands"><label
                                            class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0"
                                            for="flexCheckEarning">Earning
                                        </label></div>
                                    <div class="form-check mb-0"><input class="form-check-input mt-0"
                                            id="flexCheckBracelet" type="checkbox" name="brands"><label
                                            class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0"
                                            for="flexCheckBracelet">Bracelet
                                        </label></div>

                                </div>
                            </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse"
                                href="#collapsePriceRange" role="button" aria-expanded="true"
                                aria-controls="collapsePriceRange">
                                <div class="d-flex align-items-center justify-content-between w-100">
                                    <div class="fs-8 text-body-highlight">Price range</div><span
                                        class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                                </div>
                            </a>
                            <div class="collapse show" id="collapsePriceRange">
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="input-group me-2"><input class="form-control" type="text"
                                            aria-label="First name" placeholder="Min"><input class="form-control"
                                            type="text" aria-label="Last name" placeholder="Max"></div><button
                                        class="btn btn-oro-primary px-3" type="button">Go</button>
                                </div>
                            </div>
                        </div>
                        <div class="oro-offcanvas-backdrop d-lg-none" data-oro-backdrop style="top: 92px">
                        </div>
                    </div>
                    <div class="col-lg-9 col-xxl-10">
                        <div class="row gx-3 gy-6 mb-8">
                            @for ($i = 1; $i <= 18; $i++)
                                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                                    <div class="product-card-container h-100">
                                        <div class="position-relative text-decoration-none product-card h-100">
                                            <div class="d-flex flex-column justify-content-between h-100">
                                                <div>
                                                    <div
                                                        class="border border-1 border-translucent rounded-3 position-relative mb-3">
                                                        <img class="img-fluid"
                                                            src="{{ asset('images/orotime-images/flyer1.jpg') }}"
                                                            alt="" />
                                                    </div>
                                                    <a class="stretched-link" data-bs-toggle="modal"
                                                        data-bs-target="#userId{{ $i }}" href="#">
                                                        <h6 class="mb-2 lh-sm line-clamp-3 product-name">Golden Wedding
                                                            Ring 15k Grams</h6>
                                                    </a>
                                                </div>
                                                <div>
                                                    <p class="fs-9 text-body-tertiary mb-2">Wedding Ring</p>
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h3 class="text-body-emphasis mb-0">P{{ 1289.0 * $i }}</h3>
                                                    </div>
                                                    <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 colors
                                                    </p>
                                                </div>
                                                <div class="modal fade" id="userId{{ $i }}"
                                                    aria-labelledby="userIdLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="userIdLabel">Save
                                                                    Referral Link</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <small class="text-danger">Note: Copy the link inside
                                                                    the box.</small>
                                                                <input type="text" name="referralLink"
                                                                    id="referralLink" disabled class="form-control"
                                                                    value="{{ Request::url() }}/{{ 150 * $i }}/{{ 250 * $i }}">
                                                                <small class="text-danger">Note: You can only get your
                                                                    commission if someone is buying your
                                                                    referral.</small>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <div class="d-flex justify-content-end">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination mb-0">
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <span class="fas fa-chevron-left"> </span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link active" href="#">1</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer position-relative">
            <div class="row g-0 justify-content-between align-items-center h-100">
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 mt-2 mt-sm-0 text-body">Thank you for visiting Orotime Jewelry<span
                            class="d-none d-sm-inline-block"></span><span
                            class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy;
                </div>
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85">v1.18.0</p>
                </div>
            </div>
        </footer>
    </main>
</x-layout.ref>
