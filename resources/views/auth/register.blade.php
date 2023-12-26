    <!DOCTYPE html>
    <html lang="en">
    <link type="text/css" id="dark-mode" rel="stylesheet" href="">
    <style type="text/css" id="dark-mode-custom-style"></style>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Skydash Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="backend/vendors/feather/feather.css">
        <link rel="stylesheet" href="backend/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="backend/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="backend/css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="backend/images/favicon.png">
    </head>

    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                    <div class="row flex-grow">
                        <div class="col-lg-6 d-flex align-items-center justify-content-center">
                            <div class="auth-form-transparent text-left p-3">
                                <div class="brand-logo">
                                    <img src="assets/logo/logo.png"style="height:5rem" alt="logo">
                                </div>
                                <h4>New here?</h4>
                                <h6 class="font-weight-light">Join us today! It takes only few steps</h6>
                                <form class="pt-3" method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label>{{ __('Name') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-transparent">
                                                <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="ti-user text-primary"></i>
                                                </span>
                                            </div>
                                            <input type="text" id="name"
                                                class="form-control form-control-lg border-left-0  @error('name') is-invalid @enderror"
                                                name="name" value="{{ old('name') }}" required autocomplete="name"
                                                autofocus placeholder="Name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('Email Address') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-transparent">
                                                <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="ti-email text-primary"></i>
                                                </span>
                                            </div>
                                            <input type="email" id="email"
                                                class="form-control form-control-lg border-left-0  @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                                placeholder="Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>{{ __('Password') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-transparent">
                                                <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="ti-lock text-primary"></i>
                                                </span>
                                            </div>
                                            <input id="password" type="password"
                                                class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password"
                                                id="exampleInputPassword" placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-transparent">
                                                <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="ti-lock text-primary"></i>
                                                </span>
                                            </div>
                                            <input id="password-confirm" type="password" class="form-control form-control-lg border-left-0"
                                                id="exampleInputPassword" placeholder="Confirm Password"  name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                            >{{ __('Register') }}</button>
                                    </div>

                                   

                                    <div class="text-center mt-4 font-weight-light">
                                        Already have an account? <a href="{{ route('login') }}" class="text-primary">{{ __('Login') }}</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 register-half-bg d-flex flex-row">
                            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright © 2023
                                All rights reserved.</p>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="backend/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="backend/js/off-canvas.js"></script>
        <script src="backend/js/hoverable-collapse.js"></script>
        <script src="backend/js/template.js"></script>
        <script src="backend/js/settings.js"></script>
        <script src="backend/js/todolist.js"></script>
        <!-- endinject -->



    </body>

    </html>
