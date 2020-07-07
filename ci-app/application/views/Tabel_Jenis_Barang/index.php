<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <h3> Daftar Jenis Barang </h3>
            <?php foreach( $tabel_jenis_barang as $tjb ) : ?>
                <li class="list-group-item"><?= $tjb['nama_jenis_barang']; ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
    
    </div>

</div>