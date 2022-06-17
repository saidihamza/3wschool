<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student profile</title>

    <link rel="stylesheet" href="./design/css/styleprofile.css">
    <script src="https://kit.fontawesome.com/8ce6df78bd.js" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <script src="./js/jquery-3.6.0.min.js"></script>


</head>

<body>
    <?php session_start();

    $id = $_SESSION["id"];
    require './function/bdd.php';
    include "./function/send_doc.php";
  
    if (isset($_POST["submit"])) {

        if ($_FILES["image"]["error"] == 4) {
            echo
            "<script> alert('Image Does Not Exist'); </script>";
        } else {
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            if (!in_array($imageExtension, $validImageExtension)) {
                echo
                "
        <script>
          alert('Invalid Image Extension');
        </script>
        ";
            } else if ($fileSize > 1000000) {
                echo
                "
        <script>
          alert('Image Size Is Too Large');
        </script>
        ";
            } else {
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;

                move_uploaded_file($tmpName, 'image/.' . $newImageName);

                Send_pict($newImageName);
                echo
                "
        <script>
          alert('Successfully Added');
          
        </script>
        
        ";
            }
        }
    }
    ?>

    <div class="wrapper">
        <div class="left">
            <br>

            <form action="" method="POST" class="btn" autocomplete="off" enctype="multipart/form-data">


                <img src="image/.<?php echo Selct_Picture()["photo"]; ?>">


                <div class="info-name">
                    <input type="text" name="nom" id="btn" value="<?= $_SESSION['username'] ?>" disabled="disabled">
                    <input type="text" name="formation" id="btn" value="<?= $_SESSION['formation'] ?>" disabled="disabled">
                </div>

                <br>

                <div>

                    <button name="edit" id="edit" type="submit"><i class="fas fa-user-edit"></i> Editer</button>

                    <button name="enregistrer" id="enregistrer" type="submit"><i class="fas fa-trash"></i>Enregistrer</button>


                </div>

        </div>
        <div class="right">
            <div class="info">
                <h3>Information</h3>
                <div class="info_data">
                    <div class="data">
                        <h4>Email</h4>
                        <input type="text" name="email" id="btn" value="<?= $_SESSION['email'] ?>" disabled="disabled">

                    </div>
                    <div class="data">
                        <h4>Phone</h4>
                        <input type="text" name="phone" id="btn" value="<?= $_SESSION['phone'] ?>" disabled="disabled">

                    </div>
                </div>
            </div>

            <div class="projects">
                <h3>Projects</h3>
                <div class="projects_data">
                    <div class="data">
                        <h4>niveau scolaire</h4>
                        <input type="text" name="niveau" id="btn" value="<?= $_SESSION['niveau'] ?>" disabled="disabled">

                    </div>

                </div>
                <br>
                <hr>
                <div class="projects_data">
                    <div class="data">
                        <h4>Message de confirmation</h4>
                        <h5><?= $_SESSION['msg'] ?></h5>


                        </textarea>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <div>

                <div>
                    <label for="">
                        <h3>votre image</h3>
                    </label>
                    <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value=""> <br> <br>


                    <button name="submit" type="submit">update</button>
                </div>
                <br>
                <br>
                <div>
                    <label for="">
                        <h3>Vos Projets</h3>
                    </label>
                    <input type="file" name="projet" id="">
                </div>
                <br>
                <button name="send" class="fichier" type="submit">
                    <h3>Envoyer vos fichiers</h3>
                </button>
                <br>
                <hr>
            </div>
            <br>

            </form>
            <div class="social_media">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <br>
                <div class="deconect">
                    <a href="./function/deconexion.php">Déconnecter <i class="fas fa-power-off"></i></a>

                </div>
            </div>
        </div>
    </div>
    <?php

    if (isset($_GET['send'])) {
        if (!empty($_GET)) {
            include "./function/send_doc.php";
            $photo = $_FILES['image']['name'];
            $doc = $_GET['projet'];
            if (Send_document($photo, $doc)) {
                echo "validee";
            } else {
                echo "il faut remplir vos information";
            }
        }
    }
    ?>
    <?php

    if (isset($_GET['enregistrer'])) {
        if (!empty($_GET)) {
            include "./function/edit_profile.php";
            $id = $_SESSION["id"];
            $nom = $_GET['nom'];
            $email = $_GET['email'];
            $phone = $_GET['phone'];
            $formation = $_GET['formation'];
            $niveau = $_GET['niveau'];
            Modifier_profil($id, $nom, $email, $phone, $formation, $niveau);
            $tab = afficher_profil($id);
            var_dump($_SESSION['username']);
            foreach ($tab as $key) {
                $_SESSION['username'] = $key['nom'];
                $_SESSION['formation'] = $key['formation'];
                $_SESSION['email'] = $key['email'];
                $_SESSION['phone'] = $key['phone'];
                $_SESSION['niveau'] = $key['niveau'];
            }
        }
    }
    ?>


    <script src="./js/main.js"></script>
</body>

</html>