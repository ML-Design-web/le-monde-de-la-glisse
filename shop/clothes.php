<?php
ini_set('display_errors', 'off');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Vêtements | La glisse</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="La glisse vous offre une grande sélection de produits : accessoires de montagne, de nautique, des planches terrestres, des vêtements pour Hommes, Femmes et Enfants, et bien plus encore !
     Découvrez sur notre boutique en ligne les derniers accessoires tendances proposés aux meilleurs prix. Quels que soient vos besoins, votre style, vos habitudes ou vos envies, trouvez le produit qui vous convient à des prix abordables sur la boutique La glisse !"/>
    <meta name="robots" content="index, follow"/>
    <meta property="theme-color" content="#22baff"/>
    <meta property="og:title" content="Vêtements | La glisse"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://i.imgur.com/PZDTl0m.png"/>
    <meta property="og:url" content="#"/>
    <meta property="og:description" content="La glisse vous offre une grande sélection de produits : accessoires de montagne, de nautique, des planches terrestres, des vêtements pour Hommes, Femmes et Enfants, et bien plus encore !
     Découvrez sur notre boutique en ligne les derniers accessoires tendances proposés aux meilleurs prix. Quels que soient vos besoins, votre style, vos habitudes ou vos envies, trouvez le produit qui vous convient à des prix abordables sur la boutique La glisse !"/>
    <meta property="og:locale" content="fr_FR"/>
    <meta property="keywords" content="#"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="Vêtements | La glisse"/>
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
    <link href="../assets/css/shop.css" rel="stylesheet">

    <!-- Slick Carousel -->
    <link rel="stylesheet" href="../assets/slick/slick.css">
    <link rel="stylesheet" href="../assets/slick/slick-theme.css">
    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="../assets/icon-font/style.css">
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
                    <li>Vêtements</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    
    <section id="clothes-header">
        <h1 class="accessories">Nos Vêtements</h1>
        <div class="container-wrapper">

            <div class="wrapper" onclick="href('men')">
                <div class="wrapper-text"><h1>HOMMES</h1></div>
            </div>

            <div class="wrapper" onclick="href('women')">
                <div class="wrapper-text"><h1>FEMMES</h1></div>
            </div>

            <div class="wrapper" onclick="href('kids')">
                <div class="wrapper-text"><h1>ENFANTS</h1></div>
            </div>
        </div>
    </section>

    <div class="baniere" id="men">
        <div class="text-center title-baniere">
            <h1>Vêtements pour Hommes</h1>
            <p>Découvrez notre collection de vêtements pour Hommes !</p>
        </div>
    </div>

    <section class="products section">
        <div class="container">
            <div class="row">

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Homme</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Homme</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Homme</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Homme</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Homme</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Homme</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Homme</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Homme</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="baniere" id="women">
        <div class="text-center title-baniere">
            <h1>Vêtements pour Femme</h1>
            <p>Découvrez notre collection de vêtements pour Femme !</p>
        </div>
    </div>

    <section class="products section">
        <div class="container">
            <div class="row">

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire2.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Femme</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire2.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Femme</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire2.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Femme</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire2.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Femme</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire2.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Femme</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire2.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Femme</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire2.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Femme</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire2.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Femme</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="baniere" id="kids">
        <div class="text-center title-baniere">
            <h1>Vêtements pour Enfants</h1>
            <p>Découvrez notre collection de vêtements pour Enfants !</p>
        </div>
    </div>

    <section class="products section">
        <div class="container">
            <div class="row">

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire3.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Enfant</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire3.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Enfant</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire3.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Enfant</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire3.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Enfant</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire3.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Enfant</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire3.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Enfant</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire3.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Enfant</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="../assets/img/jpg/polaire3.jpg" alt="Polaire"/>
                            <div class="preview-meta">
                                <ul>
                                    <li>
									<span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#null">Veste polaire Enfant</a></h4>
                            <p class="price">70€</p>
                        </div>
                    </div>
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

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

<!-- Onclick javascript script -->
<script>
    function href($link) {
        window.location.href ="#" + $link;
    }
</script>

</body>

</html>