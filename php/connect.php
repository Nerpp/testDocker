<?php

# Configuration de la base de données en utilisant le nom de l'image Docker
const DBHOST = 'db';
const DBUSER = 'test';
const DBPASS = 'pass';
const DBNAME = 'demo';

# Correction ici: Ajout du '=' et un espace après 'mysql:host'
$dsn = 'mysql:host='.DBHOST.';dbname='.DBNAME;

echo 'ok';
try {
    $db = new PDO($dsn, DBUSER, DBPASS);
    echo "Connecté";
} catch (PDOException $e) {
    echo 'Une erreur est survenue: ' . $e->getMessage();
    die;
}
