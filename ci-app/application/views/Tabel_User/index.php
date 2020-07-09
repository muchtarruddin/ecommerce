<div class="container">
    <?php if ( $this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Woa! Data User <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>Tabel_User/tambah"class="btn btn-primary">Ayo! Tambah Data User</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3> Daftar User </h3>
            <ul class="list-group">
            <?php foreach( $tabel_user as $tu ) : ?>
                <li class="list-group-item"><?= $tu['nama_user']; ?>
                    <?= $tu['nama_user']; ?>
                    <a href="<?= base_url(); ?>Tabel_User/hapus/<?= $tu['nama_user']; ?>" class="badge badge-danger float-right" onclick="retrun confrim('yakin?');">hapus</a>
                    <a href="<?= base_url(); ?>Tabel_User/ubah/<?= $tu['nama_user']; ?>" class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>Tabel_User/detail/<?= $tu['nama_user']; ?>" class="badge badge-primary float-right">detail</a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    
    </div>

</div>