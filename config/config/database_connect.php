<?php

// Connexion à la base de donnée
$host = "localhost";
$db_name = "moovies";
$username = "root";
$password = "IVY18021994kimi";
$connexion;

$connexion = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
