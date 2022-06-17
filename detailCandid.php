<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>candidateur</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="./design/css/detailCand.css">
    <script src="https://kit.fontawesome.com/8ce6df78bd.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- partial:index.partial.html -->
    <?php include "./function/Admin_info.php"; ?>
    <section>
        <img src="./design/img/gallery/cropped-big.png" alt="">
        <h1>Detail de candidats</h1>
        <div class="tbl-header">
            <form action="" method="get">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>email</th>
                            <th>Phone</th>
                            <th>Formation</th>
                            <th>niveau scolaire</th>
                            <th>Message</th>
                            <th>Validation</th>
                            <th>Suppressin</th>
                        </tr>
                    </thead>
                </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <?php foreach (NameCandidats()  as $key) : ?>
                        <tr>
                            <input type="hidden" name="candidat" value="<?= $key["id"] ?>">
                            <td><?= $key["nom"] ?></td>
                            <td><?= $key["email"] ?></td>
                            <td><?= $key["phone"] ?></td>
                            <td><?= $key["formation"] ?></td>
                            <td><?= $key["niveau"] ?></td>
                            <td><?= $key["message"] ?></td>

                            <td><i class="fas fa-check-circle"> <button name="valider" type="submit">valider</button></i></td>
                            <td><i class="fas fa-eraser"> <button type="submit" name="delete">Supprimer</button></i></td>

                        </tr>
                        <?php echo "<br>" ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
        </form>
    </section>
    <div>

        <a class="retour" href="admin.php"><i class="fas fa-arrow-alt-left">back</i></a>
    </div>

</body>
<?php
if (isset($_GET["delete"])) {

    include "function/admindele.php";

    Delete_Candidats($_GET['candidat']);
}
?>
<?php
if (isset($_GET["valider"])) {

    $msg= "votre inscription es validé merci de contacter nous";
  
}
?>

</html>