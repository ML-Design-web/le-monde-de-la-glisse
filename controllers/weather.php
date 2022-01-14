<?php
ini_set('display_errors', 'off');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Météo | La glisse</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="#"/>
    <meta name="robots" content="index, follow"/>
    <meta property="theme-color" content="#B0FF00"/>
    <meta property="og:title" content="Météo | La glisse"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="#"/>
    <meta property="og:url" content="#"/>
    <meta property="og:description" content="#"/>
    <meta property="og:locale" content="fr_FR"/>
    <meta property="keywords" content="#"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="Météo | La glisse"/>
    <meta name="twitter:description" content="#"/>
    <meta name="twitter:image" content="#"/>

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
    <link href="../assets/css/template.css" rel="stylesheet">
    <link href="../assets/css/meteo.css" rel="stylesheet">
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
                    <li><a href="http://localhost/le-monde-de-la-glisse/">Accueil</a></li>
                    <li>Météo</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->


    <div class="baniere">
        <div class="text-center title-baniere">
            <h1>Météo</h1>
            <p>Retrouvez toutes les informations météorologiques sur notre page !</p>
        </div>
    </div>

    <section id="weather">
        <div class="container">
            <div class="col-12 col-lg-6 col-md-12  location">
                <input type="search" name="location" id="locate-search" placeholder="rentrez une adresse">
                <button type="submit">ok</button>
            </div>
            <div class="row">
                <div class="maps col-12 col-sm-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2688278.507870118!2d8.427253278356485!3d45.88836862453288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4789459fb534be51%3A0x38c7fdcd674c57d!2sAlpes!5e1!3m2!1sfr!2sfr!4v1642071170571!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="white-bg weather-res col-12 col-sm-6">

                </div>
            </div>
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
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/js/select-list.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

</body>

</html>