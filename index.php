<?php
ini_set('display_errors', 'off');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Accueil | La glisse</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="La glisse vous offre une grande sélection de produits : accessoires de montagne, de nautique, des planches terrestres, des vêtements pour Hommes, Femmes et Enfants, et bien plus encore !
     Découvrez sur notre boutique en ligne les derniers accessoires tendances proposés aux meilleurs prix. Quels que soient vos besoins, votre style, vos habitudes ou vos envies, trouvez le produit qui vous convient à des prix abordables sur la boutique La glisse !"/>
    <meta name="robots" content="index, follow"/>
    <meta property="theme-color" content="#22baff"/>
    <meta property="og:title" content="Accueil | La glisse"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://i.imgur.com/PZDTl0m.png"/>
    <meta property="og:url" content="#"/>
    <meta property="og:description" content="La glisse vous offre une grande sélection de produits : accessoires de montagne, de nautique, des planches terrestres, des vêtements pour Hommes, Femmes et Enfants, et bien plus encore !
     Découvrez sur notre boutique en ligne les derniers accessoires tendances proposés aux meilleurs prix. Quels que soient vos besoins, votre style, vos habitudes ou vos envies, trouvez le produit qui vous convient à des prix abordables sur la boutique La glisse !"/>
    <meta property="og:locale" content="fr_FR"/>
    <meta property="keywords" content="#"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="Accueil | La glisse"/>
    <meta name="twitter:description" content="La glisse vous offre une grande sélection de produits : accessoires de montagne, de nautique, des planches terrestres, des vêtements pour Hommes, Femmes et Enfants, et bien plus encore !
     Découvrez sur notre boutique en ligne les derniers accessoires tendances proposés aux meilleurs prix. Quels que soient vos besoins, votre style, vos habitudes ou vos envies, trouvez le produit qui vous convient à des prix abordables sur la boutique La glisse !"/>
    <meta name="twitter:image" content="https://i.imgur.com/PZDTl0m.png"/>

    <!-- Favicons -->
    <link href="assets/img/svg/favicon.svg" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="__navbar/navbar_home.css" rel="stylesheet">
    <link href="__footer/footer.css" rel="stylesheet">
    <link href="assets/css/accueil.css" rel="stylesheet">
</head>

<body>

<!-- ======= Import de la Navbar======= -->
<?php
include_once('__navbar/navbar.php');
?>
<!-- ============== -->

<main id="main">
    <!-- ======= Début Hero Section ======= -->
    <section id="main-hero-2">
        <div class="row-pers">
            <div class="col-sm-6">
                <a href="#summersport">
                    <div class=" bg-summer text-center bg-main">
                        <div class="text-pos">
                            <h1>Sport D'été</h1>
                            <i class="fs-1 bi bi-chevron-down"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="#wintersport">
                    <div class="bg-winter text-center bg-main ">
                        <div class="text-pos">
                            <h1>Sport D'hiver</h1>
                            <i class="fs-1 bi bi-chevron-down"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- ======= Fin Hero Section ======= -->

    <!-- ======  CATEGORIE DE CHOIX DU SPORT D'ETE  ====== -->
    <section id="summersport">

        <div class="fond">
            <span class="fond-image-surfer"></span>
            <div class="container1">
                <div class="text-glisse" data-aos="fade-left" data-aos-delay="200">
                    <span>CHOISIS</span>
                    <span>TA</span>
                    <span>GLISSE.</span>
                </div>
                <div class="sport-list custom-select">
                    <form action="index.php" method="post">
                        <label for="sport-select"></label>
                            <select name="summer" id="sport-select">
                                <option value="0">choisir dans la liste</option>
                                <option value="voile">Planche à voile</option>
                                <option value="kite">Kite-Surf</option>
                                <option value="surf">Surf</option>
                                <option value="paddle">Paddle</option>
                            </select>

                        <button class="custom-submit-btn" type="submit">ok</button>
                    </form>


                    <!-- ======  CATEGORIE DE CHOIX DU SPORT D'ETE  ====== -->
                    <?php
                    if (isset($_POST)) {
                        $selectsport = $_POST['summer'];
                        if ($selectsport == 'surf') {
                            echo '<script type="text/javascript">
                                    document.location = "shop/accessories.php#surf";
                                  </script>';
                        }
                        if ($selectsport == 'paddle') {
                            echo '<script type="text/javascript">
                                    document.location = "shop/accessories.php#paddle";
                                  </script>';
                        }
                        if ($selectsport == 'kite') {
                            echo '<script type="text/javascript">
                                    document.location = "shop/accessories.php#kite";
                                  </script>';
                        }
                        if ($selectsport == 'voile') {
                            echo '<script type="text/javascript">
                                    document.location = "shop/accessories.php#voiles";
                                  </script>';
                        }
                    }
                    ?>

                </div>
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-center surfer">
            <img src="assets/img/webp/surfer.png" alt="surfer" data-aos="fade-left" data-aos-delay="300">
        </div>

    </section>
    <!-- FIN CATEGORIE -->


    <!-- ======  CATEGORIE DE CHOIX DU SPORT D'HIVER  ====== -->
    <section id="wintersport">
        <div class="fond">
            <span class="fond-image-skier"></span>
            <div class="container1">
                <div class="text-glisse" data-aos="fade-left" data-aos-delay="200">
                    <span>CHOISIS&nbsp; </span>
                    <span>TA&nbsp;</span>
                    <span>GLISSE.&nbsp;</span>
                </div>

                <div class="sport-list custom-select">
                    <form action="index.php" method="post">
                        <label for="sport-select"></label>
                            <select name="winter" id="sport-select">
                                <option value="0">choisir dans la liste</option>
                                <option value="ski">Ski</option>
                                <option value="snow">Snowboard</option>
                                <option value="patin">Patin à glace</option>
                            </select>

                        <button class="custom-submit-btn" type="submit">ok</button>
                    </form>


                    <!-- ======  CATEGORIE DE CHOIX DU SPORT D'HIVER  ====== -->
                    <?php
                    if (isset($_POST)) {
                        $selectsport = $_POST['winter'];
                        if ($selectsport == 'ski') {
                            echo '<script type="text/javascript">
                                     document.location = "shop/accessories.php#ski";
                                  </script>';
                        }
                        if ($selectsport == 'snow') {
                            echo '<script type="text/javascript">
                                     document.location = "shop/accessories.php#snowbd";
                                  </script>';
                        }
                        if ($selectsport == 'patin') {
                            echo '<script type="text/javascript">
                                     document.location = "shop/accessories.php#patins";
                                  </script>';
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-center skier bg">
            <img src="assets/img/webp/skier.png" alt="skier" data-aos="fade-left" data-aos-delay="300">
        </div>
    </section>
    <!-- FIN CATEGORIE -->


    <!-- ======= Début Section FAQ ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Foire Aux Questions</h2>
                <p>Trouvez les réponses à vos questions dans cette section !</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Quels sont les types de livraison possibles ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Où que vous soyez, quelles que soient vos habitudes ou vos préférences, nous mettons à
                                votre disposition un vaste choix de modes de livraison. <br><br>
                                <span style="font-weight: bold">Pour les petits articles :</span><br>
                                Point Relais Colis ® <br>
                                Colissimo<br>
                                Livraison Express (24h) par Chronopost. <br><br>

                                <span style="font-weight: bold">Pour les articles volumineux :</span><br>
                                Relais Colis ® Max<br>
                                À domicile ou à l'adresse de votre choix.<br><br>
                                Choisissez tout simplement celui qui vous convient le mieux !
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Que dois-je faire si je n'ai pas reçu ma commande ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Tout d'abord, rendez-vous dans votre suivi de commande, cliquez sur la commande
                                concernée, vérifiez bien qu'elle n'a pas déjà été livrée ou présentée, et assurez-vous
                                que le lieu de livraison correspond à celui que vous aviez choisi.
                                Si vous décelez une anomalie, et si la date de livraison est dépassée, contactez notre
                                Service Client qui élucidera ce mystère avec vous.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Quelles sont les modalités de remboursement ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                <span style="font-weight: bold">Les conditions de remboursement.</span><br>
                                L’article doit être retourné dans son état d’origine et dans le délai de rétractation de
                                30 jours.
                                Dans le cadre du Code de la Consommation, si vous retournez l’intégralité de votre
                                commande, La Redoute vous rembourse les frais de livraison. Ils feront l’objet d’un
                                remboursement séparé.<br><br>

                                <span style="font-weight: bold">Les délais de remboursement.</span><br>
                                Comptez environ 14 jours ouvrés pour les articles retournés en points Relais Colis ® et
                                3 à 4 semaines pour ceux déposés à La Poste ou repris à votre domicile.<br><br>

                                <span style="font-weight: bold">Les modes de remboursement.</span><br>
                                Pas de surprise, sauf cas exceptionnel, votre remboursement se fait sur le mode de
                                paiement initial de votre commande.<br><br>

                                <span style="font-weight: bold">Bon à savoir :</span><br>
                                Si vous avez réglé avec une carte cadeau et que celle-ci est périmée à la date du
                                remboursement, nous vous rembourserons par bon d'achat.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">J’ai effectué mon retour en Relais Colis et je n’ai pas été remboursé. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Tout d’abord, vérifiez les emails que nous vous envoyons : dès que votre retour nous
                                parvient, nous déclenchons votre remboursement et nous vous en avertissons par
                                email.<br><br>
                                Vous n'avez rien trouvé dans vos mails ? Cliquez sur l'historique des remboursements
                                dans votre suivi de commande. Vous y trouverez tous les renseignements utiles.<br><br>
                                Toujours rien malgré vos recherches ? Nous allons regarder cela ensemble : munissez-vous
                                du n° de retour figurant sur votre preuve de dépôt signée par le commerçant du point
                                Relais Colis ® et appelez votre Service Clients,
                                il vous apportera des réponses claires, nettes et précises !
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="500">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Comment modifier ma commande ou annuler un article ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                <span style="font-weight: bold">Vous souhaitez modifier votre commande ?</span><br>
                                Cela n'est pas possible mais soyez rassuré, vous avez 30 jours pour nous retourner les
                                articles après réception.<br><br>

                                <span style="font-weight: bold">Vous souhaitez annuler un article ?</span><br>
                                Si votre article est en état « en attente », tout est encore possible ! Annulez-le via
                                le lien « Annuler cet article » ou remplacez-le par un autre article, si le lien « Voir
                                un article similaire » vous est proposé.<br><br>

                                Si votre article est déjà en cours d'acheminement, c’est malheureusement trop tard.
                                Vous pourrez nous le retourner ou le refuser lors de sa mise à disposition par la Poste
                                ou dans votre point Relais Colis ® pour être remboursé au plus vite.
                                Vous serez remboursé dès son retour dans nos entrepots (sous 10 à 15 jours environ).
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section>
    <!-- Fin Section FAQ -->

    <!-- ======= Début Section Avis Clients ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Nos clients racontent leur expérience ...</h2>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Très satisfait de ma commande. Les produits sont de bonne qualité. La livraison a été
                                très rapide en Chronopost et le colis a été très bien emballé. Je parlerai de cette
                                enseigne à mon entourage !
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="Profile_Saul-Goodman">
                            <h3>Saul Goodman</h3>
                            <h4>Homme, 43 ans</h4>
                        </div>
                    </div><!-- Fin Avis Client 1 -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Produits de bonne facture, livraison assurée en 24h, que du bonheur. Très bonne enseigne
                                et très bon service client qui a su corriger une erreur sur mon adresse très rapidement.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="Profile_Sara_Wilsson">
                            <h3>Sara Wilsson</h3>
                            <h4>Femme, 27 ans</h4>
                        </div>
                    </div><!-- Fin Avis Client 2 -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Je suis agréablement surprise de la qualité de service que nous propose La Glisse.
                                L'expédition a été très rapide, ainsi que la livraison. Par contre, le livreur
                                Chronopost a lancé le colis par dessus mon portail ...
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="Profile_Jena_Karlis">
                            <h3>Jena Karlis</h3>
                            <h4>Femme, 31 ans</h4>
                        </div>
                    </div><!-- Fin Avis Client 3 -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                J'ai commandé une planche de Surf et elle est arrivée endommagé. Le service client de La
                                Glisse a été très réactif et m'en a réexpédié une neuve. Je recommande cette enseigne
                                qui concurrence de loin Decathlon.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="Profile_Matt_Brandon">
                            <h3>Matt Brandon</h3>
                            <h4>Homme, 37 ans</h4>
                        </div>
                    </div><!-- Fin Avis Client 4 -->
                </div>
                <!-- Fin Avis Client 4 -->

                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- ======= Fin Section Avis Clients ======= -->

    <!-- ======= Team Section ======= -->
    <section class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Notre équipe</h2>
                <p>Toute une équipe pour vous !</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/team/Cresus.webp" class="img-fluid" alt="Profil_Alan_THOB">
                            <div class="social">
                                <a href="https://twitter.com/sfait_fr" target="_blank"><i class="bi bi-twitter"></i></a>
                                <a href="https://www.instagram.com/sfait_fr/" target="_blank"><i
                                            class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4><a href="https://github.com/Cresus83">Alan THOB</a></h4>
                            <span>Fondateur</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="assets/img/team/mathis.webp" class="img-fluid" alt="Profil_Mathis_LAMBERT">
                            <div class="social">
                                <a href="https://twitter.com/Otryx_"><i class="bi bi-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/mathis-lambert-84218b210"><i class="bi bi-linkedin"></i></a>
                                <a href="https://www.behance.net/Otryx"><i class="bi bi-behance"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4><a href="https://github.com/ML-Design-web">Mathis Lambert</a></h4>
                            <span>Fondateur</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Nous Contacter</h2>
                <p>Un problème avec votre commande ou avec la livraison ? Contactez-nous dès maintenant ! Nos services
                    se chargeront de vous répondre sous 24h ouvrés, du Lundi au Vendredi de 9h00 à 19h et le Samedi de
                    10h à 18h (hors jours fériés).</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Notre boutique</h3>
                        <p>70 Avenue Roger Devoucoux, 83000 Toulon</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Mail</h3>
                        <p>hello@la-glisse.fr</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Téléphone</h3>
                        <p>+33 6 12 34 56 78</p>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-12 ">
                    <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1731.6043288981625!2d5.9388666071762755!3d43.12132994423468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c91b0a6b2cea6f%3A0xa865e0843e39d84e!2sIUT%20MMI!5e0!3m2!1sfr!2sfr!4v1641496230553!5m2!1sfr!2sfr"
                            style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-12">
                    <form action="forms/contact" method="post" class="php-email-form">
                        <div class="row">
                            <label class="col-md-6 form-group" for="civilite">
                                <select class="form-control" style="padding: 8px; margin-bottom: 15px" name="civilite" id="civilite" required>
                                    <option selected value="" disabled>Civilité*</option>
                                    <option value="M.">Monsieur</option>
                                    <option value="Mme">Madame</option>
                                </select>
                            </label>

                            <div class="col-md-6 form-group pb-3">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nom & Prénom*" required>
                            </div>

                            <div class="col-md-6 form-group">
                                <input type="text" name="born-date" class="form-control" id="born-date" placeholder="Date de naissance*" required onfocus="(this.type='date')">
                            </div>

                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Adresse mail*" required>
                            </div>

                            <div class="col-md-6 form-group pt-3">
                                <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Adresse*" required>
                            </div>

                            <div class="col-md-6 form-group pt-3">
                                <input type="text" name="zip" class="form-control" id="zip" placeholder="Code postal*" required>
                            </div>

                            <div class="col-md-6 form-group pt-3">
                                <input type="text" name="city" class="form-control" id="city" placeholder="Ville*" required>
                            </div>

                            <div class="col-md-6 form-group pt-3 pb-3">
                                <input type="text" name="activity" class="form-control" id="activity" placeholder="Activité pratiquée*" required>
                            </div>

                            <div class="map-section">
                                <div class="faq-list">
                                    <ul>
                                        <li><i class='bx bx-current-location icon-location'></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-6">Sélectionnez le lieu de l'activité pratiquée*. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                                                <img class="carte mx-auto d-block" src="assets/img/png/carte-france-regions.png" usemap="#image-map" alt="Carte-de-France">
                                                <map name="image-map">
                                                    <area class="poly" alt="Nouvelle-Aquitaine" title="Nouvelle-Aquitaine" href="#null" coords="166,434,121,410,146,307,160,319,146,297,147,268,166,264,165,248,155,237,169,233,185,230,197,238,204,236,223,263,241,264,259,267,269,286,263,294,267,311,255,330,244,336,232,328,220,346,209,371,187,381,171,387,178,412" shape="poly">
                                                    <area class="poly" alt="Occitanie" title="Occitanie" href="#null" coords="170,433,201,440,204,435,223,436,235,442,244,447,267,456,287,451,285,426,294,412,304,411,321,399,328,403,335,394,345,379,338,366,325,366,313,342,296,334,284,345,277,335,269,351,255,351,252,334,236,332,226,337,214,365,197,381,173,387" shape="poly">
                                                    <area class="poly" alt="Provence-Alpes-Cote-D'Azur" title="Provence-Alpes-Cote-D'Azur" href="#null" coords="331,405,342,405,353,407,367,407,368,414,386,419,408,418,413,403,424,389,436,386,443,371,424,365,417,351,416,340,403,322,393,324,397,332,381,338,378,352,370,355,379,364,369,372,360,369,354,364,344,366,347,382,340,392" shape="poly">
                                                    <area class="poly" alt="Auvergne-Rhone-Alpes" title="Auvergne-Rhone-Alpes" href="#null" coords="264,264,271,263,271,254,286,248,300,254,303,248,316,263,312,275,323,275,331,267,340,272,346,261,360,262,367,267,373,269,384,266,381,275,395,269,405,264,412,278,410,289,412,296,418,304,418,313,407,321,394,323,398,335,374,351,372,366,356,366,341,366,331,359,324,361,314,343,302,334,289,335,285,342,280,336,270,349,262,349,257,335,265,319,264,292,275,289" shape="poly">
                                                    <area class="poly" alt="Bourgogne-Franche-Compté" title="Bourgogne-Franche-Compté" href="#null" coords="287,246,283,231,279,224,282,210,280,203,285,195,287,187,282,183,285,174,299,169,306,182,313,192,336,184,346,192,345,201,354,204,366,204,369,194,377,191,382,185,387,189,396,189,408,193,414,203,408,210,411,216,394,231,393,238,385,247,381,255,378,265,372,264,366,267,361,257,351,256,343,260,341,269,334,267,327,269,316,272,315,261,309,259,309,251,303,247,297,255" shape="poly">
                                                    <area class="poly" alt="Grand-Est" title="Grand-Est" href="#null" coords="295,166,301,158,298,152,303,143,304,132,303,123,312,121,317,109,321,103,319,95,332,94,335,85,342,104,352,109,359,115,364,113,375,118,382,115,393,117,398,128,404,130,421,129,439,133,436,150,433,164,426,202,416,207,410,190,375,189,370,196,365,202,348,202,352,189,339,188,320,191" shape="poly">
                                                    <area class="poly" alt="Hauts-De-France" title="Hauts-De-France" href="#null" coords="316,94,316,80,308,75,301,78,298,68,286,66,287,59,274,56,268,42,237,47,237,65,237,80,233,88,244,95,242,111,243,128,254,129,268,131,283,134,294,142,300,143,304,124,312,122,320,105" shape="poly">
                                                    <area class="poly" alt="Normandie" title="Normandie" href="#null" coords="232,87,214,97,195,103,192,109,203,112,199,121,178,128,152,120,149,109,128,103,130,122,139,135,140,153,146,160,166,158,179,157,186,169,194,161,208,175,214,171,215,163,210,156,220,153,228,145,232,138,241,128,244,97" shape="poly">
                                                    <area class="poly" alt="Bretagne" title="Bretagne" href="#null" coords="148,161,141,156,129,156,107,157,102,160,92,140,74,143,59,149,39,152,51,159,57,166,47,165,50,173,41,176,48,184,71,189,78,192,94,199,104,204,118,206,117,200,128,198,133,195,145,193,150,181,153,168" shape="poly">
                                                    <area class="poly" alt="Pays-De-La-Loire" title="Pays-De-La-Loire" href="#null" coords="152,159,162,165,175,160,184,171,192,164,200,173,209,178,211,193,202,205,194,206,186,227,169,229,160,238,166,266,147,270,133,258,116,241,118,232,117,219,112,214,102,216,116,207,122,199,147,196,152,182" shape="poly">
                                                    <area class="poly" alt="Centre-Val-De-Loire" title="Centre-Val-De-Loire" href="#null" coords="189,227,193,210,213,200,214,178,218,169,214,155,229,152,235,147,244,160,249,171,259,171,265,177,280,180,286,193,277,198,280,214,283,244,271,252,266,259,256,261,224,262" shape="poly">
                                                    <area class="poly" alt="Ile-De-France" title="Ile-De-France" href="#null" coords="239,147,235,138,241,132,261,131,274,137,292,141,298,146,295,153,296,163,284,170,279,177,270,180,250,172" shape="poly">
                                                    <area class="poly" alt="Corse" title="Corse" href="#null" coords="451,479,452,468,456,451,459,442,456,420,454,404,451,417,443,413,430,426,430,436,427,447,435,460,442,470" shape="poly">
                                                </map>
                                                <textarea id="location" name="location" class="form-control text-center" placeholder="Ou recherchez une région" rows="1" required="required" data-error="Veuillez sélectionner une région sur la carte ci-dessus."></textarea>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet*" required>
                            </div>
                            <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message*" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Chargement ...</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Votre message a bien été envoyé et sera traité par nos services très prochainement. A bientot !</div>
                            </div>
                            <div class="text-center">
                                <p style="color: red">Les champs mentionnés avec un * sont obligatoires.</p>
                                <button type="submit">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Import du footer======= -->
<?php
include_once('__footer/footer.php');
?>
<!-- ============== -->

<!-- ======= PRELOADER AND BACK-TO-TOP ======= -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>
<!-- ============== -->

<!-- JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<!--<script src="assets/js/select-list.js"></script>-->

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script><!-- Permet de saisir automatiquement le nom d'une région dans un champ lorsque l'utilisateur clique sur une région -->
    console.clear();

    const maps = document.querySelectorAll(".poly");
    const msg = document.querySelector("#location");

    maps.forEach((map) => map.addEventListener("click", handleClick));

    function handleClick(e) {
        msg.innerText = e.target.getAttribute("alt");
    }
</script>
<script><!-- Permet d'afficher des suggestions lorsque l'utilisateur saisis les premières lettres d'un mot dans un champ. -->
    $( function() {
        const activity = [
            "Ski",
            "Snow-Board",
            "Patin",
            "Skate-Board",
            "Long-Board",
            "Lite-Surf",
            "Surf",
            "Paddle",
            "Canoë-kayak",
            "Voile",
        ];
        $( "#activity" ).autocomplete({
            source: activity
        });
    } );

    $( function() {
        const location = [
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
        $( "#location" ).autocomplete({
            source: location
        });
    } );
</script>
</body>
</html>