<div class="container">
    <div class="row mt-3 py-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    Detail Produk
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="card-img-top mt-3" style="" src="<?php echo base_url();?>images/foto-produk.png" alt="Card image">
                    </div>
                    <h5 class="card-title"><?= $produk['nama']; ?></h5>
                    <p class="card-text"><b>Harga: Rp. </b><?= $produk['harga']; ?></p>
                    <p class="card-text"><b>Detail</b><br><?= $produk['detail']; ?></p>
                    <a href="<?= base_url(); ?>produk" class="btn btn-outline-dark">Kembali</a>
                    <?php if($this->session->userdata('nama')!=null):?>
                        <a href="<?= base_url(); ?>pembayaran" class="btn btn-primary float-right">Pilih Pembayaran</a>
                    <?php else:?>
                        <a href="<?= base_url(); ?>login" class="btn btn-primary float-right">Login Dahulu</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>