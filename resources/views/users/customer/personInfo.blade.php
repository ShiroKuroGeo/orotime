<x-layout.customerApp>
    <div class="container my-3">
        <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">

            <div class="col-lg-3">
                @include('components.customerDashboard')
            </div>

            <div class="col-lg-9">
                <div class="ps-xl-0">

                    <div class="col-lg-9">
                        <div class="ps-lg-3 ps-xl-0">

                            <h1 class="h2 mb-1 mb-sm-2">User Information</h1>

                            <div class="border-bottom py-4">
                                <div class="nav flex-nowrap align-items-center justify-content-between pb-1 mb-3">
                                    <h2 class="h6 mb-0">Profile Picture</h2>
                                    <a class="nav-link hiding-collapse-toggle text-decoration-underline p-0 collapsed"
                                        href=".profilePicture" data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="basicInfoPreview profilePicture">Edit</a>
                                </div>

                                <div class="collapse profilePicture" id="profilePicture">
                                    <form class="row g-3 g-sm-4 needs-validation" novalidate="">
                                        <div class="col-sm-6">
                                            <div class="position-relative">
                                                <span>Click Here to Preview Profiles. <a href="#" onclick="document.getElementById('profileImage').click()">Click Here!</a></span>
                                                <input type="file" class="form-control visually-hidden"
                                                    name="profileImage" id="profileImage" required>
                                                <div class="invalid-feedback">Insert Profile Picture</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex gap-3 pt-2 pt-sm-0">
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-toggle="collapse" data-bs-target=".profilePicture"
                                                    aria-expanded="true"
                                                    aria-controls="basicInfoPreview basicInfoEdit">Close</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="border-bottom py-4">
                                <div class="nav flex-nowrap align-items-center justify-content-between pb-1 mb-3">
                                    <h2 class="h6 mb-0">Basic Information</h2>
                                    <a class="nav-link hiding-collapse-toggle text-decoration-underline p-0 collapsed"
                                        href=".basic-info" data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="basicInfoPreview basicInfoEdit">Edit</a>
                                </div>
                                <div class="collapse basic-info show" id="basicInfoPreview">
                                    <ul class="list-unstyled fs-sm m-0">
                                        <li>Shiro George Alfeser</li>
                                        <li>November 29, 2001</li>
                                        <li>Male</li>
                                    </ul>
                                </div>
                                <div class="collapse basic-info" id="basicInfoEdit">
                                    <form class="row g-3 g-sm-4 needs-validation" novalidate="">
                                        <div class="col-sm-6">
                                            <label for="fn" class="form-label">First Name</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="fullname"
                                                    id="fullname" value="Shiro George Alfeser" required="">
                                                <div class="invalid-feedback">Please enter your Full Name!</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="fn" class="form-label">Last Name</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="lastname"
                                                    id="lastname" value="Shiro George Alfeser" required="">
                                                <div class="invalid-feedback">Please enter your Full Name!</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="ln" class="form-label">Gender</label>
                                            <div class="position-relative">
                                                <select name="gender" id="gender" class="form-select">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                <div class="invalid-feedback">Please enter your last name!</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="birthdate" class="form-label">Date of birth</label>
                                            <div class="position-relative">
                                                <input type="date" class="form-control form-icon-end" id="birthdate"
                                                    name="birthdate" placeholder="Choose date">
                                                <i data-feather="calendar"
                                                    class="position-absolute top-50 end-0 translate-middle-y me-3 fs-base pe-1"></i>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex gap-3 pt-2 pt-sm-0">
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-toggle="collapse" data-bs-target=".basic-info"
                                                    aria-expanded="true"
                                                    aria-controls="basicInfoPreview basicInfoEdit">Close</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="border-bottom py-4">
                                <div class="nav flex-nowrap align-items-center justify-content-between pb-1 mb-3">
                                    <div class="d-flex align-items-center gap-3 me-4">
                                        <h2 class="h6 mb-0">Contact</h2>
                                    </div>
                                    <a class="nav-link hiding-collapse-toggle text-decoration-underline p-0 collapsed"
                                        href=".contact-info" data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="contactInfoPreview contactInfoEdit">Edit</a>
                                </div>
                                <div class="collapse contact-info show" id="contactInfoPreview">
                                    <ul class="list-unstyled fs-sm m-0">
                                        <li class="mb-1">Shirogeo@email.com</li>
                                        <li>+63 912 3456 789</li>
                                    </ul>
                                </div>
                                <div class="collapse contact-info" id="contactInfoEdit">
                                    <form class="row g-3 g-sm-4 needs-validation" novalidate="">
                                        <div class="col-sm-6">
                                            <label for="email" class="form-label">Email address</label>
                                            <div class="position-relative">
                                                <input type="email" class="form-control" id="email"
                                                    name="email" value="Shirogeo@email.com" required="">
                                                <div class="invalid-feedback">Please enter a valid email address!</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="phone" class="form-label">Phone number</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" id="phonenumber"
                                                    name="phonenumber" value="+63 912 3456 789" required="">
                                                <div class="invalid-feedback">Please enter your phone number!</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex gap-3 pt-2 pt-sm-0">
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-toggle="collapse" data-bs-target=".contact-info"
                                                    aria-expanded="true"
                                                    aria-controls="contactInfoPreview contactInfoEdit">Close</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="border-bottom py-4">
                                <div class="nav flex-nowrap align-items-center justify-content-between pb-1 mb-3">
                                    <div class="d-flex align-items-center gap-3 me-4">
                                        <h2 class="h6 mb-0">Password</h2>
                                    </div>
                                    <a class="nav-link hiding-collapse-toggle text-decoration-underline p-0 collapsed"
                                        href=".password-change" data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="passChangePreview passChangeEdit">Edit</a>
                                </div>
                                <div class="collapse password-change show" id="passChangePreview">
                                    <ul class="list-unstyled fs-sm m-0">
                                        <li>**************</li>
                                    </ul>
                                </div>

                                <div class="collapse password-change" id="passChangeEdit">
                                    <form class="row g-3 g-sm-4 needs-validation" novalidate="">
                                        <div class="col-sm-12">
                                            <label for="current-password" class="form-label">Current password</label>
                                            <div class="password-toggle">
                                                <input type="password" class="form-control" id="current-password"
                                                    placeholder="Enter your current password" required="">
                                                <label class="password-toggle-button" aria-label="Show/hide password">
                                                    <input type="checkbox" class="btn-check">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="new-password" class="form-label">New password</label>
                                            <div class="password-toggle">
                                                <input type="password" class="form-control" id="new-password"
                                                    name="new-password" placeholder="Create new password"
                                                    required="">
                                                <label class="password-toggle-button" aria-label="Show/hide password">
                                                    <input type="checkbox" class="btn-check">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="new-password" class="form-label">New password</label>
                                            <div class="password-toggle">
                                                <input type="password" class="form-control" id="confirm-new-password"
                                                    name="confirm-new-password" placeholder="Create new password"
                                                    required="">
                                                <label class="password-toggle-button" aria-label="Show/hide password">
                                                    <input type="checkbox" class="btn-check">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <span class="badge text-info">Password Match!</span> ||
                                            <span class="badge text-danger">Password Not Match!</span>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex gap-3 pt-2 pt-sm-0">
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-toggle="collapse" data-bs-target=".password-change"
                                                    aria-expanded="true"
                                                    aria-controls="passChangePreview passChangeEdit">Close</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="pt-3 mt-2 mt-sm-3">
                                <h2 class="h6">Delete account</h2>
                                <p class="fs-sm">When you request to delete your account, we initiate a 14-day waiting period. This allows you the option to cancel the deletion request if you change your mind. After 14 days, your account and all associated data will be permanently removed from our system!</p>
                                <a class="text-danger fs-sm fw-medium" href="#!">Delete account</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <button type="button"
        class="fixed-bottom z-sticky w-100 btn btn-lg btn-primary border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none"
        data-bs-toggle="offcanvas" data-bs-target="#accountSidebar" aria-controls="accountSidebar"
        data-bs-theme="light">
        <i data-feather="user"></i>
        Account menu
    </button>

</x-layout.customerApp>
    <script>
        $('#profileImage').on('change', function(e) {
            var files = e.target.files;

            $('#previewSelectedImage').empty();

            for (var i = 0; i < files.length; i++) {
                var file = files[i];

                if (!file.type.startsWith('image/')) {
                    continue
                }



                var reader = new FileReader();

                reader.onload = function(e) {
                    var img = `
                        <img class="h5 d-flex justify-content-center align-items-center flex-shrink-0 text-primary bg-primary-subtle lh-1 rounded-circle mb-0" style="width: 3rem; height: 3rem"  src="` + e.target.result + `" alt="..." onclick="document.getElementById('profileImage').click()"  />
                `;

                    $('#previewSelectedImage').empty().append(img);
                };

                reader.readAsDataURL(file);
            }
        });
    </script>
