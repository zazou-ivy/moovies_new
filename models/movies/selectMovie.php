<?php

//On récupère un film grace à L'id
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
    return $response->fetchAll();
}
//si on met un id dans l'url ça affiche la recette correspondante 
if (isset($_GET['id'])) {
    $res = GetOneMovieFromId($_GET['id']);
} else {
    //sinon On affiche toutes les recettes
    $res = GetAllMovies();
}
//retourner un json
echo json_encode($res);
