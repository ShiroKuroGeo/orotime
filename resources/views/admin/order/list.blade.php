<x-layout.admin>
    @section('title', 'Admin Order');
    @include('components.navtopstart')
    <div class="content">
        <nav class="mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#!">Order</a></li>
                <li class="breadcrumb-item active">List</li>
            </ol>
        </nav>
        <div class="mb-9">
            <div class="row g-3 mb-4">
                <div class="col-auto">
                    <h2 class="mb-0">Orders</h2>
                </div>
            </div>
            <ul class="nav nav-links mb-3 mb-lg-2">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <span>All</span>
                        <span class="text-body-tertiary fw-semibold">
                            (123)
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="#">
                        <span>Completed</span>
                        <span class="text-body-tertiary fw-semibold">
                            (6,810)
                        </span>
                    </a>
                </li>
            </ul>
            <div id="orderTable">
                <div class="mb-4">
                    <div class="row g-3">
                        <div class="col-auto">
                            <div class="search-box">
                                <form class="position-relative">
                                    <input class="form-control search-input search" id="search-order" type="search"
                                        placeholder="Search orders" aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-search search-box-icon" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                    </svg>
                                </form>
                            </div>
                        </div>
                        <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                            <div class="btn-group position-static" role="group">
                                <div class="btn-group position-static text-nowrap" role="group"><button
                                        class="btn btn-oro-secondary px-7 flex-shrink-0" type="button"
                                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                        aria-expanded="false" data-bs-reference="parent">Payment Status<span
                                            class="fas fa-angle-down ms-2"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Fully Paid</a></li>
                                        <li><a class="dropdown-item" href="#">Flexi Pay</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="px-4 px-lg-6 position-relative bg-body-emphasis rounded" id="orderTable"
                    data-list='{"valueNames":["order","product","customer","payment_status","date"],"page":10,"pagination":true}'>
                    <div class="table-responsive scrollbar py-5 my-3">
                        <table class="table table-responsive table-hover table-stripe fs-9 mb-0 display">
                            <thead>
                                <tr>
                                    <th class="white-space-nowrap fs-9 align-middle ps-0" style="width: 1%;">
                                    </th>
                                    <th class="sort white-space-nowrap align-middle pe-3" scope="col"
                                        data-sort="order" style="width: 10%;">ORDER</th>
                                    <th class="sort align-middle" scope="col" data-sort="product"
                                        style="width: 15%;"> PRODUCT </th>
                                    <th class="sort align-middle ps-8" scope="col" data-sort="customer"
                                        style="width: 15%;"> CUSTOMER </th>
                                    <th class="sort align-middle text-start pe-3" scope="col"
                                        data-sort="payment_status" style="width: 15%;"> PAYMENT STATUS </th>
                                    <th class="sort align-middle pe-0" scope="col" data-sort="date"
                                        style="width: 15%;"> DATE </th>
                                </tr>
                            </thead>
                            <tbody class="list" id="products-table-body">
                                @for ($i = 1; $i <= 15; $i++)
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static" onclick="window.location.href = '{{ route('admin-invoice', ['oid' => encryptData( 'orzakar ' . $i)]) }}'">
                                        <td class="fs-9 align-middle px-0 py-3"></td>
                                        <td class="align-middle white-space-nowrap py-3 py-0 order"> <a
                                                class="fw-semibold" href="#!"> #{{ 2453 * $i }} </a> </td>
                                        <td class="align-middle fw-semibold text-body-highlight product"> Silver Ring
                                            1gram silver rightley </td>
                                        <td class="align-middle white-space-nowrap ps-8 customer">
                                            <a class="d-flex align-items-center text-body" type="button"
                                                data-bs-toggle="modal" data-bs-target="#viewOrderModal">
                                                <div class="avatar avatar-m">
                                                    <img class="rounded-circle"
                                                        src="{{ asset('images/customer-images/user_profile.jpg') }}"
                                                        alt="" />
                                                </div>
                                                <h6 class="mb-0 ms-3 text-body"> Carry Anna <br>
                                                    <small style="color: #dedede">Customer / Guest</small>
                                                </h6>
                                            </a>
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap text-start fw-bold text-body-tertiary payment_status">
                                            <span class="badge badge-oro fs-10 badge-oro-primary"><span
                                                    class="badge-label">Fully Paid</span> <span class="ms-1"
                                                    data-feather="x"
                                                    style="height:12.8px;width:12.8px;"></span></span>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-body-tertiary fs-9 date"> Dec
                                            12, 12:56 PM </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end align-items-end pt-3">
                            <div class="pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100">
                <div class="col-12 col-sm-auto text-center">
                    <br class="d-sm-none" />2024 &copy;<a class="mx-1 text-primary-light" href="#!">Orotime</a>
                    </p>
                </div>
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85">v1.0.0</p>
                </div>
            </div>
        </footer>
    </div>
</x-layout.admin>
