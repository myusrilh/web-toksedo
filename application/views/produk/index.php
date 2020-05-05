<div class="container my-5">
    <div class="card-deck" style="30px auto">
        <div class="card-columns">
            <?php foreach($produk as $prd):?>
            <div class="card border-success" style="width:200px;">
                <div class="text-center">
                    <img class="card-img-top mt-3" style="width:165px;height:110px;" src="<?php echo base_url();?>images/foto-produk.png" alt="Card image">
                </div>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $prd['nama'];?></h4>
                    <p class="card-text">Harga : Rp. <?php echo $prd['harga'];?></p>
                    <div class="text-right">
                        <a href="#" class="btn btn-primary">Detail Produk</a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>

        <!-- pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
</div>
<!-- container -->
<br>
<br>