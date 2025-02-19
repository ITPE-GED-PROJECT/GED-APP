<!doctype html>
<html lang="en">


<!-- Mirrored from html-template.spider-themes.net/docy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Apr 2022 14:58:27 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../../../assetsDossier/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../assetsDossier/assetsClient/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assetsDossier/assetsClient/slick/slick.css">
    <link rel="stylesheet" href="../../../assetsDossier/assetsClient/slick/slick-theme.css">
    <!-- icon css-->
    <link rel="stylesheet" href="../../../assetsDossier/assetsClient/elagent-icon/style.css">
    <link rel="stylesheet" href="../../../assetsDossier/assetsClient/niceselectpicker/nice-select.css">
    <link rel="stylesheet" href="../../../assetsDossier/assetsClient/animation/animate.css">
    <link rel="stylesheet" href="../../../assetsDossier/assetsClient/mcustomscrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../../../assetsDossier/css/style-main.css">
    <link rel="stylesheet" href="../../../assetsDossier/css/responsive.css">
    <title>@yield('title')</title>
</head>

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="../../../assetsDossier/img/spinner_logo.png" alt="">
                    <h4><span>Doc</span>y</h4>
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <nav class="navbar navbar-expand-lg menu_one menu_purple sticky-nav">
            <div class="container">
                <a class="navbar-brand header_logo" href="index.html">
                    <img class="first_logo sticky_logo" src="../../../assetsDossier/img/logoimg/logo.png"
                        srcset="../../../assetsDossier/img/logo-2x.png 2x" alt="logo">
                    <img class="white_logo main_logo" src="../../../assetsDossier/img/logo-w.png"
                        srcset="../../../assetsDossier/img/logo-w2x.png 2x" alt="logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="menu_toggle">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="hamburger-cross">
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu ml-auto">
                        <li class="nav-item dropdown submenu active">
                            <a href="index.html" class="nav-link dropdown-toggle">Home</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item active"><a href="index.html" class="nav-link">Creative Helpdesk</a>
                                </li>
                                <li class="nav-item"><a href="index-multi.html" class="nav-link">Multi Helpdesk</a></li>
                                <li class="nav-item"><a href="index-classic.html" class="nav-link">Classic Helpdesk</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu mega_menu tab-demo">
                            <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Docs</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-lg-5 tabHeader">
                                            <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                                aria-orientation="vertical">
                                                <li class="nav-item active">
                                                    <a class="nav-link" id="v-pills-doc-tab" data-toggle="pill"
                                                        href="#v-pills-doc" role="tab" aria-controls="v-pills-doc"
                                                        aria-selected="true">Doc Archives</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-code-tab" data-toggle="pill"
                                                        href="#v-pills-code" role="tab" aria-controls="v-pills-code"
                                                        aria-selected="false">Elements</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-layout-tab" data-toggle="pill"
                                                        href="#v-pills-layout" role="tab" aria-controls="v-pills-layout"
                                                        aria-selected="false">Layouts</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-tour-tab" data-toggle="pill"
                                                        href="#v-pills-tour" role="tab" aria-controls="v-pills-tour"
                                                        aria-selected="false">Reference</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-content-tab" data-toggle="pill"
                                                        href="#v-pills-content" role="tab"
                                                        aria-controls="v-pills-content"
                                                        aria-selected="false">Content</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-pages-tab" data-toggle="pill"
                                                        href="#v-pills-pages" role="tab" aria-controls="v-pills-pages"
                                                        aria-selected="false">Other Pages</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="tab-content tabContent" id="v-pills-tabContent">
                                                <div class="tab-pane fade active show" id="v-pills-doc" role="tabpanel"
                                                    aria-labelledby="v-pills-doc-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li> <a href="doc-main.html"> Doc Topics </a> </li>
                                                            <li> <a href="archive-doc-single.html"> Single Product </a>
                                                            </li>
                                                            <li> <a href="archive-doc-multi.html"> Multi Products </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="doc-main.html">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="doc-main.html">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-code" role="tabpanel"
                                                    aria-labelledby="v-pills-code-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li><a href="doc-element-tab.html">Tabs</a></li>
                                                            <li><a href="doc-element-accordion.html">Accordion</a></li>
                                                            <li><a href="doc-element-notice.html">Notice</a></li>
                                                            <li><a href="doc-content-tables.html">Tables</a></li>
                                                        </ul>
                                                        <ul class="list-unstyled tab_list">
                                                            <li><a href="doc-element-hotspots.html">Image Hotspots</a>
                                                            </li>
                                                            <li><a href="doc-element-code.html">Source Code</a></li>
                                                            <li><a href="doc-element-lightbox.html">Image Lightbox</a>
                                                            </li>
                                                            <li><a href="doc-ref-cheatsheet.html">Cheatsheet</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="doc-main.html">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-layout" role="tabpanel"
                                                    aria-labelledby="v-pills-layout-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li><a href="doc-element-hotspots.html">Left Sidebar</a>
                                                            </li>
                                                            <li><a href="doc-content-video.html">Full-width</a></li>
                                                            <li><a href="doc-layout-banner-gradient.html">Gradient
                                                                    Banner</a></li>
                                                            <li><a href="doc-layout-banner-empty.html">Without
                                                                    Banner</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="#">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-tour" role="tabpanel"
                                                    aria-labelledby="v-pills-tour-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list w_100">
                                                            <li><a href="doc-ref-cheatsheet.html">Cheatsheet</a></li>
                                                            <li><a href="doc-ref-footnote.html">Footnotes</a></li>
                                                            <li><a href="doc-tour.html">Interface Tour</a></li>
                                                            <li><a href="doc-ref-can-use.html">Can I Use</a></li>
                                                            <li><a href="doc-content-tooltip.html">Tooltips &
                                                                    Direction</a></li>
                                                            <li><a href="doc-ref-shortcuts.html">Keyboard Shortcuts</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="#">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-content" role="tabpanel"
                                                    aria-labelledby="v-pills-content-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li><a href="doc-content-image.html">Image</a></li>
                                                            <li><a class="active"
                                                                    href="doc-content-tables.html">Tables</a></li>
                                                            <li><a href="doc-content-video.html">Video</a></li>
                                                            <li><a href="typography.html">Typography</a></li>
                                                            <li><a href="doc-content-tooltip.html">Tooltips &
                                                                    Direction</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="#">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-pages" role="tabpanel"
                                                    aria-labelledby="v-pills-pages-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li> <a href="onepage.html">Onepage</a> </li>
                                                            <li> <a href="doc-main.html">Doc Topics</a></li>
                                                            <li> <a href="doc-tour.html">Cheatsheet</a> </li>
                                                            <li> <a href="doc-changelog.html">Changelog</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="doc-main.html">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="onepage.html" class="nav-link">Onepage Doc</a></li>
                                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                                <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
                                <li class="nav-item"><a href="404-error.html" class="nav-link">404 Error</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="forums.html" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Forum
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="forums.html" class="nav-link">Forums Root</a></li>
                                <li class="nav-item"><a href="forum-topics.html" class="nav-link">Forum Topics</a></li>
                                <li class="nav-item"><a href="forum-single.html" class="nav-link">Topic Details</a></li>
                                <li class="nav-item"><a href="forum-profile.html" class="nav-link">User Profile</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Blog
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                                <li class="nav-item"><a href="blog-grid-two.html" class="nav-link">Blog Grid Two</a>
                                </li>
                                <li class="nav-item"><a href="blog-list.html" class="nav-link">Blog List</a></li>
                                <li class="nav-item"><a href="blog-single.html" class="nav-link">Blog Details</a></li>
                                <li class="nav-item"><a href="blog-single2.html" class="nav-link">Blog Details Two</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="right-nav">
                        <a class="nav_btn" href="#">Free Trail</a>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
        <footer class="doc_footer_area">
            <div class="doc_footer_top bg-transparent">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="f_widget doc_about_widget wow fadeInUp" data-wow-delay="0.2s">
                                <a href="#">
                                    <img src="../../../assetsDossier/img/logo.png" srcset="img/logo-2x.png 2x" alt="">
                                </a>
                                <p>I’m available for commissions and collaborations, and i’m excited to hear from
                                    you
                                    about
                                    new projects.!!</p>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_vimeo"></i></a></li>
                                    <li><a href="#"><i class="social_linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="f_widget doc_service_list_widget pl-30 wow fadeInUp" data-wow-delay="0.3s">
                                <h3 class="f_title_two">Solutions</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#"><img src="../../../assetsDossier/img/new/smile2.png" alt="">Help
                                            Docs</a></li>
                                    <li><a href="#"><img src="../../../assetsDossier/img/new/doc2.png"
                                                alt="">Docbuzz</a></li>
                                    <li><a href="#"><img src="../../../assetsDossier/img/new/house2.png" alt="">User
                                            Frontend</a>
                                    </li>
                                    <li><a href="#"><img src="../../../assetsDossier/img/new/bag2.png"
                                                alt="">Lightbox</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget doc_service_list_widget pl-100 wow fadeInUp" data-wow-delay="0.4s">
                                <h3 class="f_title_two">Support</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">Help Desk</a></li>
                                    <li><a href="#">Knowledge Base</a></li>
                                    <li><a href="#">Live Chat</a></li>
                                    <li><a href="#">Integrations</a></li>
                                    <li><a href="#">Reports</a></li>
                                    <li><a href="#">Messages</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget doc_service_list_widget pl-70 wow fadeInUp" data-wow-delay="0.5s">
                                <h3 class="f_title_two">Company</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Partners</a></li>
                                    <li><a href="#">Careers</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="doc_footer_bottom">
                <div class="container d-flex justify-content-between">
                    <ul class="doc_footer_menu list-unstyled wow fadeInUp" data-wow-delay="0.2s">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Latest Projects</a></li>

                    </ul>
                    <p class="wow fadeInUp" data-wow-delay="0.3s">© 2021 All Rights Reserved Design by
                        <span>Spider-themes</span>
                    </p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../../assetsDossier/js/jquery-3.5.1.min.js"></script>
    <script src="../../../assetsDossier/assetsClient/bootstrap/js/popper.min.js"></script>
    <script src="../../../assetsDossier/assetsClient/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../assetsDossier/js/pre-loader.js"></script>
    <script src="../../../assetsDossier/assetsClient/slick/slick.min.js"></script>
    <script src="../../../assetsDossier/js/jquery.parallax-scroll.js"></script>
    <script src="../../../assetsDossier/assetsClient/niceselectpicker/jquery.nice-select.min.js"></script>
    <script src="../../../assetsDossier/assetsClient/wow/wow.min.js"></script>
    <script src="../../../assetsDossier/assetsClient/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../../assetsDossier/assetsClient/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="../../../assetsDossier/js/plugins.js"></script>
    <script src="../../../assetsDossier/assetsClient/unpkg.com/ionicons%405.4.0/dist/ionicons.js"></script>
    <script src="../../../assetsDossier/js/main.js"></script>
</body>

<!-- Mirrored from html-template.spider-themes.net/docy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Apr 2022 14:59:05 GMT -->

</html>