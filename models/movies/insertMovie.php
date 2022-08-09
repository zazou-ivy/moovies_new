<?php

//Include le model 
// Create movie
function CreateNewMovie($title, $date, $time, $actors, $description, $image)
{
    global $connexion;

    $response = $connexion->prepare("INSERT INTO movie(title, date, time, actors, description, image ) values (:title, :date, :time, :actors, :description, :image)");

    var_dump($response);
    $response->execute(
        array(
            "title" => $title,
            "date" => $date,
            "time" => $time,
            "actors" => $actors,
            "description" => $description,
            "image" => $image,
        )
    );
}
//on recup' les données du json dans le body qui a été passé dans la requête et  on transforme le tableau json en tableau php 
$data = json_decode(file_get_contents("php://input"));
//On passe les donnée à la fonction pour créer la recette
//var_dump($data);
$res = CreateNewMovie($data->title, $data->date, $data->time, $data->actors, $data->description, $data->image);
echo json_encode($res);
