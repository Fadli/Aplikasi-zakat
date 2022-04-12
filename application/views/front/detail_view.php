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
                        <h4>BAZ<br><small class="text-mute">TIM</small></h4>
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
                    <p class="my-0 text-secondary text-mute">Wisma Taman Iskandar Muda<br>Jl. Perahu No. 1, RT. 003/ RW. 001, Kel. Guntur, Kec. Setiabudi, Jakarta 12980</p>
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
                    <center><p class="text-mute mb-0">Daftar Muzaki <?=$baz->name?> </p></center>
                </div>
            </div>
            <div class="col-md-12 table-responsive">
                <table class="table">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Jumlah</th>
                    <th>Rekening</th>
                    <th>Status</th>
                    <?php if($this->session->userdata('logged_in')) { echo "<th>Action</th>"; }?>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($muzaki as $row) { ?>
                  <tr>
                    <td><?=$no++?>.</td>
                    <td>
                        <?php 
                            if($this->session->userdata('logged_in'))
                            { echo $row->name." (".$row->phone.")";  } 
                            else { echo substr($row->name, 0,5)."XXX ( ".substr($row->phone,0,8)."XXX )"; }
                    ?></td>
                    <td><?=$row->category_name?></td>
                    <td>Rp <?=number_format($row->amount)?></td>
                    <td><?=$row->bank_name?></td>
                    <td><?php if($row->status==0) { echo "<span class='badge badge-light'>Menunggu Konfirmasi</span>"; } else if($row->status==1) { echo "<span class='badge badge-success'>Lunas</span>"; } else if($row->status==2) { echo "<span class='badge badge-warning'>Pending</span>"; } else { echo "<span class='badge badge-danger'>Di Batalkan</span>"; }  ?><br><small>Note : <?=$row->notes?></small></td>
                    <?php if($this->session->userdata('logged_in')) { echo "<td><a href='' class='btnproses btn btn-outline-success rounded-0' data-toggle='modal' idp='".$row->id."' phone='".$row->phone."' idbaz='".$row->id_baz."' amount='".$row->amount."' data-target='#modalProses'>Proses</a></td>"; } ?>
                  </tr>
                <?php } ?>
                </tbody>
              </table>

                    <?php if($this->session->userdata('logged_in'))
                            { ?><center><a href="<?=site_url('baz/excel/'.$this->uri->segment(2))?>">Download Excel (.xls)</a></center> <?php } ?>
                    <br>
                    <br>

            </div>
            </div>
        </div>


        <!-- footer -->
        <?php //$this->load->view('front/section/footer');?>
        <!-- footer ends -->
    </div>
    <!-- wrapper ends -->

    <!-- Modal -->
    <div class="modal fade" id="modalProses" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Proses Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <center><h5 class="amount"></h5></center>
                        <label>Status</label>
                        <input type="hidden" id="idp">
                        <input type="hidden" id="phone">
                        <input type="hidden" id="idbaz">
                        <input type="hidden" id="amount">
                        <select class="custom-select" name="idstatus" id="idstatus" required="">
                                <option value="1">Lunas</option>
                                <option value="2">Pending</option>
                                <option value="3">Di Batalkan</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label>Catatan</label>
                        <textarea class="form-control" id="note"></textarea>
                    </div>
                    <div id='err_msg' class="col-md-12" style='display: none; margin-top:5px'>
                                <div id='msg' style="color:red; text-align: center;"> </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnkonfirmasi" class="btn btn-success rounded-0">Save</button>
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

    <!-- chart js -->
    <script src="<?=base_url('assets/vendor/chartjs/Chart.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/chartjs/utils.js')?>"></script>

    <!-- swiper js -->
    <script src="<?=base_url('assets/vendor/sparklines/jquery.sparkline.min.js')?>"></script>

    <!-- template custom js -->
    <script src="<?=base_url('assets/js/main.js')?>"></script>

    <!-- page level script -->
    <script src="<?=base_url('assets/js/profile.js')?>"></script>

    <script>
        $('.btnproses').click(function(){
               var id    = $(this).attr('idp');
               var phone = $(this).attr('phone');
               var idbaz = $(this).attr('idbaz');
               var amount = $(this).attr('amount');
               $("#idp").val(id);
               $("#phone").val(phone);
               $("#idbaz").val(idbaz);
               $("#amount").val(amount);
               $(".amount").html("Rp "+numberWithCommas(amount));
        });

        function numberWithCommas(x) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $(document).ready(function(){
          $("#btnkonfirmasi").click(function(){
            var id      = $("#idp").val();
            var phone   = $("#phone").val();
            var idbaz   = $("#idbaz").val();
            var status  = $("#idstatus").val();
            var note    = $("#note").val();
            // Returns error message when submitted without req fields.
            if(status=='') {
              jQuery("div#err_msg").show();
              jQuery("div#msg").html("All fields are required");
            } else {
              $("#btnkonfirmasi").html('Loading...');
              $.ajax({
                type: "POST",
                url:  "<?=site_url('baz/submitkonfirmasi')?>",
                data: {id: id, note: note, status:status},
                cache: false,
                success: function(result){
                  if(result=="success"){
                    alert ("Berhasil di Update");
                    // On success redirect.
                    location.reload(true);
                  } else {
                    $("#btnkonfirmasi").html('Simpan');
                    jQuery("div#err_msg").show();
                    jQuery("div#msg").html("All fields are required");
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
