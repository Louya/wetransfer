<?php 
//Infos de connexion à la base de données

    $username = 'fabienc';
    $password = 'nlDv8Ot72yfivQ==';
    $database ='fabienc_eztransfer';
    $host = 'localhost';
// Chargement de l'environnement PDO

    try{

        $bdd = new PDO('mysql:host='.$host.';dbname='.$database.';charset=utf8',$username , $password);

    }catch (Exception $e){

        die('Erreur : ' . $e->getMessage());
        
    }