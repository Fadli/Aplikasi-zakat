<html lang="en" class="color-theme-blue color-theme-teal">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">
    <meta name="description" content="BAZ Network">
    <meta name="author" content="BAZ">

    <title>Zakat Online <?=$baz->name?></title>

    <!-- Material design icons CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/vendor/materializeicon/material-icons.css')?>">

    <!-- Roboto fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('assets/vendor/bootstrap-4.4.1/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Swiper CSS -->
    <link href="<?=base_url('assets/vendor/swiper/css/swiper.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">

    <meta property="og:title" content="Daftar Muzaki <?=$baz->name?>"/>
    <meta property="og:url" content="<?=site_url('link/'.$baz->url)?>"/>
    <meta property="og:description" content="Untuk Mencegah Penyebaran Covid-19, tunaikan Zakat, Infak, Sedekah Anda Secara Online."/>
    <meta property="og:image" content="<?=base_url('assets/images/logo_baz/'.$baz->logo)?>" />
    <meta property="og:site_name" content="baz.my.id"/>
    <meta property="og:type" content="website"/>

</head>



<body>
    <!-- Loader -->
    <?php $this->load->view('front/section/loader');?>
    <!-- Loader ends -->

    <!-- sidebar -->
    <?php $this->load->view('front/section/sidebar');?>
    <!-- sidebar ends -->

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

        <!-- page content here -->
        <div class="container-fluid bg-template">
            <div class="row hn-114 position-relative">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <figure class="avatar avatar-120 top-30 position-relative">
                        <img src="<?=base_url('assets/images/logo_baz/'.$baz->logo)?>" alt="">
                    </figure>
                </div>
                <div class="col pl-0">
                    <p class="mt-3 mb-2"><?=$baz->badan?></p>
                    <h5 class="font-weight-normal mb-0"><?=$baz->name?></h5>
                    <p class="my-0 text-secondary text-mute">Wisma Taman Iskandar Muda <br>Jl. Perahu No. 1, RT. 003/ RW. 001, Kel. Guntur, Kec. Setiabudi, Jakarta 12980</p>
                </div>
                <div class="">
                    <a href="https://api.whatsapp.com/send?phone=<?=$baz->phone?>&text=Assalamualaikum" class="btn btn-rounded-54 top-25 position-relative"><img src="<?=base_url('assets/images/whatsapp.svg')?>" width="90%"></a>
                </div>
            </div>
        </div>
        <div class="container-fluid border-top border-bottom">
            <div class="row">
                <div class="container text-center py-3">
                    <div class="row">
                        <div class="col">
                            <h5 class="font-weight-normal mb-0"><?=number_format($zakat)?></h5>
                            <p class="my-0 text-secondary text-mute">Zakat Maal</p>
                        </div>
                        <div class="col border-left-dashed">
                            <h5 class="font-weight-normal mb-0"><?=number_format($infaq)?></h5>
                            <p class="my-0 text-secondary text-mute">Infaq</p>
                        </div>
                        <div class="col border-left-dashed">
                            <h5 class="font-weight-normal mb-0"><?=number_format($sedekah)?></h5>
                            <p class="my-0 text-secondary text-mute">Sedekah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row mb-4">
                <div class="col text-uppercase">
                    <center>
                        <h5 class="text-mute mb-0">Instruksi Pembayaran</h5>
                        <small>Transfer sesuai nominal di bawah ini:</small>
                    </center>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <center><h2 class="text-mute mb-0">Rp <?=number_format($this->uri->segment(5))?></p></h2><br>
                        <h5 class="text-mute">ke Rekening di bawah ini :  </h5>
                    </center>
                </div>
            </div>

            <div class="card shadow-sm border-0 mb-3 text-center">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title"><?=$payment->bank_name?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <p class="mb-0 f-sm text-secondary">
                                <h3><?=$payment->number?></h3>
                                <h4>an. <?=$payment->name?></h4>
                            </p>
                        </div>
            </div>
            <center>
            <div class="col-md-6 text-center">
                <p>Yuk bantu share <?=$baz->badan?> <?=$baz->name?></p>

                <a href="https://www.facebook.com/sharer/sharer.php?u=<?=site_url('form')?>"><img src="<?=base_url('assets/images/sharefb.png')?>" width="100%"></a>
            </div> <br>
            <div class="col-md-6 text-center">
                <a href="https://wa.me/?text=<?=site_url('form')?>"><img src="<?=base_url('assets/images/sharewa.png')?>" width="100%"></a>
            </div>
            <br>
            </center>

        </div>


        <!-- footer -->
        <?php //$this->load->view('front/section/footer');?>
        <!-- footer ends -->
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

    <!-- chart js -->
    <script src="<?=base_url('assets/vendor/chartjs/Chart.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/chartjs/utils.js')?>"></script>

    <!-- swiper js -->
    <script src="<?=base_url('assets/vendor/sparklines/jquery.sparkline.min.js')?>"></script>

    <!-- template custom js -->
    <script src="<?=base_url('assets/js/main.js')?>"></script>

    <!-- page level script -->
    <script src="<?=base_url('assets/js/profile.js')?>"></script>

</body>

</html>
