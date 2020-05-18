<div class="container">
    <!-- baris_1 -->
    <div class="row mt-5">
                <div class="card-deck">
                <?php foreach($testimoni as $testi): ?>
                    <div class="card mr-3" style="width:300px;">
                        <div class="card-header mx-auto" style="height:300px;">
                            <?php if($testi['namaGambar'] != null): ?>
                                <img class="pt-3 card-img-top text-center" style="width:250px" src="<?php echo base_url();?>images/testimoni/<?= $testi['namaGambar'] ?>" alt="<?= $testi['namaGambar'] ?>">
                            <?php else: ?>
                                <img class="pt-3 card-img-top text-center" style="width:250px" src="<?php echo base_url();?>images/testimoni/tes-foto-testimoni.png" alt="tes-foto-testimoni.png">
                            <?php endif; ?>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="card-body">
                            <h4 class="text-center"><?= $testi['judulGambar'];?></h4>
                            <hr>
                            <h5>Detail : </h5>
                            <p><?= $testi['detailGambar'];?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
        <!-- pagination -->
        <!-- <nav aria-label="Page navigation example">
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
        </nav> -->
</div>
<!-- container -->
<br>
<br>