<x-layout.customerApp>
    
    @include('components.customerChatAssistance');
    
    <div class="container my-3">
        <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">

            <div class="col-lg-3">
                @include('components.customerDashboard')
            </div>

            <div class="col-lg-9">
                <div class="my-3" >
                    <button class="btn btn-primary btn-sm" type="button">
                        Redeem Points
                    </button>
                </div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-lg-3 g-3 mb-3">


                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex d-sm-block justify-content-between">
                                    <div class="border-bottom-sm border-translucent mb-sm-4">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center icon-wrapper-sm shadow-primary-100"
                                                style="transform: rotate(-7.45deg);">
                                                <i data-feather="sunrise" class="text-primary fs-7 z-1 ms-2"></i>
                                            </div>
                                            <p class="text-body-tertiary fs-9 mb-0 ms-2 mt-3">Today's Points</p>
                                        </div>
                                        <p class="text-primary mt-2 fs-6 fw-bold mb-0 mb-sm-4">
                                            <i data-feather="gift" style="width: 16px; height: 16px"></i>
                                            1153
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center flex-between-end d-sm-block text-end text-sm-start">
                                        <span class="badge bg-primary fs-10 mb-2">+24.5%</span>
                                        <p class="mb-0 fs-9 text-body-tertiary">This Week</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex d-sm-block justify-content-between">
                                    <div class="border-bottom-sm border-translucent mb-sm-4">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center icon-wrapper-sm shadow-primary-100"
                                                style="transform: rotate(-7.45deg);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-cash text-primary fs-7 z-1 ms-2"
                                                    viewBox="0 0 16 16">
                                                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                                    <path
                                                        d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z" />
                                                </svg>
                                            </div>
                                            <p class="text-body-tertiary fs-9 mb-0 ms-2 mt-3">Week Points</p>
                                        </div>
                                        <p class="text-primary mt-2 fs-6 fw-bold mb-0 mb-sm-4">
                                            <i data-feather="gift" style="width: 16px; height: 16px"></i>
                                            1153
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center flex-between-end d-sm-block text-end text-sm-start">
                                        <span class="badge bg-primary fs-10 mb-2">+24.5%</span>
                                        <p class="mb-0 fs-9 text-body-tertiary">Last Week</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex d-sm-block justify-content-between">
                                    <div class="border-bottom-sm border-translucent mb-sm-4">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center icon-wrapper-sm shadow-primary-100"
                                                style="transform: rotate(-7.45deg);">
                                                <i data-feather="dollar-sign" class="text-primary" style="width: 16px; height: 16px"></i>
                                            </div>
                                            <p class="text-body-tertiary fs-9 mb-0 ms-2 mt-3">Month Points</p>
                                        </div>
                                        <p class="text-primary mt-2 fs-6 fw-bold mb-0 mb-sm-4">
                                            <i data-feather="gift" style="width: 16px; height: 16px"></i>
                                            1153
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center flex-between-end d-sm-block text-end text-sm-start">
                                        <span class="badge bg-primary fs-10 mb-2">+24.5%</span>
                                        <p class="mb-0 fs-9 text-body-tertiary">This Month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col border">
                    
                    <div id="thisMonthChart" style="width: 100%; height: 300px"> </div>
                    
                </div>

            </div>
        </div>
    </div>
    <button type="button" class="fixed-bottom z-sticky w-100 btn btn-lg btn-primary border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#accountSidebar" aria-controls="accountSidebar" data-bs-theme="light">
        <i data-feather="user"></i>
        Account menu
    </button>
</x-layout.customerApp>