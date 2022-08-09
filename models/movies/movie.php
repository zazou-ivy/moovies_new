<?php

include("config/config/database_connect.php");

function GetOneMovieFromId($id)
{
  global $connexion;
  $response = $connexion->query("SELECT * FROM movie WHERE id = $id");
  return $response->fetch();
}

function GetAllMovies()
{
  global $connexion;
  $response = $connexion->query("SELECT * FROM movie");
  return $response;
}


function DeleteMovie($id)
{
  global $connexion;
  $connexion->query("DELETE FROM movie where id = $id");
}

// Create movie
function CreateNewMovie($title, $time, $date, $actors, $description, $image)
{
  global $connexion;
 echo $title;
 echo 'je suis en dep';
 var_dump($_POST);
  $response = $connexion->prepare("INSERT INTO movie(title, time, date ,actors, description, image ) values (:title, :time, :date,:actors, :description, :image)");
  $response->execute(
    array(
      "title" => $title,
      "time" => $time,
      "date" => $date,
      "actors" => $actors,
      "description" => $description,
      "image" => $image,
    )
  );
}

//fonction qui modifie un film
function UpdateMovie($id,$title, $time, $date, $actors, $description, $image)
{
  global $connexion;
//requete qui prépare la requête pour le update
  $response = $connexion->prepare("Update movie set title = :title, time = :time, date = :date, actors = :actors, description = :description, image = :image where id = :id");
  $response->execute(
    array(
      "id" => $id,
      "title" => $title,
      "time" => $time,
      "date" => $date,
      "actors" => $actors,
      "description" => $description,
      "image" => $image,
    )
  );
}
