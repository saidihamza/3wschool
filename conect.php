<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="./design/css/styleConnect.css">
    <script src="https://kit.fontawesome.com/8ce6df78bd.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php session_start(); ?>
    <div class="container" id="container">

        <div class="form-container sign-in-container">
            <form action="" method="get">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input name="email" type="email" placeholder="Email" />
                <input name="password" type="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <div id="sign_form">
                    <button class="btn_sin" type="submit" name="click">Sign_In</button>
                    <button class="btn_sin" type="submit" name="Sign_Up">Sign_Up </button></a>
                </div>

            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">

                <div class="overlay-panel overlay-right">
                    <img src="./design/img/big.png" alt="" srcset="">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details</p>

                </div>
            </div>
        </div>
    </div>
    <?php

    if (isset($_GET['click'])) {
        include "function/verification.php";

        $email = $_GET['email'];
        $password = $_GET['password'];
        $tab = login($_GET['email'], $_GET['password']);

        if (($tab == true) &&  $email != "admin@yahoo.fr") {
            echo "validee";
            foreach ($tab as $key) {
                $_SESSION['id'] = $tab["id"];
                $_SESSION['username'] = $tab["nom"];
                $_SESSION['formation'] = $tab["formation"];
                $_SESSION['email'] = $tab["email"];
                $_SESSION['phone'] = $tab["phone"];
                $_SESSION['niveau'] = $tab["niveau"];
                $_SESSION['message'] = $tab["message"];
                $_SESSION['role'] = $tab["role"];
            }
            header("location:profile.php");
        } elseif (($email == "admin@yahoo.fr")&&$password=="admin") {
            header("location:admin.php");
        } else {
            echo '<h2>vous verifiez vos cordonnees</h2>';
        }
    }
    if (isset($_GET['Sign_Up'])) {
        header("location:index.php");
    }

    ?>
</body>

</html>