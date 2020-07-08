<div class="container">

<div class="row mt-3">
    <div class="col-md-6">
        <a href="<?= base_url(); ?>Tabel_Admin/tambah"class="btn btn-primary">Ayo! Tambah Data Admin</a>
    </div>
</div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3> Daftar Admin </h3>
            <ul class="list-group">
            <?php foreach( $tabel_admin as $ta ) : ?>
                <li class="list-group-item">
                <?= $ta['nama_admin']; ?>
                <<a href="<?= base_url(); ?>Tabel_Admin/hapus">hapus</a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    
    </div>

</div>