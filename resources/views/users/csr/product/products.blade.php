<x-layout.csr>
    @section('title', 'csr Products');
    @include('components.csrnavtopstart')

    <div class="content">

        <nav class="mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Product</li>
                <li class="breadcrumb-item"><a href="#!">Lists</a></li>
            </ol>
        </nav>
        <div class="">
            <div class="row g-3 mb-2">
                <div class="col-auto">
                    <h2 class="mb-0">Products</h2>
                </div>
            </div>
            <div id="products">
                <div class="mb-1">
                    <div class="d-flex flex-wrap gap-3">
                        <div class="search-box">
                                <input class="form-control search-input" id="search-product-csr" type="search" placeholder="Search products" aria-label="Search" />
                                <i data-feather="search" class="search-box-icon fs-base p-1"></i>
                        </div>
                        <div class="ms-xxl-auto">
                            <a class="btn btn-primary" id="addBtn" href="{{ route('product-csr-add') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-plus me-2" viewBox="0 0 16 16">
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                </svg>
                                Add product
                            </a>
                        </div>
                    </div>
                </div>

                <div class="px-4 px-lg-6 position-relative bg-body-emphasis rounded" id="productTableInCSR"
                    data-list='{"valueNames":["name","price","category","poster","date"],"page":10,"pagination":true}'>
                    <div class="table-responsive scrollbar p-5 my-3" >
                        <table class="table table-responsive table-hover table-stripe fs-9 mb-0 display">
                            <thead>
                                <tr>
                                    <th class="sort white-space-nowrap align-middle fs-10" scope="col"
                                        style="width:70px;"></th>
                                    <th class="sort white-space-nowrap align-middle ps-4" scope="col"
                                        style="width:350px;" data-sort="name">PRODUCT NAME</th>
                                    <th class="sort align-middle text-start ps-4" scope="col" data-sort="price"
                                        style="width:150px;">PRICE</th>
                                    <th class="sort align-middle ps-4" scope="col" data-sort="category"
                                        style="width:150px;">CATEGORY</th>
                                    <th class="sort align-middle fs-8 text-center ps-4" scope="col"
                                        style="width:125px;"></th>
                                    <th class="sort align-middle ps-4" scope="col" data-sort="poster"
                                        style="width:300px;">POSTER</th>
                                    <th class="sort align-middle ps-4" scope="col" data-sort="date"
                                        style="width:50px;">PUBLISHED ON</th>
                                    <th class="sort text-start align-middle pe-0 ps-4" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list" id="products-table-body">
                                @for ($i = 1; $i <= 150; $i++)
                                    <tr class="position-static btn-reveal-trigger">
                                        <td class="align-middle white-space-nowrap py-0">
                                            <a class="d-block rounded-2 m-2"
                                                href="{{ route('product-csr-details', 123) }}">
                                                <img src="{{ asset('images/product-images/earring.jpg') }}"
                                                    alt="" class="img-fluid rounded" height="50"
                                                    width="50" />
                                            </a>
                                        </td>
                                        <td class="name align-middle ps-4"><a class="fw-semibold line-clamp-3 mb-0"
                                                href="{{ route('product-csr-details', 123) }}">White Necklace Heart 1k
                                                grams Silver White Gold Japan</a></td>
                                        <td
                                            class="price align-middle white-space-nowrap fw-bold text-body-tertiary ps-4">
                                            $309</td>
                                        <td
                                            class="category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold">
                                            Necklace</td>
                                        <td class="align-middle review fs-8 text-center ps-4">
                                            <div class="d-toggle-container">
                                                <div class="d-block-hover"><span
                                                        class="fas fa-star text-warning"></span></div>
                                                <div class="d-none-hover"><span class="far fa-star text-warning"></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="poster align-middle text-start fw-semibold ps-4">Shiro Geo
                                            {{ $i }}</td>
                                        <td
                                            class="time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4">
                                            Nov 12, 10:45 PM</td>
                                        <td
                                            class="align-middle white-space-nowrap pe-0 ps-4 btn-reveal-trigger text-end pe-3">
                                            <div class="btn-reveal-trigger position-static"><button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="10" fill="currentColor"
                                                        class="bi bi-three-dots fs-10" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end py-2">
                                                    <a class="dropdown-item"
                                                        href="{{ route('product-csr-details', 123) }}">View</a>
                                                    <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
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
                    <br class="d-sm-none" />2024 &copy;<a class="mx-1" href="#!">Orotime</a></p>
                </div>
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85">v1.0.0</p>
                </div>
            </div>
        </footer>
    </div>
</x-layout.csr>
