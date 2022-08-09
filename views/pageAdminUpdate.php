<?php
include('header.php');
?>

<div class="container mg-top">
  <!-- Formulaire de création de film -->
  <section>
    <form method="POST" action="?action=updateMovie&id=<?= $_GET['id'] ?>">
      <div class="form-group row py-2">
        <label for="title" class="col-sm-2 col-form-label">Titre du film</label>
        <div class="col-sm-10">
          <input name="title" type="text" class="form-control" id="title" value="<?= utf8_encode($movie['title']) ?>" placeholder="spiderman">
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="date" class="col-sm-2 col-form-label">Année de sortie</label>
        <div class="col-sm-10">
          <input name="date" type="text" class="form-control" id="date" placeholder="40 h" value="<?= $movie['date'] ?>">
        </div>
      </div>
      <div class=" form-group row py-2">
        <label for="time" class="col-sm-2 col-form-label">Durée</label>
        <div class="col-sm-10">
          <input name="time" type="int" class="form-control" id="time" placeholder="40 min" value="<?= $movie['time'] ?>">
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="actors" class="col-sm-2 col-form-label">Acteurs</label>
        <div class="col-sm-10">
          <textarea name="actors" class="form-control" id="actors"><?= utf8_encode($movie['actors']) ?></textarea>
        </div>
      </div>
      <div class="form-group row py-2">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
          <textarea name="description" class="form-control" id="description"><?= utf8_encode($movie['description']) ?></textarea>
        </div>
      </div>
      <div class="form-group row py-2">
        <div class="col-7 d-flex justify-content-between">
          <label for="image" class="col-sm-2 col-form-label mr-5">Image</label>
          <input name="image" type="text" class="custom-file-input" id="image" value="<?= $movie['image'] ?>">
        </div>
      </div>
      <button type="submit" class="btn btn-outline-success">Modifier</button>
    </form>
  </section>
</div>

<?php
include('footer.php');
?>