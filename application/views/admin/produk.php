<div class="container">
    <div class="row mt-3">
        <a href="<?= base_url(); ?>admin/tambah" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="row mt-3">
        <form action="" method="POST">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari produk" name="keyword" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <?php if ($this->session->flashdata('flash-data')) : ?>
                <div class="alert alert-warning" role="alert">
                    Produk <strong>berhasil</strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php if (empty($produk)) : ?>
                <div class="alert alert-danger" role="alert">
                    Produk Tidak Ditemukan
                </div>
            <?php endif; ?>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            ?>
            <?php foreach ($produk as $prd) :
            ?>
                <tbody>
                    <tr>
                        <td> <?php echo $no; ?> </td>
                        <td><?= $prd['nama']; ?></td>
                        <td><?= $prd['harga']; ?></td>
                        <td><?= $prd['detail']; ?></td>
                        <td><a href="<?= base_url(); ?>admin/hapusProduk/<?= $prd['idProduk']; ?>" class="badge badge-danger" onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a></td>
                        <td><a href="<?= base_url(); ?>admin/editProduk/<?= $prd['idProduk']; ?>" class="badge badge-success">Edit</a></td>
                    </tr>
                </tbody>
                <?php
                $no++;
                ?>
            <?php endforeach; ?>
        </table>
    </div>
</div>