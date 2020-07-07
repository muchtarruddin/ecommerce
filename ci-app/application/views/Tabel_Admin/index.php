<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <h3> Daftar Admin </h3>
            <ul class="list-group">
            <?php foreach( $tabel_admin as $ta ) : ?>
                <li class="list-group-item"><?= $ta['nama_admin']; ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
    
    </div>

</div>