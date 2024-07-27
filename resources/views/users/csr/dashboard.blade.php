<x-layout.csr>

    @section('title', 'CSR Dashboard');
    @include('components.csrnavtopstart')
    <div class="content">
        <div class="row gy-3 mb-6 justify-content-between">
            <div class="col-md-9 col-auto">
                <img src="{{ asset('images/customer-images/user_profile.jpg') }}" alt="" class="img-thumbnail mb-2"
                    height="150" width="150">
                <h2 class="mb-2 text-body-emphasis">CSR - Shiro Geo</h2>
                <h5 class="text-body-tertiary fw-semibold">Customer Service Representative</h5>
            </div>
        </div>
        <div class="row mb-3 gy-6">
            <div class="col-12 col-xxl-2">
                <div class="row align-items-center g-3 g-xxl-0 h-100 ">
                    <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                                class="bi bi-bag-check-fill fs-4 lh-1text-primary-dark " viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0m-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z" />
                            </svg>
                            <div class="ms-2">
                                <div class="d-flex align-items-end">
                                    <h2 class="mb-0 me-2">32</h2><span class="fs-7 fw-semibold text-body">Total
                                        Orders</span>
                                </div>
                                <p class="text-body-secondary fs-9 mb-0">Orders Done</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                        <div class="d-flex align-items-center">
                            <div class="icon-together">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45"
                                    fill="currentColor"
                                    class="bi bi-box-seam-fill fs-4 lh-1 text-warning-dark position-relative"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                                </svg>
                            </div>
                            <div class="ms-2">
                                <div class="d-flex align-items-end">
                                    <h2 class="mb-0 me-2">94</h2><span class="fs-7 fw-semibold text-body">Pending
                                        Order</span>
                                </div>
                                <p class="text-body-secondary fs-9 mb-0">Awaiting Process</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                                class="fs-4 lh-1 bi bi-file-earmark-text-fill text-info-dark" viewBox="0 0 16 16">
                                <path
                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                            </svg>
                            <div class="ms-2">
                                <div class="d-flex align-items-end">
                                    <h2 class="mb-0 me-2">23</h2><span
                                        class="fs-7 fw-semibold text-body">Invoices</span>
                                </div>
                                <p class="text-body-secondary fs-9 mb-0">Soon to be cleared</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-10 col-xxl-10">
                <div id="cs-chart-main" style="min-height: 40vh; min-width: 100%"></div>
            </div>
        </div>
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-7 pb-3 border-y">
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
                                                {{-- <span class="fa fa-star text-warning"></span>
                                            <span class="fa fa-star text-warning"></span>
                                            <span class="fa fa-star text-warning"></span>
                                            <span class="fa fa-star text-warning"></span>
                                            <span class="fa fa-star text-warning"></span> --}}
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
        </footer>
    </div>

</x-layout.csr>
