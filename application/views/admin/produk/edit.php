<div class="container">
    <div class="row mt-3 mx-auto">
        <div class="col-md-6">
            <!-- http://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                Form Ubah Data Produk
                </div>
                <div class="card-body">
                <!-- praktikum 2 bagian 2 nomor 7f -->
                <?php if (validation_errors()): ?>
                <!-- praktikum 2 bagian 2 nomor 7h -->
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                <?php if(isset($uploadError)): ?>
                    <?php foreach ($uploadError as $error): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $error; ?>
                        </div>
                    <?php endforeach;?>
                <?php endif; ?>
                    <?php foreach($produk as $prd) : ?>
                    <?= form_open_multipart('admin/editProduk/'.$prd['idProduk']);?>
                        <div class="form-group">
                            <label for="gambar"><b>Gambar Produk</b></label><br>
                            <?php if($prd['gambarProduk'] !=null): ?>
                                <td><img style="width:165px;" src="<?= base_url();?>images/produk/<?= $prd['gambarProduk']; ?>" alt="<?= $prd['gambarProduk']; ?>"></td><br>
                            <?php else: ?>
                                <td><img style="width:165px;" src="<?= base_url();?>images/produk/foto-produk.png" alt="<?= $prd['gambarProduk']; ?>"></td><br>
                            <?php endif;?><input type="file" class="mt-1" name="gambar" id="gambar"><br>
                            <label for="gambar">Ukuran 5MB</label><br>
                            <div class="invalid-feedback">Gambar wajib diupload</div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $prd['nama'];?>">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" value="<?= $prd['harga'];?>">
                        </div>
                        <div class="form-group">
                            <label for="detail">Detail</label>
                            <textarea class="form-control" name="detail" id="detail" cols="50" rows="4"><?= $prd['detail'];?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" name="kategori" id="kategori">
                                <?php foreach($kategori as $ktg) : ?>
                                <option class="pilih-kategori" value="<?= $ktg['idKategori'] ?>"selected><?= $ktg['namaKategori'];?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <a class="btn btn-outline-dark btn-lg" href="<?php echo base_url();?>admin/produk">Kembali</a>
                        <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>    
                    <?=
                    form_close();
                    ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>