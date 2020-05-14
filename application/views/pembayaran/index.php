<div class="container">
    <div class="row mt-2">
        <div class="col-md-6">
            <a href="<?php echo base_url();?>" class="btn btn-lg btn-danger"><i class="fa fa-times"></i> Batal</a>
        </div>
    </div>
    <?php foreach($pembayaran as $byr): ?>
    <form action="<?= base_url();?>transaksi/tambah/<?= $byr['idPembayaran']?>" method="post">
    <div class="row mt-4 mx-auto">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <?= $byr['namaPembayaran']; ?>
                </div>
                <img class="mx-auto card-img-top" src="<?php echo base_url();?>images/<?= $byr['namaGambar'];?>.png" style="width:150px" alt="<?= $byr['namaGambar']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $byr['jenisPembayaran']; ?></h5>
                    <p class="card-text"><?= $byr['detailPembayaran']; ?></p>
                    <label for="idProduk"><b> ID Produk</b></label>
                    <input class="form-control" type="number" name="idProduk" id="idProduk" value="<?= $produk['idProduk'] ?>" readonly>
                    <label for="harga"><b>Harga per item</b></label>
                    <input class="form-control" type="number" name="harga" value="<?= $produk['harga'] ?>"readonly>
                    <label for="jumlah"><b>Jumlah yang dibeli</b></label>
                    <input class="form-control" type="number" name="jumlah" value="<?= $produk['jumlah'] ?>"readonly>
                    <label for="totalBelanja"><b>Total Biaya Belanja</b></label>
                    <input class="form-control" type="number" name="totalBelanja" value="<?= $produk['totalBelanja'] ?>"readonly>
                    <div class="mt-3 float-right">
                        <button type="submit" id="tombolBeli" class="btn btn-primary"> Beli </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <?php endforeach; ?>
</div>
<br>
<br>