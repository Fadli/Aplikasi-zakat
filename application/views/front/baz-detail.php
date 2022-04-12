<?php $this->load->view('front/section/head');?>

<body>
    <!-- Loader -->
    <div class="row no-gutters vh-100 loader-screen">
        <div class="bg-template background-overlay"></div>
        <div class="col align-self-center text-white text-center">
            <img src="images/logo.png" alt="logo">
            <h1 class="mb-0 mt-3">BAZ</h1>
            <p class="text-mute subtitle"> Taman Iskandar Muda</p>
            <div class="loader-ractangls">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- Loader ends -->

    <!-- sidebar -->
    <div class="sidebar">
        <div class="row no-gutters">
            <div class="col-auto align-self-center">
                <figure class="avatar avatar-40">
                    <img src="images/man-930397_640%402x.png" alt="">
                </figure>
            </div>
            <div class="col pl-3 align-self-center">
                <p class="my-0">Maxartkiller</p>
                <p class="text-mute my-0 small">United States</p>
            </div>
            <div class="col-auto align-self-center">
                <a href="login.html" class="btn btn-link text-white p-2"><i class="material-icons">power_settings_new</i></a>
            </div>
        </div>
        <div class="list-group main-menu my-5">
            <a href="index.html" class="list-group-item list-group-item-action active"><i class="material-icons">home</i>Home</a>
            <a href="latestnews.html" class="list-group-item list-group-item-action"><i class="material-icons">view_day</i>Latest news</a>
            <a href="subscribed.html" class="list-group-item list-group-item-action"><i class="material-icons">library_books</i>Subscribed</a>
            <a href="notification.html" class="list-group-item list-group-item-action"><i class="material-icons">notifications</i>Notification <span class="badge badge-dark text-white">2</span></a>
            <a href="myprofile.html" class="list-group-item list-group-item-action"><i class="material-icons">account_circle</i>My Profile</a>
        </div>
    </div>
    <!-- sidebar ends -->

    <!-- wrapper starts -->
    <div class="wrapper">

        <!-- header -->
        <?php $this->load->view('front/section/header');?>
        <!-- header ends -->


        <!-- page content here -->
        <div class="container-fluid bg-template">
            <div class="row hn-114 position-relative">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <figure class="avatar avatar-120 top-30 position-relative">
                        <img src="images/man-930397_640%402x.png" alt="">
                    </figure>
                </div>
                <div class="col pl-0">
                    <p class="mt-3 mb-2">Badan Amil Zakat</p>
                    <h5 class="font-weight-normal mb-0">Taman Iskandar Muda</h5>
                    <p class="my-0 text-secondary text-mute">Wisma Taman Iskandar Muda <br>Jl. Perahu No. 1, RT. 003/ RW. 001, Kel. Guntur, Kec. Setiabudi, Jakarta 12980</p>
                </div>
                <div class="col-auto pl-0">
                    <a href="" class="btn btn-rounded-54 top-25 position-relative"><img src="https://image.flaticon.com/icons/svg/2111/2111728.svg" width="100%"></a>
                </div>
            </div>
        </div>
        <div class="container-fluid border-top border-bottom">
            <div class="row">
                <div class="container text-center py-3">
                    <div class="row">
                        <div class="col">
                            <h5 class="font-weight-normal mb-0">215.000.000</h5>
                            <p class="my-0 text-secondary text-mute">Total Zakat</p>
                        </div>
                        <div class="col border-left-dashed">
                            <h5 class="font-weight-normal mb-0">80</h5>
                            <p class="my-0 text-secondary text-mute">Muzaki</p>
                        </div>
                        <div class="col border-left-dashed">
                            <h5 class="font-weight-normal mb-0">450</h5>
                            <p class="my-0 text-secondary text-mute">Dilihat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row mb-4">
                <div class="col text-uppercase">
                    <center><p class="text-mute mb-0">Silahkan mengisi formulir di bawah ini.</p></center>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                <div class="col-12 col-md-6">
                    <h5 class="mb-0">Pilih Jenis Dana</h5>
                    <div class="input-group mb-3">
                        <select class="custom-select" required="">
                                <option value="1">Zakat Maal</option>
                                <option value="2">Infaq</option>
                                <option value="3">Sedekah</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>

                    <label for="lengkapi">Silahkan lengkapi data di bawah ini:</label>
                    <div class="input-group mb-3">
                        <select class="custom-select" required="">
                                <option value="1">Bapak</option>
                                <option value="2">Ibu</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Nama</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">No HP</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Email</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                    
                </div>
                <div class="col-12 col-md-6">
                    <h5 class="mb-0">Metode Pembayaran</h5>
                    <br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="">
                                <input type="radio" aria-label="Radio">
                                Bank BCA
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="">
                                <input type="radio" aria-label="Radio">
                                Bank Mandiri
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="">
                                <input type="radio" aria-label="Radio">
                                Lainnya
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Niat Zakat Maal</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body  ">
                            <p class="mb-0 f-sm text-secondary">
                                <img src="https://baznas.go.id//application/views/assets/images/niat.jpg" width="100%">
                                <strong>“Nawaitu an ukhrija zakata maali fardhan lillahi ta’aala.”</strong>
                                <br>Aku niat mengeluarkan zakat hartaku fardhu karena Allah Ta’ala.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <div class="rows">
                <a href="" class="btn btn-lg btn-block btn-default text-uppercase position-relative"><span>Submit</span><i class="material-icons right-absoute">arrow_forward</i></a>
            </div>

            </div>
            <div class="barchart my-4">
                <canvas id="barcharts"></canvas>
            </div>
        </div>


        <!-- footer -->
            <?php $this->load->view('front/section/footer');?>
            <!-- footer ends -->
            
    </div>
    <!-- wrapper ends -->


    <!-- jquery, popper and bootstrap js -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="vendor/bootstrap-4.4.1/js/bootstrap.min.js"></script>

    <!-- cookie js -->
    <script src="vendor/cookie/jquery.cookie.js"></script>

    <!-- swiper js -->
    <script src="vendor/swiper/js/swiper.min.js"></script>

    <!-- chart js -->
    <script src="vendor/chartjs/Chart.min.js"></script>
    <script src="vendor/chartjs/utils.js"></script>

    <!-- swiper js -->
    <script src="vendor/sparklines/jquery.sparkline.min.js"></script>

    <!-- template custom js -->
    <script src="js/main.js"></script>

    <!-- page level script -->
    <script src="js/profile.js"></script>

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
                    window.location.href = "<?=site_url('front')?>";
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
