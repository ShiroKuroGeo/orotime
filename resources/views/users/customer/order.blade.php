<x-layout.customerApp>
    <div class="container my-3">
        <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">

            <div class="col-lg-3">
                @include('components.customerDashboard')
            </div>

            <div class="col-lg-9">
                <div class="ps-lg-3 ps-xl-0">
                    
                    <div class="row align-items-center pb-3 pb-md-4 mb-md-1 mb-lg-2">
                        <div class="col-md-4 col-xl-6 mb-3 mb-md-0">
                            <h1 class="h2 me-3 mb-0">Orders</h1>
                        </div>
                        <div class="col-md-8 col-xl-6">
                            <div class="row row-cols-1 row-cols-sm-2 g-3 g-xxl-4">
                                <div class="col">
                                    <select class="form-select">
                                        <option value="all-time">In Progress</option>
                                        <option value="all-time">Delivered</option>
                                        <option value="all-time">Cancelled / Refund</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <input type="search" name="searchOrder" id="searchOrder" placeholder="Search Item" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vh-50 ">
                        <table class="table align-middle fs-sm text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col" class="py-3 ps-0">
                                        <span class="text-body fw-normal">Order <span
                                                class="d-none d-md-inline">#</span></span>
                                    </th>
                                    <th scope="col" class="py-3 d-none d-md-table-cell">
                                        <button type="button" class="btn orders-sort fw-normal text-body p-0"
                                            data-sort="date">Order date</button>
                                    </th>
                                    <th scope="col" class="py-3 d-none d-md-table-cell">
                                        <span class="text-body fw-normal">Status</span>
                                    </th>
                                    <th scope="col" class="py-3 d-none d-md-table-cell">
                                        <button type="button" class="btn orders-sort fw-normal text-body p-0"
                                            data-sort="total">Total</button>
                                    </th>
                                    <th scope="col" class="py-3">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody class="text-body-emphasis orders-list">
                                <tr>
                                    <td class="fw-medium pt-2 pb-3 py-md-2 ps-0">
                                        <a class="d-inline-block animate-underline text-body-emphasis text-decoration-none py-2"
                                            href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails"
                                            aria-label="Show order details">
                                            <span class="animate-target">78A6431D409</span>
                                        </a>
                                        <ul class="list-unstyled fw-normal text-body m-0 d-md-none">
                                            <li>Feb 6, 2025</li>
                                            <li class="d-flex align-items-center">
                                                <span class="bg-info rounded-circle p-1 me-2"></span>
                                                In progress
                                            </li>
                                            <li class="fw-medium text-body-emphasis">$2,105.90</li>
                                        </ul>
                                    </td>
                                    <td class="fw-medium py-3 d-none d-md-table-cell">
                                        February 6, 2025
                                        <span class="date d-none">25-02-06</span>
                                    </td>
                                    <td class="fw-medium py-3 d-none d-md-table-cell">
                                        <span class="d-flex align-items-center">
                                            <span class="bg-info rounded-circle p-1 me-2"></span>
                                            In progress
                                        </span>
                                    </td>
                                    <td class="fw-medium py-3 d-none d-md-table-cell">
                                        $2,105.90
                                        <span class="total d-none">210590</span>
                                    </td>
                                    <td class="py-3 pe-0">
                                        <span class="d-flex align-items-center justify-content-end position-relative gap-1 gap-sm-2 ms-n2 ms-sm-0">
                                            <span>
                                                <img src="{{ asset('images/orotime-images/Flyer1.jpg') }}" width="50" alt="Thumbnail">
                                                </span>
                                            <span>
                                                <img src="{{ asset('images/orotime-images/Flyer1.jpg') }}" width="50" alt="Thumbnail">
                                                </span>
                                            <span>
                                                <img src="{{ asset('images/orotime-images/Flyer1.jpg') }}" width="50" alt="Thumbnail">
                                                </span>
                                            <a class="text-decoration-none text-dark" href="#">
                                                <i class="fs-base" data-feather="eye"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>

                    <nav class="pt-3 pb-2 pb-sm-0 mt-2 mt-md-3" aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">
                                    1
                                    <span class="visually-hidden">(current)</span>
                                </span>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                        </ul>
                    </nav>
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
