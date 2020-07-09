<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Admin
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $tabel_admin['id_admin']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $tabel_admin['nama_admin']; ?></h6>
                <p class="card-text"><?= $tabel_admin['jenis_kelamin']; ?></p>
                <p class="card-text"><?= $tabel_admin['alamat']; ?></p>
                <p class="card-text"><?= $tabel_admin['telepon']; ?></p>
                <a href="<?= base_url(); ?>Tabel_Admin" class="btn btn-primary">Kembali</a>
            </div>
            </div>
        </div>
    </div>
</div>