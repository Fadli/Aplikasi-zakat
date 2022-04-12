<?php
    $session_data = $this->session->userdata('logged_in');
?>
<div class="sidebar">

        <?php 
            if($this->session->userdata('logged_in'))
            { 
            $baz=$this->db->query("SELECT * FROM tbl_baz WHERE id_member='".$session_data['id']."'")->result();
        ?>
        <div class="row no-gutters">
            <div class="col-auto align-self-center">
                <figure class="avatar avatar-40">
                    <img src="<?=base_url('assets/images/logo.png')?>" alt="">
                </figure>
            </div>
            <div class="col pl-3 align-self-center">
                <p class="my-0"><?=$session_data['name']?></p>
                <p class="text-mute my-0 small"><?=$session_data['email']?></p>
            </div>
        </div>
        <div class="list-group main-menu my-5">
            <a href="<?=site_url()?>" class="list-group-item list-group-item-action active"><i class="material-icons">home</i>Home</a>
            <?php foreach($baz as $bazs) { ?>
                <a href="<?=site_url('')?>" class="list-group-item list-group-item-action"><i class="material-icons">view_day</i>Formulir</a>
            <?php } ?>
            <?php foreach($baz as $bazs) { ?>
            <a href="<?=site_url('view')?>" class="list-group-item list-group-item-action"><i class="material-icons">library_books</i>Daftar Muzaki</a>
            <?php } ?>
            <!--<a href="<?=site_url('notification')?>" class="list-group-item list-group-item-action"><i class="material-icons">notifications</i>Notification <span class="badge badge-dark text-white">2</span></a>-->
            <a href="<?=site_url('front/logout')?>" class="list-group-item list-group-item-action"><i class="material-icons">account_circle</i>Logout</a>
        </div>
        <?php } else { ?>
        <div class="list-group main-menu my-5">
                <a href="<?=site_url('login')?>" class="list-group-item list-group-item-action active"><i class="material-icons">vpn_key</i>Login Admin </a>
        </div>
        <?php } ?>
    </div>