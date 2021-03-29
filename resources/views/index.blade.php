<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nashi v Katowice</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Demo project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles/places/css/bootstrap.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('favicon.ico') }}" type="image/x-icon"/>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles/footer.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,500&display=swap" rel="stylesheet">
    <style type="text/css">


        /*********footer*******************/
        . kilimanjaro_area {
            position: relative;
            z-index: 1;
        }
        .foo_top_header_one {
            background-color: #15151e;
            color: #fff;
        }
        .section_padding_100_70 {
            padding-top: 100px;
            padding-bottom: 70px;
        }
        .foo_top_header_one {
            color: #fff;
        }.kilimanjaro_part {
             margin-bottom: 30px;
         }
        .foo_top_header_one .kilimanjaro_part > h5 {
            color: #fff;
        }
        .kilimanjaro_part h4, .kilimanjaro_part h5 {
            margin-bottom: 30px;
        }
        .kilimanjaro_single_contact_info > p, .kilimanjaro_single_contact_info > h5, .kilimanjaro_blog_area > a, .foo_top_header_one .kilimanjaro_part > p {
            color: rgba(255,255,255,.5);
        }
        p, ul li, ol li {
            font-weight: 300;
        }
        ul {
            margin: 0;
            padding: 0;
        }
        .kilimanjaro_bottom_header_one {
            background-color: #111;
        }
        .section_padding_50 {
            padding: 50px 0;
        }
        .kilimanjaro_bottom_header_one p {
            color: #fff;
            margin: 0;
        }
        p, ul li, ol li {
            font-weight: 300;
        }
        .kilimanjaro_bottom_header_one a {
            color: inherit;
            font-size: 14px;
        }
        a, h1, h2, h3, h4, h5, h6 {
            font-weight: 400;
        }
        .m-top-15 {
            margin-top: 15px;
        }
        ul {
            margin: 0;
            padding: 0;
        }

        .kilimanjaro_widget > li {
            display: inline-block;
        }
        p, ul li, ol li {
            font-weight: 300;
        }
        ol li, ul li {
            list-style: outside none none;
        }
        .kilimanjaro_widget a {
            border: 1px solid #333;
            border-radius: 6px;
            color: #888;
            display: inline-block;
            font-size: 13px;
            margin-bottom: 4px;
            padding: 7px 12px;
        }
        ul {
            margin: 0;
            padding: 0;
        }
        .kilimanjaro_links a {
            border-bottom: 1px solid #333;

            display: block;
            font-size: 13px;
            margin-bottom: 5px;
            padding-bottom: 10px;
        }
        .kilimanjaro_links a {

            font-size: 13px;
        }
        top-15 {
            margin-top: 15px;
        }
        .foo_top_header_one .kilimanjaro_part > h5 {
            color: #fff;
        }
        .kilimanjaro_part h4, .kilimanjaro_part h5 {
            margin-bottom: 30px;
        }
        .kilimanjaro_social_links > li {
            display: inline-block;
        }
        p, ul li, ol li {
            font-weight: 300;
        }
        .kilimanjaro_social_links a {
            border: 1px solid #333;
            border-radius: 6px;

            display: inline-block;
            font-size: 13px;
            margin-bottom: 3px;
            padding: 7px 12px;
        }
        .kilimanjaro_blog_area .kilimanjaro_date {
            color: #27ae60;
            font-size: 13px;
            margin-bottom: 5px;
        }
        .kilimanjaro_blog_area > p {
            color: rgba(255,255,255,.5);
            line-height: 1.3;
            margin-bottom: 0;
        }
        .kilimanjaro_works > a {
            display: inline-block;
            float: left;
            position: relative;
            width: 33.33333333%;
            z-index: 1;
        }
        .kilimanjaro_thumb {
            left: 0;
            position: absolute;
            top: 0;
            width: 75px;
        }
        .kilimanjaro_links a i {
            padding-right: 10px;
        }
        .footer_area {
            position: relative;
            z-index: 1;
        }
        .footer_bottom p > i,
        .footer_bottom p > a:hover {
            color: #27ae60;
        }

        .social_links_area {
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding: 50px 0 30px 0;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        .social_links_area > a:hover {
            color: #27ae60;
        }

        .inline-style .social_links_area > a:hover {
            background-color: transparent;
            color: #27ae60;
            border: 0px solid transparent;
        }
        .single_feature:hover .feature_text h4 {
            color: #27ae60;
        }
        .kilimanjaro_blog_area {
            border-bottom: 1px solid #333;
            margin-bottom: 15px;
            padding: 0 0 15px 90px;
            position: relative;
            z-index: 1;
        }
        .kilimanjaro_links a {
            border-bottom: 1px solid #333;

            display: block;
            font-size: 13px;
            margin-bottom: 5px;
            padding-bottom: 10px;
        }

        @media all and (min-width:1201px) {
           .home_slider_background {
               background-image:url({{asset('images/nashivkatowice/360.jpeg')}});
               width: 1500px;
               height: 700px;
               background-position:center;
               background-repeat: no-repeat;
               background-size: auto;

            }

        }

        @media all and (min-width:960px) and (max-width: 1200px) {
            .home_slider_background {
                background-image:url({{asset('images/nashivkatowice/360.jpeg')}});
                background-position:center;
                background-repeat: no-repeat;
                background-size: auto;

            }

        }



        @media all and (min-width:801px) and (max-width: 959px) {
            .home_slider_background {
                background-image:url({{asset('images/nashivkatowice/360.jpeg')}});
                background-position:center;
                background-repeat: no-repeat;
                background-size: auto;

            }

        }




        @media all and (min-width:769px) and (max-width: 800px) {
            .home_slider_background {
                background-image:url({{asset('images/nashivkatowice/834-1112.jpeg')}});
                background-position:center;
                background-repeat: no-repeat;
                background-size: auto;

            }

        }



        @media all and (min-width:569px) and (max-width: 768px) {
            .home_slider_background {
                background-image:url({{asset('images/nashivkatowice/360.jpeg')}});
                background-position:center;
                background-repeat: no-repeat;
                background-size: auto;

            }

        }



        @media all and (min-width:481px) and (max-width: 568px) {
            .home_slider_background {
                background-image:url({{asset('images/nashivkatowice/360.jpeg')}});
                background-position:center;
                background-repeat: no-repeat;
                background-size: auto;

            }

        }



        @media all and (min-width:321px) and (max-width: 480px) {
            .home_slider_background {
                background-image:url({{asset('images/nashivkatowice/360.jpeg')}});
                background-position:center;
                background-repeat: no-repeat;
                background-size: auto;

            }

        }



        @media all and (min-width:0px) and (max-width: 320px) {
            .home_slider_background {
                background-image:url({{asset('images/nashivkatowice/834-1112.jpeg')}});
                background-position:center;
                background-repeat: no-repeat;
                background-size: auto;

            }

        }
    </style>
</head>
<body>

<div class="super_container">
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div  class="logo"><a style="color: white">Nashi v Katowice</a></div>
                        <nav class="main_nav" style="margin-left: 250px">
                            <ul>
                                <li class="active"><a href="{{url('work/list')}}">РАБОТА</a></li>
                            <!--    <li><a href="{{url('places')}}">УСЛУГИ</a></li>  -->
                                <li><a href="{{url('archive')}}">СТАТЫИ</a></li>
                                <li><a href="{{url('contact')}}">КОНТАКТ</a></li>
                         <!--       <li><a href="{{url('team')}}">О НАС</a></li>   -->
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
        <div class="logo menu_mm"><a style="color: black">Nashi v Katowice</a></div>
        <div class="search">
        </div>
        <nav class="menu_nav">
            <ul  class="menu_mm">
                <li style="text-align: center; margin-bottom: 30px" class="menu_mm"><a href="{{url('work/list')}}">РАБОТА</a></li>
              <!--  <li class="menu_mm"><a href="{{url('places')}}">УСЛУГИ</a></li> -->
                <li style="text-align: center; margin-bottom: 30px" class="menu_mm"><a href="{{url('archive')}}">СТАТЫИ</a></li>
                <li style="text-align: center; margin-bottom: 30px" class="menu_mm"><a href="{{url('contact')}}">КОНТАКТ</a></li>
              <!--  <li class="menu_mm"><a href="{{url('team')}}">О НАС</a></li>   -->
            </ul>
        </nav>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="home_slider_container">
            <div class="owl-carousel home_slider">
                <div style="background-color: #000000;" class="owl-item">
                    <div class="home_slider_background"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row" >
                                <div class="col">
                                    <div class="home_slider_content">
                                        <div style="background-color: #ff8525; text-decoration: none" class="home_slider_item_category trans_200"><a style="text-decoration: none" href="#" class="trans_200">Новости</a></div>
                                        <div class="home_slider_item_title">
                                            <a style="text-decoration: none" href="{{$indeks[0]->header_reklamacja_link}}">{{$indeks[0]->header_reklamacja}}</a>
                                        </div>
                                        <div class="home_slider_item_link">
                                            <a style="color: #ff8525; text-decoration: none" href="{{$indeks[0]->header_reklamacja_link}}" class="trans_200">Продолжить чтение
                                                <svg style="color: #ff8525" version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
													<polygon style="color: #ff8525" fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
												</svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Similar Posts -->
                    <div class="similar_posts_container">
                        <div class="container">
                            <div class="row d-flex flex-row align-items-end">

                                <!-- Similar Post -->
                                <div class="col-lg-3 col-md-6 similar_post_col">
                                    <div class="similar_post trans_200">
                                        <a style="text-decoration: none" href="#">{{$indeks[0]->header_block_1}}</a>
                                    </div>
                                </div>

                                <!-- Similar Post -->
                                <div class="col-lg-3 col-md-6 similar_post_col">
                                    <div class="similar_post trans_200">
                                        <a style="text-decoration: none" href="#">{{$indeks[0]->header_block_2}}</a>
                                    </div>
                                </div>
                                <!-- Similar Post -->
                                <div class="col-lg-3 col-md-6 similar_post_col">
                                    <div class="similar_post trans_200">
                                        <a style="text-decoration: none" href="">{{$indeks[0]->header_block_3}}</a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 similar_post_col">
                                    <div class="similar_post trans_200">
                                        <a style="text-decoration: none" href="#">{{$indeks[0]->header_block_4}}</a>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-screen-xl mx-auto px-4 mb-6 mt-20">
        <!-- Grid wrapper -->
        <div class="-mx-4 flex flex-wrap">
            <!-- Grid column -->
            <div class="w-full p-4 sm:w-1/2 lg:w-1/4">
                <!-- Column contents -->
               <div class="px-10 py-12 bg-white rounded-lg shadow-lg">
                    <div class="h-full text-center">
                        <img href="{{url('work/list')}}" alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://img.icons8.com/bubbles/200/000000/briefcase.png">
                        <p class="leading-relaxed"></p>
                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm"><a style="color: #0a0a0a; font-weight: bold" href="{{url('work/list')}}">ВАКАНСИИ</a></h2>
                    </div>
                </div>
            </div>
            <!-- Grid column -->
            <div class="w-full p-4 sm:w-1/2 lg:w-1/4">
                <!-- Column contents -->
                <div class="px-10 py-12 bg-white rounded-lg shadow-lg">
                    <div class="h-full text-center">
                        <img href="{{url('places')}}" alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://img.icons8.com/bubbles/200/000000/hand-cursor.png">
                        <p class="leading-relaxed"></p>
                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm"><a style="color: #0a0a0a; font-weight: bold" href="#">УСЛУГИ</a></h2>
                    </div>
                </div>
            </div>
            <!-- Grid column -->
            <div class="w-full p-4 sm:w-1/2 lg:w-1/4">
                <!-- Column contents -->
                <div class="px-10 py-12 bg-white rounded-lg shadow-lg">
                    <div class="h-full text-center">
                        <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://img.icons8.com/bubbles/200/000000/puzzle.png">
                        <p class="leading-relaxed"></p>
                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm"><a style="color: #0a0a0a; font-weight: bold" href="{{url('contact')}}">КОНТАКТ</a></h2>
                    </div>
                </div>
            </div>
            <div class="w-full p-4 sm:w-1/2 lg:w-1/4">
                <!-- Column contents -->
                <div class="px-10 py-12 bg-white rounded-lg shadow-lg">
                    <div class="h-full text-center">
                        <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://img.icons8.com/bubbles/100/000000/imessage.png">
                        <p class="leading-relaxed"></p>
                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm"><a style="color: #0a0a0a; font-weight: bold" href="{{url('archive')}}">СТАТЫИ</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page_content">
        <div class="container">
            <div class="row row-lg-eq-height">
                <div class="col-lg-9">
                    <div class="main_content">
                        <div class="blog_section ">
                            <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                                <div class="section_title">Новости</div>
                            </div>
                            <div class="section_content">
                                <div class="grid clearfix">
                                    @foreach($posts as $post)
                                        <div style="max-height: 150px" class="card card_default card_small_with_background grid-item">
                                            <div class="card_background"><img class="card-img-top" src="{{asset('images/post_4.jpg')}}" alt=""></div>
                                            <div class="card-body">
                                                <div class="card-title card-title-small"><a style="text-decoration: none; display: flex; justify-content: center; align-items: center; font-size: 17px" href="{{route('posts.show', $post)}}">{{substr($post->title, 0, 100)}}</a></div>
                                                <small class="post_meta"><a href="{{route('posts.show', $post)}}"></a><span><br><br><br><br></span></small>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
<!--
                    <div class="load_more">
                        <div id="load_more" class="load_more_button text-center trans_200">Load More</div>
                    </div>
-->
                </div>

                <!-- Sidebar -->

                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="sidebar_background"></div>

                        <!-- Top Stories -->

                        <div class="sidebar_section">
                            <div class="sidebar_title_container">
                                <div class="sidebar_title">ВАКАНСИИ</div>
                            </div>
                            <div class="sidebar_section_content">

                                <!-- Top Stories Slider -->
                                <div class="sidebar_slider_container">
                                    <div class="owl-carousel owl-theme sidebar_slider_top">

                                        <!-- Top Stories Slider Item -->
                                        <div class="owl-item">
                                            <!-- Sidebar Post -->
                                            @foreach($works->slice(0,4) as $work)
                                            <div class="side_post">
                                                <a href="#">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image"><div><img src="{{ asset('images/praca/praca.jpg') }}" alt=""></div></div>
                                                        <div class="side_post_content -pt-20">
                                                            <div  style="font-weight: bold; font-size: 15px" class="side_post_title">{{$work->stanowisko}}</div>
                                                            <small style="color: black" class="post_meta">{{$work->miasto}}<span style="color:black; font-weight: bold;">{{$work->stawka}}</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
                                        </div>

                                        <!-- Top Stories Slider Item -->
                                        <div class="owl-item">

                                            @foreach($works->slice(5,9) as $work)
                                                <div class="side_post">
                                                    <a href="#">
                                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                            <div class="side_post_image"><div><img src="{{ asset('images/praca/praca.jpg') }}" alt=""></div></div>
                                                            <div class="side_post_content -pt-20">
                                                                <div class="side_post_title">{{$work->stanowisko}}</div>
                                                                <small class="post_meta">{{$work->miasto}}<span>{{$work->stawka}}</span></small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>

                                        <!-- Top Stories Slider Item -->
                                        <div class="owl-item">

                                            @foreach($works->slice(10,14) as $work)
                                                <div class="side_post">
                                                    <a href="#">
                                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                            <div class="side_post_image"><div><img src="{{ asset('images/praca/praca.jpg') }}" alt=""></div></div>
                                                            <div class="side_post_content -pt-20">
                                                                <div class="side_post_title">{{$work->stanowisko}}</div>
                                                                <small class="post_meta">{{$work->miasto}}<span>{{$work->stawka}}</span></small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Advertising -->

                        <div class="sidebar_section">
                            <div class="advertising">
                                <div class="advertising_background" style="background-image:url(images/post_17.jpg)"></div>
                                <div class="advertising_content d-flex flex-column align-items-start justify-content-end">
                                    <div class="advertising_perc">-{{$indeks[0]->sidebar_image_reklamacja_2_percent}}</div>
                                    <div class="advertising_link"><a style="text-decoration:none; font-size: 20px" href="{{$indeks[0]->sidebar_image_reklamacja_1_link}}">{{$indeks[0]->sidebar_image_reklamacja_1_text}}</a></div>
                                </div>
                            </div>
                        </div>
<!--


                        <div class="sidebar_section newest_videos">
                            <div class="sidebar_title_container">
                                <div class="sidebar_title">Newest Videos</div>
                                <div class="sidebar_slider_nav">
                                    <div class="custom_nav_container sidebar_slider_nav_container">
                                        <div class="custom_prev custom_prev_vid">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
											</svg>
                                        </div>
                                        <ul id="custom_dots" class="custom_dots custom_dots_vid">
                                            <li class="custom_dot custom_dot_vid active"><span></span></li>
                                            <li class="custom_dot custom_dot_vid"><span></span></li>
                                            <li class="custom_dot custom_dot_vid"><span></span></li>
                                        </ul>
                                        <div class="custom_next custom_next_vid">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
											</svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar_section_content">


                                <div class="sidebar_slider_container">
                                    <div class="owl-carousel owl-theme sidebar_slider_vid">


                                        <div class="owl-item">


                                            <div class="side_post">
                                                <a href="#">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image">
                                                            <div>
                                                                <img src="{{asset('images/nashivkatowice/naszivkatowice_lg.png')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>


                                            <div class="side_post">
                                                <a href="#">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image"><div><img src="{{asset('images/nashivkatowice/naszivkatowice_lg.png')}}" alt=""></div></div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">Текст для звголовку або чогось ...</div>
                                                            <audio style="width: 90%" controls>
                                                                <source src="https://www.computerhope.com/jargon/m/example.mp3" />
                                                            </audio>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>


                                            <div class="side_post">
                                                <a href="#">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image"><div><img src="{{asset('images/nashivkatowice/naszivkatowice_lg.png')}}" alt=""></div></div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">Текст для звголовку або чогось ...</div>
                                                            <audio style="width: 90%" controls>
                                                                <source src="https://www.computerhope.com/jargon/m/example.mp3" />
                                                            </audio>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>


                                            <div class="side_post">
                                                <a href="#">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image"><div><img src="{{asset('images/nashivkatowice/naszivkatowice_lg.png')}}" alt=""></div></div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">Текст для звголовку або чогось ...</div>
                                                            <audio style="width: 90%" controls>
                                                                <source src="https://www.computerhope.com/jargon/m/example.mp3" />
                                                            </audio>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>


                                        <div class="owl-item">


                                            <div class="side_post">
                                                <a href="#">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image"><div><img src="{{asset('images/nashivkatowice/nashivkatowice_sm.jpg')}}" alt=""></div></div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">Текст для звголовку або чогось ...</div>
                                                            <small class="post_meta">Nashi v Katowice<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>


                                            <div class="side_post">
                                                <a href="#">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image"><div><img src="{{asset('images/nashivkatowice/nashivkatowice_sm.jpg')}}" alt=""></div></div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">Текст для звголовку або чогось ...</div>
                                                            <small class="post_meta">Nashi v Katowice<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>


                                            <div class="side_post">
                                                <a href="#">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image"><div><img src="{{asset('images/nashivkatowice/nashivkatowice_sm.jpg')}}" alt=""></div></div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">Текст для звголовку або чогось ...</div>
                                                            <small class="post_meta">Nashi v Katowice<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>


                                            <div class="side_post">
                                                <a href="#">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image"><div><img src="{{asset('images/nashivkatowice/nashivkatowice_sm.jpg')}}" alt=""></div></div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">Текст для звголовку або чогось ...</div>
                                                            <small class="post_meta">Nashi v Katowice<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>


                                        <div class="owl-item">


                                            <div class="side_post">
                                                <a href="#">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image"><div><img src="{{asset('images/nashivkatowice/nashivkatowice_sm.jpg')}}" alt=""></div></div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">Текст для звголовку або чогось ...</div>
                                                            <small class="post_meta">Nashi v Katowice<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>


                                            <div class="side_post">
                                                <a href="#">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image"><div><img src="{{asset('images/nashivkatowice/nashivkatowice_sm.jpg')}}" alt=""></div></div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">Текст для звголовку або чогось ...</div>
                                                            <small class="post_meta">Nashi v Katowice<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>


                                            <div class="side_post">
                                                <a href="#">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image"><div><img src="{{asset('images/nashivkatowice/nashivkatowice_sm.jpg')}}" alt=""></div></div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">Текст для звголовку або чогось ...</div>
                                                            <small class="post_meta">Nashi v Katowice<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>


                                            <div class="side_post">
                                                <a href="#">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="side_post_image"><div><img src="{{asset('images/nashivkatowice/nashivkatowice_sm.jpg')}}" alt=""></div></div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">Текст для звголовку або чогось ...</div>
                                                            <small class="post_meta">Nashi v Katowice<span>Sep 29</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
-->
                        <div class="sidebar_section">
                            <div class="advertising">
                                <div class="advertising_background" style="background-image:url(images/post_17.jpg)"  ></div>
                                <div class="advertising_content d-flex flex-column align-items-start justify-content-end">
                                    <div class="advertising_perc">-{{$indeks[0]->sidebar_image_reklamacja_2_percent}}</div>
                                    <div class="advertising_link"><a style="text-decoration: none; font-size: 20px" href="{{$indeks[0]->sidebar_image_reklamacja_2_link}}">{{$indeks[0]->sidebar_image_reklamacja_2_text}}</a></div>
                                </div>
                            </div>
                        </div>


                        <div class="sidebar_section future_events">
                            <div class="sidebar_title_container">
                                <div class="sidebar_title">Мероприятия</div>
                            </div>
                            <div class="sidebar_section_content">
                                <div class="sidebar_slider_container">
                                    <div class="owl-carousel owl-theme sidebar_slider_events">
                                        <div class="owl-item">
                                        @foreach($events->slice(0,6) as $event)
                                            <!-- Future Events Post -->
                                            <div class="side_post">
                                                <a href="#">
                                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                        <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                            <div class="event_day">{{$event->event_day}}</div>
                                                        </div>
                                                        <div class="side_post_content">
                                                            <div class="side_post_title">{{$event->event_title}}</div>
                                                            <small class="post_meta">Nashi v Katowice</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr>
                                        @endforeach
                                        </div>

                                        <!-- Future Events Slider Item -->
                                        <div class="owl-item">
                                        @foreach($events->slice(5,8) as $event)
                                            <!-- Future Events Post -->
                                                <div class="side_post">
                                                    <a href="#">
                                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                                <div class="event_day">{{$event->event_day}}</div>
                                                                <div class="event_month">{{$event->event_month}}</div>
                                                            </div>
                                                            <div class="side_post_content">
                                                                <div class="side_post_title">{{$event->event_title}}...</div>
                                                                <small class="post_meta">Nashi v Katowice<span>{{$event->created_at->format('Y-m-d')}}</span></small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>

                                        <!-- Future Events Slider Item -->
                                        <div class="owl-item">
                                        @foreach($events->slice(9,13) as $event)
                                            <!-- Future Events Post -->
                                                <div class="side_post">
                                                    <a href="#">
                                                        <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                                <div class="event_day">{{$event->event_day}}</div>
                                                                <div class="event_month">{{$event->event_month}}</div>
                                                            </div>
                                                            <div class="side_post_content">
                                                                <div class="side_post_title">{{$event->event_title}}...</div>
                                                                <small class="post_meta">Nashi v Katowice<span>{{$event->created_at->format('Y-m-d')}}</span></small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div></div>

                    <div class="sidebar_section">
                        <div class="advertising_2">
                            <div class="advertising_background" style="background-image:url(images/post_18.jpg)"></div>
                            <div class="advertising_2_content d-flex flex-column align-items-center justify-content-center">
                                <div class="advertising_2_link"><a href="#">Turbulent <span>Mind</span></a></div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div x-data="{ cartOpen: false , isOpen: false }" class="bg-white">
    <main class="my-8">
    <main class="my-8">
        <div class="container mx-auto px-6">
            <div class="h-64 rounded-md overflow-hidden bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1577655197620-704858b270ac?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1280&q=144')">
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold">Sport Shoes</h2>
                        <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                        <!--    <button class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <span>Shop Now</span>
                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </button>
                        -->
                    </div>
                </div>
            </div>
            <div class="md:flex mt-8 md:-mx-4">
                <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('https://images.unsplash.com/photo-1547949003-9792a18a2601?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">Back Pack</h2>
                            <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                            <!--    <button class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                    <span>Shop Now</span>
                                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </button>
                             -->
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('https://images.unsplash.com/photo-1486401899868-0e435ed85128?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80')">
                        <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                            <div class="px-10 max-w-xl">
                                <h2 class="text-2xl text-white font-semibold">Games</h2>
                                <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                                <!--    <button class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                        <span>Shop Now</span>
                                        <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                    </button>
                               -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <div class=" w-full  flex  flex-row  flex-wrap  bg-gray-600  p-10  py-20  justify-center" style="background-repeat: no-repeat; background-size: cover; background-blend-mode: multiply;background-position: center center;background-image: url('https://images.unsplash.com/photo-1573079487717-f8ebae0b1539?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80');">
            <div class=" w-full  text-center">
                <div class=" text-3xl  text-center text-white  antialiased">ИЩЕТЕ РАБОТУ??</div>
                <div class="text-xl   text-center  text-white antialiased">У нас есть вакансии на территории всей Силезии</div>
            </div>

            <form class=" mt-3  flex   flex-row   flex-wrap" action="tel:518922121" method="POST">
                <div class=" w-3/3">
                    <button style="background-color: #ff8525" class=" w-full text-white  p-2  bg-indigo-400  rounded-r-lg rounded-l-lg text-center hover: bg-indigo-300" type="submit">ПОЗВОНИТЬ</button>
                </div>
            </form>
        </div>

        <footer class="kilimanjaro_area mt-10">
            <!-- Top Footer Area Start -->
    <div class="foo_top_header_one section_padding_100_70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="kilimanjaro_part">
                        <h5>О НАС</h5>
                        <p>Наши в Катовице - сообщество для жителей
                            не только Катовице, но и всей Силезии.<br>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="kilimanjaro_part">
                        <h5>ССЫЛКИ</h5>
                        <ul class=" kilimanjaro_widget">
                            <li><a style="color: #ff8525" href="https://www.facebook.com/nashiwkatowice">NashivKatowice24.info</a></li>
                            <li><a style="color: #ff8525" href="https://www.facebook.com/337292533587356/posts/680800299236576/?d=n">Реклама</a></li>
                            <li><a style="color: #ff8525" href="https://www.facebook.com/nashivkatowice.praca">NashivKatowice Praca</a></li>
                            <li><a style="color: #ff8525" href="https://www.facebook.com/groups/1036044496834686">Автомобили</a></li>
                        </ul>
                    </div>

                    <div class="kilimanjaro_part m-top-15">
                        <h5>КАТЕГОРИИ</h5>
                        <ul class="kilimanjaro_links">
                            <li><a style="color: #ff8525" href="{{url('work/list')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>РАБОТА</a></li>
                            <li><a style="color: #ff8525" href="{{url('archive')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>СТАТЫИ</a></li>
                            <li><a style="color: #ff8525" href="{{url('contact')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>КОНТАКТ</a></li>
                        <!--    <li><a href="{{url('team')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>О НАС</a></li>   -->
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="kilimanjaro_part">
                        <h5>ПОСЛЕДНИЕ НОВОСТИ</h5>
                        <div class="kilimanjaro_blog_area">
                            <div class="kilimanjaro_thumb">
                                <i class="fas fa-newspaper fa-3x"></i>
                            </div>
                            <a href="#">В КАТОВИЦЕ ЗА БЫСТРО РАСТЕТ ЧИСЛО СМЕРТЕЙ</a>
                            <p class="kilimanjaro_date">Січень 2021</p>
                            <p>Кульминация наступила в ноябре, когда в Катовицах умерло 770 человек. Для сравнения, в 2018 году их было 350, а в 2019 году-356</p>
                        </div>
                        <div class="kilimanjaro_blog_area">
                            <div class="kilimanjaro_thumb">
                                <i class="fas fa-newspaper fa-3x"></i>
                            </div>
                            <a href="#">Траси А4 и А1</a>
                            <p class="kilimanjaro_date">Січень 2021</p>
                            <p>По-прежнему самый большой в Польше и один из крупнейших в Европе автомобильный узел A4 и A1 в Гливице-Соснице был открыт 23 декабря 2009 года.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="kilimanjaro_part">
                        <h5>МЫ В СОЦИАЛЬНЫХ СЕТЯХ:</h5>
                        <div class="kilimanjaro_single_contact_info">
                            <p><a style="color: #ff8525" href="tel:+48 795 744 863">+48 795 744 863</a></p>
                        </div>
                        <div class="kilimanjaro_single_contact_info">
                            <br>
                            <h5>Email:</h5>
                            <p><a style="color: #ff8525" href="mailto:nashivkatowice@gmail.com">nashivkatowice@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="kilimanjaro_part m-top-15">
                        <h5>Social Links</h5>
                        <ul class="kilimanjaro_social_links">
                            <li><a style="color: #ff8525" href="https://www.facebook.com/search/top?q=nashivkatowice24.info"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                            <li><a style="color: #ff8525" href="https://www.instagram.com/nashivkatowice/"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Area Start -->
    <div class=" kilimanjaro_bottom_header_one section_padding_50 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>© All Rights Reserved by <a href="#">NashivKatowice.pl<i class="fa fa-love"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://kit.fontawesome.com/b5d9a7d5d7.js" crossorigin="anonymous"></script>
<script src="{{asset('js/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/masonry/masonry.js')}}"></script>
<script src="{{asset('js/js/custom.js')}}"></script>
</body>
</html>