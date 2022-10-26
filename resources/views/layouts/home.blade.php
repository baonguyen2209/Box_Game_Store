<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!--
    - BoxGame Icon
  -->
    <link rel="shortcut icon" href="{{ asset('assets_home/images/boxlogo1.png') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('assets_home/css/style.css') }}">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    @yield('header-specific')
</head>

<body id="top">

    <!--
    - #HEADER
  -->

    <header class="header">

        <div class="header-top" data-header>
            <div class="container">

                <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                    <span class="line line-1"></span>
                    <span class="line line-2"></span>
                    <span class="line line-3"></span>
                </button>



                <div class="header-left">
                    <a href="#" class="logo">
                        <img src="{{ asset('assets_home/images/boxlogo.png') }}" alt="">
                    </a>
                    <ul class="header-left-list">
                        <li>
                            <a href="/" class="hll-link">STORE</a>
                        </li>
                        <li>
                            <a href="#faq" class="hll-link">FAQ</a>
                        </li>
                        <li>
                            <a href="#help" class="hll-link">HELP</a>
                        </li>
                        <li>
                            <a href="#contactus" class="hll-link">CONTACT US</a>
                        </li>
                    </ul>
                </div>

                <div class="header-actions">

                    <button class="header-action-btn btn-language">
                        <ion-icon name="earth"></ion-icon>
                        <ul class="languages-list">
                            <li>
                                <a href="" class="laguages-list-link first">Vietnamese</a>
                            </li>
                            <li>
                                <a href="" class="laguages-list-link">Enghlish</a>
                            </li>
                            <li>
                                <a href="" class="laguages-list-link">Español (Spain)</a>
                            </li>
                            <li>
                                <a href="" class="laguages-list-link">Italiano</a>
                            </li>
                            <li>
                                <a href="" class="laguages-list-link">Français (French)</a>
                            </li>
                        </ul>
                    </button>

                    <button class="header-action-btn btn-user-login">
                        <ion-icon name="person"></ion-icon>
                        <span>sign in</span>
                        <ul class="user-list">
                            <li>
                                <a href="" class="user-list-link first">account</a>
                            </li>
                            <li>
                                <a href="" class="user-list-link">wish list</a>
                            </li>
                            <li>
                                <a href="" class="user-list-link">sign out</a>
                            </li>
                        </ul>
                    </button>

                    <button class="header-action-btn btn-user-register">
                        REGISTER
                    </button>

                </div>



                <nav class="navbar">
                    <ul class="navbar-list">
                        <li>
                            <form class="input-wrapper">
                                <input type="search" name="search" placeholder="Search a game ..."
                                    class="search-field">

                                <button class="search-submit" aria-label="search">
                                    <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
                                </button>
                            </form>
                        </li>
                        <li>
                            <a href="#discover" class="navbar-link">Discover</a>
                        </li>

                        <li>
                            <a href="#collection" class="navbar-link">Browse</a>
                        </li>

                        <li>
                            <a href="#shop" class="navbar-link">News</a>
                        </li>
                    </ul>

                    <ul class="navbar-list">
                        <li>
                            <a href="" class="navbar-link">Wishlist</a>
                        </li>
                        <li>
                            <a href="" class="navbar-link">Cart</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>

    </header>





    <!--
    - #MOBILE NAVBAR
  -->

    <div class="sidebar">
        <div class="mobile-navbar" data-navbar>

            <div class="wrapper">
                <a href="#" class="logo">
                    BOX<span>GAME</span>
                </a>

                <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                    <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                </button>
            </div>

            <ul class="navbar-list">

                <li>
                    <div class="btn-store" onclick="showstorelist()">
                        <span class="store-title">Store</span>

                        <ion-icon name="chevron-down-outline" data-arrow6 class="arrow-genre"></ion-icon>
                    </div>

                    <ul class="store-list" data-store-hide>
                        <li>
                            <a href="#discover" class="store-list-link" data-nav-link>Discover</a>
                        </li>
                        <li>
                            <a href="#browse" class="store-list-link" data-nav-link>Browse</a>
                        </li>
                        <li>
                            <a href="news" class="store-list-link" data-nav-link>News</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#faq" class="navbar-link" data-nav-link>FAQ</a>
                </li>

                <li>
                    <a href="#help" class="navbar-link" data-nav-link>Help</a>
                </li>

                <li>
                    <a href="#contactus" class="navbar-link" data-nav-link>Contact Us</a>
                </li>

                <li class="search-form">
                    <form class="input-wrapper-sidebar">
                        <input type="search" name="search" placeholder="Search a game ..."
                            class="search-field-sidebar">

                        <button class="search-submit-sidebar" aria-label="search">
                            <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
                        </button>
                    </form>
                </li>

            </ul>

        </div>

        <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
    @yield('content')
    <!--
    - #FOOTER
    -->

    <footer class="section footer">
        <div class="container">

            <div class="footer-top">

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Contact Us</p>
                    </li>

                    <li>
                        <a href="" class="footer-link">0393-649-927</a>
                    </li>

                    <li>
                        <a href="https://youtu.be/dQw4w9WgXcQ" class="footer-link">Group 4-T1.2112.E0</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Useful links</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Browse</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">News</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Top Sellers</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Free Game</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Infomation</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Need a Help</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">FAQ</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Terms of Service</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Privacy Policy</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Store Refund Policy </a>
                    </li>

                </ul>

                <div class="footer-list">

                    <p class="newsletter-title">Send emails</p>

                    <p class="newsletter-text">
                        Enter your email below to be the first to know about new collections and games.
                    </p>

                    <form action="" class="newsletter-form">
                        <input type="email" name="email_address" placeholder="Enter your email address" required
                            class="email-field">

                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>

                </div>

            </div>

            <div class="footer-bottom">

                <div class="wrapper">
                    <p class="copyright">
                        &copy; 2022 Box Game
                    </p>

                    <ul class="social-list">

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-youtube"></ion-icon>
                            </a>
                        </li>

                    </ul>
                </div>

                <a href="#" class="logo">
                    <img src="{{ asset('assets_home/images/boxlogo.png') }}" alt="">
                </a>

                <img src="{{ asset('/assets_home/images/pay.png') }}" width="313" height="28"
                    alt="available all payment method" class="w-100">

            </div>

        </div>
    </footer>





    <!--
    - #BACK TO TOP
  -->

    <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
        <ion-icon name="arrow-up" aria-hidden="true" class="icon"></ion-icon>
    </a>


    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!--
    - custom js link
  -->
    <script src="{{ asset('assets_home/js/script.js') }}" defer></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @yield('footer-script')
</body>

</html>
