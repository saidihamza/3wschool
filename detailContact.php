<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="./design/css/detailCand.css">
    <script src="https://kit.fontawesome.com/8ce6df78bd.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- partial:index.partial.html -->
    <?php session_start();
    include "./function/Admin_info.php"; ?>
    <section>
        <img src="./design/img/gallery/cropped-big.png" alt="">
        <h1>Detail des contacts</h1>
        <form action="" method="post">
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>Numero des telephones</th>
                            <th>Validation</th>
                            <th>Suppression</th>

                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>

                        <tr>
                            <?php foreach (contact() as $key) : ?>
                                <input type="hidden" name="candidat" value="<?= $key["id"] ?>">
                                <td><?= $key["phone"] ?></td>
                                <td><i class="fas fa-check-circle"> <button name="valider" type="submit">valider</button></i></td>
                                <td><i class="fas fa-eraser"> <button type="submit" name="delete">Supprimer</button></i></td>

                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
    </section>
    <div>
        <a class="retour" href="admin.php"><i class="fas fa-arrow-alt-left">back</i></a>
    </div>
    <?php
    if (isset($_POST["delete"])) {

        include "function/admindele.php";

        delete_contact($_POST['candidat']);
    }
    ?>

</body>

</html>