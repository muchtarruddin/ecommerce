<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Data User
            </div>
            <div class="card-body">
                <!-- <?php if ( validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                    </div>
                <?php endif; ?> -->
                <form action="" method="post">
                    <div class="form-group">
                        <label for="id_user">Id User</label>
                        <input type="text" class="form-control" id="id_user" name= "id_user" placehorder="contoh : 44" value="<?= $tabel_user['id_user']; ?>">
                        <small class="form-text text-danger"><?= form_error('id_user') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama_user">Nama User</label>
                        <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?= $tabel_user['nama_user']; ?>">
                        <small class="form-text text-danger"><?= form_error('nama_user') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kel_user">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jenis_kel_user" name="jenis_kel_user" value="<?= $tabel_user['jenis_kel_user']; ?>">
                        <small class="form-text text-danger"><?= form_error('jenis_kel_user') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $tabel_user['alamat']; ?>">
                        <small class="form-text text-danger"><?= form_error('alamat') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="email_user">Email</label>
                        <input type="text" class="form-control" id="email_user" name="email_user" value="<?= $tabel_user['email_user']; ?>">
                        <small class="form-text text-danger"><?= form_error('email') ; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Phone Number</label>
                        <input type="number" class="form-control" id="telepon" name="telepon" value="<?= $tabel_user['telepon']; ?>">
                        <small class="form-text text-danger"><?= form_error('telepon') ; ?></small>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                </form>
            </div>
        </div>
            

    </div>
</div>