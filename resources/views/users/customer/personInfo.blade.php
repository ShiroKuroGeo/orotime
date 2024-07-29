<x-layout.customerApp>
    <div class="container my-lg-5 my-3">
        <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">

            <div class="col-lg-3">
                @include('components.customerDashboard')
            </div>

            <div class="col-lg-9">
                <div class="ps-xl-0">

                    <div class="d-flex align-items-center justify-content-between pb-3 mb-1 mb-sm-2 mb-md-3">
                        <h1 class="h2 me-3 mb-0">Personal Information</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <button type="button"
        class="fixed-bottom z-sticky w-100 btn btn-lg btn-primary border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none"
        data-bs-toggle="offcanvas" data-bs-target="#accountSidebar" aria-controls="accountSidebar" data-bs-theme="light">
        <i data-feather="user"></i>
        Account menu
    </button>
</x-layout.customerApp>
