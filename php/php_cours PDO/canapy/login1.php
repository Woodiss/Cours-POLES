<?php
require_once('lib/db.php');
require_once('lib/user.php');


echo "<pre>";
print_r($_POST);
echo "</pre>";


if (!empty($_POST)) {
    if ($_POST['formulaire'] == "register") {

        if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['repeat_password'])) {

            if (($_POST['password'] == $_POST['repeat_password'])) {

                extract($_POST);
                $user = new User($db);
                $passwordCrypted = md5($password);
                $user->register($firstname, $lastname, $email, $passwordCrypted);
            }
        }
    } else {

        extract($_POST);
        if (!empty($email) && !empty($password)) {

            $passwordCrypted = md5($password);
            $user1 = new User($db);
            $user1->login($email, $passwordCrypted);
        }
    }
}

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="js/script.js" defer></script>
    <title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
    <style>
        .forms-all {
            background: #dce5e4;
            padding: 50px;
            border-radius: 50px;
            position: relative;
        }

        #inscription-form,
        #login-form {
            padding: 20px;
            z-index: 2;
        }

        .bougee {
            position: absolute;
            background: #3b5d50;
            height: 370px;
            width: 47%;
            z-index: 10px;
            border-radius: 40px;
            left: 41px;
            transition: all .5s;
        }
    </style>
</head>

<body>

    <!-- Start Header/Navigation -->
    <?php include('components/nav.php') ?>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero row">
        <div class="col-8 offset-2">


            <!-- End Hero Section -->

            <div class="row justify-content-between forms-all">
                <div class="bougee" id="bougee"></div>

                <div class="col-6 text-white" id="inscription-form">
                    <form class="row" method="POST">
                        <div class="col-md-6">
                            <label for="firstname" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="firstname" name="firstname">
                        </div>
                        <div class="col-md-6">
                            <label for="lastname" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="lastname" name="lastname">
                        </div>
                        <div class="col-12">
                            <label for="mail" class="form-label">Mail</label>
                            <input type="mail" class="form-control" id="mail" placeholder="Entrez votre adresse mail" name="email">
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="text" class="form-control" id="password" name="password">
                        </div>
                        <div class="col-md-6">
                            <label for="passwordRepeat" class="form-label">Comfirmer mot de passe</label>
                            <input type="text" class="form-control" id="passwordRepeat" name="repeat_password">
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" name="formulaire" value="register">Sign in</button>
                        </div>
                    </form>
                </div>


                <div class="col-6 " id="login-form">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>

                        <button type="submit" class="btn btn-primary" name="formulaire" value="login">Submit</button>
                    </form>
                </div>


            </div>
        </div>
    </div>

    <!-- Start Footer Section -->
    <footer class="footer-section">
        <div class="container relative">

            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a></div>
                    <p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>

                    <ul class="list-unstyled custom-social">
                        <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                    </ul>
                </div>

                <div class="col-lg-8">
                    <div class="row links-wrap">
                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Knowledge base</a></li>
                                <li><a href="#">Live chat</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Our team</a></li>
                                <li><a href="#">Leadership</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Nordic Chair</a></li>
                                <li><a href="#">Kruzo Aero</a></li>
                                <li><a href="#">Ergonomic Chair</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="border-top copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
                        </p>
                    </div>

                    <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled d-inline-flex ms-auto">
                            <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer Section -->


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>