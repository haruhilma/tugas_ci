<?php include "default/header.php" ?>

<main role="main" class="container">

    <div class="row">
    
        <div class="card-group">
            <?php foreach ($mahasiswa as $key => $v) { ?>
                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Nama : <?= $v['nama'] ?></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>

</main>

<?php include "default/footer.php" ?>