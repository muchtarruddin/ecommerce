<div class="container">
    <?php if ( $this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Yey! Data Admin <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

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
                    <a href="<?= base_url(); ?>Tabel_Admin/hapus/<?= $ta['nama_admin']; ?>" class="badge badge-danger float-right" onclick="retrun confrim('yakin?');">hapus</a>
                    <a href="<?= base_url(); ?>Tabel_Admin/ubah/<?= $ta['nama_admin']; ?>" class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>Tabel_Admin/detail/<?= $ta['nama_admin']; ?>" class="badge badge-primary float-right">detail</a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    
    </div>

</div>