<?php
include('header.php');
?>

<div class="container mg-top">
  <!-- Formulaire de création du film -->
  <section>
    <H1 class="h2 text-center"> Créez, modifiez ou bien supprimez vos contenus n'importe quand !</H1>
    <form method="POST" action="?action=createMovie">
      <div class="form-group row py-2">
        <label for="title" class="col-sm-2 col-form-label">Titre du film</label>
        <div class="col-sm-10">
          <input name="title" type="text" class="form-control" id="title" placeholder="Spiderman">
        </div>
      </div>
      <!-- Durée film-->
      <div class="form-group row py-2">
        <label for="time" class="col-sm-2 col-form-label">Durée du film</label>
        <div class="col-sm-10">
          <input name="time" type="text" class="form-control" id="time" placeholder="120">
        </div>
      </div>

      <!-- Acteurs-->
      <div class="form-group row py-2">
        <label for="actors" class="col-sm-2 col-form-label">Acteurs</label>
        <div class="col-sm-10">
          <input name="actors" type="text" class="form-control" id="actors" placeholder="Bruce willis">
        </div>
      </div>
      <!-- Année-->
      <div class="form-group row py-2">
        <label for="date" class="col-sm-2 col-form-label">Année</label>
        <div class="col-sm-10">
          <input name="date" type="int" class="form-control" id="date" placeholder="2010">
        </div>
      </div>
      <!-- Synopsis-->
      <div class="form-group row py-2">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
          <textarea name="description" class="form-control" id="description" placeholder="Ceci est une description"></textarea>
        </div>
      </div>

     <!-- Image-->
      <div class="form-group row py-2">
        <div class="col-7 d-flex justify-content-between">
          <label for="image" class="col-sm-2 col-form-label mr-5">Image</label>
          <input name="image" type="text" class="custom-file-input" id="image">
        </div>
      </div>
      <button type="submit" class="btn btn-danger ">Créer</button> 
    </form>
  </section>
<hr class="m-5">
  <!-- Liste des films créées -->
  <section>
    <h3 class="text-center">Vos films</h3>
    <div class="row d-flex justify-content-center">
      <?php
      if (!empty($movies)) {
        while ($movie = $movies->fetch()) {

      ?>
          <div class="col-lg-3 col-sm-8 mx-4">
            <!-- Cartes de films qu'on a créee -->
            <div class="card" style="width: 18rem;">
              <img src="<?= $movie['image'] ?>" class="card-img-top" alt="...">
              <div class="text-center">
                <h5 class="card-title"> <?= utf8_encode($movie['title']) ?></h5>
                <a href="index.php?action=movieDetail&amp;id=<?= $movie['id'] ?>" class="btn btn-primary btn-card ">Voir</a>
                <a href="index.php?action=adminUpdateMovie&amp;id=<?= $movie['id'] ?>" class="btn btn-primary btn-card ">Modifier</a>
                <a href="index.php?action=deleteMovie&amp;id=<?= $movie['id'] ?>" class="btn btn-primary btn-card ">Supprimer</a>
              </div>
            </div>
          </div>
        <?php
        }
        $movies->closeCursor();
      } else {
        ?>
        <p>Vous n'avez pas de films</p>
      <?php
      }

      ?>
    </div>
  </section>
</div>

<?php
include('footer.php');
?>