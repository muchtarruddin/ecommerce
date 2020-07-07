<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Data Admin
            </div>
            <div class="card-body">
                <?php if( validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="id_admin">Id Admin</label>
                        <input type="text" class="form-control" id="id_admin" name= "id_admin" placehorder="contoh : 4">
                    </div>
                    <div class="form-group">
                        <label for="nama_admin">Nama Admin</label>
                        <input type="text" class="form-control" id="nama_admin" name="nama_admin">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
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