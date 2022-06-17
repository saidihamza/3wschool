<?php
function Login($email, $password)
{
    include "bdd.php";
    $sql = "SELECT  *
         FROM `inscription` WHERE `email`='$email' AND `password`='$password'";

    $query = $cnx->prepare($sql);
    $query->execute();
    $tab = $query->fetch(PDO::FETCH_ASSOC);
    return $tab;
}