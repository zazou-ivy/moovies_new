<?php require('header.php'); ?>

<div class="container mt-5 pt-5 img">
  <div class="name-slogan my-3">
    <h1>Moovies</h1>
    <span>Choississez votre film du moment !</span>
  </div>

  <div class="row d-flex justify-content-center">
    <?php

    //on boucle sur un tableau de films pour n'en afficher qu'un seul a la fois
    while ($movie = $movies->fetch()) {
    ?>
      
      <div class="card my-5 shadow p-3 mb-5 bg-white rounded " style="width: 60rem;">
        <div class="row no-gutters">
            <div class="col-lg-4 col-sm-6">
                <img src="<?= $movie['image'] ?>" class="img-fluid" alt="">
            </div>
            <div class="col py-2">
                <div class="card-block px-2">
                <h4 class="card-title text-uppercase "> 📽️ <?= utf8_encode($movie['title']); ?></h4>
                <h6 class="card-title"> <?= utf8_encode($movie['time']); ?> min - <?= utf8_encode($movie['date']); ?></h6>
                <h6 class="card-subtitle font-italic font-weight-light mb-2"> Avec <?=  htmlspecialchars($movie['actors']); ?></h6>
                <p class="card-text"> <?=  htmlentities($movie['description']); ?></p>
                <a href="index.php?action=movieDetail&amp;id=<?= $movie['id'] ?>" class="btn btn-warning btn-card border-0  ">Voir la fiche du film</a>
                </div>
            </div>
        </div>
  </div>

    <?php
    }

    //permet a la requete d'etre a nouveau executée
    $movies->closeCursor();
    ?>
  </div>

</div>

<?php require('footer.php'); ?>