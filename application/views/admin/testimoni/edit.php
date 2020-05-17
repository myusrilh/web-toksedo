<div class="container">
    <div class="row mt-3 mx-auto">
        <div class="col-md-6">
            <!-- http://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                Form Ubah Data Testimoni
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
                    <?php foreach($testimoni as $testi) : ?>
                    <?= form_open_multipart('admin/editTestimoni/'.$testi['idTestimoni']);?>
                        <div class="form-group">
                            <label for="gambar"><b>Gambar Testimoni</b></label><br>
                            <?php if($testi['namaGambar'] !=null): ?>
                                <td><img style="width:165px;" src="<?= base_url();?>images/testimoni/<?= $testi['namaGambar']; ?>" alt="<?= $testi['namaGambar']; ?>"></td><br>
                            <?php else: ?>
                                <td><img style="width:165px;" src="<?= base_url();?>images/testimoni/tes-foto-testimoni.png" alt="<?= $testi['namaGambar']; ?>"></td><br>
                            <?php endif;?>
                        <input type="file" class="mt-1" name="gambar" id="gambar"><br>
                            <label for="gambar">Ukuran 5MB</label><br>
                            <div class="invalid-feedback">Gambar wajib diupload</div>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul Testimoni</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="<?= $testi['judulGambar'];?>">
                        </div>
                        <div class="form-group">
                            <label for="detail">Detail</label>
                            <textarea class="form-control" name="detail" id="detail" cols="50" rows="4"><?= $testi['detailGambar'];?></textarea>
                        </div>
                        <a class="btn btn-outline-dark" href="<?php echo base_url();?>admin/testimoni">Kembali</a>
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