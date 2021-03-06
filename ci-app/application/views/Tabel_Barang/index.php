<div class="container">
    <?php if ( $this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Selamat! Data Barang <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>Tabel_Barang/tambah" class="btn btn-primary">Ayo! Tambah Data Barang</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3> Daftar Barang </h3>
            <ul class="list-group">
            <?php foreach( $tabel_barang as $tb ) : ?>
                <li class="list-group-item"><?= $tb['nama_barang']; ?>
                    <?= $tb['nama_barang']; ?>
                    <a href="<?= base_url(); ?>Tabel_Barang/hapus/<?= $tb['nama_barang']; ?>" class="badge badge-danger float-right" onclick="retrun confrim('yakin?');">hapus</a>
                    <a href="<?= base_url(); ?>Tabel_Barang/ubah/<?= $tb['nama_barang']; ?>" class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>Tabel_Barang/detail/<?= $tb['nama_barang']; ?>" class="badge badge-primary float-right">detail</a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    
    </div>

</div>