<?php
ini_set('display_errors', 'off');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Se connecter | La glisse</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="La glisse vous offre une grande sélection de produits : accessoires de montagne, de nautique, des planches terrestres, des vêtements pour Hommes, Femmes et Enfants, et bien plus encore !
     Découvrez sur notre boutique en ligne les derniers accessoires tendances proposés aux meilleurs prix. Quels que soient vos besoins, votre style, vos habitudes ou vos envies, trouvez le produit qui vous convient à des prix abordables sur la boutique La glisse !"/>
    <meta name="robots" content="index, follow"/>
    <meta property="theme-color" content="#22baff"/>
    <meta property="og:title" content="Se connecter | La glisse"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://i.imgur.com/PZDTl0m.png"/>
    <meta property="og:url" content="#"/>
    <meta property="og:description" content="La glisse vous offre une grande sélection de produits : accessoires de montagne, de nautique, des planches terrestres, des vêtements pour Hommes, Femmes et Enfants, et bien plus encore !
     Découvrez sur notre boutique en ligne les derniers accessoires tendances proposés aux meilleurs prix. Quels que soient vos besoins, votre style, vos habitudes ou vos envies, trouvez le produit qui vous convient à des prix abordables sur la boutique La glisse !"/>
    <meta property="og:locale" content="fr_FR"/>
    <meta property="keywords" content="#"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="Se connecter | La glisse"/>
    <meta name="twitter:description" content="La glisse vous offre une grande sélection de produits : accessoires de montagne, de nautique, des planches terrestres, des vêtements pour Hommes, Femmes et Enfants, et bien plus encore !
     Découvrez sur notre boutique en ligne les derniers accessoires tendances proposés aux meilleurs prix. Quels que soient vos besoins, votre style, vos habitudes ou vos envies, trouvez le produit qui vous convient à des prix abordables sur la boutique La glisse !"/>
    <meta name="twitter:image" content="https://i.imgur.com/PZDTl0m.png"/>

    <!-- Favicons -->
    <link href="../assets/img/svg/favicon.svg" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../__navbar/navbar.css" rel="stylesheet">
    <link href="../__footer/footer.css" rel="stylesheet">
    <link href="../assets/css/connect.css" rel="stylesheet">
</head>

<body>

<!-- ======= Navbar ======= -->
<?php
include_once('../__navbar/navbar.php');
?>
<!-- Fin Navbar -->

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <ol>
                    <li><a href="../index.php">Accueil</a></li>
                    <li>Se connecter</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <section class="connect">
        <div class="connect-wdw">
            <ul>
                <li>
                    <img src="../assets/img/webp/logo.webp" alt="logo" >
                </li>
                <li>
                    <div class="window">
                        <ul>
                            <li>
                                <h3>Connexion</h3>
                            </li>
                            <li>
                                <label>
                                    <input type="text" placeholder="Identifiant">
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="password" placeholder="Mot de passe">
                                </label>
                            </li>
                            <li>
                                <button type="submit">Se connecter</button>
                            </li>
                        </ul>
                        <span>Pas encore de compte ? |</span>
                        <span><a href="#">Créer un compte</a></span>
                    </div>
                </li>
            </ul>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php
include_once('../__footer/footer.php');
?>
<!-- Fin Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

</body>

</html>