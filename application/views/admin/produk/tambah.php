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
                            <h3 class="mb-0">Tambah Data Produk</h3>
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
                                    <label for="nama">Nama Barang</label>
                                    <span class="fa fa-database form-control-feedback"></span>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="nama" id="nama" placeholder="Nama Barang">
                                    <div class="invalid-feedback">Nama Barang wajib diisi.</div>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="harga">Harga Barang</label>
                                    <span class="fa fa-tags form-control-feedback"></span>
                                    <input type="number" class="form-control form-control-lg rounded-0" name="harga" id="harga" placeholder="Harga Barang">
                                    <div class="invalid-feedback">Harga Barang wajib diisi.</div>
                                </div>                                
                                <div class="form-group has-feedback">
                                    <label for="detail">Detail</label>
                                    <span class="fa fa-pencil-square-o form-control-feedback"></span>
                                    <textarea class="form-control form-control-lg rounded-0" name="detail" id="detail" rows="3" placeholder="Detail Barang"></textarea>
                                    <div class="invalid-feedback">Detail wajib diisi.</div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="role">Kategori</label>
                                    <span class="fa fa-info-circle form-control-feedback" style="line-height:40px;"></span>
                                    <select class="form-control" name="kategori" id="kategori">
                                        <?php foreach($tblktgr as $kategori): ?>
                                            <option value="<?= $kategori['idKategori']; ?>"selected><?= $kategori['namaKategori']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group float-right">
                                    <a class="btn btn-outline-dark btn-lg" href="<?php echo base_url();?>admin/produk">Kembali</a>
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