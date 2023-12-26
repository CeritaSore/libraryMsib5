<!DOCTYPE html>
<html lang="en">

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
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <a href="/">
                                    <img src="assets/logo/logo.png"style="height:7rem" alt="logo">
                                </a>
                                
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <form class="pt-3" method="POST" action="{{ route('login') }}">
                                @csrf
                                

                                <div class="row mb-3">
                                    
                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                   
        
                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                

                                <div class="mt-4">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-block btn-primary auth-form-btn">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
<br>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="col-md-6 ">
                                        <div class="form-check-label text-muted">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>

                                <div class="text-center mt-6 font-weight-light">
                                    Don't have an account? 
                                        <a class="link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    
                                </div>
                                
                            </form>
                        </div>
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
