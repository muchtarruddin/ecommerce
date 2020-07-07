<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Data Chekout
            </div>
            <div class="card-body">
                <?php if( validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="id_chekout">Id Chekout</label>
                        <input type="text" class="form-control" id="id_chekout" name= "id_chekout" placehorder="contoh : 1014">
                    </div>
                    <div class="form-group">
                        <label for="id_admin">Id Admin</label>
                        <input type="text" class="form-control" id="id_admin" name= "id_admin" placehorder="contoh : 4">
                    </div>
                    <div class="form-group">
                        <label for="id_user">Id User</label>
                        <input type="text" class="form-control" id="id_user" name= "id_user" placehorder="contoh : 44">
                    </div>
                    <div class="form-group">
                        <label for="id_barang">Id Barang</label>
                        <input type="text" class="form-control" id="id_barang" name="id_barang">
                    </div>
                    <div class="form-group">
                        <label for="tgl_penjualan">Tanggal Penjualan</label>
                        <input type="date" class="form-control" id="tgl_penjualan" name="tgl_penjualan">
                    </div>
                    <div class="form-group">
                        <label for="harga_jual">Harga Jual</label>
                        <input type="number" class="form-control" id="harga_jual" name="harga_jual">
                    </div>
                    <div class="form-group">
                        <label for="qty_jual">Qty Jual</label>
                        <input type="number" class="form-control" id="qty_jual" name="qty_jual">
                    </div>
                    <div class="form-group">
                        <label for="total_penjualan">Total Penjualan</label>
                        <input type="number" class="form-control" id="total_penjualan" name="total_penjualan">
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                </form>
            </div>
        </div>
            

    </div>
</div>