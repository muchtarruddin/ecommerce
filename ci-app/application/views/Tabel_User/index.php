<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <h3> Daftar User </h3>
            <?php foreach( $tabel_user as $tu ) : ?>
                <li class="list-group-item"><?= $tu['nama_user']; ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
    
    </div>

</div>