<!-- ======= Footer ======= -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <title></title>
    <style>
        #header {
            height: 74px;
            transition: all 0.5s;
            z-index: 997;
            background: rgba(52, 59, 64, 0.9);
            font-family: "Century Gothic", sans-serif, bold;
            font-weight: bold;
        }

        #header #logo h1 a,
        #header #logo h1 a:hover {
            color: #3fa9f5;
        }

        #header #logo img {
            padding: 0;
            margin: 0;
        }

        #header {
            background: transparent;
            height: 70px;
            transition: all 0.5s;
        }




        /*--------------------------------------------------------------
        # Menu de navigation
        --------------------------------------------------------------*/
        /* Navigation sur PC*/
        .navbar {
            padding: 0;
        }

        .navbar ul {
            margin: 0;
            padding: 0;
            display: flex;
            list-style: none;
            align-items: center;
        }

        .navbar li {
            position: relative;
        }

        .navbar>ul>li {
            white-space: nowrap;
            padding: 9px 0 10px 24px;
        }

        .navbar a,
        .navbar a:focus {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #3fa9f5;
            font-size: 20px;
            padding: 0 4px;
            white-space: nowrap;
            transition: 0.3s;
            letter-spacing: 0.4px;
            position: relative;
            text-transform: uppercase;
        }

        .navbar a i,
        .navbar a:focus i {
            font-size: 12px;
            line-height: 0;
            margin-left: 5px;
        }

        .navbar>ul>li>a:before {
            content: "";
            position: absolute;
            width: 115%;
            height: 65px;
            bottom: -21px;
            left: -8%;
            background-color: #3fa9f5;
            transform: scaleX(0);
            transition: all 0.3s ease-in-out 0s;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            z-index: 0;
        }

        #titles {
            position: relative;
        }

        .navbar a:hover:before,
        .navbar li:hover>a:before,
        .navbar .active:before {
            visibility: visible;
            transform: scaleX(1);
        }

        .navbar a:hover,
        .navbar .active,
        .navbar .active:focus,
        .navbar li:hover>a {
            color: #fff;
        }

        .navbar .dropdown ul {
            display: block;
            position: absolute;
            left: 13px;
            top: calc(100% + 20px);
            margin-top: 15px;
            padding: 10px 0;
            z-index: 50;
            opacity: 0;
            visibility: hidden;
            background: #fff;
            box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
            transition: 0.3s;
            border-radius: 20px;
        }

        .navbar .dropdown ul li {
            min-width: 200px;
        }

        .navbar .dropdown ul a {
            padding: 10px 20px;
            font-size: 14px;
            text-transform: none;
            color: #666666;
        }

        .navbar .dropdown ul a i {
            font-size: 12px;
        }

        .navbar .dropdown ul a:hover,
        .navbar .dropdown ul .active:hover,
        .navbar .dropdown ul li:hover>a {
            color: #2dc997;
        }

        .navbar .dropdown:hover>ul {
            opacity: 1;
            top: 100%;
            visibility: visible;
        }

        .navbar .dropdown .dropdown ul {
            top: 0;
            left: calc(100% - 30px);
            visibility: hidden;
        }

        .navbar .dropdown .dropdown:hover>ul {
            opacity: 1;
            top: 0;
            left: 100%;
            visibility: visible;
        }

        @media (max-width: 1366px) {
            .navbar .dropdown .dropdown ul {
                left: -90%;
            }

            .navbar .dropdown .dropdown:hover>ul {
                left: -100%;
            }
        }
    </style>
</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center" style="background-color: white; border-bottom-left-radius: 40px; border-bottom-right-radius: 40px; box-shadow: 0 6px 20px #0000008f; ">
        <div class="container d-flex justify-content-between align-items-center">

            <div>
                <a href="../index.php">
                    <img src="https://www.sfait.net/images/la-glisse/logo.png" alt="logo-la-glisse" width="40%">
                </a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero"><span id="titles">Accueil</span></a></li>
                    <li class="dropdown"><a href="#"><span id="titles">Vêtements</span> <i class="bi bi-chevron-down" id="titles"></i></a>
                        <ul>
                            <li><a href="#">HOMMES</a></li>
                            <li><a href="#">FEMMES</a></li>
                            <li><a href="#">ENFANTS</a></li>
                            <li id="bon_plan"><a href="#" style=" color: red;">BONS PLANS</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span id="titles">Accessoires</span> <i class="bi bi-chevron-down" id="titles"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#"><span id="titles">PLANCHES</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Snow-Board</a></li>
                                    <li><a href="#">Skate-Board</a></li>
                                    <li><a href="#">Long-Board</a></li>
                                    <li><a href="#">Kite-Surf</a></li>
                                    <li><a href="#">Surf</a></li>
                                    <li><a href="#">Paddle</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span>VOILES</span></a></li>
                            <li><a href="#"><span>PATINS</span></a></li>
                            <li id="bon_plan"><a href="#" style=" color: red;">BONS PLANS</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto " href="#portfolio"><span id="titles"> Tutoriel</span></a></li>
                    <li><a class="nav-link scrollto" href="#team"><span id="titles"> Méteo</span></a></li>

                    <li><a class="nav-link scrollto" href="#contact"><span id="titles"> Contact</span></a></li>
                </ul>
            </nav>
        </div>
    </header>
</body>