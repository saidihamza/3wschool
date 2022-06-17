<?php
function Delete_Candidats($id)
{

    include "bdd.php";
    $sql = "DELETE FROM `inscription` WHERE id='$id'";
    $query = $cnx->prepare($sql);
    $query->execute();
}
function Delete_Entreprise($id)
{

    include "bdd.php";
    $sql = "DELETE FROM `entreprise` WHERE id='$id'";
    $query = $cnx->prepare($sql);
    $query->execute();
}
function delete_contact($id)
{

    include "bdd.php";
    $sql = "DELETE FROM `info contact` WHERE id=$id";
    $query = $cnx->prepare($sql);
    $query->execute();
}
