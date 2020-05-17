<div class="container py-1">
    <div class="row">
        <div class="col-md-12">
            <div class="row my-5">
                <div class="col-md-6 py-1 mx-auto">                    
                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Register</h3>
                        </div>
                        <div class="card-body">
                            <!-- Muncul alert -->
                            <?php if (validation_errors()): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                            <?php endif;?>
                            <?php if(isset($uploadError)): ?>
                                <?php foreach ($uploadError as $error): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <p>Anda harus upload foto!</p>
                                    </div>
                                <?php endforeach;?>
                            <?php endif; ?>
                                <?=
                                form_open_multipart('register/index');
                                ?>
                                <div class="form-group has-feedback">
                                    <label for="gambar"><b>Gambar Profil</b></label><br>
                                    <img class="mb-1" style="width: 100px;" src="<?= base_url();?>images/profile/sample-profil.png" alt="sample-profil.png">
                                    <input type="file" class="input" name="gambar" id="gambar">
                                    <div class="invalid-feedback">Gambar wajib diupload</div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="nama">Nama Lengkap</label>
                                    <span class="fa fa-user form-control-feedback"></span>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="nama" id="nama" placeholder="Nama Lengkap">
                                    <div class="invalid-feedback">Nama wajib diisi.</div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label>Jenis Kelamin</label>
                                    <input type="radio" name="gender" id="pria" value="Pria" checked>
                                    <label for="pria">Pria</label>&nbsp;
                                    <input type="radio" name="gender" id="perempuan" value="Wanita">
                                    <label for="wanita">Wanita</label>
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
                                <div class="form-group float-right">
                                    <button type="submit" class="btn btn-primary btn-lg" id="btnLogin">Register</button>
                                </div>
                                <p>Sudah punya akun? <a id="link-register-password" href="<?php echo base_url();?>login">login</a></p>
                                <?=
                                form_close();
                                ?>
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
