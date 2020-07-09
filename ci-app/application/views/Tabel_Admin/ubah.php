<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Data Admin
            </div>
            <div class="card-body">
                <!-- <?php if( validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                    </div>
                <?php endif; ?> -->
                <form action="" method="post">
                    <div class="form-group">
                        <label for="id_admin">Id Admin</label>
                        <input type="text" class="form-control" id="id_admin" name= "id_admin" 
                        placehorder="contoh : 4"  value="<?= $tabel_admin['id_admin']; ?>">
                        <small class="form-text text-danger"><?= form_error('id_admin') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama_admin">Nama Admin</label>
                        <input type="text" class="form-control" id="nama_admin" name="nama_admin" value="<?= $tabel_admin['nama_admin']; ?>">
                        <small class="form-text text-danger"><?= form_error('nama_admin') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $tabel_admin['jenis_kelamin']; ?>">
                        <small class="form-text text-danger"><?= form_error('jenis_kelamin') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $tabel_admin['alamat']; ?>">
                        <small class="form-text text-danger"><?= form_error('alamat') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Phone Number</label>
                        <input type="number" class="form-control" id="telepon" name="telepon" value="<?= $tabel_admin['telepon']; ?>">
                        <small class="form-text text-danger"><?= form_error('telepon') ; ?></small>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                </form>
            </div>
        </div>
            

    </div>
</div>