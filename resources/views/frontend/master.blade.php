<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
<head>
    <title>@yield('title')</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no"><link rel='shortcut icon' href='{{asset('frontend/assets/')}}/images/ico.png' type='image/x-icon' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRaleway:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">
    <link property="stylesheet" rel='stylesheet' id='charity_is_hope-font-WCManoNegraBta-style-css' href='{{asset('frontend/assets/')}}/css/font-face/WCManoNegraBta/stylesheet.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='charity_is_hope-fontello-style-css' href='{{asset('frontend/assets/')}}/css/fontello/css/fontello.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='rs-plugin-settings-css' href='{{asset('frontend/assets/')}}/js/vendor/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='essential-grid-plugin-settings-css' href='{{asset('frontend/assets/')}}/js/vendor/plugins/essential-grid/public/assets/css/settings.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='charity_is_hope-main-style-css' href='{{asset('frontend/assets/')}}/css/style.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='charity_is_hope-main-style-inline-css' href='{{asset('frontend/assets/')}}/css/global.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='charity_is_hope-animation-style-css' href='{{asset('frontend/assets/')}}/js/vendor/fw/css/core.animation.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='charity_is_hope-shortcodes-style-css' href='{{asset('frontend/assets/')}}/js/vendor/shortcodes/theme.shortcodes.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='charity_is_hope-plugin.tribe-events-style-css' href='{{asset('frontend/assets/')}}/css/plugin.tribe-events.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='charity_is_hope-plugin.donations-style-css' href='{{asset('frontend/assets/')}}/css/plugin.donations.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='charity_is_hope-responsive-style-css' href='{{asset('frontend/assets/')}}/css/responsive.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='charity_is_hope-responsive-style-css' href='{{asset('frontend/assets/')}}/css/nivo-slider.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='charity_is_hope-responsive-style-css' href='{{asset('frontend/assets/')}}/css/nevo-default.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='mediaelement-css' href='{{asset('frontend/assets/')}}/js/vendor/mediaelement/mediaelementplayer.min.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx-donations-style-css'  href='{{asset('frontend/assets/')}}/js/vendor/plugins/trx_donations/trx_donations.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='charity_is_hope-messages-style-css' href='{{asset('frontend/assets/')}}/js/vendor/fw/js/core.messages/core.messages.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='charity_is_hope-swiperslider-style-css' href='{{asset('frontend/assets/')}}/js/vendor/fw/js/swiper/swiper.css' type='text/css' media='all' />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!--Resources files-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
          integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
          crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/lightbox.min.css">

    @yield('costomcss')
</head>
<body class="home page page-template-default body_style_wide top_style_header_1 body_filled article_style_stretch layout_single-standard template_single-standard scheme_original top_panel_show top_panel_above sidebar_hide sidebar_outer_hide">
<a id="toc_home" class="sc_anchor" title="Home" data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site" data-icon="icon-home" data-url="http://charity-is-hope.themerex.net/" data-separator="yes"></a>
<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>

        <div class="top_panel_fixed_wrap"></div>
        <header class="top_panel_wrap top_panel_style_1 scheme_original">
            <div class="top_panel_wrap_inner top_panel_inner_style_1 top_panel_position_above">
                <div class="top_panel_middle">
                    <div class="content_wrap">
                        <div class="contact_logo">
                            <div class="logo">
                                <a href="{{route('home')}}"><img src="{{asset('frontend/assets/images')}}/logo.png" class="logo_main" alt="" width="118" height="69"></a>
                            </div>
                        </div>
                        <div class="contact_button top-menu-wrap">
                            <a class="top-menu-list" href="{{route('donate')}}">Donate</a><a class="top-menu-list" href="{{route('becomevolunteer')}}">Become Volunteer</a>
                            <a class="top-menu-list" href="{{route('about')}}">About US</a><a class="top-menu-list" href="contact"> Contact US</a>
                        </div>
                        <div class="contact_socials">
                            <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_twitter"><span class="icon-twitter"></span></a></div>
                                <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_facebook"><span class="icon-facebook"></span></a></div>
                                <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_vine"><span class="icon-vine"></span></a></div>
                                <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_youtube"><span class="icon-youtube"></span></a></div>
                                <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_pinterest-circled"><span class="icon-pinterest-circled"></span></a></div>
                            </div>
                        </div>
                       <div class="top_panel_top_menu_list">

                       </div>
                    </div>
                </div>
                <div class="top_panel_bottom">
                    <div class="content_wrap clearfix">
                        <nav class="menu_main_nav_area menu_hover_fade">
                            <ul id="menu_main" class="menu_main_nav">
                                <li class="menu-item current-menu-item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children"><a href="{{route('home')}}"><span>Home</span></a>

                                </li>
                                <li class="menu-item menu-item-has-children"><a href="{{route('talent')}}"><span>Talent </span></a></li>
                                <li class="menu-item menu-item-has-children"><a href="{{route('accivment')}}"><span>Achievement</span></a></li>
                                <li class="menu-item menu-item-has-children"><a href="{{route('gellary')}}"><span>Gallery</span></a></li>
                                <li class="menu-item menu-item-has-children menu-item-45"><a href="{{route('publication')}}"><span>Publication</span></a></li>
                                <li class="menu-item menu-item-has-children"><a href="{{route('jobs')}}"><span>Jobs</span></a>
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li class="menu-item"><a href="our-causes.html"><span>Our Causes</span></a></li>--}}
{{--                                        <li class="menu-item"><a href="single-cause.html"><span>Single Cause</span></a></li>--}}
{{--                                    </ul>--}}
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="{{route('blog')}}"><span>Blog</span></a></li></li>
                                <li class="menu-item"><a href="{{route('shop')}}"><span>Shop</span></a></li>
                                <li class="menu-item"><a href="#"><span>User</span></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{route('profile')}}"><span>Profile</span></a></li>
                                        <li class="menu-item"><a href="{{route('login')}}"><span>Login</span></a></li>
                                        <li class="menu-item"><a href="{{route('register')}}"><span>Register</span></a></li>
                                        <li class="menu-item"><a href="{{route('checkout')}}"><span>Checkout</span></a></li>
                                    </ul>
                                </li>


                            </ul>
                        </nav>
                        <div class="search_wrap search_style_fullscreen search_state_closed">
                            <div class="search_form_wrap">
                                <form role="search" method="get" class="search_form" action="#">
                                    <button type="submit" class="search_submit icon-search" title="Open search"></button>
                                    <input type="text" class="search_field" placeholder="Search" value="" name="s" />
                                    <a class="search_close icon-cancel"></a>
                                </form>
                                <div class="shop_ico-nav">
                                    <a href="{{route('cart')}}"><img src="{{asset('frontend/assets/images')}}/shop_ico.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="header_mobile" class="header_mobile">
            <div class="content_wrap">
                <div class="menu_button icon-menu"></div>
                <div class="logo">
                    <a href="{{route('home')}}"><img src="{{asset('frontend/assets/images')}}/logo.png" class="logo_main" alt="" width="118" height="69"></a>
                </div>
            </div>
            <div class="side_wrap">
                <div class="close">Close</div>
                <div class="panel_top">
                    <nav class="menu_main_nav_area">
                        <ul id="menu_mobile" class="menu_main_nav">
                            <li class="menu-item current-menu-item menu-item-home current-menu-ancestor current-menu-parent "><a href="{{route('home')}}"><span>Home</span></a></li>
                            <li class="menu-item "><a href="{{route('talent')}}"><span>Talent</span></a></li>
                            <li class="menu-item  menu-item-45"><a href="{{route('accivment')}}"><span>Accivment</span></a></li>
                            <li class="menu-item "><a href="{{route('gellary')}}"><span>Gallery</span></a></li>
                            <li class="menu-item "><a href="{{route('publication')}}"><span>Publication</span></a></li>
                            <li class="menu-item "><a href="{{route('jobs')}}"><span>Jobs</span></a></li>
                            <li class="menu-item "><a href="{{route('blog')}}"><span>Blog</span></a></li>
                            <li class="menu-item"><a href="{{route('shop')}}"><span>Shop</span></a></li>
                            <li class="menu-item menu-item-has-children"><a href="#"><span>User</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{route('profile')}}"><span>Profile</span></a></li>
                                    <li class="menu-item"><a href="{{route('login')}}"><span>Login</span></a></li>
                                    <li class="menu-item"><a href="{{route('register')}}"><span>Register</span></a></li>
                                    <li class="menu-item"><a href="{{route('checkout')}}"><span>Checkout</span></a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="{{route('contact')}}"><span>Contact Us</span></a></li>
                            <li class="menu-item"><a href="{{route('about')}}"><span>About Us</span></a></li>
                        </ul>
                    </nav>

                    <div class="search_wrap search_style_ search_state_fixed search_ajax">
                        <div class="search_form_wrap mobail-search-wrap">
                            <form role="search" method="get" class="search_form" action="#">
                                <button type="submit" class="search_submit icon-search" title="Start search"></button>
                                <input type="text" class="search_field" placeholder="Search" value="" name="s" /></form>
                        </div>
                        <div class="search_results widget_area scheme_original">
                            <a class="search_results_close icon-cancel"></a>
                            <div class="search_results_content"></div>
                        </div>
                    </div>
                </div>
                <div class="contact_socials">
                    <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                        <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_twitter"><span class="icon-twitter"></span></a></div>
                        <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_facebook"><span class="icon-facebook"></span></a></div>
                        <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_vine"><span class="icon-vine"></span></a></div>
                        <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_youtube"><span class="icon-youtube"></span></a></div>
                        <div class="sc_socials_item"><a href="#" target="_blank" class="social_icons social_pinterest-circled"><span class="icon-pinterest-circled"></span></a></div>
                    </div>
                </div>
            </div>
            <div class="mask"></div>
        </div>

    @yield('content')



<!-- Footer Section Start -->

<section class="site-footer mt-4">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget mb-40 footer-widget__about">
                        <a href="index.html" aria-label="logo image">
                            <img src="{{asset('frontend/assets/images')}}/logo.png" class="footer-widget__logo" width="101" alt="">
                        </a>
                        <p>Lorem ipsum dolor sit amet consect etur adi pisicing elit sed.</p>
                        <ul class="list-unstyled footer-widget__contact ">
                            <li class="mb-3"><a href="#"><i class="fas fa-phone-volume"></i>+880255098355</a></li>
                            <li class="mb-3"><a href="#"><i class="far fa-envelope"></i>needhelp@azino.com</a></li>
                            <li class="d-flex justify-content-center"><a href="#"><i class="fas fa-map-marker-alt"></i>House No 06, R/A Rd No. 13,Dhaka 1229</a></li>
                        </ul><!-- /.footer-widget__contact -->
                    </div><!-- /.footer-widget footer-widget__about -->
                </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget footer-widget__link mb-40">
                        <h3 class="footer-widget__title">Explore</h3><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__link-list">
                            <li><a href="causes.html">Our Causes</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="news.html">New Campaign</a></li>
                            <li><a href="events.html">Upcoming Events</a></li>
                            <li><a href="about.html">Site Map</a></li>
                            <li><a href="contact.html">Help</a></li>
                            <li><a href="causes.html">Donate</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="contact.html">Terms</a></li>
                        </ul><!-- /.footer-widget__link-list -->
                    </div><!-- /.footer-widget footer-widget__link -->
                </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget mb-40 footer-widget__blog">
                        <h3 class="footer-widget__title">Blog</h3><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__blog">
                            <li>
                                <img src="{{asset('frontend/assets/images')}}/mission.jpg" alt="">
                                <p>22 May, 2020</p>
                                <h3><a href="news-details.html">You can help the poor in need</a></h3>
                            </li>
                            <li>
                                <img src="{{asset('frontend/assets/images')}}/vision.jpg" alt="">
                                <p>22 May, 2020</p>
                                <h3><a href="news-details.html">Rise fund for Healthy Food</a></h3>
                            </li>
                        </ul><!-- /.footer-widget__blog -->
                    </div><!-- /.footer-widget footer-widget__blog -->
                </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget mb-40 footer-widget__newsletter">
                        <h3 class="footer-widget__title">Newletter</h3><!-- /.footer-widget__title -->
                        <p>Signup now to get daily latest news
                            &amp; updates from us</p>
                        <form data-url="https://xyz.us18.list-manage.com/subscribe/post?u=20e91746ef818cd941998c598&amp;id=cc0ee8140e" class="footer-widget__newsletter-form mc-form" novalidate="true">
                            <label for="mc-email" class="sr-only">Email Address</label>
                            <input type="email" name="EMAIL" id="mc-email" class="dynamic-radius" placeholder="Email address" style="border-bottom-left-radius: 31.5px; border-top-left-radius: 31.5px;">
                            <div class="footer-widget__newsletter-btn-wrap d-flex justify-content-end">
                                <button type="submit" class="thm-btn dynamic-radius" style="border-bottom-left-radius: 31.5px; border-top-left-radius: 31.5px;">Subscribe Now</button>
                            </div><!-- /.footer-widget__newsletter-btn-wrap -->
                            <!-- /.thm-btn -->
                        </form><!-- /.footer-widget__newsletter-form -->
                        <div class="mc-form__response"></div><!-- /.mc-form__response -->
                    </div><!-- /.footer-widget footer-widget__newsletter -->
                </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-footer -->
    <div class="footer-bottom">
        <div class="container">
           <div class="footer-social-copyright">
               <p>© Copyright 2021 By Serve Human Foundation</p>
               <div class="footer-social">
                   <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                   <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                   <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                   <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
               </div><!-- /.footer-social -->

           </div>

        </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
</section>








<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
<div class="custom_html_section"></div>
<script src="{{asset('frontend')}}/assets/js/lightbox-plus-jquery.min.js"></script>
<script type='text/javascript' src='{{asset('frontend/assets/')}}/js/vendor/jquery.js'></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type='text/javascript' src='{{asset('frontend/assets/')}}/js/vendor/jquery.nivo.slider.js'></script>
<script type='text/javascript' src='{{asset('frontend/assets/')}}/js/vendor/jquery-migrate.min.js'></script>
<script type='text/javascript' src='{{asset('frontend/assets/')}}/js/vendor/fw/js/superfish.js'></script>
<script type='text/javascript' src='{{asset('frontend/assets/')}}/js/vendor/fw/js/core.utils.js'></script>
<script type='text/javascript' src='{{asset('frontend/assets/')}}/js/vendor/fw/js/core.init.js'></script>
<script type='text/javascript' src='{{asset('frontend/assets/')}}/js/vendor/fw/js/swiper/swiper.js'></script>
<script type='text/javascript' src='{{asset('frontend/assets/')}}/js/vendor/shortcodes/theme.shortcodes.js'></script>
<script type='text/javascript' src='{{asset('frontend/assets/')}}/js/vendor/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
<script type="text/javascript" src="{{asset('frontend/assets/')}}/js/vendor/plugins/revslider/public/assets/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="{{asset('frontend/assets/')}}/js/vendor/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="{{asset('frontend/assets/')}}/js/vendor/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="{{asset('frontend/assets/')}}/js/ve{{asset('frontend/assets/')}}/ndor/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script type='text/javascript' src='{{asset('frontend/assets/')}}/js/vendor/plugins/isotope/dist/isotope.pkgd.min.js'></script>
<script type='text/javascript' src='{{asset('frontend/assets/')}}/js/vendor/plugins/essential-grid/public/assets/js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='{{asset('frontend/assets/')}}/js/custom/theme.init.js'></script>
<script type='text/javascript' src='{{asset('frontend/assets/')}}/js/custom/global.js'></script>
<script type='text/javascript' src='{{asset('frontend/assets/')}}/js/custom/rev_slider_1_1.js'></script>
<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="{{asset('frontend')}}/assets/js/app.js"></script>
<script src="{{asset('frontend')}}/assets/js/partnerscript.js"></script>



<script type="text/javascript">
    $(window).on('scroll',function(){
        var scroll = $(window).scrollTop();
        if(scroll<300){
            $("#header_mobile").removeClass("mobailsticky");
        }else{
            $("#header_mobile").addClass("mobailsticky");
        }
    });

</script>
@yield('costomjs')
</body>
</html>

