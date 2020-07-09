<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Barang
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $tabel_barang['id_barang']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $tabel_barang['id_user']; ?></h6>
                <p class="card-text"><?= $tabel_barang['id_jenis']; ?></p>
                <p class="card-text"><?= $tabel_barang['id_admin']; ?></p>
                <p class="card-text"><?= $tabel_barang['nama_barang']; ?></p>
                <p class="card-text"><?= $tabel_barang['harga_barang']; ?></p>
                <a href="<?= base_url(); ?>Tabel_Barang" class="btn btn-primary">Kembali</a>
            </div>
            </div>
        </div>
    </div>
</div>