<div id="wrapper" class="">
            <!-- Sidebar -->
            <div id="sidebar-wrapper" class="bg-success">
                <ul class="sidebar-nav">
                    <li class="pt-3 text-center"><a id="list-profile" href="#"> <h5><i class="fa fa-user"></i> Nama Lengkap</h5> </a></li>
                    <li class="text-center"><a id="list-profile" href="#"> <p><?php echo $this->session->userdata('nama'); ?></p> </a></li>
                    <hr>
                    <li class="text-center pt-2"><a id="list-profile" href="#"> <h5><i class="fa fa-home"></i> Alamat</h5> </a></li>
                    <li class="text-center"><a id="list-profile" href="#"> <p><?php echo $this->session->userdata('alamat'); ?></p> </a></li>
                    <hr>
                    <li class="text-center pt-2"><a id="list-profile" href="#"> <h5><i class="fa fa-briefcase"></i> Pekerjaan</h5> </a></li>
                    <li class="text-center"><a id="list-profile" href="#"> <p><?php echo $this->session->userdata('pekerjaan'); ?></p> </a></li>
                    <hr>
                    <?php if ($this->session->userdata('level') == "konsultan"):?>
                    <li class="text-center pt-2"><a id="list-profile" href="#"> <h5><i class="fa fa-lock"></i> Role</h5> </a></li>
                    <li class="text-center"><a id="list-profile" href="#"> <p><?php echo $this->session->userdata('level'); ?></p> </a></li>
                    <?php endif;?>
                    <li class="text-center"><a class="btn btn-outline-light" href="#">Edit Profile</a></li>
                </ul>
            </div> <!-- /#sidebar-wrapper -->
            