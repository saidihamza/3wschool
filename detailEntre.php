<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Entreprise</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <script src="https://kit.fontawesome.com/8ce6df78bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./design/css/detailCand.css">


</head>

<body>

    <!-- partial:index.partial.html -->
    <?php include "./function/Admin_info.php"; ?>
    <section>
        <img src="./design/img/gallery/cropped-big.png" alt="">
        <h1>Detail d'Entreprise</h1>
        <div class="tbl-header">
        <form action="" method="post">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th class="mail">email</th>
                        <th>Phone</th>
                        <th>Plus d'info</th>
                        <th>qualification</th>
                        <th>Validation</th>
                        <th>Suppression</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <?php foreach (Name_Entreprise()  as $key) : ?>
                        <tr>
                        <input type="hidden" name="candidat" value="<?= $key["id"] ?>">
                            <td><?= $key["nom"] ?></td>
                            <td><?= $key["lastname"] ?></td>
                            <td class="mail"><?= $key["email"] ?></td>
                            <td><?= $key["phone"] ?></td>
                            <td><?= $key["info"] ?></td>
                            <td><?= $key["qualification"] ?></td>
                            <td><i class="fas fa-check-circle"> <button name="valider" type="submit">valider</button></i></td>
                            <td><i class="fas fa-eraser"> <button type="submit" name="delete">Supprimer</button></i></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
                    </form>
        </div>
    </section>
    <div>

        <a class="retour" href="admin.php"><i class="fas fa-arrow-alt-left">back</i></a>
    </div>
    <?php
if (isset($_POST["delete"])) {

    include "function/admindele.php";

    Delete_Entreprise($_POST['candidat']);
}
?>
</body>

</html>