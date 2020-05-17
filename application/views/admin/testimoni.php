<div class="container">
    <div class="row mt-3">
        <a href="<?= base_url(); ?>admin/tambahtestimoni" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="row mt-3">
        <form action="" method="POST">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari testimoni" name="keyword" aria-label="Testimoni's keyword" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Cari</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <?php if ($this->session->flashdata('flash-data')) : ?>
                <div class="alert alert-success" role="alert">
                    Testimoni <strong>berhasil</strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php if (empty($testimoni)) : ?>
                <div class="alert alert-danger" role="alert">
                    Testimoni Tidak Ditemukan
                </div>
            <?php endif; ?>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Tanggal Buat</th>
                    <th scope="col">Tanggal Update</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            ?>
            <?php foreach ($testimoni as $testi) :
            ?>
                <tbody>
                    <tr>
                        <td> <?php echo $no; ?> </td>
                        <?php if($testi['namaGambar'] !=null): ?>
                            <td><img style="width:250px;" src="<?= base_url();?>images/testimoni/<?= $testi['namaGambar']; ?>" alt="<?= $testi['namaGambar']; ?>"></td>
                        <?php else: ?>
                            <td><img style="width:250px;" src="<?= base_url();?>images/testimoni/tes-foto-testimoni.png" alt="<?= $testi['namaGambar']; ?>"></td>
                        <?php endif;?>
                        <td><?= $testi['judulGambar']; ?></td>
                        <td><?= $testi['detailGambar']; ?></td>
                        <?php if($testi['updated_at'] != null): ?>
                            <td><?= $testi['created_at']; ?></td>
                            <td><?= $testi['updated_at']; ?></td>
                        <?php else : ?>
                            <td><?= $testi['created_at']; ?></td>
                            <td class="text-center"> <b>---</b> </td>
                        <?php endif; ?>
                        <td><a href="<?= base_url(); ?>admin/hapusTestimoni/<?= $testi['idTestimoni']; ?>" class="badge badge-danger" onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a></td>
                        <td><a href="<?= base_url(); ?>admin/editTestimoni/<?= $testi['idTestimoni']; ?>" class="badge badge-success">Edit</a></td>
                    </tr>
                </tbody>
                <?php
                $no++;
                ?>
            <?php endforeach; ?>
        </table>
    </div>
</div>