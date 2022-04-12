<?php $this->load->view('front/section/head');?>
<body>
    <!-- Loader -->
    <div class="row no-gutters vh-100 loader-screen">
        <div class="bg-template background-overlay"></div>
        <div class="col align-self-center text-white text-center">
            <img src="<?=base_url('assets/images/logo.png')?>" alt="logo">
            <h1 class="mb-0 mt-3">BAZ</h1>
            <p class="text-mute subtitle"> Network</p>
            <div class="loader-ractangls">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- Loader ends -->

    <!-- sidebar -->
    <?php $this->load->view('front/section/sidebar');?>
    <!-- sidebar ends -->

    <!-- wrapper starts -->
    <div class="wrapper">

        <!-- header -->
       <?php $this->load->view('front/section/header');?>
        <!-- header ends -->


        <!-- page content here -->
        <div class="container-fluid bg-template mb-4">
            <div class="row hn-290 position-relative">
                <div class="background opac heightset">
                    <img src="<?=base_url('assets/images/zakat.png')?>" alt="">
                </div>
                <div class="container align-self-end">
                    <h2 class="font-weight-light text-uppercase">TUNAIKAN ZAKAT ANDA</h2>
                    <p class="text-mute mb-2">Untuk Mencegah Penyebaran Covid-19, tunaikan Zakat, Infak, Sedekah Anda Secara Online.</p>
                    <input type="text" class="form-control form-control-lg search bottom-25 position-relative border-0" placeholder="Pencarian Badan/Lembaga Amil Zakat">
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-12 px-0">
                    <!-- Swiper -->
                    <div class="swiper-container swiper-shares">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide px-3">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <p class="mb-0">
                                            <span class="text-uppercase">Total Zakat</span> <i class="text-success material-icons vm md-16">arrow_upward</i>
                                            <br>
                                            <span class="text-success"><?=number_format($zakat)?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide px-3 border-left-dashed">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <p class="mb-0">
                                            <span class="text-uppercase">Total Infaq</span> <i class="text-success material-icons vm md-16">arrow_upward</i>
                                            <br>
                                            <span class="text-success"><?=number_format($infaq)?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide px-3 border-left-dashed">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <p class="mb-0">
                                            <span class="text-uppercase">Total Sedekah</span> <i class="text-success material-icons vm md-16">arrow_upward</i>
                                            <br>
                                            <span class="text-success"><?=number_format($sedekah)?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide px-3 border-left-dashed">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <p class="mb-0">
                                            <span class="text-uppercase">Jumlah Muzaki</span> <i class="text-success material-icons vm md-16">arrow_upward</i>
                                            <br>
                                            <span class="text-success"><?=$muzaki?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide px-3 border-left-dashed">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <p class="mb-0">
                                            <span class="text-uppercase">Amil Zakat</span> <i class="text-success material-icons vm md-16">arrow_upward</i>
                                            <br>
                                            <span class="text-success">0</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-2 bg-light mb-5">
            <div class="row">
                <div class="container d-flex">
                    <!-- Swiper -->
                    <div class="swiper-container swiper-prices mt-3">
                        <div class="swiper-wrapper">
                            <?php foreach($baz as $row) { ?>
                            <div class="swiper-slide pb-3">
                                <a href="<?=site_url('link/'.$row->url)?>" class="col-auto px-2">
                                    <figure class="avatar avatar-70 rounded-circle border border-primary">
                                        <img src="<?=base_url('assets/images/logo_baz/'.$row->logo)?>" alt="">
                                    </figure>
                                </a>
                            </div>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-5">
            <div class="row mb-4">
                <div class="col text-uppercase">
                    <p class="text-mute mb-0">News</p>
                    <h4 class="mb-0">Today <small class="text-mute vm"><?=date('d/m/yy')?></small></h4>
                </div>
                <div class="col-auto align-self-end">
                    <a href="#">View all</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card mb-4 overflow-hidden bg-template">
                        <div class="overlay"></div>
                        <div class="background">
                            <img src="<?=base_url('assets/images/woman-1852907_640%402x.png')?>" alt="">
                        </div>
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col">
                                    <span class="tag">News</span>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-info btn-rounded-34"><i class="material-icons md-16">bookmark</i></button>
                                    <button class="btn btn-info btn-rounded-34 ml-2"><i class="material-icons md-16">share</i></button>
                                </div>
                            </div>
                            <br>
                            <a href="newsdetails.html" class="h4 mb-2 font-weight-normal">Dampingi Mustahik Binaan Edukasi Konsumen Cegah Corona</a>
                            <p class="text-mute mb-2">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Sndisse conv allis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card mb-4 overflow-hidden bg-template">
                        <div class="overlay"></div>
                        <div class="background">
                            <img src="<?=base_url('assets/images/turtle-863336_640%402x.png')?>" alt="">
                        </div>
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col">
                                    <span class="tag">Trending</span>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-info btn-rounded-34"><i class="material-icons md-16">bookmark</i></button>
                                    <button class="btn btn-info btn-rounded-34 ml-2"><i class="material-icons md-16">share</i></button>
                                </div>
                            </div>
                            <br>
                            <a href="newsdetails.html" class="h4 mb-2 font-weight-normal">Inisiasi Bentuk Kampung Tanggap Bencana Corona Covid-19</a>
                            <p class="text-mute mb-2">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Sndisse conv allis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <div class="row">
                        <div class="col-4">
                            <figure class="m-0 h-150 w-100 rounded overflow-hidden">
                                <div class="background">
                                    <img src="<?=base_url('assets/images/joy-2483926_640%402x.png')?>" alt="">
                                </div>
                            </figure>
                        </div>
                        <div class="col">
                            <a href="newsdetails.html" class="h4 mb-3 font-weight-normal">Awesome people create awesome things</a>
                            <p class="small text-mute">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Sndisse conv allis. Lorem ipsum dolor sit amet.</p>
                            <a href="newsdetails.html" class="text-dark">Read More <i class="material-icons vm md-16">arrow_forward</i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <div class="row">
                        <div class="col-4">
                            <figure class="m-0 h-150 w-100 rounded overflow-hidden">
                                <div class="background">
                                    <img src="<?=base_url('assets/images/woman-1852907_640%402x.png')?>" alt="">
                                </div>
                            </figure>
                        </div>
                        <div class="col">
                            <a href="newsdetails.html" class="h4 mb-3 font-weight-normal">Creative people create creative things</a>
                            <p class="small text-mute">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Sndisse conv allis. Lorem ipsum dolor sit amet.</p>
                            <a href="newsdetails.html" class="text-dark">Read More <i class="material-icons vm md-16">arrow_forward</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button class="btn btn-light">Load more</button>
                </div>
            </div>
        </div>
        <!-- page content ends -->

        <!-- footer -->
        <?php $this->load->view('front/section/footer');?>
        <!-- footer ends -->

    </div>
    <!-- wrapper ends -->

    <div class="modal" tabindex="-1" role="dialog" id="statusmodal">
        <div class="modal-dialog vh-100 my-0 mx-auto" role="document">
            <div class="modal-content h-100 border-0 bg-dark text-white rounded-0">
                <div class="progress m-2 h-3">
                    <div class="progress-bar statusbar" role="progressbar"></div>
                </div>
                <div class="modal-header border-0 py-2">
                    <div class="row no-gutters w-100">
                        <div class="col-auto">
                            <figure class="avatar avatar-40">
                                <img src="images/joy-2483926_640%402x.png" alt="">
                            </figure>
                        </div>
                        <div class="col pl-2 align-self-center">
                            <h6 class="mb-1 font-weight-normal">Ms. Happylime</h6>
                            <p class="small text-mute">59 min ago</p>
                        </div>
                        <div class="col-auto pl-0 align-self-center">
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-body my-0">
                    <div class="row h-100">
                        <div class="col-12 align-self-center text-center">
                            <figure class="h-100 w-100">
                                <img src="images/joy-2483926_640%402x.png" alt="" class="mw-100 vm">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center text-center border-0">
                    Joy of the day enjoy best moment with the best template ever you meet
                </div>
            </div>
        </div>
    </div>

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
            $(".sparklinechart").sparkline([5, 6, -7, 2, 0, -4, -2, 4], {
                type: 'bar',
                zeroAxis: false,
                barColor: '#00bf00',
                height: '30',
            });
            $(".sparklinechart2").sparkline([-5, -6, 4, -2, 0, 4, 2, -4], {
                type: 'bar',
                zeroAxis: false,
                barColor: '#00bf00',
                height: '30',
            });

            /* Swiper slider */
            var swiper = new Swiper('.swiper-prices', {
                slidesPerView: 'auto',
                spaceBetween: 0,
                pagination: false,
            });
            var swiper = new Swiper('.swiper-categories', {
                slidesPerView: 'auto',
                spaceBetween: 20,
                pagination: false,
            });
            var swiper = new Swiper('.swiper-shares', {
                slidesPerView: 5,
                spaceBetween: 0,
                pagination: false,
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });

            /* status */
            function start() {
                var duration = 4000; // it should finish in 3 seconds !
                $(".statusbar").stop().css("width", 0).animate({
                    width: '100%'
                }, {
                    duration: duration,
                });

                setTimeout(function() {
                    $('#statusmodal').modal('hide');
                    $(".statusbar").stop()
                    $(".statusbar").css("width", '0');
                }, duration)
            }
            $('#statusmodal').on('shown.bs.modal', function(e) {
                start()
            });
            $('#statusmodal').on('hide.bs.modal', function(e) {
                $(".statusbar").stop().css("width", '0');
            });
        })

    </script>

</body>


</html>
