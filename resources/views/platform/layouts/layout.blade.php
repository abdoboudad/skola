<!doctype html>
<html lang="en">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    @include('platform.components.style')

    <title>Skola</title>

</head>
<body class="bg-white">

    <!-- MODALS
    ================================================== -->
    <!-- Modal Sidebar account -->
    <div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalExampleTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">

            <!-- Close -->
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>

            <!-- Heading -->
            <h2 class="fw-bold text-center mb-1" id="modalExampleTitle">
              Schedule a demo with us
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-center text-muted mb-6 mb-md-8">
              We can help you solve company communication.
            </p>

            <!-- Form -->
            <form>
              <div class="row">
                <div class="col-12 col-md-6">

                  <!-- First name -->
                  <div class="form-label-group">
                    <input type="text" class="form-control form-control-flush" id="registrationFirstNameModal" placeholder="First name">
                    <label for="registrationFirstNameModal">First name</label>
                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- Last name -->
                  <div class="form-label-group">
                    <input type="text" class="form-control form-control-flush" id="registrationLastNameModal" placeholder="Last name">
                    <label for="registrationLastNameModal">Last name</label>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">

                  <!-- Email -->
                  <div class="form-label-group">
                    <input type="email" class="form-control form-control-flush" id="registrationEmailModal" placeholder="Email">
                    <label for="registrationEmailModal">Email</label>
                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <!-- Password -->
                  <div class="form-label-group">
                    <input type="password" class="form-control form-control-flush" id="registrationPasswordModal" placeholder="Password">
                    <label for="registrationPasswordModal">Password</label>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-12">

                  <!-- Submit -->
                  <button class="btn btn-block btn-primary mt-3 lift">
                    Request a demo
                  </button>

                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

    <div class="modal modal-sidebar left fade-left fade" id="accountModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Signin -->
                <div class="collapse show" id="collapseSignin" data-bs-parent="#accountModal">
                    <div class="modal-header">
                        <h5 class="modal-title">Log In to Your Skola Account!</h5>
                        <button type="button" class="close text-primary" data-bs-dismiss="modal" aria-label="Close">
                            <!-- Icon -->
                            <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                                <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                            </svg>

                        </button>
                    </div>

                    <div class="modal-body">
                        <!-- Form Signin -->
                        <form class="mb-5">

                            <!-- Email -->
                            <div class="form-group mb-5">
                                <label for="modalSigninEmail">
                                    Username or Email
                                </label>
                                <input type="email" class="form-control" id="modalSigninEmail" placeholder="creativelayers">
                            </div>

                            <!-- Password -->
                            <div class="form-group mb-5">
                                <label for="modalSigninPassword">
                                    Password
                                </label>
                                <input type="password" class="form-control" id="modalSigninPassword" placeholder="**********">
                            </div>

                            <div class="d-flex align-items-center mb-5 font-size-sm">
                                <div class="form-check">
                                    <input class="form-check-input text-gray-800" type="checkbox" id="autoSizingCheck">
                                    <label class="form-check-label text-gray-800" for="autoSizingCheck">
                                        Remember me
                                    </label>
                                </div>

                                <div class="ms-auto">
                                    <a class="text-gray-800" data-bs-toggle="collapse" href="#collapseForgotPassword" role="button" aria-expanded="false" aria-controls="collapseForgotPassword">Forgot Password</a>
                                </div>
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-block btn-primary" type="submit">
                                LOGIN
                            </button>
                        </form>

                        <!-- Text -->
                        <p class="mb-0 font-size-sm text-center">
                            Don't have an account? <a class="text-underline" data-bs-toggle="collapse" href="#collapseSignup" role="button" aria-expanded="false" aria-controls="collapseSignup">Sign up</a>
                        </p>
                    </div>
                </div>

                <!-- Signup -->
                <div class="collapse" id="collapseSignup" data-bs-parent="#accountModal">
                    <div class="modal-header">
                        <h5 class="modal-title">Sign Up and Start Learning!</h5>
                        <button type="button" class="close text-primary" data-bs-dismiss="modal" aria-label="Close">
                            <!-- Icon -->
                            <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                                <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                            </svg>

                        </button>
                    </div>

                    <div class="modal-body">
                        <!-- Form Signup -->
                        <form class="mb-5">

                            <!-- Username -->
                            <div class="form-group mb-5">
                                <label for="modalSignupUsername">
                                    Username
                                </label>
                                <input type="text" class="form-control" id="modalSignupUsername" placeholder="John">
                            </div>

                            <!-- Email -->
                            <div class="form-group mb-5">
                                <label for="modalSignupEmail">
                                    Username or Email
                                </label>
                                <input type="email" class="form-control" id="modalSignupEmail" placeholder="johndoe@creativelayers.com">
                            </div>

                            <!-- Password -->
                            <div class="form-group mb-5">
                                <label for="modalSignupPassword">
                                    Password
                                </label>
                                <input type="password" class="form-control" id="modalSignupPassword" placeholder="**********">
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-block btn-primary" type="submit">
                                SIGN UP
                            </button>

                        </form>

                        <!-- Text -->
                        <p class="mb-0 font-size-sm text-center">
                            Already have an account? <a class="text-underline" data-bs-toggle="collapse" href="#collapseSignin" role="button" aria-expanded="true" aria-controls="collapseSignin">Log In</a>
                        </p>
                    </div>
                </div>

                <!-- Forgot Password -->
                <div class="collapse" id="collapseForgotPassword" data-bs-parent="#accountModal">
                    <div class="modal-header">
                        <h5 class="modal-title">Recover password!</h5>
                        <button type="button" class="close text-primary" data-bs-dismiss="modal" aria-label="Close">
                            <!-- Icon -->
                            <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                                <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                            </svg>

                        </button>
                    </div>

                    <div class="modal-body">
                        <!-- Form Recover Password -->
                        <form class="mb-5">
                            <!-- Email -->
                            <div class="form-group">
                                <label for="modalForgotpasswordEmail">
                                    Email
                                </label>
                                <input type="email" class="form-control" id="modalForgotpasswordEmail" placeholder="johndoe@creativelayers.com">
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-block btn-primary" type="submit">
                                RECOVER PASSWORD
                            </button>
                        </form>

                        <!-- Text -->
                        <p class="mb-0 font-size-sm text-center">
                            Remember your password? <a class="text-underline" data-bs-toggle="collapse" href="#collapseSignin" role="button" aria-expanded="false" aria-controls="collapseSignin">Log In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Sidebar cart -->
    <div class="modal modal-sidebar left fade-left fade" id="cartModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header mb-4">
                    <h5 class="modal-title">Your Shopping Cart</h5>
                    <button type="button" class="close text-primary" data-bs-dismiss="modal" aria-label="Close">
                        <!-- Icon -->
                        <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                            <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                        </svg>

                    </button>
                </div>

                <div class="modal-body">
                    <ul class="list-group list-group-flush mb-5">
                        <li class="list-group-item border-bottom py-0">
                            <div class="d-flex py-5">
                                <div class="bg-gray-200 w-60p h-60p rounded-circle overflow-hidden"></div>

                                <div class="flex-grow-1 mt-1 ms-4">
                                    <h6 class="fw-normal mb-0">Basic of Nature</h6>
                                    <div class="font-size-sm">1 × $18.00</div>
                                </div>

                                <a href="#" class="d-inline-flex text-secondary">
                                    <!-- Icon -->
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.0469 0H5.95294C5.37707 0 4.90857 0.4685 4.90857 1.04437V3.02872H6.16182V1.25325H9.83806V3.02872H11.0913V1.04437C11.0913 0.4685 10.6228 0 10.0469 0Z" fill="currentColor"/>
                                        <path d="M11.0492 5.51652L9.7968 5.47058L9.52527 12.8857L10.7777 12.9315L11.0492 5.51652Z" fill="currentColor"/>
                                        <path d="M8.62666 5.49353H7.37341V12.9087H8.62666V5.49353Z" fill="currentColor"/>
                                        <path d="M6.47453 12.8855L6.203 5.47034L4.95056 5.51631L5.22212 12.9314L6.47453 12.8855Z" fill="currentColor"/>
                                        <path d="M0.543091 2.4021V3.65535H1.849L2.885 15.4283C2.9134 15.7519 3.18434 16 3.50912 16H12.4697C12.7946 16 13.0657 15.7517 13.0939 15.4281L14.1299 3.65535H15.4569V2.4021H0.543091ZM11.8958 14.7468H4.08293L3.10706 3.65535H12.8719L11.8958 14.7468Z" fill="currentColor"/>
                                    </svg>

                                </a>
                            </div>
                        </li>

                        <li class="list-group-item border-bottom py-0">
                            <div class="d-flex py-5">
                                <div class="bg-gray-200 w-60p h-60p rounded-circle overflow-hidden"></div>

                                <div class="flex-grow-1 mt-1 ms-4">
                                    <h6 class="fw-normal mb-0">Color Harriet Tubman</h6>
                                    <div class="font-size-sm">1 × $18.00</div>
                                </div>

                                <a href="#" class="d-inline-flex text-secondary">
                                    <!-- Icon -->
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.0469 0H5.95294C5.37707 0 4.90857 0.4685 4.90857 1.04437V3.02872H6.16182V1.25325H9.83806V3.02872H11.0913V1.04437C11.0913 0.4685 10.6228 0 10.0469 0Z" fill="currentColor"/>
                                        <path d="M11.0492 5.51652L9.7968 5.47058L9.52527 12.8857L10.7777 12.9315L11.0492 5.51652Z" fill="currentColor"/>
                                        <path d="M8.62666 5.49353H7.37341V12.9087H8.62666V5.49353Z" fill="currentColor"/>
                                        <path d="M6.47453 12.8855L6.203 5.47034L4.95056 5.51631L5.22212 12.9314L6.47453 12.8855Z" fill="currentColor"/>
                                        <path d="M0.543091 2.4021V3.65535H1.849L2.885 15.4283C2.9134 15.7519 3.18434 16 3.50912 16H12.4697C12.7946 16 13.0657 15.7517 13.0939 15.4281L14.1299 3.65535H15.4569V2.4021H0.543091ZM11.8958 14.7468H4.08293L3.10706 3.65535H12.8719L11.8958 14.7468Z" fill="currentColor"/>
                                    </svg>

                                </a>
                            </div>
                        </li>

                        <li class="list-group-item border-bottom py-0">
                            <div class="d-flex py-5">
                                <div class="bg-gray-200 w-60p h-60p rounded-circle overflow-hidden"></div>

                                <div class="flex-grow-1 mt-1 ms-4">
                                    <h6 class="fw-normal mb-0">Digital Photography</h6>
                                    <div class="font-size-sm">1 × $18.00</div>
                                </div>

                                <a href="#" class="d-inline-flex text-secondary">
                                    <!-- Icon -->
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.0469 0H5.95294C5.37707 0 4.90857 0.4685 4.90857 1.04437V3.02872H6.16182V1.25325H9.83806V3.02872H11.0913V1.04437C11.0913 0.4685 10.6228 0 10.0469 0Z" fill="currentColor"/>
                                        <path d="M11.0492 5.51652L9.7968 5.47058L9.52527 12.8857L10.7777 12.9315L11.0492 5.51652Z" fill="currentColor"/>
                                        <path d="M8.62666 5.49353H7.37341V12.9087H8.62666V5.49353Z" fill="currentColor"/>
                                        <path d="M6.47453 12.8855L6.203 5.47034L4.95056 5.51631L5.22212 12.9314L6.47453 12.8855Z" fill="currentColor"/>
                                        <path d="M0.543091 2.4021V3.65535H1.849L2.885 15.4283C2.9134 15.7519 3.18434 16 3.50912 16H12.4697C12.7946 16 13.0657 15.7517 13.0939 15.4281L14.1299 3.65535H15.4569V2.4021H0.543091ZM11.8958 14.7468H4.08293L3.10706 3.65535H12.8719L11.8958 14.7468Z" fill="currentColor"/>
                                    </svg>

                                </a>
                            </div>
                        </li>
                    </ul>

                    <div class="d-flex mb-5">
                        <h5 class="mb-0 me-auto">Order Subtotal</h5>
                        <h5 class="mb-0">$121.87</h5>
                    </div>

                    <div class="d-md-flex justify-content-between">
                        <a href="#" class="d-block d-md-inline-block mb-4 mb-md-0 btn btn-primary btn-sm-wide">VIEW CART</a>
                        <a href="#" class="d-block d-md-inline-block btn btn-teal btn-sm-wide text-white">CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- NAVBAR
    ================================================== -->
        <header class="navbar navbar-expand-xl navbar-light bg-white border-bottom py-2 py-xl-4">
            <div class="container-fluid">

                <!-- Brand -->
                <a class="navbar-brand me-0" href="index.html">
                    <img src="assets/img/brand.svg" class="navbar-brand-img" alt="...">
                </a>

                <!-- Vertical Menu -->
                <ul class="navbar-nav navbar-vertical ms-xl-4 d-none d-xl-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pb-4 mb-n4 px-0 pt-0" id="navbarVerticalMenu" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                            <div class="bg-primary rounded py-3 px-5 d-flex align-items-center">
                                <div class="me-3 ms-1 d-flex text-white">
                                    <!-- Icon -->
                                    <svg width="25" height="17" viewBox="0 0 25 17" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="25" height="1" fill="currentColor"/>
                                        <rect y="8" width="15" height="1" fill="currentColor"/>
                                        <rect y="16" width="20" height="1" fill="currentColor"/>
                                    </svg>

                                </div>
                                <span class="text-white fw-medium me-1">Courses</span>
                            </div>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-md bg-primary rounded py-4 mt-4" aria-labelledby="navbarVerticalMenu">
                            <li class="dropdown-item dropright">
                                <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    <div class="me-4 d-flex text-white icon-xs">
                                        <!-- Icon -->
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5247 5.64759C10.3104 5.21736 9.6919 5.21322 9.47557 5.64759L5.37401 13.8898C5.28096 14.0767 5.29443 14.299 5.4094 14.4734L7.65635 17.8813V20.0493C7.65635 20.3729 7.91869 20.6352 8.24229 20.6352H11.7579C12.0815 20.6352 12.3439 20.3729 12.3439 20.0493V17.8813L14.5908 14.4734C14.7058 14.299 14.7192 14.0767 14.6262 13.8898L10.5247 5.64759ZM11.172 19.4633H8.82822V18.2915H11.172V19.4633ZM11.4424 17.1196H8.55779L6.57342 14.1099L9.41416 8.40131V14.1508C9.41416 14.4744 9.67651 14.7368 10.0001 14.7368C10.3237 14.7368 10.586 14.4744 10.586 14.1508V8.40131L13.4268 14.1099L11.4424 17.1196Z" fill="currentColor" fill-opacity="0.6"/>
                                            <path d="M18.2422 0.635132C17.4783 0.635132 16.827 1.12501 16.5852 1.80701H11.7578V1.22107C11.7578 0.897476 11.4955 0.635132 11.1719 0.635132H8.82812C8.50453 0.635132 8.24219 0.897476 8.24219 1.22107V1.80701H3.41484C3.17297 1.12501 2.52168 0.635132 1.75781 0.635132C0.788555 0.635132 0 1.42369 0 2.39294C0 3.3622 0.788555 4.15076 1.75781 4.15076C2.52168 4.15076 3.17297 3.66048 3.41484 2.97849H5.60676C2.87645 4.5465 1.17188 7.44322 1.17188 10.5961C1.17188 10.9197 1.43422 11.182 1.75781 11.182C2.08141 11.182 2.34375 10.9197 2.34375 10.5961C2.34375 7.06076 4.8359 3.98591 8.24219 3.18271V3.56482C8.24219 3.88841 8.50453 4.15076 8.82812 4.15076H11.1719C11.4955 4.15076 11.7578 3.88841 11.7578 3.56482V3.18267C15.1641 3.98591 17.6562 7.06076 17.6562 10.5961C17.6562 10.9197 17.9186 11.182 18.2422 11.182C18.5658 11.182 18.8281 10.9197 18.8281 10.5961C18.8281 7.44724 17.127 4.54884 14.3932 2.97888H16.5852C16.827 3.66087 17.4783 4.15076 18.2422 4.15076C19.2114 4.15076 20 3.3622 20 2.39294C20 1.42369 19.2114 0.635132 18.2422 0.635132ZM1.75781 2.97888C1.43473 2.97888 1.17188 2.71603 1.17188 2.39294C1.17188 2.06986 1.43473 1.80701 1.75781 1.80701C2.0809 1.80701 2.34375 2.06986 2.34375 2.39294C2.34375 2.71603 2.0809 2.97888 1.75781 2.97888ZM10.5859 2.97888H9.41406V1.80701H10.5859V2.97888ZM18.2422 2.97888C17.9191 2.97888 17.6562 2.71603 17.6562 2.39294C17.6562 2.06986 17.9191 1.80701 18.2422 1.80701C18.5653 1.80701 18.8281 2.06986 18.8281 2.39294C18.8281 2.71603 18.5653 2.97888 18.2422 2.97888Z" fill="currentColor"/>
                                        </svg>

                                    </div>
                                    Design
                                </a>

                                <div class="dropdown-menu ps-3 top-0 pe-0 py-0 shadow-none bg-transparent">
                                    <div class="dropdown-menu-md bg-primary rounded dropdown-menu-inner">
                                        <a class="dropdown-item" href="course-single-v1.html">
                                            All Business
                                        </a>
                                        <a class="dropdown-item" href="course-single-v2.html">
                                            Finance
                                        </a>
                                        <a class="dropdown-item" href="course-single-v3.html">
                                            Entrepreneurship
                                        </a>
                                        <a class="dropdown-item" href="course-single-v4.html">
                                            Communications
                                        </a>
                                        <a class="dropdown-item" href="course-single-v5.html">
                                            Management
                                        </a>
                                        <a class="dropdown-item" href="course-single-v1.html">
                                            Sales
                                        </a>
                                        <a class="dropdown-item" href="course-single-v2.html">
                                            Operations
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="dropdown-item dropright">
                                <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    <div class="me-4 d-flex text-white icon-xs">
                                        <!-- Icon -->
                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.6062 4.12238C17.6014 4.12723 17.5965 4.12723 17.5917 4.12723H13.8383V3.02017C13.8383 1.94709 12.9497 1.06824 11.8767 1.06824H7.86113C6.78806 1.07309 5.91891 1.94709 5.92377 3.02017V4.12723H2.41321C1.08279 4.12723 0 5.20031 0 6.53073C0 6.53558 0 6.54044 0 6.54529V8.56035C0 9.39065 0.388444 10.1481 1.06822 10.59V16.4943C1.07308 17.8393 2.16072 18.9269 3.50571 18.9318H16.4943C17.8393 18.9269 18.9269 17.8393 18.9318 16.4943V10.59C19.6116 10.1481 20 9.38579 20 8.56035V6.54529C20.0049 5.21487 18.9318 4.13209 17.6062 4.12238ZM6.89488 3.02017C6.89002 2.4812 7.32217 2.0442 7.86113 2.03935H11.8767C12.4205 2.0442 12.8623 2.47635 12.8672 3.02017V4.12723H6.89488V3.02017ZM17.9655 16.4992C17.9607 17.31 17.3052 17.9655 16.4992 17.9655H3.50571C2.69483 17.9607 2.03933 17.3052 2.03933 16.4992V10.993L6.29765 12.2943C8.71085 13.0372 11.294 13.0372 13.7121 12.2943L17.9655 10.993V16.4992ZM19.0435 6.54044V8.56035H19.0337C19.0386 9.13816 18.6987 9.66256 18.1743 9.89562C18.1695 9.89562 18.1695 9.90048 18.1646 9.90048C18.1209 9.9199 18.0723 9.93932 18.0286 9.95389H18.0238L13.4256 11.362C11.1969 12.0466 8.81767 12.0466 6.58898 11.362L1.98592 9.95389C1.94222 9.93932 1.89852 9.92476 1.85482 9.90533C1.85482 9.90533 1.85967 9.90533 1.85967 9.90048C1.32071 9.67227 0.975965 9.14301 0.980821 8.55549V6.54044C0.975965 5.74898 1.61204 5.09834 2.4035 5.08863C2.40835 5.08863 2.41321 5.08863 2.42292 5.08863H17.6014C18.3928 5.08378 19.0386 5.72471 19.0435 6.52102C19.0435 6.52587 19.0435 6.53073 19.0435 6.54044Z" fill="currentColor" fill-opacity="0.6"/>
                                            <path d="M13.3965 7.0939C13.076 6.77829 12.6439 6.59863 12.1923 6.60349H7.81258C6.87545 6.60349 6.11313 7.36095 6.10828 8.30293C6.10828 8.7545 6.28793 9.18664 6.60354 9.50225C6.60354 9.50225 6.6084 9.50225 6.6084 9.50711C6.92887 9.82272 7.36101 10.0024 7.81258 10.0024H12.1923C13.1343 10.0024 13.8966 9.24005 13.8917 8.29807C13.8917 7.84651 13.7169 7.41922 13.3965 7.0939ZM12.1923 9.03126H7.81258C7.40956 9.03126 7.08424 8.70594 7.08424 8.30293C7.08424 7.89992 7.40956 7.5746 7.81258 7.5746H12.1923C12.5953 7.5746 12.9206 7.89992 12.9206 8.30293C12.9206 8.70594 12.5953 9.03126 12.1923 9.03126Z" fill="currentColor"/>
                                        </svg>

                                    </div>
                                    Business
                                </a>

                                <div class="dropdown-menu ps-3 top-0 pe-0 py-0 shadow-none bg-transparent">
                                    <div class="dropdown-menu-md bg-primary rounded dropdown-menu-inner">
                                        <a class="dropdown-item" href="course-single-v1.html">
                                            All Business
                                        </a>
                                        <a class="dropdown-item" href="course-single-v2.html">
                                            Finance
                                        </a>
                                        <a class="dropdown-item" href="course-single-v3.html">
                                            Entrepreneurship
                                        </a>
                                        <a class="dropdown-item" href="course-single-v4.html">
                                            Communications
                                        </a>
                                        <a class="dropdown-item" href="course-single-v5.html">
                                            Management
                                        </a>
                                        <a class="dropdown-item" href="course-single-v1.html">
                                            Sales
                                        </a>
                                        <a class="dropdown-item" href="course-single-v2.html">
                                            Operations
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="dropdown-item dropright">
                                <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    <div class="me-4 d-flex text-white icon-xs">
                                        <!-- Icon -->
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.2422 0.0397949H1.75781C0.788555 0.0397949 0 0.82835 0 1.79761V18.2039C0 19.1731 0.788555 19.9617 1.75781 19.9617H18.2422C19.2114 19.9617 20 19.1731 20 18.2039V1.79761C20 0.82835 19.2114 0.0397949 18.2422 0.0397949ZM1.75781 1.21167H18.2422C18.5653 1.21167 18.8281 1.47452 18.8281 1.79761V4.72729H1.17188V1.79761C1.17188 1.47452 1.43473 1.21167 1.75781 1.21167ZM18.2422 18.7898H1.75781C1.43473 18.7898 1.17188 18.5269 1.17188 18.2039V5.89917H18.8281V18.2039C18.8281 18.5269 18.5653 18.7898 18.2422 18.7898Z" fill="currentColor"/>
                                            <path d="M11.9887 7.70365C11.6912 7.57619 11.3468 7.71396 11.2193 8.01138L7.70367 16.2145C7.57616 16.5119 7.71398 16.8564 8.0114 16.9839C8.30894 17.1114 8.65335 16.9735 8.78078 16.6761L12.2964 8.47302C12.4239 8.17556 12.2861 7.83111 11.9887 7.70365Z" fill="currentColor"/>
                                            <path d="M6.94201 9.63397C6.73982 9.38128 6.37103 9.34034 6.11845 9.54249L3.18876 11.8862C2.89583 12.1205 2.89564 12.5669 3.18876 12.8013L6.11845 15.1451C6.37115 15.3473 6.73994 15.3062 6.94201 15.0536C7.14416 14.8009 7.10322 14.4321 6.85048 14.23L4.49275 12.3438L6.85048 10.4576C7.10322 10.2554 7.14416 9.88671 6.94201 9.63397Z" fill="currentColor"/>
                                            <path d="M16.8114 11.8863L13.8817 9.54251C13.629 9.34032 13.2602 9.38129 13.0581 9.63399C12.856 9.88668 12.8969 10.2554 13.1496 10.4575L15.5074 12.3438L13.1496 14.23C12.8969 14.4321 12.856 14.8009 13.0581 15.0536C13.2605 15.3065 13.6293 15.347 13.8817 15.145L16.8114 12.8013C17.1043 12.567 17.1045 12.1207 16.8114 11.8863Z" fill="currentColor"/>
                                            <path d="M2.96875 3.55469C3.29235 3.55469 3.55469 3.29235 3.55469 2.96875C3.55469 2.64515 3.29235 2.38281 2.96875 2.38281C2.64515 2.38281 2.38281 2.64515 2.38281 2.96875C2.38281 3.29235 2.64515 3.55469 2.96875 3.55469Z" fill="currentColor"/>
                                            <path d="M5.3125 3.55469C5.6361 3.55469 5.89844 3.29235 5.89844 2.96875C5.89844 2.64515 5.6361 2.38281 5.3125 2.38281C4.9889 2.38281 4.72656 2.64515 4.72656 2.96875C4.72656 3.29235 4.9889 3.55469 5.3125 3.55469Z" fill="currentColor"/>
                                            <path d="M7.65625 3.55469C7.97985 3.55469 8.24219 3.29235 8.24219 2.96875C8.24219 2.64515 7.97985 2.38281 7.65625 2.38281C7.33265 2.38281 7.07031 2.64515 7.07031 2.96875C7.07031 3.29235 7.33265 3.55469 7.65625 3.55469Z" fill="currentColor"/>
                                            <path d="M13.5156 3.55469H17.0312C17.3548 3.55469 17.6172 3.29234 17.6172 2.96875C17.6172 2.64516 17.3548 2.38281 17.0312 2.38281H13.5156C13.192 2.38281 12.9297 2.64516 12.9297 2.96875C12.9297 3.29234 13.192 3.55469 13.5156 3.55469Z" fill="currentColor"/>
                                        </svg>

                                    </div>
                                    Software Development
                                </a>

                                <div class="dropdown-menu ps-3 top-0 pe-0 py-0 shadow-none bg-transparent">
                                    <div class="dropdown-menu-md bg-primary rounded dropdown-menu-inner">
                                        <a class="dropdown-item" href="course-single-v1.html">
                                            All Business
                                        </a>
                                        <a class="dropdown-item" href="course-single-v2.html">
                                            Finance
                                        </a>
                                        <a class="dropdown-item" href="course-single-v3.html">
                                            Entrepreneurship
                                        </a>
                                        <a class="dropdown-item" href="course-single-v4.html">
                                            Communications
                                        </a>
                                        <a class="dropdown-item" href="course-single-v5.html">
                                            Management
                                        </a>
                                        <a class="dropdown-item" href="course-single-v1.html">
                                            Sales
                                        </a>
                                        <a class="dropdown-item" href="course-single-v2.html">
                                            Operations
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="dropdown-item dropright">
                                <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    <div class="me-4 d-flex text-white icon-xs">
                                        <!-- Icon -->
                                        <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5717 0H4.16956C4.05379 0.00594643 3.94322 0.0496071 3.85456 0.124286L0.413131 3.57857C0.328167 3.65957 0.280113 3.77191 0.280274 3.88929V16.8514C0.281452 17.4853 0.794988 17.9988 1.42885 18H12.5717C13.1981 17.9989 13.7086 17.497 13.7203 16.8707V1.14857C13.7191 0.514714 13.2056 0.00117857 12.5717 0ZM8.18099 0.857143H10.6988V4.87714L9.80527 3.45214C9.76906 3.39182 9.71859 3.3413 9.65827 3.30514C9.45529 3.18337 9.19204 3.24916 9.07027 3.45214L8.18099 4.87071V0.857143ZM3.7367 1.46786V2.66143C3.73552 3.10002 3.38029 3.45525 2.9417 3.45643H1.74813L3.7367 1.46786ZM12.8546 16.86C12.8534 17.0157 12.7274 17.1417 12.5717 17.1429H1.42885C1.42665 17.1429 1.42445 17.143 1.42226 17.143C1.26486 17.1441 1.13635 17.0174 1.13527 16.86V4.32214H2.9417C3.85793 4.31979 4.60006 3.57766 4.60242 2.66143V0.857143H7.31527V5.23286C7.31345 5.42593 7.37688 5.61391 7.49527 5.76643C7.67533 5.99539 7.98036 6.08561 8.25599 5.99143L8.28813 5.98071C8.49272 5.89484 8.66356 5.7443 8.77456 5.55214L9.44099 4.48071L10.1074 5.55214C10.2184 5.7443 10.3893 5.89484 10.5938 5.98071C10.8764 6.0922 11.1987 6.00509 11.3867 5.76643C11.5051 5.61391 11.5685 5.42593 11.5667 5.23286V0.857143H12.5717C12.7266 0.858268 12.8523 0.982982 12.8546 1.13786V16.86Z" fill="currentColor"/>
                                            <path d="M10.7761 14.3143H3.22252C2.98584 14.3143 2.79395 14.5062 2.79395 14.7429C2.79395 14.9796 2.98584 15.1715 3.22252 15.1715H10.7761C11.0128 15.1715 11.2047 14.9796 11.2047 14.7429C11.2047 14.5062 11.0128 14.3143 10.7761 14.3143Z" fill="currentColor"/>
                                            <path d="M10.7761 12.2035H3.22252C2.98584 12.2035 2.79395 12.3954 2.79395 12.6321C2.79395 12.8687 2.98584 13.0606 3.22252 13.0606H10.7761C11.0128 13.0606 11.2047 12.8687 11.2047 12.6321C11.2047 12.3954 11.0128 12.2035 10.7761 12.2035Z" fill="currentColor"/>
                                            <path d="M10.7761 10.0928H3.22252C2.98584 10.0928 2.79395 10.2847 2.79395 10.5213C2.79395 10.758 2.98584 10.9499 3.22252 10.9499H10.7761C11.0128 10.9499 11.2047 10.758 11.2047 10.5213C11.2047 10.2847 11.0128 10.0928 10.7761 10.0928Z" fill="currentColor"/>
                                            <path d="M10.7761 7.98218H3.22252C2.98584 7.98218 2.79395 8.17407 2.79395 8.41075C2.79395 8.64743 2.98584 8.83932 3.22252 8.83932H10.7761C11.0128 8.83932 11.2047 8.64743 11.2047 8.41075C11.2047 8.17407 11.0128 7.98218 10.7761 7.98218Z" fill="currentColor"/>
                                        </svg>

                                    </div>
                                    Personal Development
                                </a>

                                <div class="dropdown-menu ps-3 top-0 pe-0 py-0 shadow-none bg-transparent">
                                    <div class="dropdown-menu-md bg-primary rounded dropdown-menu-inner">
                                        <a class="dropdown-item" href="course-single-v1.html">
                                            All Business
                                        </a>
                                        <a class="dropdown-item" href="course-single-v2.html">
                                            Finance
                                        </a>
                                        <a class="dropdown-item" href="course-single-v3.html">
                                            Entrepreneurship
                                        </a>
                                        <a class="dropdown-item" href="course-single-v4.html">
                                            Communications
                                        </a>
                                        <a class="dropdown-item" href="course-single-v5.html">
                                            Management
                                        </a>
                                        <a class="dropdown-item" href="course-single-v1.html">
                                            Sales
                                        </a>
                                        <a class="dropdown-item" href="course-single-v2.html">
                                            Operations
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="dropdown-item dropright">
                                <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    <div class="me-4 d-flex text-white icon-xs">
                                        <!-- Icon -->
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 0C4.47715 0 0 4.47715 0 10C0 15.5229 4.47715 20 10 20C15.5229 20 20 15.5229 20 10C20 4.47715 15.5229 0 10 0ZM17.8937 6.25H10C9.75668 6.24934 9.51387 6.27238 9.275 6.31875L12.0813 1.50625C14.6328 2.13449 16.7668 3.87617 17.8937 6.25ZM12.5 10C12.5048 11.3807 11.3893 12.5038 10.0086 12.5086C8.62789 12.5134 7.50477 11.3979 7.5 10.0172C7.49523 8.63648 8.6107 7.51336 9.99141 7.50859C10.8075 7.50578 11.5737 7.90152 12.0438 8.56875L12.0938 8.6375C12.3582 9.04277 12.4993 9.51609 12.5 10ZM10 1.25C10.2563 1.25 10.5125 1.25 10.7625 1.2875L6.9625 7.8125C6.83379 7.98977 6.72086 8.17801 6.625 8.375L3.86875 3.75C5.50613 2.1457 7.7077 1.24805 10 1.25ZM1.25 10C1.25043 8.10965 1.86699 6.27098 3.00625 4.7625L6.25 10.1875C6.29629 11.0459 6.63609 11.8623 7.2125 12.5H1.5875C1.3543 11.6875 1.24063 10.8453 1.25 10ZM2.10625 13.75H10C10.2433 13.7507 10.4861 13.7276 10.725 13.6812L7.91875 18.4937C5.36723 17.8655 3.23316 16.1238 2.10625 13.75ZM10 18.75C9.74375 18.75 9.4875 18.75 9.2375 18.7125L13.0375 12.1875C13.309 11.8108 13.5082 11.387 13.625 10.9375L16.75 15.5875C15.084 17.5953 12.6089 18.7549 10 18.75ZM13.125 7.98125L13.0375 7.85L12.9875 7.775C12.9167 7.67918 12.8396 7.58543 12.7563 7.49375H18.3813C19.0941 9.84641 18.7737 12.3912 17.5 14.4938L13.125 7.98125Z" fill="currentColor"/>
                                        </svg>

                                    </div>
                                    Photography
                                </a>

                                <div class="dropdown-menu ps-3 top-0 pe-0 py-0 shadow-none bg-transparent">
                                    <div class="dropdown-menu-md bg-primary rounded dropdown-menu-inner">
                                        <a class="dropdown-item" href="course-single-v1.html">
                                            All Business
                                        </a>
                                        <a class="dropdown-item" href="course-single-v2.html">
                                            Finance
                                        </a>
                                        <a class="dropdown-item" href="course-single-v3.html">
                                            Entrepreneurship
                                        </a>
                                        <a class="dropdown-item" href="course-single-v4.html">
                                            Communications
                                        </a>
                                        <a class="dropdown-item" href="course-single-v5.html">
                                            Management
                                        </a>
                                        <a class="dropdown-item" href="course-single-v1.html">
                                            Sales
                                        </a>
                                        <a class="dropdown-item" href="course-single-v2.html">
                                            Operations
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="dropdown-item dropright">
                                <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    <div class="me-4 d-flex text-white icon-xs">
                                        <!-- Icon -->
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.7859 0.164169C17.6493 0.0430309 17.468 -0.0150898 17.2864 0.00408285L5.71501 1.28978C5.3893 1.32583 5.14284 1.6011 5.14288 1.92877V13.3845C4.56001 13.0365 3.89315 12.8542 3.21431 12.8573C1.44194 12.8574 0 14.0107 0 15.4288C0 16.8469 1.44195 18.0002 3.21427 18.0002C4.9866 18.0002 6.42854 16.8469 6.42854 15.4288V5.72165L16.7143 4.57543V12.0969C16.1312 11.7495 15.4644 11.5679 14.7857 11.5717C13.0133 11.5717 11.5714 12.725 11.5714 14.1431C11.5714 15.5612 13.0134 16.7145 14.7857 16.7145C16.558 16.7145 18 15.5612 18 14.1431V0.64311C18 0.460272 17.9221 0.286098 17.7859 0.164169ZM3.21427 16.7145C2.169 16.7145 1.2857 16.1256 1.2857 15.4288C1.2857 14.732 2.169 14.1431 3.21427 14.1431C4.25954 14.1431 5.14284 14.732 5.14284 15.4288C5.14284 16.1256 4.25958 16.7145 3.21427 16.7145ZM14.7857 15.4288C13.7404 15.4288 12.8571 14.8399 12.8571 14.1431C12.8571 13.4462 13.7404 12.8574 14.7857 12.8574C15.831 12.8574 16.7143 13.4462 16.7143 14.1431C16.7143 14.8399 15.831 15.4288 14.7857 15.4288ZM16.7143 3.28201L6.42854 4.42503V2.50738L16.7143 1.36116V3.28201Z" fill="currentColor"/>
                                        </svg>

                                    </div>
                                    Audio + Music
                                </a>

                                <div class="dropdown-menu ps-3 top-0 pe-0 py-0 shadow-none bg-transparent">
                                    <div class="dropdown-menu-md bg-primary rounded dropdown-menu-inner">
                                        <a class="dropdown-item" href="course-single-v1.html">
                                            All Business
                                        </a>
                                        <a class="dropdown-item" href="course-single-v2.html">
                                            Finance
                                        </a>
                                        <a class="dropdown-item" href="course-single-v3.html">
                                            Entrepreneurship
                                        </a>
                                        <a class="dropdown-item" href="course-single-v4.html">
                                            Communications
                                        </a>
                                        <a class="dropdown-item" href="course-single-v5.html">
                                            Management
                                        </a>
                                        <a class="dropdown-item" href="course-single-v1.html">
                                            Sales
                                        </a>
                                        <a class="dropdown-item" href="course-single-v2.html">
                                            Operations
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="dropdown-item dropright">
                                <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    <div class="me-4 d-flex text-white icon-xs">
                                        <!-- Icon -->
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.3555 10.3555H19.4219C19.0659 10.3555 18.7773 10.644 18.7773 11C18.7773 11.356 19.0659 11.6445 19.4219 11.6445H21.3555C21.7114 11.6445 22 11.356 22 11C22 10.644 21.7114 10.3555 21.3555 10.3555Z" fill="currentColor"/>
                                            <path d="M20.5222 14.4114L19.2331 13.1223C18.9815 12.8707 18.5733 12.8707 18.3216 13.1223C18.0699 13.374 18.0699 13.7821 18.3216 14.0338L19.6107 15.3229C19.8624 15.5746 20.2705 15.5746 20.5222 15.3229C20.7739 15.0712 20.7739 14.6631 20.5222 14.4114Z" fill="currentColor"/>
                                            <path d="M20.5222 6.67703C20.2705 6.42536 19.8624 6.42536 19.6107 6.67703L18.3216 7.96609C18.0699 8.2178 18.0699 8.62588 18.3216 8.87759C18.5733 9.1293 18.9814 9.12926 19.2331 8.87759L20.5222 7.58853C20.7739 7.33682 20.7739 6.92874 20.5222 6.67703Z" fill="currentColor"/>
                                            <path d="M14.9102 2.62109C13.942 2.62109 13.1379 3.33631 12.9982 4.26611L12.4102 4.85405C11.3869 5.87735 9.87993 6.48828 8.37891 6.48828H4.51172C3.67146 6.48828 2.95505 7.02715 2.68898 7.77734H2.57812C1.15655 7.77734 0 8.93389 0 10.3555C0 11.777 1.15655 12.9336 2.57812 12.9336H2.68898C2.8835 13.482 3.31873 13.9173 3.86719 14.1118V17.4453C3.86719 18.5115 4.73464 19.3789 5.80082 19.3789C6.86697 19.3789 7.73438 18.5115 7.73438 17.4453V14.2227H8.37891C9.87989 14.2227 11.3869 14.8336 12.4102 15.8569L12.9982 16.4448C13.1379 17.3746 13.9421 18.0898 14.9102 18.0898C15.9763 18.0898 16.8438 17.2224 16.8438 16.1562V4.55469C16.8438 3.4885 15.9763 2.62109 14.9102 2.62109ZM2.57812 11.6445C1.86734 11.6445 1.28906 11.0663 1.28906 10.3555C1.28906 9.64468 1.86734 9.06641 2.57812 9.06641V11.6445ZM6.44531 17.4453C6.44531 17.8007 6.15618 18.0898 5.80078 18.0898C5.44539 18.0898 5.15625 17.8007 5.15625 17.4453V14.2227H6.44531V17.4453ZM7.73438 12.9336H4.51172C4.15632 12.9336 3.86719 12.6445 3.86719 12.2891V8.42187C3.86719 8.06648 4.15632 7.77734 4.51172 7.77734H7.73438V12.9336ZM12.9766 14.6242C11.8877 13.6819 10.4877 13.0963 9.01914 12.9628L9.01918 7.74808C10.4877 7.61462 11.8877 7.02909 12.9766 6.08665V14.6242ZM15.5547 16.1562C15.5547 16.5116 15.2656 16.8008 14.9102 16.8008H14.9102C14.5548 16.8008 14.2656 16.5116 14.2656 16.1562V4.55469C14.2656 4.19929 14.5548 3.91016 14.9102 3.91016C15.2656 3.91016 15.5547 4.19929 15.5547 4.55469V16.1562Z" fill="currentColor"/>
                                        </svg>

                                    </div>
                                    Marketing
                                </a>

                                <div class="dropdown-menu ps-3 top-0 pe-0 py-0 shadow-none bg-transparent">
                                    <div class="dropdown-menu-md bg-primary rounded dropdown-menu-inner">
                                        <a class="dropdown-item" href="course-single-v1.html">
                                            All Business
                                        </a>
                                        <a class="dropdown-item" href="course-single-v2.html">
                                            Finance
                                        </a>
                                        <a class="dropdown-item" href="course-single-v3.html">
                                            Entrepreneurship
                                        </a>
                                        <a class="dropdown-item" href="course-single-v4.html">
                                            Communications
                                        </a>
                                        <a class="dropdown-item" href="course-single-v5.html">
                                            Management
                                        </a>
                                        <a class="dropdown-item" href="course-single-v1.html">
                                            Sales
                                        </a>
                                        <a class="dropdown-item" href="course-single-v2.html">
                                            Operations
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="dropdown-item dropright">
                                <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                    <div class="me-4 d-flex text-white icon-xs">
                                        <!-- Icon -->
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.0833 1.80566H4.08796C3.03241 1.81029 2.17593 2.66678 2.17593 3.72696V3.75011H1.91667C0.861111 3.75011 0.00462963 4.60196 0 5.65752V16.2733C0.00462963 17.3288 0.856482 18.1899 1.91667 18.1946H15.912C16.9676 18.1899 17.8241 17.3334 17.8241 16.2733V16.2501H18.0833C19.1389 16.2501 19.9954 15.3983 20 14.3427V3.72696C19.9954 2.66678 19.1435 1.81029 18.0833 1.80566ZM15.912 17.2686H1.91667C1.37037 17.264 0.930556 16.8196 0.925926 16.2733V5.65752C0.930556 5.11585 1.37037 4.67603 1.91667 4.67603H15.912C16.4537 4.67603 16.8981 5.11122 16.8981 5.65752V8.30566C16.8148 8.32418 16.7315 8.33344 16.6528 8.33344H13.9815C12.5278 8.33344 11.3472 9.514 11.3472 10.9677C11.3472 12.4214 12.5278 13.602 13.9815 13.6066H16.6481C16.7315 13.602 16.8148 13.5927 16.8935 13.5834L16.8981 16.2733C16.8981 16.8196 16.4583 17.264 15.912 17.2686ZM19.0741 14.3427C19.0694 14.8844 18.6296 15.3242 18.0833 15.3242H17.8241V13.2501C18.0231 13.1159 18.2037 12.9492 18.3565 12.764L19.0741 11.8381V14.3427ZM17.625 12.2038C17.3935 12.5047 17.0324 12.6807 16.6528 12.6853H13.9815C13.037 12.6807 12.2731 11.9168 12.2731 10.9723C12.2731 10.0279 13.037 9.264 13.9815 9.25937H16.6481C16.9676 9.25937 17.2824 9.18992 17.5694 9.05103C17.875 8.90752 18.1435 8.68992 18.3519 8.4214L19.0694 7.49548L19.0741 10.3242L17.625 12.2038ZM19.0741 5.98159L17.8241 7.5927V5.65752C17.8241 4.60196 16.9676 3.75011 15.912 3.75011H3.10185V3.72696C3.10185 3.18066 3.54167 2.73622 4.08796 2.73159H18.0833C18.6296 2.73622 19.0694 3.18066 19.0741 3.72696V5.98159Z" fill="currentColor"/>
                                            <path d="M15.0185 10.5093H13.9074C13.6528 10.5093 13.4445 10.7176 13.4445 10.9722C13.4445 11.2269 13.6528 11.4352 13.9074 11.4352H15.0185C15.2732 11.4352 15.4815 11.2269 15.4815 10.9722C15.4815 10.7176 15.2732 10.5093 15.0185 10.5093Z" fill="currentColor"/>
                                        </svg>

                                    </div>
                                    Finance & Accounting
                                </a>

                                <div class="dropdown-menu ps-3 top-0 pe-0 py-0 shadow-none bg-transparent">
                                    <div class="dropdown-menu-md bg-primary rounded dropdown-menu-inner">
                                        <a class="dropdown-item" href="course-single-v1.html">
                                            All Business
                                        </a>
                                        <a class="dropdown-item" href="course-single-v2.html">
                                            Finance
                                        </a>
                                        <a class="dropdown-item" href="course-single-v3.html">
                                            Entrepreneurship
                                        </a>
                                        <a class="dropdown-item" href="course-single-v4.html">
                                            Communications
                                        </a>
                                        <a class="dropdown-item" href="course-single-v5.html">
                                            Management
                                        </a>
                                        <a class="dropdown-item" href="course-single-v1.html">
                                            Sales
                                        </a>
                                        <a class="dropdown-item" href="course-single-v2.html">
                                            Operations
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- Search -->
                <form class="d-none d-wd-flex ms-5 w-xl-450p">
                    <div class="input-group border rounded">
                        <div class="input-group-prepend">
                            <button class="btn btn-sm my-2 my-sm-0 text-secondary icon-xs d-flex align-items-center" type="submit">
                                <!-- Icon -->
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.8477 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.8477 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.8477 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z" fill="currentColor"/>
                                    <path d="M19.762 18.6121L15.1007 13.9509C14.7831 13.6332 14.2687 13.6332 13.9511 13.9509C13.6335 14.2682 13.6335 14.7831 13.9511 15.1005L18.6124 19.7617C18.7712 19.9205 18.9791 19.9999 19.1872 19.9999C19.395 19.9999 19.6032 19.9205 19.762 19.7617C20.0796 19.4444 20.0796 18.9295 19.762 18.6121Z" fill="currentColor"/>
                                </svg>

                            </button>
                        </div>
                        <input class="form-control form-control-sm border-0 ps-0" type="search" placeholder="What do you want to learn ?" aria-label="Search">
                    </div>
                </form>

                <!-- Collapse -->
                <div class="collapse navbar-collapse z-index-lg" id="navbarCollapse">

                    <!-- Toggler -->
                    <button class="navbar-toggler outline-0 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <!-- Icon -->
                        <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                            <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                        </svg>

                    </button>

                    <!-- Navigation -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown dropdown-full-width">
                            <a class="nav-link" id="navbarLandings" data-bs-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                                Home
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarShop" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                                Shop
                            </a>
                            <ul class="dropdown-menu border-xl shadow-none" aria-labelledby="navbarShop">
                                <li class="dropdown-item">
                                    <a class="dropdown-link" href="shop-cart.html">
                                        Shop Cart
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="dropdown-link" href="shop-checkout.html">
                                        Shop Checkout
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="dropdown-link" href="shop-list.html">
                                        Shop List
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="dropdown-link" href="shop-single.html">
                                        Shop Single
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="dropdown-link" href="shop-order-completed.html">
                                        Shop Order Completed
                                    </a>
                                </li>
                            </ul>
                        </li>

                    
                    </ul>
                </div>

                <!-- Search, Account & Cart -->
                <ul class="navbar-nav flex-row ms-auto ms-xl-0 me-n2 me-md-n4">
                    <li class="nav-item border-0 px-0 d-none d-370-block d-xl-none">
                        <a class="nav-link d-flex px-3 px-md-4 search-mobile text-secondary icon-xs" data-bs-toggle="collapse" href="#collapseSearchMobile" role="button" aria-expanded="false" aria-controls="collapseSearchMobile">
                            <!-- Icon -->
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.8477 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.8477 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.8477 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z" fill="currentColor"/>
                                <path d="M19.762 18.6121L15.1007 13.9509C14.7831 13.6332 14.2687 13.6332 13.9511 13.9509C13.6335 14.2682 13.6335 14.7831 13.9511 15.1005L18.6124 19.7617C18.7712 19.9205 18.9791 19.9999 19.1872 19.9999C19.395 19.9999 19.6032 19.9205 19.762 19.7617C20.0796 19.4444 20.0796 18.9295 19.762 18.6121Z" fill="currentColor"/>
                            </svg>


                            <!-- Icon -->
                            <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                                <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                            </svg>

                        </a>

                        <div class="collapse position-absolute right-0 left-0" id="collapseSearchMobile">
                            <div class="card card-body p-4 mt-7 shadow-dark">
                                <!-- Search -->
                                <form class="w-100">
                                    <div class="input-group border rounded">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-sm text-secondary icon-xs d-flex align-items-center" type="submit">
                                                <!-- Icon -->
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.8477 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.8477 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.8477 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z" fill="currentColor"/>
                                                    <path d="M19.762 18.6121L15.1007 13.9509C14.7831 13.6332 14.2687 13.6332 13.9511 13.9509C13.6335 14.2682 13.6335 14.7831 13.9511 15.1005L18.6124 19.7617C18.7712 19.9205 18.9791 19.9999 19.1872 19.9999C19.395 19.9999 19.6032 19.9205 19.762 19.7617C20.0796 19.4444 20.0796 18.9295 19.762 18.6121Z" fill="currentColor"/>
                                                </svg>

                                            </button>
                                        </div>
                                        <input class="form-control form-control-sm border-0 ps-0" type="search" placeholder="What do you want to learn ?" aria-label="Search">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item border-0 px-0">
                        <!-- Button trigger account modal -->
                        <a href="#" class="nav-link d-flex px-3 px-md-4 text-secondary icon-xs" data-bs-toggle="modal" data-bs-target="#accountModal">
                            <!-- Icon -->
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.2252 3.0777C15.3376 1.10738 12.7258 -0.0045765 9.99712 0.000444175C4.48284 -0.00650109 0.00695317 4.45809 7.91636e-06 9.97242C-0.00342287 12.6991 1.1084 15.3085 3.07726 17.1948C3.08299 17.2005 3.08512 17.209 3.09082 17.2141C3.14864 17.2698 3.21148 17.3169 3.27005 17.3705C3.43071 17.5133 3.59138 17.6611 3.76061 17.7989C3.85128 17.8703 3.94554 17.9417 4.03838 18.0074C4.19833 18.1266 4.35828 18.2459 4.52535 18.3558C4.6389 18.4273 4.756 18.4986 4.87236 18.5701C5.02658 18.6629 5.18012 18.7564 5.33936 18.8414C5.47434 18.9128 5.61211 18.9742 5.74922 19.0392C5.89917 19.1106 6.04698 19.182 6.20049 19.2462C6.354 19.3105 6.50826 19.3605 6.6639 19.4162C6.81954 19.4719 6.9538 19.5233 7.10304 19.569C7.27157 19.6197 7.44436 19.6589 7.61573 19.7011C7.75853 19.736 7.89706 19.776 8.04416 19.8046C8.24123 19.8439 8.44117 19.8689 8.64112 19.896C8.76467 19.9132 8.88534 19.9374 9.01027 19.9496C9.33732 19.9817 9.66718 19.9996 9.99992 19.9996C10.3327 19.9996 10.6626 19.9817 10.9896 19.9496C11.1146 19.9374 11.2352 19.9132 11.3587 19.896C11.5587 19.8689 11.7586 19.8439 11.9557 19.8046C12.0985 19.776 12.2413 19.7332 12.3841 19.7011C12.5555 19.6589 12.7283 19.6196 12.8968 19.569C13.046 19.5233 13.1903 19.4676 13.3359 19.4162C13.4816 19.3648 13.6473 19.3091 13.7994 19.2462C13.9514 19.1834 14.1007 19.1098 14.2506 19.0392C14.3877 18.9742 14.5256 18.9128 14.6605 18.8414C14.8197 18.7564 14.9732 18.6629 15.1275 18.5701C15.2439 18.4986 15.361 18.4337 15.4745 18.3558C15.6416 18.2459 15.8016 18.1267 15.9615 18.0074C16.0543 17.936 16.1485 17.8717 16.2392 17.7989C16.4085 17.6632 16.5691 17.519 16.7298 17.3705C16.7883 17.3169 16.8512 17.2698 16.909 17.2141C16.9147 17.2091 16.9169 17.2005 16.9226 17.1948C20.9046 13.38 21.04 7.05955 17.2252 3.0777ZM15.6203 16.4472C15.4904 16.5614 15.3561 16.6699 15.2205 16.7749C15.1405 16.8363 15.0605 16.897 14.9784 16.9556C14.8491 17.0491 14.7178 17.1377 14.5842 17.2226C14.4871 17.2848 14.3879 17.3447 14.2879 17.4033C14.1622 17.4747 14.0344 17.5461 13.9051 17.6175C13.7909 17.676 13.6745 17.7311 13.5574 17.7853C13.4403 17.8396 13.3111 17.8974 13.1847 17.9481C13.0583 17.9988 12.924 18.0467 12.7919 18.0909C12.6713 18.1323 12.5506 18.1752 12.4285 18.2116C12.2857 18.2544 12.1364 18.2894 11.9886 18.3251C11.8729 18.3522 11.7587 18.383 11.6416 18.4058C11.4724 18.4387 11.2996 18.4615 11.1261 18.4851C11.0275 18.4979 10.9297 18.5158 10.8304 18.5258C10.5562 18.5522 10.2784 18.5679 9.99783 18.5679C9.71722 18.5679 9.43945 18.5522 9.16524 18.5258C9.066 18.5158 8.96818 18.4979 8.8696 18.4851C8.6961 18.4615 8.5233 18.4387 8.35406 18.4058C8.23696 18.383 8.1227 18.3523 8.00705 18.3251C7.85924 18.2894 7.71213 18.2537 7.5672 18.2116C7.44512 18.1752 7.32441 18.1323 7.20375 18.0909C7.07166 18.0452 6.93953 17.9988 6.811 17.9481C6.68248 17.8974 6.5611 17.8417 6.43826 17.7853C6.31542 17.7289 6.20476 17.6761 6.09054 17.6175C5.9613 17.5504 5.83348 17.4797 5.7078 17.4033C5.60784 17.3448 5.50856 17.2848 5.41145 17.2226C5.27794 17.1377 5.14653 17.0491 5.01729 16.9556C4.93516 16.897 4.8552 16.8363 4.77521 16.7749C4.63952 16.6699 4.5053 16.5607 4.37535 16.4472C4.34393 16.4236 4.31536 16.3936 4.28469 16.3664C4.31661 13.9374 5.87708 11.7926 8.17843 11.0146C9.32912 11.562 10.6651 11.562 11.8158 11.0146C14.1171 11.7926 15.6776 13.9374 15.7096 16.3664C15.6796 16.3936 15.651 16.4208 15.6203 16.4472ZM7.50716 5.7256C8.2803 4.3506 10.0217 3.86272 11.3967 4.63586C12.7717 5.409 13.2596 7.15038 12.4864 8.52538C12.2299 8.98159 11.8529 9.35856 11.3967 9.61511C11.3931 9.61511 11.3888 9.61511 11.3845 9.61938C11.1952 9.72477 10.9951 9.80954 10.7876 9.87217C10.7505 9.88288 10.7162 9.89715 10.6769 9.90644C10.6055 9.92501 10.5305 9.93786 10.457 9.9507C10.3185 9.97493 10.1784 9.98898 10.0378 9.99283H9.95641C9.81588 9.98898 9.67576 9.97493 9.53727 9.9507C9.46585 9.93786 9.39016 9.92501 9.31736 9.90644C9.2795 9.89715 9.24594 9.88288 9.2067 9.87217C8.99922 9.80954 8.79911 9.72481 8.60974 9.61938L8.5969 9.61511C7.2219 8.84197 6.73402 7.10059 7.50716 5.7256ZM16.9763 14.9505C16.518 12.8133 15.1107 11.0014 13.1532 10.0286C14.7534 8.28555 14.6375 5.57535 12.8944 3.97522C11.1514 2.3751 8.44117 2.49099 6.84104 4.23404C5.33677 5.8727 5.33677 8.38998 6.84104 10.0286C4.88361 11.0014 3.47624 12.8133 3.01802 14.9505C0.27991 11.0937 1.18681 5.74744 5.04365 3.00933C8.90048 0.271226 14.2467 1.17813 16.9848 5.03496C18.0141 6.48481 18.5666 8.21907 18.5658 9.99714C18.5658 11.7737 18.01 13.5057 16.9763 14.9505Z" fill="currentColor"/>
                            </svg>

                        </a>
                    </li>

                    <li class="nav-item border-0 px-0">
                        <!-- Button trigger cart modal -->
                        <a href="#" class="nav-link d-flex px-3 px-md-4 position-relative text-secondary icon-xs" data-bs-toggle="modal" data-bs-target="#cartModal">
                            <span class="badge badge-primary rounded-circle fw-bold badge-float mt-n1 ms-n2 px-0 w-16" style="font-size: 8px;">2</span>
                            <!-- Icon -->
                            <svg width="13" height="15" viewBox="0 0 13 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.2422 3.51562H10.4567C10.2239 1.53873 8.53839 0 6.5 0C4.46161 0 2.7761 1.53873 2.54334 3.51562H0.757812C0.434199 3.51562 0.171875 3.77795 0.171875 4.10156V14.4141C0.171875 14.7377 0.434199 15 0.757812 15H12.2422C12.5658 15 12.8281 14.7377 12.8281 14.4141V4.10156C12.8281 3.77795 12.5658 3.51562 12.2422 3.51562ZM6.5 1.17188C7.89113 1.17188 9.04939 2.18716 9.27321 3.51562H3.72679C3.95062 2.18716 5.10887 1.17188 6.5 1.17188ZM11.6562 13.8281H1.34375V4.6875H2.51562V6.44531C2.51562 6.76893 2.77795 7.03125 3.10156 7.03125C3.42518 7.03125 3.6875 6.76893 3.6875 6.44531V4.6875H9.3125V6.44531C9.3125 6.76893 9.57482 7.03125 9.89844 7.03125C10.2221 7.03125 10.4844 6.76893 10.4844 6.44531V4.6875H11.6562V13.8281Z" fill="currentColor"/>
                            </svg>

                        </a>
                    </li>
                </ul>

                <!-- Toggler -->
                <button class="navbar-toggler ms-4 ms-md-5 shadow-none bg-teal text-white icon-xs p-0 outline-0 h-40p w-40p d-flex d-xl-none place-flex-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- Icon -->
                    <svg width="25" height="17" viewBox="0 0 25 17" xmlns="http://www.w3.org/2000/svg">
                        <rect width="25" height="1" fill="currentColor"/>
                        <rect y="8" width="15" height="1" fill="currentColor"/>
                        <rect y="16" width="20" height="1" fill="currentColor"/>
                    </svg>

                </button>
            </div>
        </header>
 
    <div class="container my-11">
        @yield('content')

    </div>

    <!-- FOOTER
    ================================================== -->

    <footer class="pt-8 pt-md-11 bg-light">
        <div class="container">
            <div class="row" id="accordionFooter">
                <div class="col-12 col-md-4 col-lg-4">

                    <!-- Brand -->
                    <img src="assets/img/brand.svg" alt="..." class="footer-brand img-fluid mb-4 h-60p">

                    <!-- Text -->
                    <p class="text-gray-800 mb-4 font-size-sm-alone">
                        329 Queensberry Street, North Melbourne VIC 3051, Australia.
                    </p>

                    <div class="mb-4">
                        <a href="tel:1234567890" class="text-gray-800 font-size-sm-alone">123 456 7890</a>
                    </div>

                    <div class="mb-4">
                        <a href="mailto:support@skola.com" class="text-gray-800 font-size-sm-alone">support@skola.com</a>
                    </div>

                    <!-- Social -->
                    <ul class="list-unstyled list-inline list-social mb-4 mb-md-0">
                        <li class="list-inline-item list-social-item">
                            <a href="#" class="text-secondary font-size-sm w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item list-social-item">
                            <a href="#" class="text-secondary font-size-sm w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item list-social-item">
                            <a href="#" class="text-secondary font-size-sm w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item list-social-item">
                            <a href="#" class="text-secondary font-size-sm w-36 h-36 shadow-dark-hover d-flex align-items-center justify-content-center rounded-circle border-hover">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-4 col-lg-2">
                    <div class="mb-5 mb-xl-0 footer-accordion">

                        <!-- Heading -->
                        <div id="widgetOne">
                            <h5 class="mb-5">
                                <button class="text-dark fw-medium footer-accordion-toggle d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#widgetcollapseOne" aria-expanded="true" aria-controls="widgetcollapseOne">
                                    Our Company
                                    <span class="ms-auto text-dark">
                                        <!-- Icon -->
                                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="15" height="2" fill="currentColor"/>
                                        </svg>

                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                            <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                        </svg>

                                    </span>
                                </button>
                            </h5>
                        </div>

                        <div id="widgetcollapseOne" class="collapse show" aria-labelledby="widgetOne" data-parent="#accordionFooter">
                            <!-- List -->
                            <ul class="list-unstyled text-gray-800 font-size-sm-alone mb-6 mb-md-8 mb-lg-0">
                                <li class="mb-3">
                                    <a href="about-v1.html" class="text-reset">
                                        Our Company
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="about-v2.html" class="text-reset">
                                        About Us
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="contact-us.html" class="text-reset">
                                        Contact Us
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="contact-us.html" class="text-reset">
                                        Community
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v1.html" class="text-reset">
                                        Student Perks
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="blog-grid-v1.html" class="text-reset">
                                        Blog
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="pricing.html" class="text-reset">
                                        Affiliate Program
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="contact-us.html" class="text-reset">
                                        Careers
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-2">
                    <div class="mb-5 mb-xl-0 ms-xl-6 footer-accordion">

                        <!-- Heading -->
                        <div id="widgetTwo">
                            <h5 class="mb-5">
                                <button class="text-dark fw-medium footer-accordion-toggle d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#widgetcollapseTwo" aria-expanded="false" aria-controls="widgetcollapseTwo">
                                    Topics
                                    <span class="ms-auto text-dark">
                                        <!-- Icon -->
                                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="15" height="2" fill="currentColor"/>
                                        </svg>

                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                            <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                        </svg>

                                    </span>
                                </button>
                            </h5>
                        </div>

                        <div id="widgetcollapseTwo" class="collapse" aria-labelledby="widgetTwo" data-parent="#accordionFooter">
                            <!-- List -->
                            <ul class="list-unstyled text-gray-800 font-size-sm-alone mb-6 mb-md-8 mb-lg-0">
                                <li class="mb-3">
                                    <a href="course-list-v2.html" class="text-reset">
                                        HTML
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v2.html" class="text-reset">
                                        CSS
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v6.html" class="text-reset">
                                        Design
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v5.html" class="text-reset">
                                        JavaScript
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v4.html" class="text-reset">
                                        Ruby
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v1.html" class="text-reset">
                                        PHP
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v3.html" class="text-reset">
                                        Android
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v4.html" class="text-reset">
                                        Development Tools
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="course-list-v6.html" class="text-reset">
                                        Business
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 offset-md-4 col-lg-2 offset-lg-0">
                    <div class="mb-5 mb-xl-0 ms-xl-6 footer-accordion">

                        <!-- Heading -->
                        <div id="widgetThree">
                            <h5 class="mb-5">
                                <button class="text-dark fw-medium footer-accordion-toggle d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#widgetcollapseThree" aria-expanded="false" aria-controls="widgetcollapseThree">
                                    Tracks
                                    <span class="ms-auto text-dark">
                                        <!-- Icon -->
                                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="15" height="2" fill="currentColor"/>
                                        </svg>

                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                            <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                        </svg>

                                    </span>
                                </button>
                            </h5>
                        </div>

                        <div id="widgetcollapseThree" class="collapse" aria-labelledby="widgetThree" data-parent="#accordionFooter">
                            <!-- List -->
                            <ul class="list-unstyled text-gray-800 font-size-sm-alone mb-0">
                                <li class="mb-3">
                                    <a href="lesson-single-v1.html" class="text-reset">
                                        Web Design
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="lesson-single-v2.html" class="text-reset">
                                        Web Development
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="lesson-single-v1.html" class="text-reset">
                                        Rails Development
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="lesson-single-v2.html" class="text-reset">
                                        PHP Development
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="lesson-single-v1.html" class="text-reset">
                                        Android Development
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="lesson-single-v2.html" class="text-reset">
                                        Starting a Business
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-2 d-xl-flex">
                    <div class="mb-5 mb-xl-0 ms-xl-auto footer-accordion">

                        <!-- Heading -->
                        <div id="widgetFour">
                            <h5 class="mb-5">
                                <button class="text-dark fw-medium footer-accordion-toggle d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#widgetcollapseFour" aria-expanded="false" aria-controls="widgetcollapseFour">
                                    Support
                                    <span class="ms-auto text-dark">
                                        <!-- Icon -->
                                        <svg width="15" height="2" viewBox="0 0 15 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="15" height="2" fill="currentColor"/>
                                        </svg>

                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 7H15V9H0V7Z" fill="currentColor"/>
                                            <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"/>
                                        </svg>

                                    </span>
                                </button>
                            </h5>
                        </div>

                        <div id="widgetcollapseFour" class="collapse" aria-labelledby="widgetFour" data-parent="#accordionFooter">
                            <!-- List -->
                            <ul class="list-unstyled text-gray-800 font-size-sm-alone mb-0">
                                <li class="mb-3">
                                    <a href="docs/index.html" class="text-reset">
                                        Documentation
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="docs/index.html" class="text-reset">
                                        Forums
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="docs/index.html" class="text-reset">
                                        Language Packs
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="docs/changelog.html" class="text-reset">
                                        Release Status
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-md-5">
                    <div class="border-top pb-5 pt-6 py-md-4 text-center text-xl-start d-flex flex-column d-md-block d-xl-flex flex-xl-row align-items-center">
                        <p class="text-gray-800 font-size-sm-alone d-block mb-0 mb-md-2 mb-xl-0 order-1 order-md-0 px-9 px-md-0">Copyright © 2021 CreativeLayers. All Right Reserved.</p>

                        <div class="ms-xl-auto d-flex flex-column flex-md-row align-items-stretch align-items-md-center justify-content-center">
                            <ul class="navbar-nav flex-row flex-wrap font-size-sm-alone mb-3 mb-md-0 mx-n4 me-md-5 justify-content-center justify-content-lg-start order-1 order-md-0">
                                <li class="nav-item py-2 py-md-0 px-0 border-top-0">
                                    <a href="index.html" class="nav-link px-4 fw-normal text-gray-800">Home</a>
                                </li>
                                <li class="nav-item py-2 py-md-0 px-0 border-top-0">
                                    <a href="terms-of-service.html" class="nav-link px-4 fw-normal text-gray-800">Site Map</a>
                                </li>
                                <li class="nav-item py-2 py-md-0 px-0 border-top-0">
                                    <a href="terms-of-service.html" class="nav-link px-4 fw-normal text-gray-800">Privacy policy</a>
                                </li>
                                <li class="nav-item py-2 py-md-0 px-0 border-top-0">
                                    <a href="terms-of-service.html" class="nav-link px-4 fw-normal text-gray-800">Web Use Policy</a>
                                </li>
                                <li class="nav-item py-2 py-md-0 px-0 border-top-0">
                                    <a href="terms-of-service.html" class="nav-link px-4 fw-normal text-gray-800">Cookie Policy</a>
                                </li>
                            </ul>

                            <select class="form-select form-select-sm font-size-sm-alone shadow min-width-140 text-left mb-4 mb-md-0" data-choices>
                                <option>English</option>
                                <option>Tamil</option>
                                <option>French</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>


    <!-- JAVASCRIPT
    ================================================== -->

    @include('platform.components.script')

</body>
</html>
