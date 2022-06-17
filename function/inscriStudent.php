<?php

function Inscription(
    $nom,
    $email,
    $phone,
    $password,
    $formation,
    $niveau,
    $message
) {
    include "bdd.php";
    $sql = "INSERT INTO `inscription`(`nom`, `email`, `phone`, `password`, `formation`, `niveau`, `message`)  VALUES
          ('$nom','$email','$phone',
          '$password','$formation',
          '$niveau','$message')";

    $query = $cnx->prepare($sql);
    $res = $query->execute();
    if ($res) {
        return true;
    } else {
        return false;
    }
}
