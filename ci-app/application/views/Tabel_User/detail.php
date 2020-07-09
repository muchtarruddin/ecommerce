<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data User
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $tabel_user['id_user']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $tabel_user['nama_user']; ?></h6>
                <p class="card-text"><?= $tabel_user['jenis_kel_user']; ?></p>
                <p class="card-text"><?= $tabel_user['alamat']; ?></p>
                <p class="card-title"><?= $tabel_user['email_user']; ?></p>
                <p class="card-title"><?= $tabel_user['telepon']; ?></p>
                <a href="<?= base_url(); ?>Tabel_User" class="btn btn-primary">Kembali</a>
            </div>
            </div>
        </div>
    </div>
</div>