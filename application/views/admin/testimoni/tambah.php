
<div class="container py-1">
    <div class="row">
        <div class="col-md-12">
            <div class="row my-5">
                <div class="col-md-6 py-1 mx-auto">                    
                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Tambah Data Testimoni</h3>
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
                                        <?= $error; ?>
                                    </div>
                                <?php endforeach;?>
                            <?php endif; ?>
                                <?=
                                form_open_multipart('admin/tambahtestimoni');
                                ?>
                                <div class="form-group has-feedback">
                                    <label for="gambar"><b>Gambar Testimoni</b></label><br>
                                    <span class="fa fa-picture form-control-feedback"></span>
                                    <input type="file" class="input" name="gambar" id="gambar">
                                    <div class="invalid-feedback">Gambar wajib diupload</div>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="judul">Judul Testimoni</label>
                                    <span class="fa fa-tags form-control-feedback"></span>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="judul" id="judul" placeholder="Judul Testimoni">
                                    <div class="invalid-feedback">Judul wajib diisi.</div>
                                </div>                                
                                <div class="form-group has-feedback">
                                    <label for="detail">Detail</label>
                                    <span class="fa fa-pencil-square-o form-control-feedback"></span>
                                    <textarea class="form-control form-control-lg rounded-0" name="detail" id="detail" rows="3" placeholder="Detail Testimoni"></textarea>
                                    <div class="invalid-feedback">Detail wajib diisi.</div>
                                </div>
                                <div class="form-group float-right">
                                    <a class="btn btn-outline-dark btn-lg" href="<?php echo base_url();?>admin/testimoni">Kembali</a>
                                    <button type="submit" class="btn btn-primary btn-lg" id="btnTambah">Tambah</button>
                                </div>
                                
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