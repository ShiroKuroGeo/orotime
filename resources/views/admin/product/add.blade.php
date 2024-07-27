<x-layout.admin>
    @section('title', 'Admin Add Products');
    @include('components.navtopstart')
    <div class="content">
        <nav class="mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Product</li>
                <li class="breadcrumb-item"><a href="#!" class="text-primary-light">Add</a></li>
            </ol>
        </nav>
        <form class="mb-9">
            <div class="row g-3 flex-between-end mb-5">
                <div class="col-auto">
                    <h2 class="mb-2">Add a product</h2>
                    <h5 class="text-body-tertiary fw-semibold">Orders placed across your website</h5>
                </div>
                <div class="col-auto">
                    <button class="btn btn-oro-secondary me-2 mb-2 mb-sm-0" type="button">Discard</button>
                    <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Publish product</button>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-12 col-xl-8">
                    <div class="card border-0">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Basic Information</h4>
                            <label for="productNameTitle">
                                <h4>Product Title</h4>
                                <small>Recommended Length: 25 character or more.</small>
                            </label>
                            <input class="form-control mb-5" name="productname" type="text"
                                placeholder="Write title here..." />
                            <div class="mb-6">
                                <label for="productDescription">
                                    <h4>Product Description</h4>
                                    <small>Recommended Description: 100 character or more.</small>
                                </label>
                                <textarea class="form-control" rows="10" cols="3" name="content"></textarea>
                            </div>
                            <h4 class="mb-3">Inventory</h4>
                            <div class="row g-0 border-top border-bottom">
                                <div class="col-sm-4">
                                    <div class="nav flex-sm-column border-bottom border-bottom-sm-0 border-end-sm fs-9 vertical-tab h-100 justify-content-between"
                                        role="tablist" aria-orientation="vertical">

                                        <a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center active"
                                            id="pricingTab" data-bs-toggle="tab" data-bs-target="#pricingTabContent"
                                            role="tab" aria-controls="pricingTabContent" aria-selected="true">
                                            <span class="me-sm-2 fs-4 nav-icons" data-feather="tag"></span>
                                            <span class="d-none d-sm-inline">Pricing</span>
                                        </a>

                                        <a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                                            id="QuantityTab" data-bs-toggle="tab" data-bs-target="#QuantityTabContent"
                                            role="tab" aria-controls="QuantityTabContent" aria-selected="false">
                                            <span class="me-sm-2 fs-4 nav-icons" data-feather="package"></span>
                                            <span class="d-none d-sm-inline">Quantity</span>
                                        </a>

                                        <a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                                            id="SizeTab" data-bs-toggle="tab" data-bs-target="#SizeTabContent"
                                            role="tab" aria-controls="SizeTabContent" aria-selected="false">
                                            <span class="me-sm-2 fs-4 nav-icons" data-feather="package"></span>
                                            <span class="d-none d-sm-inline">Size</span>
                                        </a>

                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="tab-content py-3 ps-sm-4 h-100">

                                        <div class="tab-pane fade show active" id="pricingTabContent" role="tabpanel">
                                            <h4 class="mb-3">Pricing</h4>
                                            <div class="row g-3">
                                                <div class="col-12 col-lg-6">
                                                    <small>
                                                        Total Price of calculated grams
                                                    </small>
                                                    <input class="form-control" type="number" id="price"
                                                        name="price" placeholder="P" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade h-100" id="QuantityTabContent" role="tabpanel"
                                            aria-labelledby="QuantityTab">
                                            <div class="d-flex flex-column h-100">
                                                <div class="row g-3">
                                                    <div class="col-12 col-lg-6">
                                                        <h5 class="mb-2 text-body-highlight">Quantity Stock</h5>
                                                        <small>
                                                            Quantity Available Stocks
                                                        </small>
                                                        <input class="form-control" name="quantity" type="number"
                                                            placeholder="P" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade h-100" id="SizeTabContent" role="tabpanel"
                                            aria-labelledby="sizeTab">
                                            <div class="d-flex flex-column h-100">
                                                <div class="row g-3">
                                                    <div class="col-12 col-lg-6">
                                                        <h5 class="mb-2 text-body-highlight">Size Stock</h5>
                                                        <small>
                                                            Sizes of Product
                                                        </small>
                                                        <select name="sizes" id="sizes" class="form-select">
                                                            <option value="24">24</option>
                                                            <option value="15">15</option>
                                                            <option value="13">13</option>
                                                        </select>
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
                <div class="col-12 col-xl-4">
                    <div class="row g-2">
                        <div class="col-12 col-xl-12">
                            <div class="card border-0  mb-3">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Organize</h4>
                                    <div class="row gx-3">
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <div class="d-flex flex-wrap mb-2">
                                                    <h5 class="mb-0 text-body-highlight me-2">Category</h5>
                                                    <a class="fw-bold text-primary-light fs-9" href="#!">Add new category</a>
                                                </div>
                                                <select class="form-select mb-3" name="category"
                                                    aria-label="category">
                                                    <option value="Necklace">Necklace</option>
                                                    <option value="Bracelet">Bracelet</option>
                                                    <option value="Ring">Ring</option>
                                                    <option value="Earrings">Earrings</option>
                                                </select>
                                            </div>
                                            <div class="mb-4">
                                                <div class="d-flex flex-wrap mb-2">
                                                    <h5 class="mb-0 text-body-highlight me-2">Category Variants</h5>
                                                    <a class="fw-bold text-primary-light fs-9" href="#!">Add new category
                                                        colors</a>
                                                </div>
                                                <select class="form-select mb-3" name="variantCategory"
                                                    aria-label="category">
                                                    <option value="Gold">Gold</option>
                                                    <option value="Silver">Silver</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 mb-3">
                                <div class="card-body">
                                    <label for="displayImageText" class="mb-3">
                                        <h4>Preview images</h4>
                                        <small>Recommended Length: 25 character or more.</small>
                                    </label>
                                    <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone"
                                        data-dropzone="data-dropzone">

                                        <div class="fallback">
                                            <label for="">Main Picture</label><br>
                                            <small>Recommendation Image: Flyer Image</small>
                                            <input name="file" id="addProductImage"
                                                type="file"class="form-control mb-3" />
                                        </div>

                                        <div class="fallback">
                                            <label for="">More Picture</label><br>
                                            <small>Recommendation Image: 3 Image is the recommended
                                                price!</small>
                                            <input name="file" id="addMoreProductImage"
                                                type="file"class="form-control mb-3" multiple />
                                        </div>

                                        <small>Main Picture</small>
                                        <div class="dz-preview row" id="previewSelectedImage">

                                        </div>

                                        <small>More Picture</small>
                                        <div class="dz-preview row" id="previewMoreSelectedImage">
                                        </div>

                                        {{-- <div class="dz-message text-body-tertiary text-opacity-85"
                                            data-dz-message="data-dz-message">
                                            Drag your photo here<span class="text-body-secondary px-1">or</span><button
                                                class="btn btn-link p-0" type="button" id="selectImages">Browse from
                                                device</button><br />
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100">
                <div class="col-12 col-sm-auto text-center">
                    <br class="d-sm-none" />2024 &copy;<a class="mx-1 text-primary-light" href="#!">Orotime</a></p>
                </div>
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85">v1.0.0</p>
                </div>
            </div>
        </footer>
    </div>
</x-layout.admin>