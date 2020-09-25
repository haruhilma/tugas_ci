<?php include "default/header.php" ?>

<main role="main" class="container">

    <h3>DATA DIRI KELOMPOK 6</h3>
    

    <div class="card-group">
        <?php foreach ($mahasiswa as $key => $v) { ?>
            <div class="card">
                <img class="card-img-top" width="100%" src="<?= $v['photo'] ?>" alt="<?= $v['nama'] ?>">
                <div class="card-body">
                <h5 class="card-title">Nama : <?= $v['nama'] ?></h5>
                <p class="card-text">
                NIM :  <?= $v['nim'] ?><br/>
                Kelas : <?= $v['kelas'] ?><br/>
                JURUSAN : <?= $v['jurusan'] ?>
                </p>
                <p class="card-text"><small class="text-muted">Informasi Mahasiswa</small></p>
                </div>
            </div>
        <?php } ?>
    </div>

</main>

<?php include "default/footer.php" ?>