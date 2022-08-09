<!doctype html>
<html lang="fr">

<!-- Navbar -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Font awesome -->
  <script src="https://kit.fontawesome.com/c8bdca93db.js" crossorigin="anonymous"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="assets/style.css">
  <style>
@import url('https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap');
</style> 

  <!-- script -->
  <!-- Option 1: Bootstrap Bundle with Popper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <title>Moovies</title>
</head>

<body>
  <nav id="navbar-white" class="navbar fixed-top navbar-expand-lg navbar navbar-dark bg-dark mb-5">
    <div class="container">
      <a class="navbar-brand" href="?action=home"> <h2>Moovies</h2></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- Si connecté on affiche -->
          <?php

          //userId = on vérifie que l'utilisateur est connecté
          if (isset($_SESSION['userId'])) {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="?action=admin"> <button type="button" class="btn btn-danger">Admin</button></a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="?action=logout" role="button"><button type="button" class="btn btn-danger">Se déconnecter</button></a>
            </li>
          <?php
            //Si non connecté 
          } else {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=displayLogin">Se connecter</a>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>