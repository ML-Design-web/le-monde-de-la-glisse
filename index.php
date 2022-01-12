<?php
ini_set('display_errors', 'off');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Accueil | La glisse</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="#" />
  <meta name="robots" content="index, follow" />
  <meta property="theme-color" content="#B0FF00" />
  <meta property="og:title" content="Accueil | La glisse" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="#" />
  <meta property="og:url" content="#" />
  <meta property="og:description" content="#" />
  <meta property="og:locale" content="fr_FR" />
  <meta property="keywords" content="#" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="Accueil | La glisse" />
  <meta name="twitter:description" content="#" />
  <meta name="twitter:image" content="#" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="__navbar/navbar.css" rel="stylesheet">
  <link href="__footer/footer.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/accueil.css" rel="stylesheet">
</head>

<body>

<!-- ======= Import de la Navbar======= -->
<?php
include_once('__navbar/navbar.php');
?>

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
          <select name="sports" id="sport-select">
            <option value="0">choisir dans la liste</option>
            <option value="1">Surf</option>
            <option value="2">Paddle</option>
            <option value="3">Kite-Surf</option>
            <option value="4">Planche à voile</option>
          </select>
          <button class="custom-submit-btn" type="submit">ok</button>
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
          <select name="sports" id="sport-select">
            <option value="0">choisir dans la liste</option>
            <option value="1">Ski</option>
            <option value="2">Snowboard</option>
            <option value="3">Patin à glace</option>
          </select>
          <button class="custom-submit-btn" type="submit">ok</button>
        </div>
      </div>
    </div>
    <div class="d-flex align-items-center justify-content-center skier bg">
      <img src="assets/img/webp/skier.png" alt="skier" data-aos="fade-left" data-aos-delay="300">
    </div>
  </section>
  <!-- FIN CATEGORIE -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Voluptatem dignissimos provident quasi corporis</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                pariatur.</li>
            </ul>
            <a href="#" class="read-more">Read More <i class="bi bi-long-arrow-right"></i></a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

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
                    Où que vous soyez, quelles que soient vos habitudes ou vos préférences, nous mettons à votre disposition un vaste choix de modes de livraison. <br><br>
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
                    Tout d'abord, rendez-vous dans votre suivi de commande, cliquez sur la commande concernée, vérifiez bien qu'elle n'a pas déjà été livrée ou présentée, et assurez-vous que le lieu de livraison correspond à celui que vous aviez choisi.
                    Si vous décelez une anomalie, et si la date de livraison est dépassée, contactez notre Service Client qui élucidera ce mystère avec vous.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Quelles sont les modalités de remboursement ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                    <span style="font-weight: bold">Les conditions de remboursement.</span><br>
                    L’article doit être retourné dans son état d’origine et dans le délai de rétractation de 30 jours.
                    Dans le cadre du Code de la Consommation, si vous retournez l’intégralité de votre commande, La Redoute vous rembourse les frais de livraison. Ils feront l’objet d’un remboursement séparé.<br><br>

                    <span style="font-weight: bold">Les délais de remboursement.</span><br>
                    Comptez environ 14 jours ouvrés pour les articles retournés en points Relais Colis ® et 3 à 4 semaines pour ceux déposés à La Poste ou repris à votre domicile.<br><br>

                    <span style="font-weight: bold">Les modes de remboursement.</span><br>
                    Pas de surprise, sauf cas exceptionnel, votre remboursement se fait sur le mode de paiement initial de votre commande.<br><br>

                    <span style="font-weight: bold">Bon à savoir :</span><br>
                    Si vous avez réglé avec une carte cadeau et que celle-ci est périmée à la date du remboursement, nous vous rembourserons par bon d'achat.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">J’ai effectué mon retour en Relais Colis et je n’ai pas été remboursé. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                    Tout d’abord, vérifiez les emails que nous vous envoyons : dès que votre retour nous parvient, nous déclenchons votre remboursement et nous vous en avertissons par email.<br><br>
                    Vous n'avez rien trouvé dans vos mails ? Cliquez sur l'historique des remboursements dans votre suivi de commande. Vous y trouverez tous les renseignements utiles.<br><br>
                    Toujours rien malgré vos recherches ? Nous allons regarder cela ensemble : munissez-vous du n° de retour figurant sur votre preuve de dépôt signée par le commerçant du point Relais Colis ® et appelez votre Service Clients,
                    il vous apportera des réponses claires, nettes et précises !
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Comment modifier ma commande ou annuler un article ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                    <span style="font-weight: bold">Vous souhaitez modifier votre commande ?</span><br>
                    Cela n'est pas possible mais soyez rassuré, vous avez 30 jours pour nous retourner les articles après réception.<br><br>

                    <span style="font-weight: bold">Vous souhaitez annuler un article ?</span><br>
                    Si votre article est en état « en attente », tout est encore possible ! Annulez-le via le lien « Annuler cet article » ou remplacez-le par un autre article, si le lien « Voir un article similaire » vous est proposé.<br><br>

                    Si votre article est déjà en cours d'acheminement, c’est malheureusement trop tard.
                    Vous pourrez nous le retourner ou le refuser lors de sa mise à disposition par la Poste ou dans votre point Relais Colis ® pour être remboursé au plus vite.
                    Vous serez remboursé dès son retour dans nos entrepots (sous 10 à 15 jours environ).
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- Fin Section FAQ -->

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
                              Très satisfait de ma commande. Les produits sont de bonne qualité. La livraison a été très rapide en Chronopost et le colis a été très bien emballé. Je parlerai de cette enseigne à mon entourage !
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                          <h3>Saul Goodman</h3>
                          <h4>Homme, 43 ans</h4>
                      </div>
                  </div><!-- Fin Avis Client 1 -->

                  <div class="swiper-slide">
                      <div class="testimonial-item">
                          <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              Produits de bonne facture, livraison assurée en 24h, que du bonheur. Très bonne enseigne et très bon service client qui a su corriger une erreur sur mon adresse très rapidement.
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                          <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                          <h3>Sara Wilsson</h3>
                          <h4>Femme, 27 ans</h4>
                      </div>
                  </div><!-- Fin Avis Client 2 -->

                  <div class="swiper-slide">
                      <div class="testimonial-item">
                          <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              Je suis agréablement surprise de la qualité de service que nous propose La Glisse. L'expédition a été très rapide, ainsi que la livraison. Par contre, le livreur Chronopost a lancé le colis par dessus mon portail ...
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                          <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                          <h3>Jena Karlis</h3>
                          <h4>Femme, 31 ans</h4>
                      </div>
                  </div><!-- Fin Avis Client 3 -->

                  <div class="swiper-slide">
                      <div class="testimonial-item">
                          <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              J'ai commandé une planche de Surf et elle est arrivée endommagé. Le service client de La Glisse a été très réactif et m'en a réexpédié une neuve. Je recommande cette enseigne qui concurrence de loin Decathlon.
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                          <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                          <h3>Matt Brandon</h3>
                          <h4>Homme, 37 ans</h4>
                      </div>
                  </div><!-- Fin Avis Client 4 -->

              </div>
              <div class="swiper-pagination"></div>
          </div>

      </div>
    </section><!-- ======= Fin Section Avis Clients ======= -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nous Contacter</h2>
          <p>Un problème avec votre commande ou avec la livraison ? Contactez-nous dès maintenant ! Nos services se chargeront de vous répondre sous 24h ouvrés, du Lundi au Vendredi de 9h00 à 19h et le Samedi de 10h à 18h.</p>
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

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1731.6043288981625!2d5.9388666071762755!3d43.12132994423468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c91b0a6b2cea6f%3A0xa865e0843e39d84e!2sIUT%20MMI!5e0!3m2!1sfr!2sfr!4v1641496230553!5m2!1sfr!2sfr" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact" method="post" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nom & Prénom" required>
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
                <div class="loading">Chargement ...</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a bien été envoyé et sera traité par nos services très prochainement. A bientot !</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<!-- ======= Import du footer======= -->
<?php
include_once('__footer/footer.php');
?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/select-list.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>