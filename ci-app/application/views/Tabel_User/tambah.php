<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Data User
            </div>
            <div class="card-body">
                <?php if ( validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="id_user">Id User</label>
                        <input type="text" class="form-control" id="id_user" name= "id_user" placehorder="contoh : 44">
                    </div>
                    <div class="form-group">
                        <label for="nama_user">Nama User</label>
                        <input type="text" class="form-control" id="nama_user" name="nama_user">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kel_user">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jenis_kel_user" name="jenis_kel_user">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="email_user">Email</label>
                        <input type="text" class="form-control" id="email_user" name="email_user">
                    </div>
                    <div class="form-group">
                        <label for="telepon">Phone Number</label>
                        <input type="number" class="form-control" id="telepon" name="telepon">
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                </form>
            </div>
        </div>
            

    </div>
</div>