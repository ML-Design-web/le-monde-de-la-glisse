<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <a href="http://localhost/le-monde-de-la-glisse/index.html" class="logo-footer"><img
                                src="https://i.imgur.com/PZDTl0m.png"
                                alt="Logo-La-Glisse"
                                class="img-fluid"></a>
                    <p>
                        70 Avenue Roger Devoucoux <br>
                        83000 Toulon<br>
                        France <br><br>
                        <strong>Téléphone:</strong> +33 6 12 34 56 78<br>
                        <strong>Email:</strong> hello@la-glisse.fr<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Liens annexes</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="http://localhost/le-monde-de-la-glisse/">Accueil</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="http://localhost/le-monde-de-la-glisse/controllers/tutoriels.php">Tutoriel</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="http://localhost/le-monde-de-la-glisse/controllers/weather.php">Météo</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="http://localhost/le-monde-de-la-glisse#contact">Nous contacter</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="http://localhost/le-monde-de-la-glisse/controllers/connect.php">Mon espace client</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>La boutique</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="http://localhost/le-monde-de-la-glisse/shop/clothes.php">Vêtements par catégorie</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="http://localhost/le-monde-de-la-glisse/shop/accessories.php">Accessoires par catégorie</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#null">Nos bons plans</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#null">Suivre une commande</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#null">Rétracter une commande</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Ne manquez plus jamais un bon plan !</h4>
                    <p>Inscrivez votre adresse mail et ne ratez pas un seul bon plan.</p>
                    <form method="post">
                        <input type="email" name="email" placeholder="john.doe@domaine.fr"><input type="submit" value="Envoyer">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="copyright-wrap d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright" id="copyright">
                    &copy; Copyright <strong><span>LA GLISSE #DATE#</span></strong>. Tous droits réservés.
                </div>
            </div>

            <div class="me-md-auto text-center text-md-middle">
                <a class="footer-condition" href="#null">Conditions Générales de Vente</a> | <a class="footer-condition" href="#null">Conditions Générales d'Utilisation</a>
            </div>

            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#null" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#null" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#null" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#null" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#null" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

    </div>
</footer><!-- End Footer -->

<script>document.getElementById(`copyright`).innerHTML = document.getElementById(`copyright`).innerHTML.replace(`#DATE#`, new Date().getFullYear());</script>