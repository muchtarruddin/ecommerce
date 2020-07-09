<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Chekout
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $tabel_chekout['id_chekout']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $tabel_chekout['id_admin']; ?></h6>
                <p class="card-text"><?= $tabel_chekout['id_user']; ?></p>
                <p class="card-text"><?= $tabel_chekout['id_barang']; ?></p>
                <p class="card-title"><?= $tabel_chekout['tgl_penjualan']; ?></p>
                <p class="card-title"><?= $tabel_chekout['harga_jual']; ?></p>
                <p class="card-title"><?= $tabel_chekout['qty_jual']; ?></p>
                <p class="card-title"><?= $tabel_chekout['total_penjualan']; ?></p>
                <a href="<?= base_url(); ?>Tabel_Chekout" class="btn btn-primary">Kembali</a>
            </div>
            </div>
        </div>
    </div>
</div>