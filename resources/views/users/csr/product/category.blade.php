<x-layout.csr>
    @section('title', 'csr Add Products');
    @include('components.csrnavtopstart')
    <div class="content">
        <nav class="mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Products</li>
                <li class="breadcrumb-item active">Category</li>
            </ol>
        </nav>
        <div class="row gx-6 gy-3 mb-4 align-items-center">
            <div class="col-auto">
                <h2 class="mb-0">Category<span class="fw-normal text-body-tertiary ms-3">(5)</span></h2>
            </div>
            <div class="col-auto">
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
                        <form class="position-relative"><input class="form-control search-input search" type="search"
                                placeholder="Search projects" aria-label="Search" />
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
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 row-cols-xxl-4 g-3 mb-9">
            @for ($i = 1; $i <= 5; $i++)
                <div class="col">
                    <div class="card h-100 hover-actions-trigger">
                        <div class="card-body">

                            <div class="d-flex align-items-center">
                                <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Necklace <small
                                        class="fw-light text-muted">(100)</small></h4>
                                <div class="hover-actions top-0 end-0 mt-4 me-4">
                                    <a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#navbarDropdownUser"
                                        role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                        aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                            <path
                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
                                        aria-labelledby="navbarDropdownUser">
                                        <div class="position-relative border-0">
                                            <div class="overflow-auto border-top shadow-top g-5">
                                                <ul class="nav d-flex flex-column my-2 pb-1">
                                                    <li class="nav-item">
                                                        <a class="nav-link px-3 d-block py-auto" href="#!">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-x-circle" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                                <path
                                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                                            </svg>
                                                            <span>Remove</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <img src="{{ asset('images/orotime-images/follow' . $i . '.jpg') }}"
                                class="img-thumbnail border rounded" alt="">

                            <span class="badge badge-oro fs-10 mb-4 badge-oro-success">completed</span>

                            <div class="progress bg-success-subtle">
                                <div class="progress-bar rounded bg-success" role="progressbar"
                                    aria-label="Success example" style="width: 100%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0 fw-bold fs-9">Category Description : <br>
                                    <span class="fw-semibold text-body-tertiary text-opactity-85"> This is flyer in
                                        instagram. Please follow for follow{{ $i }} </span>
                                </p>
                            </div>

                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0 fw-bold fs-9">Started :<span
                                        class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 17th Nov.
                                        2020</span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            @endfor

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
