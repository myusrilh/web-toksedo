<?=
form_open('login/proses_login');
?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row my-5">
                <div class="col-md-6 py-5 mx-auto">                    
                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                <div class="form-group has-feedback">
                                    <label for="username">Username</label>
                                    <span class="fa fa-user-circle-o form-control-feedback"></span>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="username" id="username" required="" placeholder="Username">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="password">Password</label>
                                    <span class="fa fa-lock form-control-feedback"></span>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="password" id="password" required="" autocomplete="new-password" placeholder="Password">
                                    <div class="px-4 py-1 row">
                                        <div class="col-xs-4">
                                        <a href="#" class="text-dark" id="icon-click">
                                            <i class="fa fa-eye" id="icon"></i>
                                        </a>
                                        </div>
                                        <div class="col-xs-4">&nbsp;</div>
                                        <div class="col-xs-4">
                                        <p id="text_password">Show Password</p>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">Enter your password too!</div>
                                </div>
                                <div class="form-group float-right">
                                    <button type="submit" class="btn btn-success btn-lg" id="btnLogin">Login</button>
                                    <a class="btn btn-outline-warning btn-lg" href="<?php echo base_url();?>register">Register</a>
                                </div>
                                <p>Lupa Password? <a id="link-register-password" href="#">klik disini</a></p>
                            </form>
                        </div>
                        <!-- /card-block -->
                    </div>
                    <!-- /form card login -->
                    <!-- muncul alert -->
                    
                    <?php if (isset($pesan)):?>
                    <div class="alert alert-danger" role="alert"> 
                        <?php echo $pesan;?>
                    </div>
                    <?php else: ?>
                    <div class="alert alert-info" role="alert"> 
                        <?php echo "Masukkan username dan password anda";?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /col -->
    </div>
    <!-- /row -->
</div>
<!-- /container -->
<?php

form_close();

?>