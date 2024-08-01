<x-layout.csr>
    @section('title', 'Dashboard');
    @include('components.csrnavtopstart')
    <div class="content">
        <div class="container">
            <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
                <div class="me-4 mb-3 mb-sm-0">
                    <h2 class="mb-0">Shiro George Alfeser</h2>
                    <div class="small">
                        <span class="fw-500 text-primary">
                            {{ Carbon\Carbon::now()->format('l') }}
                        </span>
                        . {{ Carbon\Carbon::now()->format('F j, Y') }}
                    </div>
                </div>
            </div>
            <div class="card card-waves mb-4 mt-5">
                <div class="card-body p-5">
                    <div class="row align-items-center justify-content-between">
                        <div class="col">
                            <h2 class="text-primary-light">Welcome back, Shiro George Alfeser!</h2>
                            <p class="text-gray-700">Your dedication and excellence in your work have not gone
                                unnoticed. Your commitment truly sets a standard of excellence for all of us.</p>
                        </div>
                        <div class="col d-none d-lg-block text-center">
                            <img class="img-fluid px-xl-4" width="500"
                                src="{{ asset('images/orotime-images/statistics-illustration.jpg') }}" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-start-lg border-start-primary h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small fw-bold text-primary mb-1">Sales (monthly)</div>
                                    <div class="h5">P 1500</div>
                                    <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                        <i class="me-1" data-feather="trending-up"></i>
                                        12%
                                    </div>
                                </div>
                                <div class="ms-2">
                                    <i data-feather="dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-start-lg border-start-secondary h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small fw-bold text-secondary mb-1">Customer Questions</div>
                                    <div class="h5">12</div>
                                    <div class="text-xs fw-bold text-danger d-inline-flex align-items-center">
                                        <i class="me-1" data-feather="trending-down"></i>
                                        3%
                                    </div>
                                </div>
                                <div class="ms-2">
                                    <i data-feather="help-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-start-lg border-start-success h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small fw-bold text-success mb-1">Orders</div>
                                    <div class="h5">11</div>
                                    <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                        <i class="me-1" data-feather="trending-up"></i>
                                        12%
                                    </div>
                                </div>
                                <div class="ms-2">
                                    <i data-feather="shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-start-lg border-start-info h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small fw-bold text-info mb-1">Total Invoices</div>
                                    <div class="h5">5</div>
                                    <div class="text-xs fw-bold text-danger d-inline-flex align-items-center">
                                        <i class="me-1" data-feather="trending-down"></i>
                                        1%
                                    </div>
                                </div>
                                <div class="ms-2">
                                    <i data-feather="file-text"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 row-cols-1 row-cols-lg-3">

                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="">
                                <span class="text-primary-lighter fw-bold"> Order Statistics </span> <br>
                                <small>
                                    There are 10k Total Order Statistics
                                </small>
                            </div>
                            <div class="p-0 d-none d-lg-block">
                                <div id="orderStatistics" style="width: 130px; height: 130px" class="m-0"></div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                                href="#!">
                                <div class="p-0">
                                    <span class=""> Necklaces </span> <br>
                                    <span class=" pt-0 mt-0 small">Jewelry you wear around your neck.</span>
                                </div>
                                <div class="text-secondary small ">
                                    152
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                                href="#!">
                                <div class="">
                                    Bracelets <br>
                                    <small>Jewelry you wear around your wrist.</small>
                                </div>
                                <div class="text-secondary small ">
                                    152
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                                href="#!">
                                <div class="">
                                    Earrings <br>
                                    <small>Jewelry you wear around your ear.</small>
                                </div>
                                <div class="text-secondary small ">
                                    152
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                                href="#!">
                                <div class="">
                                    Rings <br>
                                    <small>Jewelry you wear around your finger.</small>
                                </div>
                                <div class="text-secondary small ">
                                    152
                                </div>
                            </a>
                        </div>
                        <div class="card-footer position-relative border-top-0">
                            <a class="small" href="#!">
                                <div class="d-flex align-items-center justify-content-between">
                                    View More Order Statistics
                                    <i data-feather="arrow-right" class="p-1"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="">
                                <span class="text-primary-lighter fw-bold"> Affiliate Reports</span> <br>
                            </div>
                            <div class="p-0 d-none d-lg-block">
                                <div id="affiliateChart" style="width: 130px; height: 130px" class="m-0"></div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action" href="#!">
                                <div class="d-flex align-items-center">
                                    <i data-feather="dollar-sign" class="p-1"></i>
                                    <div class="ms-2">
                                        Earnings Reports <br>
                                        <small>Total earns as of this week</small>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#!">
                                <div class="d-flex align-items-center">
                                    <i data-feather="users" class="p-1"></i>
                                    <div class="ms-2">
                                        Customer Users Reports <br>
                                        <small>Total Registered Customer as of this month of <span
                                                class="text-primary">{{ Carbon\Carbon::now()->format('F') }}</span></small>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#!">
                                <div class="d-flex align-items-center">
                                    <i data-feather="star" class="p-1"></i>
                                    <div class="ms-2">
                                        Product Reviews <br>
                                        <small>Customer Product Reviews as of this month of <span
                                                class="text-primary">{{ Carbon\Carbon::now()->format('F') }}</span></small>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#!">
                                <div class="d-flex align-items-center">
                                    <i data-feather="message-circle" class="p-1"></i>
                                    <div class="ms-2">
                                        Conversion Rate <br>
                                        <small>Customer active asking about products and Reviews as of this <span
                                                class="text-primary">{{ Carbon\Carbon::now()->format('F') }}</span></small>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#!">
                                <div class="d-flex align-items-center">
                                    <i data-feather="users" class="p-1"></i>
                                    <div class="ms-2">
                                        Referral Users Reports <br>
                                        <small>Number of people being referred to the product as this <span
                                                class="text-primary">{{ Carbon\Carbon::now()->format('F') }}</span></small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="">
                                <span class="text-primary-lighter fw-bold"> Sales and Traffic </span> <br>
                            </div>
                            <div class="p-0 d-none d-lg-block">
                                <div id="affiliateChart" style="width: 130px; height: 130px" class="m-0"></div>
                            </div>
                        </div>
                        <div id="salesAndTraffic" style="height: 320px; width: 100%"></div>
                    </div>
                </div>

            </div>
            <div class="row gx-6">
                <div class="col-12">
                    <div data-list='{"valueNames":["country","users","transactions","revenue","conv-rate"],"page":5, "pagination": true}'
                        id="listHistoryTransaction">
                        <div class="mb-5 mt-7">
                            <h3>History Transaction</h3>
                            <p class="text-body-tertiary">Where you record of financial undertakings</p>
                        </div>
                        <div class="table-responsive scrollbar">
                            <table class="table table-hover fs-10 mb-0">
                                <thead>
                                    <tr>
                                        <th class="sort border-top border-translucent ps-0 align-middle"
                                            style="width: 10%" scope="col" data-sort="country">Product</th>
                                        <th class="sort border-top border-translucent align-middle" style="width: 10%"
                                            scope="col" data-sort="users">Customer</th>
                                        <th class="sort border-top border-translucent align-middle" style="width: 10%"
                                            scope="col" data-sort="transactions">Type
                                        </th>
                                        <th class="sort border-top border-translucent align-middle" style="width: 10%"
                                            scope="col" data-sort="revenue">Price</th>
                                        <th class="sort border-top border-translucent pe-0 align-middle"
                                            style="width: 10%" scope="col" data-sort="conv-rate">DATE</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="table-regions-by-revenue">
                                    @for ($i = 1; $i <= 150; $i++)
                                        <tr>
                                            <td class="white-space-nowrap ps-0">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="mb-0 me-3">1. </h6><a href="#!"
                                                        class="list-group-item list-group-item-action">
                                                        <div class="d-flex align-items-center"><img
                                                                src="{{ asset('images/orotime-images/earring.jpg') }}"
                                                                alt="" width="24" />
                                                            <p class="mb-0 ps-3 text-primary fw-bold fs-9">
                                                                Pure Silver Earring 5 grams <br>
                                                                <small class="text-secondary">Hello world</small>
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="align-middle users">
                                                <h6 class="mb-0">
                                                    Shiro George Alfeser
                                                </h6>
                                            </td>
                                            <td class="align-middle transactions">
                                                <h6 class="mb-0">
                                                    Guest
                                                </h6>
                                            </td>
                                            <td class="align-middle revenue">
                                                <h6 class="mb-0">
                                                    P 1589.00
                                                </h6>
                                            </td>
                                            <td class="align-middle pe-0 conv-rate">
                                                <h6>
                                                    Nov 28
                                                </h6>
                                            </td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end py-1">
                            <div class="pagination"></div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-7 pb-3 border-y">
            <div class="row">
                <div class="col-12 col-xl-7 col-xxl-6">
                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-6">
                            <h3 class="text-body-emphasis text-nowrap">Issues Discovered</h3>
                            <p class="text-body-tertiary mb-md-7">Newly found and yet to be solved</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0 fw-bold">Issue type </p>
                                <p class="mb-0 fs-9">Total count <span class="fw-bold">{{ 78 + 63 + 56 }}</span></p>
                            </div>
                            <hr class="bg-body-secondary mb-2 mt-2" />
                            <div class="d-flex align-items-center mb-1"><span
                                    class="d-inline-block bg-info-light bullet-item me-2"></span>
                                <p class="mb-0 fw-semibold text-body lh-sm flex-1">Pending</p>
                                <h5 class="mb-0 text-body">78</h5>
                            </div>
                            <div class="d-flex align-items-center mb-1"><span
                                    class="d-inline-block bg-warning-light bullet-item me-2"></span>
                                <p class="mb-0 fw-semibold text-body lh-sm flex-1">Approved</p>
                                <h5 class="mb-0 text-body">63</h5>
                            </div>
                            <div class="d-flex align-items-center mb-1"><span
                                    class="d-inline-block bg-success-light bullet-item me-2"></span>
                                <p class="mb-0 fw-semibold text-body lh-sm flex-1">Success</p>
                                <h5 class="mb-0 text-body">56</h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="position-relative mb-sm-4 mb-xl-0">
                                <div id="totalMain" style="min-height:390px;width:100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-5 col-xxl-6">
                    <div class="card-title mb-1">
                        <h3 class="text-body-emphasis">Activity</h3>
                    </div>
                    <p class="text-body-tertiary mb-2">Recent activity across all dashboard</p>
                    <div class="col-12">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="timeline-vertical timeline-with-details">
                                    <div class="timeline-item position-relative">
                                        <div class="row g-md-3">
                                            <div class="col-12 col-md-auto d-flex">
                                                <div class="timeline-item-date order-1 order-md-0 me-md-4">
                                                    <p
                                                        class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">
                                                        01 DEC, 2023<br class="d-none d-md-block" /> 10:30 AM</p>
                                                </div>
                                                <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                                    <div
                                                        class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle">
                                                        <span class="fa-solid fa-chess text-primary-dark fs-10"></span>
                                                    </div><span class="timeline-bar border-end border-dashed"></span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="timeline-item-content ps-6 ps-md-3">
                                                    <h5 class="fs-9 lh-sm">Approving Client Request</h5>
                                                    <p class="fs-9">by <a class="fw-semibold" href="#!">
                                                            Shiro</a></p>
                                                    <p class="fs-9 text-body-secondary mb-5">
                                                        Approve and delivering client
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item position-relative">
                                        <div class="row g-md-3">
                                            <div class="col-12 col-md-auto d-flex">
                                                <div class="timeline-item-date order-1 order-md-0 me-md-4">
                                                    <p
                                                        class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">
                                                        05 DEC, 2023<br class="d-none d-md-block" /> 12:30 AM </p>
                                                </div>
                                                <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                                    <div
                                                        class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle">
                                                        <span class="fa-solid fa-dove text-primary-dark fs-10"></span>
                                                    </div>
                                                    <span class="timeline-bar border-end border-dashed"></span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="timeline-item-content ps-6 ps-md-3">
                                                    <h5 class="fs-9 lh-sm">Success Delivery</h5>
                                                    <p class="fs-9">by <a class="fw-semibold" href="#!">Shiro
                                                            Geo</a></p>
                                                    <p class="fs-9 text-body-secondary mb-5">
                                                        Successfully deliver a client product
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item position-relative">
                                        <div class="row g-md-3">
                                            <div class="col-12 col-md-auto d-flex">
                                                <div class="timeline-item-date order-1 order-md-0 me-md-4">
                                                    <p
                                                        class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">
                                                        15 DEC, 2023<br class="d-none d-md-block" /> 2:30 AM</p>
                                                </div>
                                                <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                                    <div
                                                        class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle">
                                                        <span
                                                            class="fa-solid fa-dungeon text-primary-dark fs-10"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="timeline-item-content ps-6 ps-md-3">
                                                    <h5 class="fs-9 lh-sm">Refunding a client</h5>
                                                    <p class="fs-9">by
                                                        <a class="fw-semibold" href="#!">
                                                            Kuro Shiro
                                                        </a>
                                                    </p>
                                                    <p class="fs-9 text-body-secondary mb-0">Refund becuase the client
                                                        doesn't seems to know the function of the product.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-lg-n4 my-3">
            <div class="row g-3">
                <div class="col-12">
                    <div class="card todo-list h-100">
                        <div class="card-header border-bottom-0 pb-0">
                            <div class="row justify-content-between align-items-center mb-4">
                                <div class="col-auto">
                                    <h3 class="text-body-emphasis">Reviews</h3>
                                    <p class="mb-2 mb-md-0 mb-lg-2 text-body-tertiary">Reviews of a product</p>
                                </div>
                                <div class="col-auto w-100 w-md-auto">
                                    <div class="row align-items-center g-0 justify-content-between">
                                        <div class="col-12 col-sm-auto">
                                            <div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
                                                <form class="position-relative"><input
                                                        class="form-control search-input search" type="search"
                                                        placeholder="Search review" aria-label="Search" />
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-search search-box-icon" viewBox="0 0 16 16">
                                                        <path
                                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                                    </svg>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-auto d-flex">
                                            <p class="mb-0 ms-sm-3 fs-9 text-body-tertiary fw-bold"><span
                                                    class="fas fa-filter me-1 fw-extra-bold fs-10"></span>23 review</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mx-n1 px-1 scrollbar">
                            <table class="table table-hover fs-9 mb-0 border-top border-translucent">
                                <thead>
                                    <tr>
                                        <th class="white-space-nowrap fs-9 ps-0 align-middle">
                                        </th>
                                        <th class="sort white-space-nowrap align-middle" scope="col"></th>
                                        <th class="sort white-space-nowrap align-middle" scope="col"
                                            style="min-width:360px;" data-sort="product">Product</th>
                                        <th class="sort align-middle" scope="col" data-sort="customer"
                                            style="min-width:200px;">CUSTOMER</th>
                                        <th class="sort align-middle" scope="col" data-sort="rating"
                                            style="min-width:110px;">RATING</th>
                                        <th class="sort align-middle" scope="col" style="max-width:350px;"
                                            data-sort="review">REVIEW</th>
                                        <th class="sort text-end pe-0 align-middle" scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="table-latest-review-body">
                                    @for ($j = 1; $j <= 7; $j++)
                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                            <td class="fs-9 align-middle ps-0">
                                            </td>
                                            <td class="align-middle product white-space-nowrap py-0"><a
                                                    class="d-block rounded-2 border border-translucent"
                                                    href="#"><img src="assets/img//products/60x60/1.png"
                                                        alt="" width="53" /></a></td>
                                            <td class="align-middle product white-space-nowrap"><a class="fw-semibold"
                                                    href="#">Long Gold Necklace Heart 15k Grams</a></td>
                                            <td class="align-middle customer white-space-nowrap"><a
                                                    class="d-flex align-items-center text-body" href="#">
                                                    <div class="avatar avatar-l">
                                                        <div class="avatar-name rounded-circle">
                                                            <span>{{ Str::substr('Shiro Geo', 0, 1) }}</span>
                                                        </div>
                                                    </div>
                                                    <h6 class="mb-0 ms-3 text-body">Shiro Geo</h6>
                                                </a></td>
                                            <td class="align-middle rating white-space-nowrap fs-10">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                @endfor
                                            </td>
                                            <td class="align-middle review" style="min-width:350px;">
                                                <p class="fs-9 fw-semibold text-body-highlight mb-0">This Fitbit is
                                                    fantastic!
                                                    I was trying to be in better shape and needed some motivation, so I
                                                    decided
                                                    to treat myself to a new Fitbit.</p>
                                            </td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100">
                <div class="col-12 col-sm-auto text-center">
                    <br class="d-sm-none" />2024 &copy;<a class="mx-1" href="#!">Orotime</a></p>
                </div>
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85">v1.0.0</p>
                </div>
            </div>
        </footer> --}}
        </div>

</x-layout.csr>
<script>
    orderStatisticsChart();
    affiliateReportsChart();
    salesAndTrafficChart();

    function orderStatisticsChart() {
        var chartDom = document.getElementById('orderStatistics');
        var myChart = echarts.init(chartDom);
        var option;

        option = {
            tooltip: {
                trigger: 'item'
            },
            series: [{
                name: 'Access From',
                type: 'pie',
                radius: ['40%', '70%'],
                avoidLabelOverlap: false,
                label: {
                    show: false,
                    position: 'center'
                },
                labelLine: {
                    show: false
                },
                data: [{
                        value: 1048,
                        name: 'Search Engine'
                    },
                    {
                        value: 735,
                        name: 'Direct'
                    },
                    {
                        value: 580,
                        name: 'Email'
                    },
                    {
                        value: 484,
                        name: 'Union Ads'
                    },
                    {
                        value: 300,
                        name: 'Video Ads'
                    }
                ]
            }]
        };
        option && myChart.setOption(option);
    }


    function affiliateReportsChart() {
        var chartDom = document.getElementById('affiliateChart');
        var myChart = echarts.init(chartDom);
        var option;

        option = {
            tooltip: {
                trigger: 'item'
            },
            series: [{
                name: 'Access From',
                type: 'pie',
                radius: ['40%', '70%'],
                avoidLabelOverlap: false,
                label: {
                    show: false,
                    position: 'center'
                },
                labelLine: {
                    show: false
                },
                data: [{
                        value: 1048,
                        name: 'Search Engine'
                    },
                    {
                        value: 735,
                        name: 'Direct'
                    },
                    {
                        value: 580,
                        name: 'Email'
                    },
                    {
                        value: 484,
                        name: 'Union Ads'
                    },
                    {
                        value: 300,
                        name: 'Video Ads'
                    }
                ]
            }]
        };
        option && myChart.setOption(option);
    }

    function salesAndTrafficChart() {
        var chartDom = document.getElementById('salesAndTraffic');
        var myChart = echarts.init(chartDom);
        var option;

        option = {
            toolbox: {
                show: true,
                feature: {
                    dataView: {
                        show: true,
                        readOnly: false
                    },
                    restore: {
                        show: true
                    },
                    saveAsImage: {
                        show: true
                    }
                }
            },
            calculable: true,
            xAxis: [{
                type: 'category',
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            }],
            yAxis: [{
                type: 'value'
            }],
            series: [{
                    type: 'bar',
                    data: [
                        2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3
                    ],
                    markPoint: {
                        data: [{
                                type: 'max',
                                name: 'Max'
                            },
                            {
                                type: 'min',
                                name: 'Min'
                            }
                        ]
                    },
                    markLine: {
                        data: [{
                            type: 'average',
                            name: 'Avg'
                        }]
                    }
                },
                {
                    type: 'bar',
                    data: [
                        2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3
                    ],
                    markPoint: {
                        data: [{
                                name: 'Max',
                                value: 182.2,
                                xAxis: 7,
                                yAxis: 183
                            },
                            {
                                name: 'Min',
                                value: 2.3,
                                xAxis: 11,
                                yAxis: 3
                            }
                        ]
                    },
                    markLine: {
                        data: [{
                            type: 'average',
                            name: 'Avg'
                        }]
                    }
                }
            ]
        };

        option && myChart.setOption(option);
    }
</script>
