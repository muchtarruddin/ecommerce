<div class="container">
    <?php if ( $this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Yash! Data Transaksi <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>Tabel_Chekout/tambah"class="btn btn-primary">Ayo! Tambah Data Checkout</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3> Daftar Chekout </h3>
            <ul class="list-group">
            <?php foreach( $tabel_chekout as $tc ) : ?>
                <li class="list-group-item">
                    <?= $tc['id_chekout']; ?>
                    <a href="<?= base_url(); ?>Tabel_Chekout/hapus/<?= $tc['id_chekout']; ?>" class="badge badge-danger float-right" onclick="retrun confrim('yakin?');">hapus</a>
                    <a href="<?= base_url(); ?>Tabel_Barang/ubah/<?= $tc['id_chekout']; ?>" class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>Tabel_Chekout/detail/<?= $tc['id_chekout']; ?>" class="badge badge-primary float-right">detail</a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    
    </div>

</div>