<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="icon" href="/html/images/hacker.jpg">
    <!-- Author Meta -->
    <meta name="author" content="Cabooshy">
    <!-- Meta Description -->
    <meta name="description" content="I Blog about stuff, tech and games n that">
    <!-- Meta Keyword -->
    <meta name="keywords" content="tech blog games">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Cabooshy's Ramblings</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500" rel="stylesheet">
    <!--
		CSS
		============================================= -->
    <link rel="stylesheet" href="/css/linearicons.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://file.myfontastic.com/PVB44bKCPgt7mzxTGtPdsT/icons.css" rel="stylesheet">
</head>

<body class="dup-body">
    <div class="dup-body-wrap">
        <?php if (login()) { toolbar(); } ?>
        <!-- Start Header Area -->
        <header class="default-header">
            <div class="header-wrap">
                <div class="header-top d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
                    <div class="main-menubar d-flex align-items-center">
                        <nav class="hide">
                            <a href="index.html">Home</a>
                            <a href="../../blog/index.php">The blog bit</a>
                            <a href="elements.html">Games i play</a>
                        </nav>
                        <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area -->
        <!-- Start Banner Area -->
        <section class="banner-area relative">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row fullscreen align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-7 col-sm-8">
                        <div class="banner-content">
                            <h1>Welcome to my personal Rambling page about games and tech and whatever</h1>
                            <p>if you're looking for well constructed reviews, go look at my reviews on steam, they're probs gonna be better than here</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-4">
                        <img src="images/banner.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <div id="outer-wrapper">
            <div id="menu-wrapper">
                <div class="container">
                    <nav id="menu">
                        <?php echo menu() ?>
                        <?php echo search() ?>
                    </nav>
                </div>
            </div>
            <div id="header-wrapper">
                <div class="container">
                    <header id="header">
                        <section id="branding">
                            <?php if (is_index()) { ?>
                            <h1 class="blog-title">
                                <a rel="home" href="<?php echo site_url() ?>">
                                    <?php echo blog_title() ?>
                                </a>
                            </h1>
                            <?php } else { ?>
                            <h2 class="blog-title">
                                <a rel="home" href="<?php echo site_url() ?>">
                                    <?php echo blog_title() ?>
                                </a>
                            </h2>
                            <?php } ?>
                            <div class="blog-tagline">
                                <p>
                                    <?php echo blog_tagline() ?>
                                </p>
                            </div>
                        </section>
                    </header>
                </div>
            </div>
            <!-- About Generic Start -->
            <section class="section-gap studio-area">
                <h3 class="about-title mb-70 text-white">Elaboration about Generic Page</h3>
                <div class="overlay overlay-bg"></div>
                <div class="container border-top-generic">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="studio-thumb">
                                <img src="">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <div class="studio-content">
                                <?php echo content() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Generic Start -->

            <div id="footer-wrapper">
                <div class="container">
                    <footer id="footer">
                        <div class="footer-column">
                            <div class="recent column">
                                <div class="inner">
                                    <h3>Recent Posts</h3>
                                    <?php echo recent_posts() ?>
                                </div>
                            </div>
                            <div class="archive column">
                                <div class="inner">
                                    <h3>Archive</h3>
                                    <?php echo archive_list() ?>
                                </div>
                            </div>
                            <div class="tagcloud column">
                                <div class="inner">
                                    <h3>Tags</h3>
                                    <?php echo tag_cloud() ?>
                                </div>
                            </div>
                            <div class="social column">
                                <div class="inner">
                                    <h3>Follow</h3>
                                    <?php echo social() ?>
                                </div>
                            </div>
                        </div>
                        <div class="copyright">
                            <?php echo copyright() ?>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>
    <script src="/js/jquery.ajaxchimp.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/main.js"></script>

</body>

</html>
