<?php
ini_set('display_errors', 'on');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Accueil | Le monde de la glisse</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#" />
    <meta name="robots" content="index, follow" />
    <meta property="theme-color" content="#B0FF00" />
    <meta property="og:title" content="Accueil | Le monde de la glisse | SFAIT" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="#" />
    <meta property="og:url" content="#" />
    <meta property="og:description" content="SFAIT est un service dédié à la réparation informatique et téléphonique. Depuis 2019, nous sommes à vos côtés pour vous assister et le serons pour toujours. Nous proposons des services d'intervention à distance via un logiciel de contrôle du pc à distance
        ainsi que des services d'envoi de votre pc par voie postale pour une réparation faite maison." />
    <meta property="og:locale" content="fr_FR" />
    <meta property="keywords" content="sfait, sfait.net, dépannage informatique, réparation téléphones, informatique, téléphonie" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Accueil | Le monde de la glisse | SFAIT" />
    <meta name="twitter:description" content="SFAIT est un service dédié à la réparation informatique et téléphonique. Depuis 2019, nous sommes à vos côtés pour vous assister et le serons pour toujours. Nous proposons des services d'intervention à distance via un logiciel de contrôle du pc à distance
            ainsi que des services d'envoi de votre pc par voie postale pour une réparation faite maison." />
    <meta name="twitter:image" content="#" />


    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <!--<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link href="assets/css/homepage.css" rel="stylesheet">
</head>

<body class="unselectable">

    <?php
    include_once('_navbar/_navbar.php');
    ?>

    <!-- ======= Hero Section ======= -->
    <section id="main-hero">
        <div class="d-flex align-items-center justify-content-center ">
            <img id="hero" src="assets/img/webp/img_main.webp" usemap="#mainmap">
        </div><!-- End Hero -->
        <map name="mainmap">
            <area shape="rect" coords="0,0,760,1080" href="#summersport" alt="img">
            <area shape="rect" coords="760,0,1920,1080" href="#wintersport" alt="img">
        </map>
    </section>

    <main id="main">


        <!-- ======  CATEGORIE DE CHOIX DU SPORT D'ETE  ====== -->
        <section id="summersport">

            <div class="fond">
                <span class="fond-image-surfer"></span>
                <div class="container">
                    <div class="text-glisse">
                        <span>CHOISIS</span>
                        <span>TA</span>
                        <span>GLISSE.</span>
                    </div>
                    <div class="sport-list custom-select">
                        <select name="sports" id="sport-select">
                            <option value="0">choisir dans la liste</option>
                            <option value="1">Surf</option>
                            <option value="2">Paddle</option>
                            <option value="3">Kite-Surf</option>
                            <option value="4">Planche à voile</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-center surfer">
                <img src="assets/img/webp/surfer.png" alt="surfer">
            </div>

        </section>
        <!-- FIN CATEGORIE -->


        <!-- ======  CATEGORIE DE CHOIX DU SPORT D'HIVER  ====== -->

        <section id="wintersport">
            <div class="fond">
                <span class="fond-image-skier"></span>
                <div class="container">
                    <div class="text-glisse">
                        <span>CHOISIS</span>
                        <span>TA</span>
                        <span>GLISSE.</span>
                    </div>
                    <div class="sport-list custom-select">
                        <select name="sports" id="sport-select">
                            <option value="0">choisir dans la liste</option>
                            <option value="1">Ski</option>
                            <option value="2">Snowboard</option>
                            <option value="3">Patin à glace</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center skier bg" data-aos="fade-left">
                <img src="assets/img/webp/skier.png" alt="skier">
            </div>
        </section>
        <!-- FIN CATEGORIE -->


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
                                    <a href="https://www.instagram.com/sfait_fr/" target="_blank"><i class="bi bi-instagram"></i></a>
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
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4><a href="#">Mathis Lambert</a></h4>
                                <span>Fondateur</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contacter le service client</p>
                </div>
                <div class="col-lg-12 mt-5 mt-lg-0">
                    <form action="mail/contact-form" method="post" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nom et Prénom" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Adresse mail" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Patientez...</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Votre message a bien été envoyé et sera traité dans les meilleurs
                                délais.
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Envoyer</button>
                        </div>
                    </form>

                </div>

            </div>

            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->

    <?php
    include_once('_footer/_footer.php');
    ?>

    <script src="assets/js/select-list.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>