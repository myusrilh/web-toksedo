<?=
form_open('pembayaran/index');
?>
<div class="container">
    <div class="row mt-3 py-5">
        <div class="col-md-6 mx-auto">
            <?php foreach($produk as $produk): ?>
            <div class="card">
                <div class="card-header">
                    Detail Produk
                </div>
                <div class="card-body">
                    <div class="text-center">
                    <?php if($produk['gambarProduk'] != null) :?>
                        <img class="card-img-top mb-3 mt-2" src="<?php echo base_url();?>images/produk/<?= $produk['gambarProduk'];?>" alt="<?= $produk['gambarProduk'];?>">
                    <?php else :?>
                        <img class="card-img-top mb-3 mt-2" src="<?php echo base_url();?>images/produk/foto-produk.png" alt="Sampel Foto">
                    <?php endif;?>
                    </div>
                    <input class="form-control" type="hidden" name="idProduk" id="idProduk" value="<?= $produk['idProduk'];?>">
                    <input class="form-control" type="hidden" name="harga" id="harga" value="<?= $produk['harga'];?>">
                    <h5 class="card-title text-center"><?= $produk['nama']; ?></h5>
                    <hr>
                    <p class="card-text"><b>Harga : Rp. </b><?= $produk['harga']; ?></p>
                    <p class="card-text"><b>Detail : </b><br><?= $produk['detail']; ?></p>
                    <hr>
                    <label for="jumlah"><b> Jumlah Barang : </b></label>
                    <input class="form-control mb-4" type="text" name="jumlah" id="jumlah" placeholder="Masukkan Jumlah Barang" required>
                    <a href="<?= base_url(); ?>produk" class="btn btn-outline-dark">Kembali</a>
                    <?php if($this->session->userdata('idUser')!=null):?>
                        <button type="submit" id="tombolBayar" class="btn btn-primary float-right">Pilih Pembayaran</button>
                    <?php else:?>
                        <a href="<?= base_url(); ?>login" class="btn btn-primary float-right">Login Dahulu</a>
                    <?php endif;?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?=
form_close();
?>