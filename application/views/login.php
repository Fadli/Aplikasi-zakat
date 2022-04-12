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
                <!--<div class="col-auto">-->
                <!--    <a href="<?=site_url('register')?>" class="btn btn-link">Register</a>-->
                <!--</div>-->
            </div>
        </div>
        <!-- header ends -->

        <div class="container">
            <!-- page content here -->
            <div class="row flex-colum">
                <div class="col-12 col-md-6 col-lg-5 mx-auto login-row">
                    <div class="row h-100">
                        <div class="col-12 align-self-center">
                            <h1 class="font-weight-light mb-5 text-center"><small class="font-weight-light">Welcome</small>,<br><span class="text-mute">Sign in to continue</span></h1>
                            <form class="form-signin">
                                <div class="row">
                                    <div class="col-auto align-self-center">
                                        <i class="material-icons text-mute mt-2">account_circle</i>
                                    </div>
                                    <div class="col pl-0">
                                        <div class="form-group float-label active">
                                            <input type="email" id="inputEmail" class="form-control" required autofocus value="">
                                            <label for="inputEmail" class="form-control-label">Username</label>
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
                            </form>
                             <div id='err_msg' class="col-md-12" style='display: none;'>
                                <div id='msg' style="color:red; text-align: center;"> </div>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-12 mt-auto pb-4 col-md-6 col-lg-5 mx-auto login-footer">
                    <a href="index.html" class="btn btn-lg btn-block btn-link text-secondary text-uppercase">Forgot Password?</a>
                    <br>
                    <a href="#" id="submit" class="btn btn-lg btn-block btn-default text-uppercase position-relative"><span>Login</span><i class="material-icons right-absoute">arrow_forward</i></a>
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

     <script type="text/javascript">
        $(document).ready(function(){
          $("#submit").click(function(){
            var username = $("#inputEmail").val();
            var password = $("#inputPassword").val();
            // Returns error message when submitted without req fields.
            if(username==''|| password=='') {
              jQuery("div#err_msg").show();
              jQuery("div#msg").html("All fields are required");
            } else {
              $("#submit").html('Loading...');
              $.ajax({
                type: "POST",
                url:  "<?=site_url('verifylogin')?>",
                data: {username: username, password: password},
                cache: false,
                success: function(result){
                  if(result=="success"){
                    // On success redirect.
                    window.location.href = "<?=site_url('form')?>";
                  } else {
                    $("#submit").html('Masuk');
                    jQuery("div#err_msg").show();
                    jQuery("div#msg").html("Login Gagal, Periksa Email dan Password Anda");
                  }
                }
              });
            }
            return false;
          });
        });
      </script>

</body>
</html>
