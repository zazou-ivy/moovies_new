<?php
include('header.php');
?>

<!-- Détail d'une recette-->
<div class="container mg-top">
<h1 class="h1-title pb-5"><?= utf8_encode($movie['title']) ?></h1>
    <section>
    <div class="card" style="width: 40rem;">
    <img src="<?= $movie['image'] ?>"class="card-img-top" alt="...">  <div class="card-body">
    <h5 class="card-title"><?= utf8_encode($movie['title']) ?></h5>
    <span>En <?= $movie['date'] ?> - <?= $movie['time'] ?> min</span> <br>
    <span>Avec <?= $movie['actors'] ?></span>
    <p class="card-text"><?= htmlspecialchars($movie['description']) ?></p>
  </div>
</div>
     </div>
        <div class="row mb-4">
            <div class="col-8">
                <?php
                if (isset($message)) {
                    echo "<div class='alert alert-warning' role='alert'>$message</div>";
                }
                ?>
            </div>
        </div>
    </section>
</div>
</div>

</body>
<?php
include('footer.php');
?>