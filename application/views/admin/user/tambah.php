<?php
form_open('admin/tambahuser');
?>
<div class="container py-1">
    <div class="row">
        <div class="col-md-12">
            <div class="row my-5">
                <div class="col-md-6 py-1 mx-auto">                    
                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Tambah Data User</h3>
                        </div>
                        <div class="card-body">
                            <!-- Muncul alert -->
                            <?php if (validation_errors()): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                            <?php endif;?>
                            <form class="form" role="form" autocomplete="off" id="formLogin" method="POST">
                                <div class="form-group has-feedback">
                                    <label for="nama">Nama Lengkap</label>
                                    <span class="fa fa-user form-control-feedback"></span>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="nama" id="nama" placeholder="Nama Lengkap">
                                    <div class="invalid-feedback">Nama wajib diisi.</div>
                                </div>
                                
                                <div class="form-group has-feedback">
                                    <label for="alamat">Alamat</label>
                                    <span class="fa fa-home form-control-feedback"></span>
                                    <textarea class="form-control form-control-lg rounded-0" name="alamat" id="alamat" rows="3" placeholder="Alamat Lengkap"></textarea>
                                    <div class="invalid-feedback">Alamat wajib diisi.</div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <span class="fa fa-briefcase form-control-feedback"></span>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan">
                                    <div class="invalid-feedback">Pekerjaan wajib diisi.</div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="username">Username</label>
                                    <span class="fa fa-user-circle-o form-control-feedback"></span>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="username" id="username" placeholder="Username">
                                    <div class="invalid-feedback">Username wajib diisi.</div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="password">Password</label>
                                    <span class="fa fa-lock form-control-feedback"></span>
                                    <input type="password" class="form-control form-control-lg rounded-0" data-toggle="password" name="password" id="password" autocomplete="new-password" placeholder="Password">
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
                                    <div class="invalid-feedback">Password wajib diisi.</div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="role">Role</label>
                                    <span class="fa fa-users form-control-feedback" style="line-height:40px;"></span>
                                    <select class="form-control" name="role" id="role">
                                        <?php foreach($level as $lvl): ?>
                                            <option value="<?= $lvl ?>"selected><?= $lvl ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group float-right">
                                    <a class="btn btn-outline-dark btn-lg" href="<?php echo base_url();?>admin/user">Kembali</a>
                                    <button type="submit" class="btn btn-primary btn-lg" id="btnLogin">Tambah</button>
                                </div>
                            </form>
                        </div>
                        <!-- /card-block -->
                    </div>
                    <!-- /form card login -->
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