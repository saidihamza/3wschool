<?php

function SendNumber($phone)
{
    include "bdd.php";
    $sql = "INSERT INTO `info contact`(`phone`) VALUES ($phone)";
    echo $sql;
    $query = $cnx->prepare($sql);
    $num = $query->execute();
    if ($num) {
        return true;
    } else {
        return false;
    }
}
