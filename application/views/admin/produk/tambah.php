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
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <!-- Praktikum 2 bagian 2 nomor 7d -->
                            <input type="file" class="form-control" id="gambar" name="gambar">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <!-- Praktikum 2 bagian 2 nomor 7d -->
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <!-- Praktikum 2 bagian 2 nomor 7d -->
                            <input type="number" class="form-control" id="harga" name="harga">
                        </div>
                        <div class="form-group">
                            <label for="detail">Detail</label>
                            <!-- Praktikum 2 bagian 2 nomor 7d -->
                            <textarea class="form-control" name="detail" id="detail" cols="50" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Kategori</label>
                            <select class="form-control" name="kategori" id="kategori">
                                <!-- Praktikum 4 bagian 1 nomor 7f -->
                                <?php foreach($jurusan as $key) : ?>
                                    <option value="<?= $key ?>"selected><?= $key ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>