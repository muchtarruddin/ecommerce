<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Data Barang
            </div>
            <div class="card-body">
                <!-- <?php if( validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                    </div>
                <?php endif; ?> -->
                <form action="" method="post">
                    <div class="form-group">
                        <label for="id_barang">Id Barang</label>
                        <input type="text" class="form-control" id="id_barang" name= "id_barang" placehorder="contoh : 1004">
                        <small class="form-text text-danger"><?= form_error('id_barang') ; ?></small>
                    </div>
                    <!-- <div class="form-group">
                        <label for="id_user">Id User</label>
                        <input type="text" class="form-control" id="id_user" name= "id_user" placehorder="contoh : 44">
                        <small class="form-text text-danger"><?= form_error('id_user') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="id_jenis">Id Jenis</label>
                        <input type="text" class="form-control" id="id_jenis" name= "id_jenis" placehorder="contoh : 104">
                        <small class="form-text text-danger"><?= form_error('id_jenis') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="id_admin">Id Admin</label>
                        <input type="text" class="form-control" id="id_admin" name= "id_admin" placehorder="contoh : 4">
                        <small class="form-text text-danger"><?= form_error('id_admin') ; ?></small>
                    </div> -->
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                        <small class="form-text text-danger"><?= form_error('nama_barang') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="harga_barang">Harga Barang</label>
                        <input type="number" class="form-control" id="harga_barang" name="harga_barang">
                        <small class="form-text text-danger"><?= form_error('harga_barang') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="picture">Upload Foto</label>
                        <input type="file" class="form-control-file" id="picture" name="picture">
                        <small class="from-text text-danger"></small>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                </form>
            </div>
        </div>
            

    </div>
</div>