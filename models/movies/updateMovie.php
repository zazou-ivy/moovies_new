<?php

//Fonction update 
function UpdateMovie($id,$title, $date, $time, $actors, $description, $image)
{
    global $connexion;

    $response = $connexion->prepare("Update movie set title = :title, date = :date, time = :time, actors = :actors, description = :description, image = :image where id = :id");
    $response->execute(
        array(
            "id" => $id,
            "title" => $title,
            "date" => $date,
            "time" => $time,
            "actors" => $actors,
            "description" => $description,
            "image" => $image,
        )
    );
}

//Récuperer les donnée en json
$data = json_decode(file_get_contents("php://input"));

var_dump($data);
//On passe les données dans la fonction pour modifier
$res = UpdateMovie($data->id, $data->title, $data->date, $data->time, $data->actors, $data->description, $data->image);
echo json_encode($res);
