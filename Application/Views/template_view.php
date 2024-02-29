<!DOCTYPE html>
<html lang="en">

<head>

    <title>Soft Landing Page by Tooplate</title>
    <!--
        Template 2106 Soft Landing http://www.tooplate.com/view/2106-soft-landing
    -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="team" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="/css/tooplate-style.css">

</head>

<body>

    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="/" class="navbar-brand">Soft Landing</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/" class="smoothScroll">HOME</a></li>
                    <li><a href="/about" class="smoothScroll">ABOUT US</a></li>
                    <li><a href="/pricing" class="smoothScroll">PRICING</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Say hello - <span>info@soft.co</span></a></li>
                </ul>
            </div>

        </div>
    </section>

    <!-- ++++++++++++++ ПОДКЛЮЧЕНИЕ ОСНОВНОГО КОНТЕНТА СТРАНИЦЫ ++++++++++++++ -->

    <?php
        include "{$content_view}";
    ?>

    <!-- ++++++++++++++ ПОДКЛЮЧЕНИЕ ОСНОВНОГО КОНТЕНТА СТРАНИЦЫ ++++++++++++++ -->

    <!-- FOOTER -->
    <footer id="footer" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="copyright-text col-md-12 col-sm-12">
                    <div class="col-md-6 col-sm-6">
                        <p>Copyright &copy; 2018 Company Name - Design:
                            <a rel="nofollow" href="http://tooplate.com">Tooplate</a>
                        </p>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <ul class="social-icon">
                            <li><a  class="fa fa-facebook-square" attr="facebook icon"></a></li>
                            <li><a  class="fa fa-twitter"></a></li>
                            <li><a  class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/custom.js"></script>

</body>

</html>