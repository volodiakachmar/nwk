<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nashi v Katowice</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Demo project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,500&display=swap" rel="stylesheet">
</head>
<body>

<div class="super_container">
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo"><a href="#">Nashi v Katowice</a></div>
                        <nav class="main_nav" style="margin-left: 200px">
                            <ul>
                                <li class="active"><a href="{{url('praca')}}" style="color:black">РОБОТА</a></li>
                                <li><a href="{{url('places')}}">РАЗВЛЕЧЕНИЯ</a></li>
                                <li><a href="{{url('archive')}}">СТАТЫИ</a></li>
                                <li><a href="{{url('documents')}}">ПОЛЕЗНАЯ ИНФОРМАЦИЯ</a></li>
                                <li><a href="{{url('contact')}}">КОНТАКТ</a></li>
                               <!-- <li><a href="{{url('team')}}">О НАС</a></li>   -->
                            </ul>
                        </nav>
                        <div class="hamburger ml-auto menu_mm">
                            <i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu -->

    <div class="menu flex flex-column align-items-center justify-content-start text-right menu_mm trans_400">
        <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
        <div class="logo menu_mm"><a href="#">Nashi v Katowcie</a></div>
        <div class="search">
        </div>
        <nav class="menu_nav">
            <ul  class="menu_mm">
                <li class="menu_mm"><a href="{{url('praca')}}">РОБОТА</a></li>
                <li class="menu_mm"><a href="{{url('places')}}">РАЗВЛЕЧЕНИЯ</a></li>
                <li class="menu_mm"><a href="{{url('archive')}}">СТАТЫИ</a></li>
                <li class="menu_mm"><a href="{{url('documents')}}">ПОЛЕЗНАЯ ИНФОРМАЦИЯ</a></li>
                <li class="menu_mm"><a href="{{url('contact')}}">КОНТАКТ</a></li>
              <!--  <li class="menu_mm"><a href="{{url('team')}}">О НАС</a></li>   -->
            </ul>
        </nav>
    </div>



        @yield('content_homepage')




    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div style="margin-bottom: 15px;" class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Katowice, Lwowska 8</span>
                            </div>
                        </div>
                    </div>
                    <div style="margin-bottom: 15px; "class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+48 51892212</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>mail@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="https://i.ibb.co/QDy827D/ak-logo.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                    elit,Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 20px;" class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2020, All Right Reserved <a href="#">Nashi v Katowice</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="https://kit.fontawesome.com/b5d9a7d5d7.js" crossorigin="anonymous"></script>
<script src="{{asset('js/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/masonry/masonry.js')}}"></script>
<script src="{{asset('js/js/custom.js')}}"></script>
</body>
</html>
