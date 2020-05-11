<div class="container">
    <div class="row mt-3">
        <a href="<?= base_url(); ?>admin/tambahuser" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="row mt-3">
        <form action="" method="POST">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari user" name="keyword" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Cari</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <?php if ($this->session->flashdata('flash-data')) : ?>
                <div class="alert alert-warning" role="alert">
                    User <strong>berhasil</strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php if (empty($user)) : ?>
                <div class="alert alert-danger" role="alert">
                    User Tidak Ditemukan
                </div>
            <?php endif; ?>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID User</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Username</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            ?>
            <?php foreach ($user as $usr) :
            ?>
                <?php if($usr['level'] != "admin"):?>
                <tbody>
                    <tr>
                        <td> <?php echo $no; ?> </td>
                        <td><?= $usr['idUser']; ?></td>
                        <td><?= $usr['nama']; ?></td>
                        <td><?= $usr['gender']; ?></td>
                        <td><?= $usr['alamat']; ?></td>
                        <td><?= $usr['pekerjaan']; ?></td>
                        <td><?= $usr['username']; ?></td>
                        <td><?= $usr['level']; ?></td>
                        <td><a href="<?= base_url(); ?>admin/hapusUser/<?= $usr['idUser']; ?>" class="badge badge-danger" onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a></td>
                        <td><a href="<?= base_url(); ?>admin/editUser/<?= $usr['idUser']; ?>" class="badge badge-success">Edit</a></td>
                    </tr>
                </tbody>
                <?php
                $no++;
                ?>
                <?php endif;?>
            <?php endforeach; ?>
        </table>
    </div>
</div>