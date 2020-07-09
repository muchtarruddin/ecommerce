<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Data Chekout
            </div>
            <div class="card-body">
                <!-- <?php if( validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                    </div>
                <?php endif; ?> -->
                <form action="" method="post">
                    <div class="form-group">
                        <label for="id_chekout">Id Chekout</label>
                        <input type="text" class="form-control" id="id_chekout" name= "id_chekout" placehorder="contoh : 1014" value="<?= $tabel_chekout['id_chekout']; ?>">
                        <small class="form-text text-danger"><?= form_error('id_chekout') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="id_admin">Id Admin</label>
                        <input type="text" class="form-control" id="id_admin" name= "id_admin" placehorder="contoh : 4" value="<?= $tabel_chekout['id_admin']; ?>">
                        <small class="form-text text-danger"><?= form_error('id_admin') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="id_user">Id User</label>
                        <input type="text" class="form-control" id="id_user" name= "id_user" placehorder="contoh : 44" value="<?= $tabel_chekout['id_user']; ?>">
                        <small class="form-text text-danger"><?= form_error('id_user') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="id_barang">Id Barang</label>
                        <input type="text" class="form-control" id="id_barang" name="id_barang" value="<?= $tabel_chekout['id_barang']; ?>">
                        <small class="form-text text-danger"><?= form_error('id_barang') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="tgl_penjualan">Tanggal Penjualan</label>
                        <input type="date" class="form-control" id="tgl_penjualan" name="tgl_penjualan" value="<?= $tabel_chekout['tgl_penjualan']; ?>">
                        <small class="form-text text-danger"><?= form_error('tgl_penjualan') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="harga_jual">Harga Jual</label>
                        <input type="number" class="form-control" id="harga_jual" name="harga_jual" value="<?= $tabel_chekout['harga_jual']; ?>">
                        <small class="form-text text-danger"><?= form_error('harga_jual') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="qty_jual">Qty Jual</label>
                        <input type="number" class="form-control" id="qty_jual" name="qty_jual" value="<?= $tabel_chekout['qty_jual']; ?>">
                        <small class="form-text text-danger"><?= form_error('qty_jual') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="total_penjualan">Total Penjualan</label>
                        <input type="number" class="form-control" id="total_penjualan" name="total_penjualan" value="<?= $tabel_chekout['total_penjualan']; ?>">
                        <small class="form-text text-danger"><?= form_error('total_penjualan') ; ?></small>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                </form>
            </div>
        </div>
            

    </div>
</div>