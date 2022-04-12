<?php $this->load->view('front/section/head');?>

<body>
    <!-- Loader -->
    <?php $this->load->view('front/section/loader');?>
    <!-- Loader ends -->

    <!-- wrapper starts -->
    <div class="wrapper">

        <!-- header -->
        <?php $this->load->view('front/section/header');?>
        <!-- header ends -->
        
        <div class="container-fluid bg-template mb-4">
            <div class="row hn-154 position-relative">
                <!-- use hn-60 if there is no page specific name required as below and remove below container -->
                <div class="container align-self-end">
                    <h3 class="font-weight-light">Kalkukator Zakat</h3>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- page content here -->
            <div class="row">
                <div class="col-12 col-md-12">
                    <p class="text-mute mb-4">Kalkulator zakat adalah layanan untuk mempermudah perhitungan jumlah zakat yang harus ditunaikan oleh setiap umat muslim sesuai ketetapan syariah.</p>
                   <h5 class="mb-0">Pilih Jenis Zakat</h5><br>
                    <div class="input-group mb-3">
                        <select class="custom-select" required="">
                                <!-- <option value="1">Zakat Maal</option> -->
                                <option value="2">Zakat Penghasilan</option>
                        </select>
                    </div>

                    <label for="basic-url">Zakat Penghasilan </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input type="text" id="penghasilan_pokok" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Jumlah Penghasilan Per Bulan" value="0">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input type="text" id="penghasilan_lainnya" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Bonus, THR dan lainnya" value="0">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    <br>
                    <div class="rows">
                        <button type="submit" id="submitpenghasilan" class="btn btn-lg btn-block btn-default text-uppercase position-relative" data-toggle='modal' data-target='#modalHasil'><span>Hitung Zakat Penghasilan</span></button>
                    </div>
                    <br>
                </div>
            </div>
            <!-- page content ends -->
            <!-- footer -->
            <?php $this->load->view('front/section/footer');?>
            <!-- footer ends -->

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalHasil" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="exampleModalLabel">Hasil Perhitungan</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <center><p>Jumlah zakat penghasilan Anda :</p>
                        <h2 class="hasil">Rp 0</h2></center>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="<?=site_url()?>" type="button"  class="btn btn-outline-success rounded-0">Bayar Sekarang >></a>
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

        });

        $("#submitpenghasilan").click(function(){
              var pokok       = $("#penghasilan_pokok").val();
              var lainnya     = $("#penghasilan_lainnya").val();
              var hasil       = (parseInt(pokok)+parseInt(lainnya))*0.025;
              $(".hasil").html("Rp "+numberWithCommas(hasil));
        });

        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
        

    </script>

</body>
</html>
