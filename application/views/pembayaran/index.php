<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?php echo base_url();?>home" class="btn btn-lg btn-warning">Batal</a>
        </div>
    </div>
    
    <div class="row mt-5">
        <?php foreach($pembayaran as $byr): ?>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <?= $byr['namaPembayaran']; ?>
                </div>
                <img class="mx-auto card-img-top" src="<?php echo base_url();?>images/<?= $byr['namaGambar'];?>.png" style="width:150px" alt="online">
                <div class="card-body">
                    <h5 class="card-title"><?= $byr['jenisPembayaran']; ?></h5>
                    <p class="card-text"><?= $byr['detailPembayaran']; ?></p>
                    <a href="#" class="btn btn-primary float-right">Beli</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<br>
<br>