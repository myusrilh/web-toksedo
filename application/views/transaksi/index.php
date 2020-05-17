<div class="container">
    <div class="row mt-3 mb-3">
        <div class="col-md-6 py-5 mx-auto">
            <div class="row">
                <div class="col mx-auto">
                <?php if ($this->session->flashdata('flash-data')) : ?>
                <div class="alert alert-success" role="alert">
                    Transaksi anda <strong><?= $this->session->flashdata('berhasil'); ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
                <h4>Hasil Transaksi : </h4>
                    <?php foreach($transaksi as $trans): ?>
                    <table style="box-shadow: -5px 5px 10px rgba(0,0,0, 0.4)" class="table table-striped mt-4 mb-4 py-5">
                    
                        <tr>
                            <th>No</th>
                            <th>Key</th>
                            <th>Value</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>Nama Barang</td>
                            <td><?= $trans['namaBarang']; ?></td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Harga Barang</td>
                            <td>Rp. <?= $trans['hargaBarang']; ?></td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Jumlah Barang</td>
                            <td><?= $trans['jumlah']; ?></td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>Kategori Barang</td>
                            <td><?= $trans['namaKategori']; ?></td>
                        </tr>
                        <tr>
                            <th>5</th>
                            <td>Jenis Pembayaran</td>
                            <td><?= $trans['jenisPembayaran']; ?></td>
                        </tr>
                        <tr>
                            <th>6</th>
                            <td>Nama Pembeli</td>
                            <td><?= $trans['namaUser']; ?></td>
                        </tr>
                        <tr>
                            <th>7</th>
                            <td>Total Biaya Belanja</td>
                            <td>Rp. <?= $trans['totalBelanja']; ?></td>
                        </tr>
                    </table>
                    <?php endforeach; ?>
                    <a href="<?= base_url(); ?>" style="box-shadow: -5px 5px 10px rgba(0,0,0, 0.4)" class="btn btn-danger float-right"><i class="fa fa-home"></i> Home</a>
                </div>
            </div>
        </div>
    </div>
</div>