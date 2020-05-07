<div id="wrapper" class="">
            <!-- Sidebar -->
            <div id="sidebar-wrapper" style="background-color: #fafafa;
            box-shadow: 0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                        0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                        0 12.5px 10px rgba(0, 0, 0, 0.06),
                        0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                        0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                        0 100px 80px rgba(0, 0, 0, 0.12)">
                <ul class="sidebar-nav">
                    <li class="pt-3 text-center"><a id="list-profile" href="#"> <h5><i class="fa fa-user"></i> Nama Lengkap</h5> </a></li>
                    <li class="text-center"><a id="list-profile" href="#"> <p><?php echo $this->session->userdata('nama'); ?></p> </a></li>
                    <hr>
                    <li class="text-center pt-2"><a id="list-profile" href="#"> <h5><i class="fa fa-lock"></i> Role</h5> </a></li>
                    <li class="text-center"><a id="list-profile" href="#"> <p><?php echo $this->session->userdata('level'); ?></p> </a></li>
                    <li class="text-center"><a class="btn btn-outline-dark" href="#">Edit Profile</a></li>
                </ul>
            </div> <!-- /#sidebar-wrapper -->
            