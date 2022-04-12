        <div class="footer">
            <div class="no-gutters">
                <div class="col-auto mx-auto">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-auto">
                            <a href="<?=site_url()?>" class="btn btn-link-default <?php if($this->uri->segment(1)=="") { echo "active"; }?>">
                                <span class="icon-text"><i class="material-icons">home</i></span>
                                <span class="text-name">Beranda</span>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="<?=site_url('baz')?>" class="btn btn-link-default <?php if($this->uri->segment(1)=="baz" || $this->uri->segment(1)=="link" || $this->uri->segment(1)=="form") { echo "active"; }?>">
                                <span class="icon-text"><i class="material-icons">payment</i></span>
                                <span class="text-name">BAZ</span>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="<?=site_url('calculator')?>" class="btn btn-link-default <?php if($this->uri->segment(1)=="calculator") { echo "active"; }?>">
                                <span class="icon-text"><i class="material-icons">exposure</i></span>
                                <span class="text-name">Kalkulator</span>
                            </a>
                        </div>

                        <!-- <div class="col-auto">
                            <a href="<?=site_url('history')?>" class="btn btn-link-default <?php if($this->uri->segment(1)=="history") { echo "active"; }?>">
                                <span class="icon-text"><i class="material-icons">bookmarks</i></span>
                                <span class="text-name">History</span>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="<?=site_url('pesan')?>" class="btn btn-link-default <?php if($this->uri->segment(1)=="pesan") { echo "active"; }?>">
                                <span class="icon-text"><i class="material-icons">send</i></span>
                                <span class="text-name">Pesan</span>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>