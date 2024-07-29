<x-layout.customerApp>
    <div class="container my-3">
        <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">

            <div class="col-lg-3">
                @include('components.customerDashboard')
            </div>

            <div class="col-lg-9">
                <div class="ps-xl-0">

                    <div
                        class="d-flex align-items-center justify-content-between pb-3 mb-1 mb-sm-2 mb-md-3 border-bottom">
                        <h1 class="h2 me-3 mb-0">My Reviews (32)</h1>
                    </div>

                    <div class="overflow-auto vh-100">
                        <div class="card overflow-hidden border-bottom mb-3 shadow">
                            <div class="row g-0">
                                <div class="col-sm-4 position-relative" style="min-height: 180px">
                                    <img src="{{ asset('images/orotime-images/Flyer1.jpg') }}"
                                        class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                                        alt="Card image">
                                </div>
                                <div class="col-sm-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Review on Product - <b class="text-primary-darker"> Golden Ring Retriever as Wedding Ring</b></h5>
                                        <p class="card-text ">
                                            <figure class="text-ellipsis-reviews" style="width: 100vw">
                                                <blockquote class="blockquote fs-6 fst-italic">
                                                    <p>"A well-known quote, contained in a blockquote element."</p>
                                                </blockquote>
                                            </figure>
                                        </p>
                                        <a class="btn btn-primary btn-sm float-end mb-3" href="#">Check this out!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <button type="button"
        class="fixed-bottom z-sticky w-100 btn btn-lg btn-primary border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none"
        data-bs-toggle="offcanvas" data-bs-target="#accountSidebar" aria-controls="accountSidebar"
        data-bs-theme="light">
        <i data-feather="user"></i>
        Account menu
    </button>
</x-layout.customerApp>
