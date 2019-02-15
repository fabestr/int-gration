<?php
session_start();

include 'application/bdd_connection.php';

$query = $pdo->prepare // requete SQL
(
    'SELECT 
    * 
    FROM 
    project'
);

$query->execute(); 

$articles = $query->fetchAll(PDO::FETCH_ASSOC);





$template = 'index';
include 'layout.phtml';
?>