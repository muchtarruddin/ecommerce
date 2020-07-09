<div class="container">
    <?php if ( $this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Wah! Data Jenis Barang <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>Tabel_Jenis_Barang/tambah"class="btn btn-primary">Ayo! Tambah Data Jenis Barang</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3> Daftar Jenis Barang </h3>
            <ul class="list-group">
            <?php foreach( $tabel_jenis_barang as $tjb ) : ?>
                <li class="list-group-item">
                    <?= $tjb['nama_jenis_barang']; ?>
                    <a href="<?= base_url(); ?>Tabel_Jenis_Barang/hapus/<?= $tjb['nama_jenis_barang']; ?>" class="badge badge-danger float-right" onclick="retrun confrim('yakin?');">hapus</a>
                    <a href="<?= base_url(); ?>Tabel_Jenis_Barang/ubah/<?= $tjb['nama_jenis_barang']; ?>" class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>Tabel_Jenis_Barang/detail/<?= $tjb['nama_jenis_barang']; ?>" class="badge badge-primary float-right">detail</a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    
    </div>

</div>