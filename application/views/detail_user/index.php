<div id="wrapper" class="">
            <!-- Sidebar -->
            <div id="sidebar-wrapper" class="">
                <ul class="sidebar-nav">
                    <?php if($this->session->userdata('gambarProfil') != null): ?>
                    <li class="pt-2 pb-1 text-center"><a id="list-profile" href="#"><img style="width:75px;" src="<?= base_url();?>images/profile/<?php echo $this->session->userdata('gambarProfil'); ?>" alt="<?php echo $this->session->userdata('gambarProfil'); ?>"></li>
                    <?php else :  ?>
                    <li class="pt-2 pb-1 text-center"><a id="list-profile" href="#"><img style="width:75px;" src="<?= base_url();?>images/profile/sample-profil.png" alt="sample-profil.png"></li>
                    <?php endif;?>
                    <hr>
                    <li class="text-center"><a id="list-profile" href="#"> <h5><i class="fa fa-user"></i> Nama Lengkap</h5> </a></li>
                    <li class="text-center"><a id="list-profile" href="#"> <p><?php echo $this->session->userdata('nama'); ?></p> </a></li>
                    <hr>
                    <li class="text-center"><a id="list-profile" href="#"> <h5><i class="fa fa-home"></i> Alamat</h5> </a></li>
                    <li class="text-center"><a id="list-profile" href="#"> <p><?php echo $this->session->userdata('alamat'); ?></p> </a></li>
                    <hr>
                    <?php if ($this->session->userdata('level') != "konsultan"):?>
                    <li class="text-center"><a id="list-profile" href="#"> <h5><i class="fa fa-briefcase"></i> Pekerjaan</h5> </a></li>
                    <li class="text-center"><a id="list-profile" href="#"> <p><?php echo $this->session->userdata('pekerjaan'); ?></p> </a></li>
                    <hr>
                    <?php else: ?>
                    <li class="text-center"><a id="list-profile" href="#"> <h5><i class="fa fa-users"></i> Role</h5> </a></li>
                    <li class="text-center"><a id="list-profile" href="#"> <p><?php echo $this->session->userdata('level'); ?></p> </a></li>
                    <?php endif;?>
                    <li class="text-center"><a class="btn btn-outline-success" href="<?php echo base_url();?>edit_profile/edit/<?= $this->session->userdata('idUser'); ?>">Edit Profile</a></li>
                    <li class="text-center"><a class="btn btn-outline-dark mt-3" href="<?php echo base_url();?>transaksi/tampilRiwayatTransaksi/<?= $this->session->userdata('idUser'); ?>">Riwayat Transaksi</a></li>
                </ul>
            </div> <!-- /#sidebar-wrapper -->
            