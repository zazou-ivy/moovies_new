<?php

//on supprime un film
function DeleteMovie($id)
{
    global $connexion;
    $connexion->query("DELETE FROM movie where id = $id");
}

//transformer les données Json qu'on récup en données php pour pouvoir les manipuler
$data = json_decode(file_get_contents("php://input"));
$res = DeleteMovie($data->id);
//retourner un json
echo json_encode($res);
