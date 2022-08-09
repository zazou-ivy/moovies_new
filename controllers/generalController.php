<?php
session_start();
$action = $_GET["action"] ?? "display";
//include_once "model/movies/movie.php";

switch ($action) {

        //Logout
    case 'logout':

        if (isset($_SESSION['userId'])) {
            unset($_SESSION['userId']);
            session_destroy();
        }
        header('Location: ?action=displayLogin');

        break;

        // Login       
    case 'displayLogin':
        include "views/login.php";
        break;

    case 'login':

        include "models/user.php";
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $userId = GetUserIdFromUserAndPassword($_POST['username'], $_POST['password']);
            if ($userId > 0) {
                $_SESSION['userId'] = $userId;
                echo $_SESSION["userId"];
                header('Location: ?action=pageAdmin.php');
            } else {
                $errorMsg = "Identifiant ou mot de passe incorrectes";
                header('Location: ?action=displayLogin');
            }
        } else {
            header('Location: ?action=displayLogin');
            $errorMsg = "Identifiant ou mot de passe incorrectes";
        }
        break;

        // display one movie
    case 'movieDetail':
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            include "models/movies/movie.php";
            $movie =  GetOneMovieFromId($_GET['id']);

            require('views/movieDetail.php');
        }
        break;

        // Space Admin
    case 'admin':
        require('models/movies/movie.php');
        $movies = GetAllMovies();
        include "views/pageAdmin.php";
        break;

    case 'adminUpdateMovie':
        require('models/movies/movie.php');
        $movie = GetOneMovieFromId($_GET['id']);
        include "views/pageAdminUpdate.php";
        break;

        //Delete movie
    case 'deleteMovie':
        require('models/movies/movie.php');
        DeleteMovie($_GET['id']);
        header('Location: ?action=admin');
        break;

        //update movie
    case 'updateMovie':
        require('models/movies/movie.php');
        if (isset($_SESSION['userId'])) {
            UpdateMovie($_GET['id'], $_POST['title'], $_POST['time'], $_POST['date'], $_POST['description'], $_POST['actors'], $_POST['image']);
        }
        header('Location: ?action=admin');
        break;

        //Create movie
    case 'createMovie':
        include "models/movies/movie.php";
        if (isset($_SESSION['userId'])) {
            CreateNewMovie($_POST['title'], $_POST['time'], $_POST['date'], $_POST['description'],  $_POST['actors'], $_POST['image']);
        }
        header('Location: ?action=admin');
        break;

    case 'home':
    default:
        require('models/movies/movie.php');
        $movies = GetAllMovies();
        require('views/home.php');
}
