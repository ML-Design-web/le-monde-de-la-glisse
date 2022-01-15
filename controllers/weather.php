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
    <meta name="description" content="La glisse vous offre une grande sélection de produits : accessoires de montagne, de nautique, des planches terrestres, des vêtements pour Hommes, Femmes et Enfants, et bien plus encore !
     Découvrez sur notre boutique en ligne les derniers accessoires tendances proposés aux meilleurs prix. Quels que soient vos besoins, votre style, vos habitudes ou vos envies, trouvez le produit qui vous convient à des prix abordables sur la boutique La glisse !"/>
    <meta name="robots" content="index, follow"/>
    <meta property="theme-color" content="#22baff"/>
    <meta property="og:title" content="Météo | La glisse"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://i.imgur.com/PZDTl0m.png"/>
    <meta property="og:url" content="#"/>
    <meta property="og:description" content="La glisse vous offre une grande sélection de produits : accessoires de montagne, de nautique, des planches terrestres, des vêtements pour Hommes, Femmes et Enfants, et bien plus encore !
     Découvrez sur notre boutique en ligne les derniers accessoires tendances proposés aux meilleurs prix. Quels que soient vos besoins, votre style, vos habitudes ou vos envies, trouvez le produit qui vous convient à des prix abordables sur la boutique La glisse !"/>
    <meta property="og:locale" content="fr_FR"/>
    <meta property="keywords" content="#"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="Météo | La glisse"/>
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
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../__navbar/navbar.css" rel="stylesheet">
    <link href="../__footer/footer.css" rel="stylesheet">
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

    <div class="baniere" id="meteo">
        <div class="text-center title-baniere">
            <h1>Météo</h1>
            <p>Retrouvez toutes les informations météorologiques sur notre page !</p>
        </div>
    </div>
    <section>
        <img class="carte mx-auto d-block" src="../assets/img/png/carte-france-regions.png" usemap="#image-map" alt="Carte-de-France">
        <map name="image-map">
            <area class="poly" alt="Nouvelle-Aquitaine" title="Nouvelle-Aquitaine" href="https://meteofrance.com/previsions-meteo-france/nouvelle-aquitaine/9" coords="166,434,121,410,146,307,160,319,146,297,147,268,166,264,165,248,155,237,169,233,185,230,197,238,204,236,223,263,241,264,259,267,269,286,263,294,267,311,255,330,244,336,232,328,220,346,209,371,187,381,171,387,178,412" shape="poly">
            <area class="poly" alt="Occitanie" title="Occitanie" href="https://meteofrance.com/previsions-meteo-france/occitanie/regin11" coords="170,433,201,440,204,435,223,436,235,442,244,447,267,456,287,451,285,426,294,412,304,411,321,399,328,403,335,394,345,379,338,366,325,366,313,342,296,334,284,345,277,335,269,351,255,351,252,334,236,332,226,337,214,365,197,381,173,387" shape="poly">
            <area class="poly" alt="Provence-Alpes-Cote-D'Azur" title="Provence-Alpes-Cote-D'Azur" href="https://meteofrance.com/previsions-meteo-france/provence-alpes-cote-d-azur/12" coords="331,405,342,405,353,407,367,407,368,414,386,419,408,418,413,403,424,389,436,386,443,371,424,365,417,351,416,340,403,322,393,324,397,332,381,338,378,352,370,355,379,364,369,372,360,369,354,364,344,366,347,382,340,392" shape="poly">
            <area class="poly" alt="Auvergne-Rhone-Alpes" title="Auvergne-Rhone-Alpes" href="https://meteofrance.com/previsions-meteo-france/auvergne-rhone-alpes/10" coords="264,264,271,263,271,254,286,248,300,254,303,248,316,263,312,275,323,275,331,267,340,272,346,261,360,262,367,267,373,269,384,266,381,275,395,269,405,264,412,278,410,289,412,296,418,304,418,313,407,321,394,323,398,335,374,351,372,366,356,366,341,366,331,359,324,361,314,343,302,334,289,335,285,342,280,336,270,349,262,349,257,335,265,319,264,292,275,289" shape="poly">
            <area class="poly" alt="Bourgogne-Franche-Compté" title="Bourgogne-Franche-Compté" href="https://meteofrance.com/previsions-meteo-france/bourgogne-franche-comte/8" coords="287,246,283,231,279,224,282,210,280,203,285,195,287,187,282,183,285,174,299,169,306,182,313,192,336,184,346,192,345,201,354,204,366,204,369,194,377,191,382,185,387,189,396,189,408,193,414,203,408,210,411,216,394,231,393,238,385,247,381,255,378,265,372,264,366,267,361,257,351,256,343,260,341,269,334,267,327,269,316,272,315,261,309,259,309,251,303,247,297,255" shape="poly">
            <area class="poly" alt="Grand-Est" title="Grand-Est" href="https://meteofrance.com/previsions-meteo-france/grand-est/4" coords="295,166,301,158,298,152,303,143,304,132,303,123,312,121,317,109,321,103,319,95,332,94,335,85,342,104,352,109,359,115,364,113,375,118,382,115,393,117,398,128,404,130,421,129,439,133,436,150,433,164,426,202,416,207,410,190,375,189,370,196,365,202,348,202,352,189,339,188,320,191" shape="poly">
            <area class="poly" alt="Hauts-De-France" title="Hauts-De-France" href="https://meteofrance.com/previsions-meteo-france/hauts-de-france/1" coords="316,94,316,80,308,75,301,78,298,68,286,66,287,59,274,56,268,42,237,47,237,65,237,80,233,88,244,95,242,111,243,128,254,129,268,131,283,134,294,142,300,143,304,124,312,122,320,105" shape="poly">
            <area class="poly" alt="Normandie" title="Normandie" href="https://meteofrance.com/previsions-meteo-france/normandie/2" coords="232,87,214,97,195,103,192,109,203,112,199,121,178,128,152,120,149,109,128,103,130,122,139,135,140,153,146,160,166,158,179,157,186,169,194,161,208,175,214,171,215,163,210,156,220,153,228,145,232,138,241,128,244,97" shape="poly">
            <area class="poly" alt="Bretagne" title="Bretagne" href="https://meteofrance.com/previsions-meteo-france/bretagne/5" coords="148,161,141,156,129,156,107,157,102,160,92,140,74,143,59,149,39,152,51,159,57,166,47,165,50,173,41,176,48,184,71,189,78,192,94,199,104,204,118,206,117,200,128,198,133,195,145,193,150,181,153,168" shape="poly">
            <area class="poly" alt="Pays-De-La-Loire" title="Pays-De-La-Loire" href="https://meteofrance.com/previsions-meteo-france/pays-de-la-loire/6" coords="152,159,162,165,175,160,184,171,192,164,200,173,209,178,211,193,202,205,194,206,186,227,169,229,160,238,166,266,147,270,133,258,116,241,118,232,117,219,112,214,102,216,116,207,122,199,147,196,152,182" shape="poly">
            <area class="poly" alt="Centre-Val-De-Loire" title="Centre-Val-De-Loire" href="https://meteofrance.com/previsions-meteo-france/centre-val-de-loire/7" coords="189,227,193,210,213,200,214,178,218,169,214,155,229,152,235,147,244,160,249,171,259,171,265,177,280,180,286,193,277,198,280,214,283,244,271,252,266,259,256,261,224,262" shape="poly">
            <area class="poly" alt="Ile-De-France" title="Ile-De-France" href="https://meteofrance.com/previsions-meteo-france/ile-de-france/3" coords="239,147,235,138,241,132,261,131,274,137,292,141,298,146,295,153,296,163,284,170,279,177,270,180,250,172" shape="poly">
            <area class="poly" alt="Corse" title="Corse" href="https://meteofrance.com/previsions-meteo-france/corse/13" coords="451,479,452,468,456,451,459,442,456,420,454,404,451,417,443,413,430,426,430,436,427,447,435,460,442,470" shape="poly">
        </map>
        <div class="container">
            <div class="col-md-6 form-group d-block mx-auto">
                <input onkeydown="search_region(this)" type="text" name="location" class="form-control" id="location" placeholder="Ou recherchez une région" required>
                <p class="text-center">Powered by Meteo France</p>
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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>
<script>// Permet d'afficher des suggestions lorsque l'utilisateur saisis les premières lettres d'un mot dans un champ. -->
    const location_list = [
        "Nouvelle-Aquitaine",
        "Occitanie",
        "Provence-Alpes-Cote-D'Azur",
        "Auvergne-Rhone-Alpes",
        "Bourgogne-Franche-Compté",
        "Grand-Est",
        "Hauts-De-France",
        "Normandie",
        "Bretagne",
        "Pays-De-La-Loire",
        "Centre-Val-De-Loire",
        "Ile-De-France",
        "Corse",
    ];

    $( function() {
        $( "#location" ).autocomplete({
            source: location_list
        });
    } );
    // ===========================

    // Permet de rediriger l'utilisateur vers la page météo france de la région qu'il aura manuellement saisit
    function search_region(ele) {
        if(event.key === 'Enter') {
            location_list.forEach(element => {
                if (element === ele.value) {
                    switch (ele.value) {
                        case 'Nouvelle-Aquitaine':
                            window.open("https://meteofrance.com/previsions-meteo-france/nouvelle-aquitaine/9");
                            break;
                        case 'Occitanie':
                            window.open("https://meteofrance.com/previsions-meteo-france/occitanie/regin11");
                            break;
                        case "Provence-Alpes-Cote-D'Azur":
                            window.open("https://meteofrance.com/previsions-meteo-france/provence-alpes-cote-d-azur/12");
                            break;
                        case "Auvergne-Rhone-Alpes":
                            window.open("https://meteofrance.com/previsions-meteo-france/auvergne-rhone-alpes/10");
                            break;
                        case "Bourgogne-Franche-Compté":
                            window.open("https://meteofrance.com/previsions-meteo-france/bourgogne-franche-comte/8");
                            break;
                        case "Grand-Est":
                            window.open("https://meteofrance.com/previsions-meteo-france/grand-est/4");
                            break;
                        case "Hauts-De-France":
                            window.open("https://meteofrance.com/previsions-meteo-france/hauts-de-france/1");
                            break;
                        case "Normandie":
                            window.open("https://meteofrance.com/previsions-meteo-france/normandie/2");
                            break;
                        case "Bretagne":
                            window.open("https://meteofrance.com/previsions-meteo-france/bretagne/5");
                            break;
                        case "Pays-De-La-Loire":
                            window.open("https://meteofrance.com/previsions-meteo-france/pays-de-la-loire/6");
                            break;
                        case "Centre-Val-De-Loire":
                            window.open("https://meteofrance.com/previsions-meteo-france/centre-val-de-loire/7");
                            break;
                        case "Ile-De-France":
                            window.open("https://meteofrance.com/previsions-meteo-france/ile-de-france/3");
                            break;
                        case "Corse":
                            window.open("https://meteofrance.com/previsions-meteo-france/corse/13");
                            break;
                        default:
                            break;
                    }
                }
            })
        }
    }
</script>

</body>

</html>