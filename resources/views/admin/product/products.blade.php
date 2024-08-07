<x-layout.admin>
    @section('title', 'Admin Products');
    @include('components.navtopstart')
    <?php $count = 120; ?>

    <div class="content py-5">

        <div class="">

            <div class="g-3 mt-5 d-flex justify-content-between">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Products
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('product-csr-add') }}">
                                <i data-feather="file-plus" class="me-2"></i>
                                Add Product
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i data-feather="search" class="me-2"></i>
                                Search Product
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="search-item d-flex align-items-center">
                    <div class="d-flex justify-content-end gap-3">
                        <a href="#list" class="text-dark" id="matrixFormatList">
                            <i data-feather="list"></i>
                        </a>
                        <a href="#grid" class="text-dark" id="matrixFormatGrid">
                            <i data-feather="grid"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div id="products">
                <div class="d-flex justify-content-end d-none" id="searchProductOnList">
                    <div class="search-box">
                        <input class="form-control search-input" id="search-product-csr" type="search"
                            placeholder="Search Products, Price, Category, Poster and Date Created"
                            aria-label="Search" />
                        <i data-feather="search" class="search-box-icon fs-base p-1"></i>
                    </div>
                </div>
                <div class="px-4 px-lg-6 position-relative bg-body-emphasis rounded" id="gridProduct">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-5 g-2 card-group py-5 px-0 my-3">
                        @for ($i = 0; $i < $count; $i++)
                            <div class="col">
                                <div class="nav-link card p-3 m-1">
                                    <div class="card-title d-flex justify-content-between align-items-center">
                                        <h6 class="text-truncate" style="width: 80%">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae,
                                            ex necessitatibus enim temporibus itaque voluptatum iusto dolorum
                                            vero inventore pariatur nobis suscipit eum atque iure dolor
                                            repellendus modi porro earum.</h6>
                                        <h6>
                                            <div class="dropdown">
                                                <a href="#" class="text-decoration-none text-dark" type="button"
                                                    id="moreVerticalProductGrid" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i data-feather="more-vertical" style="width: 15px"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start"
                                                    aria-labelledby="moreVerticalProductGrid">
                                                    <a href="{{ route('product-csr-details', 123) }}"
                                                        class="text-decoration-none">
                                                        <button class="dropdown-item d-flex align-items-center"
                                                            type="button">
                                                            <i data-feather="info" class="fs-base p-1"></i>
                                                            Information
                                                        </button>
                                                    </a>
                                                    <a>
                                                        <button class="dropdown-item d-flex align-items-center"
                                                            type="button">
                                                            <i data-feather="edit" class="fs-base p-1"></i>
                                                            Edit
                                                        </button>
                                                    </a>
                                                    <a>
                                                        <button class="dropdown-item d-flex align-items-center"
                                                            type="button">
                                                            <i data-feather="trash-2" class="fs-base p-1"></i>
                                                            Move to Trash
                                                        </button>
                                                    </a>
                                                </ul>
                                            </div>
                                        </h6>
                                    </div>
                                    <img class="card-img-top"
                                        src="{{ asset('images/orotime-images/product-image.jpg') }}"
                                        alt="product Images" />
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="px-4 px-lg-6 position-relative bg-body-emphasis rounded" id="productTable"
                    data-list='{"valueNames":["name","price","category","poster","date"],"page":10,"pagination":true}'>
                    <div class="table-responsive scrollbar py-5 px-0 my-3">
                        <table class="table table-responsive table-hover table-stripe fs-9 mb-0 display d-none"
                            id="listProduct">
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
                                @for ($i = 1; $i <= $count; $i++)
                                    <tr class="position-static btn-reveal-trigger">
                                        <td class="align-middle white-space-nowrap py-0">
                                            <a class="d-block rounded-2 m-2"
                                                href="{{ route('product-csr-details', 123) }}">
                                                <img src="{{ asset('images/product-images/earring.jpg') }}"
                                                    alt="" class="img-fluid rounded" height="50"
                                                    width="50" />
                                            </a>
                                        </td>
                                        <td class="name align-middle ps-4">
                                            <a class="fw-semibold line-clamp-3 mb-0"
                                                href="{{ route('product-csr-details', 123) }}">
                                                White Necklace Heart 1k grams Silver White Gold Japan
                                            </a>
                                        </td>
                                        <td
                                            class="price align-middle white-space-nowrap fw-bold text-body-tertiary ps-4">
                                            $309
                                        </td>
                                        <td
                                            class="category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold">
                                            Necklace</td>
                                        <td class="align-middle review fs-8 text-center ps-4">
                                            <div class="d-toggle-container">
                                                <div class="d-block-hover"><span
                                                        class="fas fa-star text-warning"></span></div>
                                                <div class="d-none-hover"><span
                                                        class="far fa-star text-warning"></span>
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
                                            <div class="btn-reveal-trigger position-static">
                                                <a class="dropdown-caret-none transition-none btn-reveal fs-10"
                                                    href="#" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="10" fill="currentColor"
                                                        class="bi bi-three-dots fs-10" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end py-2">
                                                    <a href="{{ route('product-csr-details', 123) }}">
                                                        <button class="dropdown-item d-flex align-items-center"
                                                            type="button">
                                                            <i data-feather="info" class="fs-base p-1"></i>
                                                            Information
                                                        </button>
                                                    </a>
                                                    <a>
                                                        <button class="dropdown-item d-flex align-items-center"
                                                            type="button">
                                                            <i data-feather="edit" class="fs-base p-1"></i>
                                                            Edit
                                                        </button>
                                                    </a>
                                                    <a>
                                                        <button class="dropdown-item d-flex align-items-center"
                                                            type="button">
                                                            <i data-feather="trash-2" class="fs-base p-1"></i>
                                                            Move to Trash
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end align-items-end pt-3 d-none" id="paginatedProduct">
                            <div class="pagination"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</x-layout.admin>
