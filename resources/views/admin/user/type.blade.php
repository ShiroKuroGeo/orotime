<x-layout.admin>
    @section('title', 'Admin User');
    @include('components.navtopstart')
    <div class="content">
        <nav class="mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#!">User</a></li>
                <li class="breadcrumb-item"><a href="#!">Type</a></li>
                <li class="breadcrumb-item active text-capitalize">{{ Request::route('type') }}</li>
            </ol>
        </nav>
        <div class="mb-9">
            <div class="row g-2 mb-4">
                <div class="col-auto">
                    <h2 class="mb-0 text-uppercase">{{ Request::route('type') }}</h2>
                </div>
            </div>
            <ul class="nav nav-links mb-3 mb-lg-2">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <span>All</span>
                        <span class="text-body-tertiary fw-semibold">(10)</span>
                    </a>
                </li>
                @if (Request::route('type') == 'referral')
                    <li class="nav-item ms-3">
                        <a class="nav-link active" aria-current="page" href="#!">
                            <span>Total Earned of all user is </span>
                            <span class="text-body-tertiary fw-semibold">( {{ 10 * 8742 }} )</span>
                        </a>
                    </li>
                @endif
            </ul>
            <div id="products"
                data-list='{"valueNames":["customer","email","total-orders","total-spent","city","last-seen","last-order"],"page":10,"pagination":true}'>
                <div class="mb-4">
                    <div class="row g-3">
                        <div class="col-auto">
                            <div class="search-box">
                                <form class="position-relative"><input class="form-control search-input search"
                                        type="search" placeholder="Search {{ Request::route('type') }} user"
                                        aria-label="Search" />
                                    <i data-feather="search" class="fs-base p-1 search-box-icon"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @if (Request::route('type') == 'csr')
                    <div class="table-responsive scrollbar mx-n1 px-1">
                        <table class="table fs-9 mb-0 leads-table border-top border-translucent">
                            <thead>
                                <tr>
                                    <th class="white-space-nowrap fs-9 align-middle ps-0"
                                        style="max-width:20px; width:18px;">
                                        Id
                                    </th>
                                    <th class="sort white-space-nowrap align-middle text-uppercase ps-0" scope="col"
                                        data-sort="name" style="width:25%;">Name</th>
                                    <th class="sort align-middle ps-4 pe-5 text-uppercase border-end border-translucent"
                                        scope="col" data-sort="email" style="width:15%;">
                                        <div class="d-inline-flex flex-center">
                                            <div
                                                class="d-flex align-items-center px-1 py-1 bg-success-subtle rounded me-2">
                                                <span class="text-success-dark fs-base p-1" data-feather="mail"></span>
                                            </div>
                                            <span>Email</span>
                                        </div>
                                    </th>
                                    <th class="sort align-middle ps-4 pe-5 text-uppercase border-end border-translucent"
                                        scope="col" data-sort="phone" style="width:15%; min-width: 180px;">
                                        <div class="d-inline-flex flex-center">
                                            <div
                                                class="d-flex align-items-center px-1 py-1 bg-primary-subtle rounded me-2">
                                                <span class="text-primary-dark fs-base p-1" data-feather="phone"></span>
                                            </div>
                                            <span>Phone</span>
                                        </div>
                                    </th>
                                    <th class="sort align-middle ps-4 pe-5 text-uppercase border-end border-translucent"
                                        scope="col" data-sort="contact" style="width:15%;">
                                        <div class="d-inline-flex flex-center">
                                            <div
                                                class="d-flex align-items-center px-1 py-1 bg-info-subtle rounded me-2">
                                                <span class="text-info-dark fs-base p-1" data-feather="user"></span>
                                            </div>
                                            <span>Deparment</span>
                                        </div>
                                    </th>
                                    <th class="sort align-middle ps-4 pe-5 text-uppercase border-end border-translucent"
                                        scope="col" data-sort="company" style="width:15%;">
                                        <div class="d-inline-flex flex-center">
                                            <div
                                                class="d-flex align-items-center px-1 py-1 bg-warning-subtle rounded me-2">
                                                <span class="text-warning-dark fs-base p-1" data-feather="grid"></span>
                                            </div>
                                            <span>Status</span>
                                        </div>
                                    </th>
                                    <th class="sort align-middle ps-4 pe-5 text-uppercase" scope="col"
                                        data-sort="date" style="width:15%;">Create date</th>
                                    <th class="sort text-end align-middle pe-0 ps-4" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list" id="leal-tables-body">
                                @for ($i = 1; $i <= 10; $i++)
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs-9 align-middle">
                                            {{ $i }}
                                        </td>
                                        <td class="name align-middle white-space-nowrap ps-0">
                                            <div class="d-flex align-items-center"><a href="#!">
                                                    <div class="avatar avatar-xl me-3"><img class="rounded-circle"
                                                            src="{{ asset('images/customer-images/user_profile.jpg') }}"
                                                            alt="" /></div>
                                                </a>
                                                <div><a class="fs-8 fw-bold" href="#!">Shiro
                                                        {{ $i }}</a>
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0 text-body-highlight fw-semibold fs-9 me-2">
                                                            Marketing
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="email align-middle white-space-nowrap fw-semibold ps-4 border-end border-translucent">
                                            <a class="text-body-highlight"
                                                href="mailto:shiro@gmail.com">shiro@gmail.com</a>
                                        </td>
                                        <td
                                            class="phone align-middle white-space-nowrap fw-semibold ps-4 border-end border-translucent">
                                            <a class="text-body-highlight" href="callto:+63 912 3456 789">+63 912 3456
                                                789</a>
                                        </td>
                                        <td
                                            class="contact align-middle white-space-nowrap ps-4 border-end border-translucent fw-semibold text-body-highlight">
                                            Designer Marketing</td>
                                        <td
                                            class="company align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4 border-end border-translucent fw-semibold text-body-highlight">
                                            <span class="badge bg-primary">Active</span> ||
                                            <span class="badge bg-warning">Inactive</span>
                                        </td>
                                        <td
                                            class="date align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4 text-body-tertiary">
                                            Jan 01, 12:56 PM</td>
                                        <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                                            <div class="btn-reveal-trigger position-static"><button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-three-dots" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                    </svg></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2">
                                                    <a class="dropdown-item text-info"
                                                        href="{{ route('user-details', ['uid' => '1', 'type' => Request::route('type')]) }}">View</a>
                                                    <a class="dropdown-item text-primary" href="#Edit">Edit</a>
                                                    <a class="dropdown-item text-danger" href="#Remove">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                @endif
                @if (Request::route('type') == 'referral')
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 row-cols-xxl-4 g-3 mb-9">
                        @for ($i = 1; $i <= 10; $i++)
                            <div class="col">
                                <div class="card h-100 hover-actions-trigger">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Shiro George Alfeser</h4>
                                            <div class="hover-actions top-0 end-0 mt-4 me-4">
                                                <div class="dropdown">
                                                    <button class="btn btn-primary btn-icon flex-shrink-0"
                                                        role="button" id="dropdownMenuLink"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                                        </svg>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('user-details', ['uid' => '1', 'type' => Request::route('type')]) }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-eye" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                                                    <path
                                                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                                                </svg>
                                                                View
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{ asset('images/customer-images/user_profile.jpg') }}"
                                            class="img-fluid rounded-2" alt="">
                                        <span class="badge badge-oro fs-10 mb-4 badge-oro-success">
                                            completed
                                        </span>
                                        <div class="d-flex align-items-start mb-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor"
                                                class="bi bi-credit-card me-2 text-body-tertiary fs-9 fw-extra-bold"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z" />
                                                <path
                                                    d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                                            </svg>
                                            <p class="fw-bold mb-0 lh-1">Earned : <span
                                                    class="ms-1 text-body-emphasis">8,742$</span></p>
                                        </div>
                                        <div class="d-flex justify-content-between text-body-tertiary fw-semibold">
                                            <p class="mb-2"> Progress</p>
                                            <p class="mb-2 text-body-emphasis">100%</p>
                                        </div>
                                        <div class="progress bg-success-subtle">
                                            <div class="progress-bar rounded bg-success" role="progressbar"
                                                aria-label="Success example" style="width: 100%" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex align-items-center mt-4">
                                            <p class="mb-0 fw-bold fs-9">Started :<span
                                                    class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 17th
                                                    Nov.
                                                    2020</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                @endif
                @if (Request::route('type') == 'customer')
                    <div
                        class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                        <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                            <table class="table table-sm fs-9 mb-0">
                                <thead>
                                    <tr>
                                        <th class="sort align-middle pe-5" scope="col" data-sort="id"
                                            style="width:10%;">
                                            Customer Id</th>
                                        <th class="sort align-middle pe-5" scope="col" data-sort="Customer"
                                            style="width:10%;">Full Name</th>
                                        <th class="sort align-middle pe-5" scope="col" data-sort="Email"
                                            style="width:10%;">Email</th>
                                        <th class="sort align-middle pe-5" scope="col" data-sort="Address"
                                            style="width:15%;">Address</th>
                                        <th class="sort align-middle" scope="col" data-sort="Phone"
                                            style="width:10%">
                                            Phone Number</th>
                                        <th class="sort align-middle" scope="col" data-sort="Phone"
                                            style="width:10%">
                                            Status</th>
                                        <th class="sort align-middle" scope="col" data-sort="date"
                                            style="width:10%">Date
                                            Started</th>
                                        <th class="sort align-middle" scope="col" data-sort="update"
                                            style="width:10%">
                                            Update
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="customers-table-body">
                                    @for ($i = 1; $i <= 10; $i++)
                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                            <td class="customer align-middle white-space-nowrap pe-5">
                                                Customer-{{ $i }}
                                            </td>
                                            <td class="customer align-middle white-space-nowrap pe-5 py-3"><a
                                                    class="d-flex align-items-center text-body-emphasis"
                                                    href="../../../apps/e-commerce/admin/customer-details.html">
                                                    <div class="avatar avatar-m"><img class="rounded-circle"
                                                            src="{{ asset('images/customer-images/user_profile.jpg') }}"
                                                            alt="" /></div>
                                                    <p class="mb-0 ms-3 text-body-emphasis fw-bold">Shiro George
                                                        Alfeser</p>
                                                </a></td>
                                            <td class="email align-middle white-space-nowrap pe-5"><a
                                                    class="fw-semibold"
                                                    href="mailto:inocgeorgealfeser@gmail.com">inocgeorgealfeser@gmail.com</a>
                                            </td>
                                            <td
                                                class="Address align-middle white-space-nowrap fw-semibold text-body-highlight">
                                                Poblacion Cordova Cebu
                                            </td>
                                            <td
                                                class="Phone align-middle white-space-nowrap fw-semibold text-body-highlight">
                                                +63 912 3456 789
                                            </td>
                                            <td
                                                class="date align-middle white-space-nowrap fw-bold text-body-emphasis">
                                                <span class="badge bg-info">Active</span> && ||
                                                <span class="badge bg-warning">Inactive</span>
                                            </td>
                                            <td
                                                class="date align-middle white-space-nowrap fw-bold text-body-emphasis">
                                                November 29, 2001
                                            </td>
                                            <td
                                                class="update align-middle text-center white-space-nowrap fw-bold text-body-emphasis">
                                                <a href="#!" class="badge bg-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-trash text-danger" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                    </svg>
                                                </a>
                                                <a href="#!" class="badge bg-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-pencil-square text-primary" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                    </svg>
                                                </a>
                                                <a href="#!" class="badge bg-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-eye text-primary-dark"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                                        <path
                                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                        <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                            <div class="col-auto d-flex">
                                <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body"
                                    data-list-info="data-list-info"></p><a class="fw-semibold" href="#!"
                                    data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                                        data-fa-transform="down-1"></span></a><a class="fw-semibold d-none"
                                    href="#!" data-list-view="less">View Less<span
                                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                            <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span
                                        class="fas fa-chevron-left"></span></button>
                                <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                    data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                            </div>
                        </div>
                    </div>
                @endif
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
</x-layout.admin>
