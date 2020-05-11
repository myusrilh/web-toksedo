<div class="container" style="min-height:768 px">
    <!-- Banner Slideshow -->
    <!-- margin : top right bottom left -->
    <?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="mt-3 alert alert-success" role="alert">
            Data user <strong>berhasil</strong> <?= $this->session->flashdata('flash-data'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <!-- tambah data-... untuk mengubah opsi (contoh = data-interval untuk mengubah lama slide ditampilkan) -->
    <div id="carouselExampleIndicators" class="carousel slide" data-interval="3000" data-ride="carousel" style="margin:50px auto 30px">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo base_url();?>images/banner-1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url();?>images/banner-2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url();?>images/banner-3.png" alt="Third slide">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container">
        <blockquote class="blockquote">
            <mark>
                <b>Orang pintar </b> kebanyakan ide dan akhirnya
                tidak ada satupun yang menjadi kenyataan.
                <b>Orang goblok </b> cuma punya satu ide dan itu menjadi kenyataan.
            </mark>
        </blockquote>
        <footer class="blockquote-footer">
            Bob Sadino
        </footer>

        <!-- tulisan best seller -->
            <h3 href="#" class="font-weight-bold" style="margin:30px auto 50px;background: -webkit-linear-gradient(#28a745,#8FBC8F);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Best Seller</h3>
        <!-- Best Seller -->

        <div class="card-deck" style="30px auto">
            <div class="card-columns">
                <?php foreach($produk as $prd):?>
                <div class="card border-success" style="width:200px;">
                    <div class="text-center">
                        <img class="card-img-top mt-3" style="width:165px;height:110px;" src="<?php echo base_url();?>images/foto-produk.png" alt="Card image">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><?= $prd['nama'];?></h4>
                        <p class="card-text">Harga : Rp. <?= $prd['harga'];?></p>
                        <div class="text-right">
                            <a href="<?php echo base_url();?>produk/detail/<?= $prd['idProduk'];?>" class="btn btn-primary">Detail Produk</a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>

        <hr>

        <!--Tulisan Sale For Today -->
            <h3 class="font-weight-bold" style="margin:30px auto 50px;background: -webkit-linear-gradient(#28a745,#8FBC8F);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Sale For Today</h3>
        
        <!-- Sale For Today -->
        <div class="card-deck" style="margin:20px auto 200px">
            <div class="card-columns">
                <?php foreach($produk as $prd):?>
                <div class="card border-success" style="width:285px;">
                    <div class="text-center">
                        <img class="card-img-top mt-3" style="width:235px;height:160px;" src="<?php echo base_url();?>images/foto-produk.png" alt="Card image">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><?= $prd['nama'];?></h4>
                        <p class="card-text">Harga : Rp. <?= $prd['harga'];?></p>
                        <div class="text-right">
                            <a href="<?php echo base_url();?>produk/detail/<?= $prd['idProduk'];?>" class="btn btn-primary">Detail Produk</a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <!-- Shortcut Chat -->
    
</div>
