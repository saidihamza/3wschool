<?php

function NameCandidats()
{
    include "bdd.php";
    $sql = "SELECT * FROM `inscription`";
    $query = $cnx->prepare($sql);
    $query->execute();
    $name_candidat = $query->fetchAll();
    return $name_candidat;
    var_dump($name_candidat);
}

function Name_Entreprise()
{
    include "bdd.php";
    $sql = "SELECT * FROM `entreprise`";
    $query = $cnx->prepare($sql);
    $query->execute();
    $entrep = $query->fetchAll(PDO::FETCH_ASSOC);
    return $entrep;
    var_dump($entrep);
}

function contact()
{
    include "bdd.php";
    $sql = "SELECT * FROM `info contact`";
    $query = $cnx->prepare($sql);
    $query->execute();
    $contact = $query->fetchAll(PDO::FETCH_ASSOC);
    return $contact;
    var_dump($contact);
}
