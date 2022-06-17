<?php

   function Modifier_profil($id,$nom,$email,$phone,$formation,$niveau)
    {
        include"bdd.php";
        $sql = "UPDATE `inscription` SET `id`='$id', `nom`='$nom',`email`='$email',`phone`='$phone',`formation`='$formation',`niveau`='$niveau' WHERE `id`='$id'";
        $query =$cnx->prepare($sql);
        $query->execute();

    }
    function afficher_profil($id)
    {
        include"bdd.php";
        $sql = "SELECT * FROM `inscription` WHERE id='$id'";
        $query =$cnx->prepare($sql);
        $query->execute();
        $new = $query->fetchAll(PDO::FETCH_ASSOC);
        return $new;

    }
    function Delete_profile($id){

        include"bdd.php";
        $sql = "DELETE FROM `inscription` WHERE id='$id'";
        $query =$cnx->prepare($sql);
        $query->execute();
      
    }

