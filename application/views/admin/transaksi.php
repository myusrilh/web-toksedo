<div class="container">
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
                    Transaksi <strong>berhasil</strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php if (empty($transaksi)) : ?>
                <div class="alert alert-danger" role="alert">
                    Testimoni Tidak Ditemukan
                </div>
            <?php endif; ?>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Jenis Pembayaran</th>
                    <th scope="col">Nama User</th>
                    <th scope="col">Total Belanja</th>
                    <th scope="col">Waktu Beli</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            ?>
            <?php foreach ($transaksi as $trans) :
            ?>
                <tbody>
                    <tr>
                        <td> <?php echo $no; ?> </td>
                        <td><?= $trans['namaBarang']; ?></td>
                        <td><?= $trans['hargaBarang']; ?></td>
                        <td><?= $trans['jumlah']; ?></td>
                        <td><?= $trans['namaKategori']; ?></td>
                        <td><?= $trans['jenisPembayaran']; ?></td>
                        <td><?= $trans['namaUser']; ?></td>
                        <td><?= $trans['totalBelanja']; ?></td>
                        <?php if($trans['timestamp'] != null): ?>
                            <td><?= $trans['timestamp']; ?></td>
                        <?php else : ?>
                            <td class="text-center"> <b>---</b> </td>
                        <?php endif; ?>
                        <td><a href="<?= base_url(); ?>admin/hapusTransaksi/<?= $trans['idTransaksi']; ?>" class="badge badge-danger" onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a></td>
                    </tr>
                </tbody>
                <?php
                $no++;
                ?>
            <?php endforeach; ?>
        </table>
    </div>
</div>