<x-layout.csr>
    @section('title', 'Category');
    <style>
        .table-fixed {
            table-layout: fixed;
            width: 100%;
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
    @include('components.csrnavtopstart')
    <div class="content">
        <nav class="mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Products</li>
                <li class="breadcrumb-item active">Category</li>
            </ol>
        </nav>
        <div class="d-flex align-items-between justify-content-between my-3">
            <div class="">
                <h2 class="mb-0">Category<span class="fw-normal text-body-tertiary ms-3">(5)</span></h2>
            </div>
            <div class="">
                <a class="btn btn-primary px-5" href="#!" data-bs-toggle="modal" data-bs-target="#addCategory">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus" viewBox="0 0 16 16">
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg>
                    Add new Categoery</a>
            </div>
        </div>
        <div class="row justify-content-between align-items-end mb-4 g-3">
            <div class="col-12 col-sm-auto">
                <div class="d-flex align-items-center">
                    <div class="search-box me-3">
                        <form class="position-relative">
                            <input class="form-control search-input search" id="search-category-csr" type="search" placeholder="Search Category, Description, Total and Date Created" aria-label="Search" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search search-box-icon" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-9">

            <div class="col-3">
                <div class="card mb-4 border-0">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="">
                            <span class="fw-bold"> Category Statistics </span> <br>
                            <small>
                                There are 10k Total Category Statistics
                            </small>
                        </div>
                    </div>
                    <div class="list-group list-group-flush">
                        <a class="list-group-item list-group-item-action border-0 py-2 d-flex justify-content-between align-items-center"
                            href="#!">
                            <div class="p-0">
                                Necklaces
                            </div>
                            <h6 class="text-secondary">
                                152
                            </h6>
                        </a>
                        <a class="list-group-item list-group-item-action border-0 py-2 d-flex justify-content-between align-items-center"
                            href="#!">
                            <div class="">
                                Bracelets
                            </div>
                            <h6 class="text-secondary">
                                152
                            </h6>
                        </a>
                        <a class="list-group-item list-group-item-action border-0 py-2 d-flex justify-content-between align-items-center"
                            href="#!">
                            <div class="">
                                Earrings
                            </div>
                            <h6 class="text-secondary">
                                152
                            </h6>
                        </a>
                        <a class="list-group-item list-group-item-action border-0 py-2 d-flex justify-content-between align-items-center"
                            href="#!">
                            <div class="">
                                Rings
                            </div>
                            <h6 class="text-secondary">
                                152
                            </h6>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <div data-list='{"valueNames":["category","description","total","date"],"page":5, "pagination": true}'
                    class="p-5 bg-body-emphasis rounded" id="listCategory">
                    <div class="mb-5">
                        <h3>Category Listing</h3>
                        <p class="text-body-tertiary">List of category on website</p>
                    </div>
                    <div class="table-responsive scrollbar">
                        <table class="table table-hover table-fixed fs-10 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort border-top border-translucent ps-0 align-middle" scope="col" style="width: 10%"
                                        data-sort="id">ID</th>
                                    <th class="sort border-top border-translucent ps-0 align-middle" scope="col" style="width: 10%"
                                        data-sort="category">Category</th>
                                    <th class="sort border-top border-translucent align-middle" scope="col" style="width: 10%"
                                        data-sort="description">Description</th>
                                    <th class="sort border-top border-translucent text-end align-middle" scope="col" style="width: 10%"
                                        data-sort="total">Total</th>
                                    <th class="sort border-top border-translucent text-end pe-0 align-middle" scope="col" style="width: 10%"
                                        data-sort="date">Date</th>
                                </tr>
                            </thead>
                            <tbody class="list" id="table-regions-by-revenue">
                                @for ($i = 1; $i <= 150; $i++)
                                    <tr>
                                        <td class="align-middle pe-0 conv-rate">
                                            <h6 class="mb-0 me-3">{{ $i }}. </h6>
                                        </td>
                                        <td class="white-space-nowrap ps-0">
                                            <div class="d-flex align-items-center category">
                                                <a href="#!" class="list-group-item list-group-item-action">
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0 text-primary fw-bold fs-9">
                                                            Necklaces
                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle users text-truncate description">
                                            <h6 class="mb-0">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad vel
                                                expedita ex earum, quod a, praesentium, nesciunt quae animi delectus
                                                quaerat mollitia vero porro nisi numquam eos! Aliquam, ut eveniet!
                                            </h6>
                                        </td>
                                        <td class="align-middle text-end transactions total">
                                            <h6 class="mb-0">
                                                1522
                                            </h6>
                                        </td>
                                        <td class="align-middle text-end pe-0 date">
                                            <h6>
                                                November 28, 2009
                                            </h6>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end py-3">
                        <div class="pagination"></div>
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
    <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="addCategoryLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryLabel">New Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="input-text mb-3">
                            <label for="">Category Title</label>
                            <input type="text" name="addNewCategory" id="addNewCategory"
                                placeholder="Add New Category" class="form-control">
                        </div>
                        <div class="input-text mb-3">
                            <label for="">Category Description</label>
                            <textarea name="categoryDescription" id="categoryDescription" cols="30" rows="10"
                                placeholder="Enter a full descripion of this category" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Save Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-layout.csr>
