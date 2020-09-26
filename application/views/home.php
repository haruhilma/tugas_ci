<?php include "default/header.php" ?>

    <h3>DATA DIRI KELOMPOK 6</h3>
    

    <div class="card-group">
        <?php
            foreach ($mahasiswa->result()  as $v ) {
	    ?>
            <div class="card">
               <div class="imgp-wrapper">
                 <img class="card-img-top" width="100%" src="<?= $v->maha_foto ?>" alt="<?= $v->maha_name ?>">
               </div>
                <div class="card-body">
                <h5 class="card-title"><small class="text-muted">Nama :</small><br/><?= $v->maha_name ?></h5>
                <hr/>
                <p class="card-text mt-0">
                NIM :  <?= $v->maha_nim ?><br/>
                Kelas : <?= $v->maha_kelas ?><br/>
                Jurusan : <?= $v->maha_jurusan ?>
                </p>
                <hr/>
                <p class="card-text mt-0"><small class="text-muted">Informasi Mahasiswa</small></p>
                </div>
            </div>
        <?php } ?>
    </div>

<?php include "default/footer.php" ?>