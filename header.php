<!DOCTYPE html>
<html lang="en">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>Sahara Planner Co. W.L.L. | Home | Event Management | Manpower Supply | Creative Agency</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--====== Iconfont css ======-->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
</head>

<body>
    <!--====== Start Header ======-->
    <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
    <header class="header-area header-area-v1 transparent-header">
        <div class="header-navigation  bg-light bg-shadow">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-6 col-lg-2">
                        <div class="site-branding">
                            <div class="brand-logo">
                                <a href="index.html"><img src="assets/images/logo-1.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-10 ">
                        <div class="nav-menu navbar-dark">
                            <!-- Navbar Close Icon -->
                            <div class="navbar-close ">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <nav class="main-menu ">
                                <ul id="navLink" class="nav  justify-content-end  ">
                                    <li><a class="nav-link   <?= ($activePage == 'index') ? 'active' : ''; ?>" href="index.php">Home</a></li>
                                    <li><a class="nav-link  <?= ($activePage == 'about') ? 'active' : ''; ?>" href="about.php">About</a></li>
                                    <li><a class="nav-link <?= ($activePage == 'services') ? 'active' : ''; ?>" href="services.php">Service</a></li>
                                    <li><a class="nav-link <?= ($activePage == 'ourTeam') ? 'active' : ''; ?>" href="ourTeam.php">Team</a></li>
                                    <li><a class="nav-link <?= ($activePage == 'clients') ? 'active' : ''; ?>" href="clients.php">Clients</a></li>
                                    <li><a class="nav-link <?= ($activePage == 'work') ? 'active' : ''; ?>" href="work.php">Work</a></li>
                                    <li><a class="nav-link <?= ($activePage == 'contact') ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Navbar Toggler -->
                        <div class="navbar-toggler float-end">
                            <span></span><span></span><span></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!--====== End Header ======-->
    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("navLink");
        var btns = header.getElementsByClassName("nav-link");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
    <script src="assets/js/index.js"></script>
</body>

</html>