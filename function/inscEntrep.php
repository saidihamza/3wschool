<?php

   function Inscri_Entprise($nom, $lastname,
   $phone, $email,$info,
   $qualification)
    {
        include"bdd.php";
        $sql = "INSERT INTO `entreprise`(`nom`, `lastname`, `phone`, `email`, `info`, `qualification`) VALUES ('$nom', '$lastname',
        '$phone','$email','$info',
        '$qualification')";
        echo $sql;
        $query =$cnx->prepare($sql);
        $entrprise = $query->execute();
        if ($entrprise) {
            return true;
        } else {
            return false;
        }
    }
 