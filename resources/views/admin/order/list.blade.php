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

                            <div class="btn-group position-static" role="group">
                                <div class="btn-group position-static text-nowrap" role="group"><button
                                        class="btn btn-oro-secondary px-7 flex-shrink-0" type="button"
                                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                        aria-expanded="false" data-bs-reference="parent">Fulfillment Status<span
                                            class="fas fa-angle-down ms-2"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Completed</a></li>
                                        <li><a class="dropdown-item" href="#">Done</a></li>
                                        <li><a class="dropdown-item" href="#">Pending</a></li>
                                        <li><a class="dropdown-item" href="#">Ongoing</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="px-4 px-lg-6 position-relative bg-body-emphasis rounded" id="orderTable"
                    data-list='{"valueNames":["order","product","customer","payment_status","date"],"page":10,"pagination":true}'>
                    <div class="table-responsive scrollbar py-5 my-3">
                        <table class="table table-responsive table-stripe fs-9 mb-0 display">
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
                                    <th class="sort align-middle pe-0" scope="col" data-sort="action"
                                        style="width: 5%;"> Action </th>
                                </tr>
                            </thead>
                            <tbody class="list" id="products-table-body">
                                @for ($i = 1; $i <= 15; $i++)
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs-9 align-middle px-0 py-3"></td>
                                        <td class="align-middle white-space-nowrap py-3 py-0 order"> <a
                                                class="fw-semibold" href="#!"> #{{ 2453 * $i }} </a> </td>
                                        <td class="align-middle fw-semibold text-body-highlight product"> 
                                            Silver Ring 1gram silver rightley 
                                        </td>
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
                                        <td class="align-middle white-space-nowrap text-body-tertiary fs-9 action">
                                            <div class="dropdown text-center">
                                                <a class="text-decoration-none text-dark" id="moreActionOrders" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i data-feather="more-horizontal" style="width: 20px; height: 20px"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="moreActionOrders">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('admin-invoice', ['oid' => encryptData('orzakar ' . $i)]) }}">
                                                            <i data-feather="eye" style="width: 16px; height: 16px"></i>
                                                            View
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#!" data-bs-toggle="modal" data-bs-target="#deleteOrder{{$i}}">
                                                            <i data-feather="trash-2" style="width: 16px; height: 16px"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#updateOrders">
                                                            <i data-feather="edit" style="width: 16px; height: 16px"></i>
                                                            Update
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="updateOrders" tabindex="-1" aria-labelledby="updateOrdersLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="updateOrdersLabel">Update Status</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="#!" method="POST">
                                                        <div class="form-input">
                                                            <label for="">Payment Status</label>
                                                            <select name="paymentStatusUpdate" id="paymentStatusUpdate" class="form-select">
                                                                <option value="1">Fully Paid</option>
                                                                <option value="2">Not Fully Paid</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-input pt-3">
                                                            <label for="">Payment Status</label>
                                                            <select name="fulfillmentStatusUpdate" id="fulfillmentStatusUpdate" class="form-select">
                                                                <option value="1">Ongoing</option>
                                                                <option value="2">Done</option>
                                                                <option value="3">Pending</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-btn mt-3">
                                                            <button class="btn btn-primary my-1 col-12" type="submit">
                                                                <i data-feather="edit" style="width: 16px; height: 16px"></i>
                                                                Update
                                                            </button>
                                                            <button class="btn border my-1 col-12" type="button" data-bs-dismiss="modal" aria-label="Close">
                                                                <i data-feather="x" style="width: 16px; height: 16px"></i>
                                                                Close
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="deleteOrder{{$i}}" tabindex="-1" aria-labelledby="deleteOrderLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteOrderLabel">Delete Product</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <div class="badge badge-secondary">
                                                        <i data-feather="alert-triangle" style="width: 25px; height: 25px; color: red"></i>
                                                    </div>
                                                    <div class="row">
                                                        <label class="my-3 text-dark fw-bold">Are you sure want to delete this product?</label>
                                                        <label class="my-3 text-muted">
                                                            This action cannot be undone. This item will go in the trash and only a developer can restore it or will be lost forever.
                                                        </label>
                                                    </div>
                                                    <form action="#!">
                                                        <button type="submit" class="btn btn-danger col-12">
                                                            <i data-feather="trash-2" style="width: 16px; height: 16px"></i>
                                                            Delete Product
                                                        </button>
                                                    </form>
                                                    <button type="button" class="btn btn-white col-12 mt-2 border" data-bs-dismiss="modal">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                    <p class="mb-0 text-body-tertiary text-opacity-85">{{ version() }}</p>
                </div>
            </div>
        </footer>
    </div>
</x-layout.admin>
