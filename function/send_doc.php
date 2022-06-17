<?php

function Send_document($photo, $doc)
{
    include "bdd.php";
    $sql = "INSERT INTO `profile_student`
    (`photo`, `projet`) VALUES ('$photo','$doc')";
    $query = $cnx->prepare($sql);
    $document = $query->execute();
    if ($document) {
        return true;
    } else {
        return false;
    }
}
function Send_pict($photo)
{
    include "bdd.php";
    $sql = "INSERT INTO `profile_student`
    (`photo`) VALUES ('$photo')";
    $query = $cnx->prepare($sql);
    $document = $query->execute();
    if ($document) {
        return true;
    } else {
        return false;
    }
}
function Selct_Picture()
{
    include "bdd.php";
    $sql = "SELECT * FROM `profile_student`";
    $query = $cnx->prepare($sql);
    $query->execute();
    //echo "$sql";
    $new_pics = $query->fetch(PDO::FETCH_ASSOC);
    return $new_pics;
    var_dump($new_pics);

}
function update_Picture($id)
{
    include "bdd.php";
    $sql = "UPDATE `profile_student` 
    SET `photo`='',`projet`='' WHERE id='$id'";
    $query = $cnx->prepare($sql);
    $query->execute();
}
