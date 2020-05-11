<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- http://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                Form Tambah Data Produk
                </div>
                <div class="card-body">
                <!-- praktikum 2 bagian 2 nomor 7f -->
                <?php if (validation_errors()): ?>
                <!-- praktikum 2 bagian 2 nomor 7h -->
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                    <?php foreach($produk as $prd) : ?>
                    <form action="" method="post">
                        <!-- <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" id="gambar" name="gambar">
                        </div> -->
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
                                <option id="plh-ktg" value="<?= $ktg['idKategori'] ?>"selected><?= $ktg['namaKategori'];?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <a class="btn btn-outline-dark btn-lg" href="<?php echo base_url();?>admin/produk">Kembali</a>
                        <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>    
                    </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>