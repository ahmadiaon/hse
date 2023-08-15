<!DOCTYPE html>
<html>

<head>
    <title>Conquer</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="single-page-nav sticky-wrapper" id="tmNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#section1">Induksi</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="section1">
        <header id="header-area" class="intro-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="header-content">
                            <h1>HSE</h1>
                            <h4>MITRA BARITO GROUP</h4>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div id="section2">
        <!-- Start Feature Area -->
        <section id="feature-area" class="about-section">
            <div class="container">
                <div class="row text-center inner">
                    <div class="col-sm-4">
                        <div class="feature-content">
                            <img src="img/1-1.jpg" alt="Image">
                            <h2 class="feature-content-title green-text">Induksi / Reinduksi</h2>
                            <p class="feature-content-description">Induksi yang diperuntukan kepada Visitor, karyawan baru bergabung dan karyawan sekembali dari cuti
                            </p>
                            <a href="https://forms.gle/Pe5y71p4izKF9t4n6" class="feature-content-link green-btn">Ikuti Induksi</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="feature-content">
                            <img src="img/1-2.jpg" alt="Image">
                            <h2 class="feature-content-title blue-text">Environment Induksi</h2>
                            <p class="feature-content-description">Induksi mengenai Environment atau lingkungan yang diperuntukan untuk karyawan yang lingkup pekerjaannya mengenai environment</p>
                            <a href="https://forms.gle/Y3VwUF6BQkwpatJg9" class="feature-content-link blue-btn">Ikuti Induksi</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="feature-content">
                            <img src="img/1-3.jpg" alt="Image">
                            <h2 class="feature-content-title red-text">KIMPER Induksi</h2>
                            <p class="feature-content-description">Induksi mengenai tata cara berkendara, ditunjukan kepada karyawan yang akan mengendarai mesin atau kendaraan dan yang akan membuat atau memperpanjang KIMPER
                            </p>
                            <a href="https://forms.gle/DsdvwezkRQ2sjtzE8" class="feature-content-link red-btn">Ikuti Induksi</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Feature Area -->

        <!-- Start Blog Area -->
        
        <!-- End Blog Area -->
    </div>
    
    
   

    <!-- Start Footer Area -->
    <footer id="footer-area">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <div class="footer-content">
                        <h1>HSE Mitra Barito Group</h1>
                        <p>“Conquer is free Bootstrap template from templatemo website.
                            <br>No backlink is required to use this layout.”
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="copy">Copyright © 2084 Your Company Name

                        | Design: templatemo</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->

    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script> <!-- https://github.com/markgoodyear/scrollup -->
    <script src="js/jquery.singlePageNav.min.js"></script> <!-- https://github.com/ChrisWojcik/single-page-nav -->
    <script src="js/parallax.js-1.3.1/parallax.js"></script> <!-- http://pixelcog.github.io/parallax.js/ -->
    <script>
        // HTML document is loaded. DOM is ready.
        $(function() {

            // Parallax
            $('.intro-section').parallax({
                imageSrc: 'img/bg-1.jpg',
                speed: 0.2
            });
            $('.services-section').parallax({
                imageSrc: 'img/bg-2.jpg',
                speed: 0.2
            });
            $('.contact-section').parallax({
                imageSrc: 'img/bg-3.jpg',
                speed: 0.2
            });

            // jQuery Scroll Up / Back To Top Image
            $.scrollUp({
                scrollName: 'scrollUp', // Element ID
                scrollDistance: 300, // Distance from top/bottom before showing element (px)
                scrollFrom: 'top', // 'top' or 'bottom'
                scrollSpeed: 1000, // Speed back to top (ms)
                easingType: 'linear', // Scroll to top easing (see http://easings.net/)
                animation: 'fade', // Fade, slide, none
                animationSpeed: 300, // Animation speed (ms)		        
                scrollText: '', // Text for element, can contain HTML		        
                scrollImg: true // Set true to use image		        
            });

            // ScrollUp Placement
            $(window).on('scroll', function() {

                // If the height of the document less the height of the document is the same as the
                // distance the window has scrolled from the top...
                if ($(document).height() - $(window).height() === $(window).scrollTop()) {

                    // Adjust the scrollUp image so that it's a few pixels above the footer
                    $('#scrollUp').css('bottom', '80px');

                } else {
                    // Otherwise, leave set it to its default value.
                    $('#scrollUp').css('bottom', '30px');
                }
            });

            $('.single-page-nav').singlePageNav({
                offset: $('.single-page-nav').outerHeight(),
                speed: 1500,
                filter: ':not(.external)',
                updateHash: true
            });

            $('.navbar-toggle').click(function() {
                $('.single-page-nav').toggleClass('show');
            });

            $('.single-page-nav a').click(function() {
                $('.single-page-nav').removeClass('show');
            });

        });
    </script>
</body>

</html>
