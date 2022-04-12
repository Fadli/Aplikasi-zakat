<?php $this->load->view('front/section/head');?>

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
        <?php $this->load->view('front/section/header');?>
        <!-- header ends -->

        <!-- page content here -->
        <div class="container-fluid bg-template mb-4">
            <div class="row hn-114 position-relative">
                <div class="container align-self-end">
                    <input type="text" class="form-control form-control-lg search bottom-25 position-relative border-0" placeholder="Search">
                </div>
            </div>
        </div>
        <div class="container pt-5">
            <div class="row mb-4">
                <div class="col text-uppercase">
                    <p class="text-mute mb-0">Daftar BAZ</p>
                    <h4 class="mb-0">Badan/Lembaga Amil Zakat</h4>
                </div>
            </div>
            <div class="row">
                <div class="container d-flex">
                    <!-- Swiper -->
                    <div class="swiper-container swiper-prices mt-3">
                        <div class="swiper-wrapper">
                            <?php foreach($baz as $row) { ?>
                            <div class="pb-3">
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
        <!-- page content ends -->

        <!-- footer -->
        <?php $this->load->view('front/section/footer');?>
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
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 50,
                    },
                }
            });
        })

    </script>

</body>

</html>
