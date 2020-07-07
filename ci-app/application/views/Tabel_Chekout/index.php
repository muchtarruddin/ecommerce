<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <h3> Daftar Chekout </h3>
            <?php foreach( $tabel_chekout as $tc ) : ?>
                <li class="list-group-item"><?= $tc['id_chekout']; ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
    
    </div>

</div>