<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <h3> Daftar Barang </h3>
            <ul class="list-group">
            <?php foreach( $tabel_barang as $tb ) : ?>
                <li class="list-group-item"><?= $tb['nama_barang']; ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
    
    </div>

</div>