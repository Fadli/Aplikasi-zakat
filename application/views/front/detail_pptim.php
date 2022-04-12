<html lang="en" class="color-theme-blue color-theme-teal">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">
    <meta name="description" content="BAZ Taman Iskandar Muda">
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

    <meta property="og:title" content="Zakat Online <?=$baz->name?>"/>
    <meta property="og:url" content="<?=site_url('form')?>"/>
    <meta property="og:description" content="Untuk Mencegah Penyebaran Covid-19, tunaikan Zakat, Infaq, Sedekah Anda Secara Online di <?=$baz->badan?> <?=$baz->name?>"/>
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
                        <img src="<?=base_url('assets/images/logo_baz/'.$baz->logo)?>" alt="">
                    </figure>
                </div>
                <div class="col pl-0">
                    <p class="mt-3 mb-2"><?=$baz->badan?></p>
                    <h5 class="font-weight-normal mb-0"><?=$baz->name?></h5>
                    <p class="my-0 text-secondary text-mute">Wisma Taman Iskandar Muda <br>Jl. Perahu No. 1, RT. 003/ RW. 001, Kel. Guntur, Kec. Setiabudi, Jakarta 12980</p>
                </div>
                <div class="">
                    <a href="https://api.whatsapp.com/send?phone=+6281290363632&text=Assalamualaikum" class="btn btn-rounded-54 top-25 position-relative"><img src="<?=base_url('assets/images/whatsapp.svg')?>" width="90%"></a>
                </div>
            </div>
        </div>
        <div class="container-fluid border-top border-bottom">
            <div class="row">
                <div class="container text-center py-3">
                    <div class="row">
                        <div class="col">
                            <h5 class="font-weight-normal mb-0"><?=number_format($total_zakat)?></h5>
                            <p class="my-0 text-secondary text-mute">Total </p>
                        </div>
                        <div class="col border-left-dashed">
                                <a href="<?=site_url('view/'.$this->uri->segment(2))?>"><h5 class="font-weight-normal mb-0"><?=$muzaki?></h5>
                                <p class="my-0 text-secondary text-mute">Muzaki</p>
                                </a>
                            </div>
                        <div class="col border-left-dashed">
                            <h5 class="font-weight-normal mb-0"><?=$view?></h5>
                            <p class="my-0 text-secondary text-mute">Dilihat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5" id="formzakat">
            <div class="row mb-4">
                <div class="col text-uppercase">
                    <center><strong class="text-mute mb-0">Silahkan mengisi formulir di bawah ini : </strong></center>
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h5 for="zakat">Zakat Maal : </h5>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="number" name="zakat_maal" id="zakat" value="0" class="form-control" aria-label="" required="" placeholder="0">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                            <h5 for="infaq">Infaq : </h5>
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="number" name="infaq" id="infaq" value="0" class="form-control" aria-label="" required="" placeholder="0">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                            <h5 for="sedekah">Sedekah :</h5>
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="number" name="sedekah" id="sedekah" value="0" class="form-control" aria-label="" required="" placeholder="0">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                <div class="col-12 col-md-6">
                    <label for="lengkapi">Silahkan lengkapi data di bawah ini:</label>
                    <div class="input-group mb-3">
                        <select class="custom-select" name="title" id="title" required="">
                                <option>Bapak</option>
                                <option>Ibu</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Nama</span>
                        </div>
                        <input type="text" name="name" id="name" class="form-control"  aria-describedby="basic-addon3" required="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">No HP</span>
                        </div>
                        <input type="number" name="phone" id="phone" class="form-control"  aria-describedby="basic-addon3" required="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Email</span>
                        </div>
                        <input type="email" name="email" id="email" class="form-control" aria-describedby="basic-addon3" required="">
                    </div>
                    
                </div>
                <div class="col-12 col-md-6">
                    <h5 class="mb-0">Metode Pembayaran</h5>
                    <br>
                    <?php foreach($bank as $row) { ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="">
                                <input type="radio" checked="" name="id_bank" value="<?=$row->id?>" aria-label="Radio" required="">
                                <?=$row->bank_name?>, No. Rek : <?=$row->number; ?> an. <?=$row->name?> 
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <br>
                    <h5 class="mb-0">Jumlah Total</h5>
                    <br>
                    <h3 class="payment">Rp 0</h3>
                    <input type="hidden" id="amountuniq">
                </div>
            </div>
            <br>
            <div id='err_msg' class="col-md-12" style='display: none;'>
                                <div id='msg' style="color:red; text-align: center;"> </div>
            </div>
            <div class="rows">
                <button id="submit" class="btn btn-lg btn-block btn-default text-uppercase position-relative"><span>Konfirmasi</span><i class="material-icons right-absoute">arrow_forward</i></button>
            </div>
            </div>
            <br>
            Apabila ada pertanyaan bisa menghubungi Pengurus : <br>
            <ul>
                <li>DR.Ir Surya Darma, MBA (0811-865-453)</li>
                <li>H.T.Azwani Sabil, SE (0812-9036-3632)</li>
                <li>Mustafa Harun (0812-1068-3029)</li>
            </ul>
        </div>
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

    <!-- chart js -->
    <script src="<?=base_url('assets/vendor/chartjs/Chart.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/chartjs/utils.js')?>"></script>

    <!-- swiper js -->
    <script src="<?=base_url('assets/vendor/sparklines/jquery.sparkline.min.js')?>"></script>

    <!-- template custom js -->
    <script src="<?=base_url('assets/js/main.js')?>"></script>

    <!-- page level script -->
    <script src="<?=base_url('assets/js/profile.js')?>"></script>

    <script type="text/javascript">
        $(document).ready(function(){

          $('#id_category').change(function(){
            var id = $(this).val();
            $("#amount").val(0);
            $("#amountuniq").val(0);
            $(".payment").html("Rp 0");
          });

          function numberWithCommas(x) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }

          $("#zakat").keyup(function(){
              var zakat     = parseInt($("#zakat").val());
              var infaq     = parseInt($("#infaq").val());
              var sedekah   = parseInt($("#sedekah").val());
              var total     = zakat+infaq+sedekah;
              $(".payment").html("Rp "+numberWithCommas(total));
              $("#amountuniq").val(total);
          });
          $("#infaq").keyup(function(){
              var zakat     = parseInt($("#zakat").val());
              var infaq     = parseInt($("#infaq").val());
              var sedekah   = parseInt($("#sedekah").val());
              var total     = zakat+infaq+sedekah;
              $(".payment").html("Rp "+numberWithCommas(total));
              $("#amountuniq").val(total);
          });
          $("#sedekah").keyup(function(){
              var zakat     = parseInt($("#zakat").val());
              var infaq     = parseInt($("#infaq").val());
              var sedekah   = parseInt($("#sedekah").val());
              var total     = zakat+infaq+sedekah;
              $(".payment").html("Rp "+numberWithCommas(total));
              $("#amountuniq").val(total);
          });

          $("#submit").click(function(){
            var id_baz      = <?=$baz->id?>;
            var url         = "<?=$baz->url?>";
            var zakat       = parseInt($("#zakat").val());
            var infaq       = parseInt($("#infaq").val());
            var sedekah     = parseInt($("#sedekah").val());
            var name        = $("#name").val();
            var phone       = $("#phone").val();
            var email       = $("#email").val();
            var title       = $("#title").val();
            var amount      = $("#amountuniq").val();
            var id_bank     = $("input[name='id_bank']:checked").val();

            // Returns error message when submitted without req fields.
            if(name==''|| phone=='' || amount>=1000) {
              jQuery("div#err_msg").show();
              jQuery("div#msg").html("Mohon Data di Isi Lengkap");
            } else {
              $("#submit").html('Loading...');
              //alert (id_bank);
              $.ajax({
                type: "POST",
                url:  "<?=site_url('baz/submit_baztim')?>",
                data: {id_baz: id_baz, zakat: zakat, infaq: infaq, sedekah: sedekah, amount: amount, id_bank: id_bank, title: title, name: name, phone: phone, email: email},
                cache: false,
                success: function(result){
                  if(result!=""){
                    var response=jQuery.parseJSON(result);
                    window.location.href = "<?=site_url('payment/baz/baztim')?>/"+response.phone+"/"+response.amount;
                    //alert(result);
                  } else {
                    jQuery("div#err_msg").show();
                    jQuery("div#msg").html("Mohon maaf gagal submit");
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
