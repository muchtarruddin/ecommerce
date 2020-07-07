<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Data Jenis Barang
            </div>
            <div class="card-body">
                <?php if( validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="id_jenis">Id jenis</label>
                        <input type="text" class="form-control" id="id_jenis" name= "id_jenis" placehorder="contoh : 104">
                    </div>
                    <div class="form-group">
                        <label for="nama_jenis_barang">Nama Jenis Barang</label>
                        <input type="text" class="form-control" id="nama_jenis_barang" name="nama_jenis_barang">
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                </form>
            </div>
        </div>
            

    </div>
</div>