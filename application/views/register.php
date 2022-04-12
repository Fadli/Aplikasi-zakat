<?php $this->load->view('front/section/head');?>

<body>
    <!-- Loader -->
    <?php $this->load->view('front/section/loader');?>
    <!-- Loader ends -->

    <!-- wrapper starts -->
    <div class="wrapper">
        <!-- header -->
        <div class="header">
            <div class="row no-gutters">
                <div class="col-auto">
                    <button class="btn btn-link" onclick="window.history.go(-1); return false;"><i class="material-icons">chevron_left</i><span class="new-notification"></span></button>
                </div>
                <div class="col text-left">
                    <div class="header-logo">
                        <img src="<?=base_url('assets/images/logo.png')?>" alt="" class="header-logo">
                        <h4>BAZ<br><small class="text-mute">Network</small></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- header ends -->

        <div class="container">
            <!-- page content here -->
            <div class="row flex-colum">
                <div class="col-12 col-md-6 col-lg-5 mx-auto login-row">
                    <div class="row h-100">
                        <div class="col-12 align-self-center">
                            <h1 class="font-weight-light mb-5 text-center"><small class="font-weight-light">Welcome</small>,<br><span class="text-mute">Register now!</span></h1>
                            <form class="form-signin">
                                <div class="row">
                                    <div class="col-auto align-self-center">
                                        <i class="material-icons text-mute mt-2">account_circle</i>
                                    </div>
                                    <div class="col pl-0">
                                        <div class="form-group float-label active">
                                            <input type="email" id="inputusername" class="form-control" required autofocus value="Maxartkiller">
                                            <label for="inputusername" class="form-control-label">Username</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-auto align-self-center">
                                        <i class="material-icons text-mute mt-1">language</i>
                                    </div>
                                    <div class="col pl-0">
                                        <div class="form-group float-label active">
                                            <input type="email" id="inputEmail" class="form-control" value="info@maxartkiller.com" required >
                                            <label for="inputEmail" class="form-control-label">Email address</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-auto align-self-center">
                                        <i class="material-icons text-mute mt-1">lock</i>
                                    </div>
                                    <div class="col pl-0">
                                        <div class="form-group float-label">
                                            <input type="password" id="inputPassword" class="form-control" required>
                                            <label for="inputPassword" class="form-control-label">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="form-group my-4 text-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="rememberme">
                                <label class="custom-control-label" for="rememberme">I accept <a href="#">Terms and Condition</a></label>
                            </div>
                        </div>-->
                            </form>
                            <p class="mt-3 text-center">
                                <span class="text-mute">By clicking register your are agree to the</span> <a href="#">Terms and Condition</a>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-12 mt-auto pb-4 col-md-6 col-lg-5 mx-auto login-footer">
                    <a href="<?=site_url('login')?>" class="btn btn-lg btn-block btn-link text-secondary">Already have account? <span class="text-uppercase">Sign in</span> here</a>
                    <br>
                    <a href="otp.html" class="btn btn-lg btn-block btn-default text-uppercase position-relative"><span>Next</span><i class="material-icons right-absoute">arrow_forward</i></a>
                </div>
            </div>
            <!-- page content ends -->
        </div>

    </div>
    <!-- wrapper ends -->

   <!-- jquery, popper and bootstrap js -->
    <script src="<?=base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?=base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/bootstrap-4.4.1/js/bootstrap.min.js')?>"></script>

    <!-- cookie js -->
    <script src="<?=base_url('assets/vendor/cookie/jquery.cookie.js')?>"></script>

    <!-- swiper js -->
    <script src="<?=base_url('assets/vendor/swiper/js/swiper.min.js')?>"></script>

    <!-- swiper js -->
    <script src="<?=base_url('assets/vendor/sparklines/jquery.sparkline.min.js')?>"></script>

    <!-- template custom js -->
    <script src="<?=base_url('assets/js/main.js')?>"></script>

    <!-- page level script -->
    <script>
        $(window).on('load', function() {
            $('body').addClass('header-dark');
        })

    </script>

</body>

</html>
