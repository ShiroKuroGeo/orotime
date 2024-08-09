<x-layout.customerApp>
    <div class="container-fluid">
        <div class="content my-5">
            <div class="mb-9">
                <h2 class="mb-2">Refund</h2>
                <div class="row align-items-center mb-3 gx-3 gy-2">
                    <div class="col-12 col-sm-auto flex-grow-1">
                        <div class="row align-items-center flex-wrap gy-1">
                            <div class="col-auto flex-grow-1">
                                <p class="text-body-secondary lh-sm mb-0">Customer ID : <a class="fw-bold ms-1" href="#!">2364847</a></p>
                            </div>
                            <div class="col-auto">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle dropdown-caret-none px-0 text-body" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        More action
                                        <span class="fas fa-chevron-down ms-2 fs-10"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li><a class="dropdown-item" href="#">Cancel</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                <div class="row gx-5">
                    <div class="col-12 col-xl-8 col-xxl-9">
                        <div id="orderTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":10}'>
                            <div class="table-responsive scrollbar">
                                <table class="table position-relative z-2 mb-4">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="fs-sm fw-normal py-3 ps-0"><span class="text-body">Product</span></th>
                                            <th scope="col" class="text-body fs-sm fw-normal py-3 d-xl-table-cell"><span class="text-body">Price</span></th>
                                            <th scope="col" class="text-body fs-sm fw-normal py-3 d-md-table-cell"><span class="text-body">Quantity</span></th>
                                            <th scope="col" class="text-body fs-sm fw-normal py-3 d-md-table-cell"><span class="text-body">Total</span></th>
                                            <th scope="col" class="py-0 px-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        @for ($i = 1; $i <= 5; $i++) 
                                            <tr>
                                                <td class="py-3 ps-0">
                                                    <div class="d-flex align-items-center">
                                                        <a class="position-relative flex-shrink-0" href="shop-product-grocery.html">
                                                            <img src="{{ asset('images/orotime-images/follow1.jpg') }}" width="100" alt="Thumbnail">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="h6 py-3 d-xl-table-cell"> $3.12 <del class="text-body-tertiary fs-sm fw-normal"> $4.05 </del> </td>
                                                <td class="py-3 d-md-table-cell">
                                                    <div class="count-input rounded-pill">
                                                        <button type="button" class="btn btn-icon" data-decrement="" aria-label="Decrement quantity">
                                                            <i data-feather="minus" style="width: 16px; height: 16px"></i>
                                                        </button>
                                                        <input type="number" class="form-control" value="3" readonly="">
                                                        <button type="button" class="btn btn-icon" data-increment="" aria-label="Increment quantity">
                                                            <i data-feather="plus" style="width: 16px; height: 16px"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                                <td class="h6 py-3 d-md-table-cell"> $9.36 </td>
                                                <td class="text-end py-3 px-0">
                                                    <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end py-3 border-bottom border-translucent mb-6">
                            <p class="text-body-emphasis fw-semibold lh-sm mb-0">Items subtotal :</p>
                            <p class="text-body-emphasis fw-bold lh-sm mb-0">$1690</p>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 col-xxl-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h3 class="card-title mb-4">Summary</h3>
                                        <div>
                                            <div class="d-flex justify-content-between">
                                                <p class="text-body fw-semibold">Items subtotal :</p>
                                                <p class="text-body-emphasis fw-semibold">$691</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="text-body fw-semibold">Discount :</p>
                                                <p class="text-danger fw-semibold">-$59</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="text-body fw-semibold">Tax :</p>
                                                <p class="text-body-emphasis fw-semibold">$126.20</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="text-body fw-semibold">Subtotal :</p>
                                                <p class="text-body-emphasis fw-semibold">$665</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="text-body fw-semibold">Shipping Cost :</p>
                                                <p class="text-body-emphasis fw-semibold">$30</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between border-top border-translucent border-dashed pt-4">
                                            <h4 class="mb-0">Total :</h4>
                                            <h4 class="mb-0">$695.20</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Refund Amount</h4><input class="form-control mb-4" id="refundInput" type="text" placeholder="Amount" /><button class="btn btn-primary w-100">Refund $500</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.customerApp>