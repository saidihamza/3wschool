<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student profile</title>

    <link rel="stylesheet" href="./design/css/admin.css">
    <script src="https://kit.fontawesome.com/8ce6df78bd.js" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <script src="./js/jquery-3.6.0.min.js"></script>


</head>

<body>
    <?php   session_start();
    include "./function/Admin_info.php";
    ?>
    <div class="wrapper">
        <div class="left">
            <br>

            <form action="" method="POST" class="btn" autocomplete="off" enctype="multipart/form-data">


                <img class="wpics" src="./design/img/gallery/cropped-big.png">


                <div>


                    <button id="delete" type="submit"><i class="fas fa-trash"></i> Delete</button>
                    <button name="enregistrer" id="enregistrer" type="submit"><i class="fas fa-trash"></i>Valider</button>
                    <div class="deconnectee">
                        <a href="./function/deconexion.php">Déconnecter <i class="fas fa-power-off"></i></a>
                    </div>

                </div>

        </div>
        <div class="right">
            <div class="info">
                <h2>la liste des candidateurs est : </h2>
                <h3><a href="./detailCandid.php">plus d'info</a></h3>


                <h2>la liste des Entreprise</h2>
                <h3><a href="./detailEntre.php">plus d'info</a></h3>


                <h2>les contacts par telephone</h2>
                <h3><a href="./detailContact.php">plus d'info</a></h3>



                </form>
                <div class="social_media">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <br>

                </div>
            </div>
        </div>

        <script src="./js/main.js"></script>
</body>

</html>