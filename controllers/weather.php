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
    <link href="../assets/img/svg/favicon.svg" rel="icon">
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
    <section>
        <div class="container">
            <div class="row">
                <div id="weatherapi-weather-widget-4"></div><script type='text/javascript' src='https://www.weatherapi.com/weather/widget.ashx?loc=767595&wid=4&tu=1&div=weatherapi-weather-widget-4' async></script>
                <noscript><a href="https://www.weatherapi.com/weather/q/chamonix-767595" alt="Hour by hour Chamonix weather">10 day hour by hour Chamonix weather</a></noscript>
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