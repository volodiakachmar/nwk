<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" href="{{asset('favicon.ico') }}" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles/bootstrap4/bootstrap.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles/footer.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <style>

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
        /* :: 18.0 Footer Area CSS */

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
    </style>
    <title>Реклама Nashi v Katowice</title>
    <style>
        @media (min-width: 640px) {
            .sm\:bg-svg-bottom {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='353' height='304'%3E%3Cg fill='none' fill-rule='evenodd' stroke='%23D0D5F6' stroke-width='2'%3E%3Cpath d='M180.29 759c102.087-21.62 155.232-61.312 159.437-119.074 6.307-86.643-231.598-17.186-136.358-198 95.241-180.813 181.318-185.29 136.358-298C294.767 31.216 174.04-27.954 33.79 16.8c-93.501 29.836-144.652 140.545-153.453 332.126'/%3E%3Cpath d='M138.3 759c80.083-18.988 121.774-53.846 125.072-104.575 4.948-76.093-181.679-15.094-106.966-173.89C231.118 321.738 298.64 317.808 263.372 218.82c-35.269-98.986-129.974-150.95-239.995-111.646C-49.97 133.378-90.096 230.605-97 398.859'/%3E%3Cpath d='M102.065 761c60.604-16.56 92.153-46.963 94.65-91.208 3.743-66.367-137.488-13.165-80.949-151.664 56.54-138.5 107.638-141.927 80.948-228.261-26.69-86.335-98.359-131.656-181.618-97.376C-40.41 215.345-70.775 300.145-76 446.892'/%3E%3C/g%3E%3C/svg%3E");
            }
        }

        .toggle_dot {
            top: -.25rem;
            transition: all 0.3s ease-in-out;
        }

        input:checked~.toggle_dot {
            transform: translateX(100%);
            background-color: #0082c8;
        }

        .bg-gradient {
            background: #667db6;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .bg-gradient-base {
            background-color: #0082c8;
        }

        .font-work-sans {
            font-family: 'Work Sans', sans-serif;
        }
    </style>
</head>

<body class="text-gray-900 font-work-sans h-screen bg-no-repeat bg-left-bottom sm:bg-svg-bottom">

<svg class="absolute top-0 right-0 h-full" xmlns="http://www.w3.org/2000/svg" width"375" height"658">
<g fill="none" fill-rule="evenodd" stroke="#D0D5F6" stroke-width="2">
    <path d="M172.71-101C70.623-79.38 17.478-39.688 13.273 18.074c-6.307 86.643 231.598 17.186 136.358 198-95.241 180.813-181.318 185.29-136.358 298C58.233 626.784 178.96 685.954 319.21 641.2c93.501-29.836 144.652-140.545 153.453-332.126" />
    <path d="M214.7-101C134.617-82.012 92.926-47.154 89.628 3.575c-4.948 76.093 181.679 15.094 106.966 173.89C121.882 336.262 54.36 340.192 89.628 439.18c35.269 98.986 129.974 150.95 239.995 111.646C402.97 524.622 443.096 427.395 450 259.141" />
    <path d="M250.935-103c-60.604 16.56-92.153 46.963-94.65 91.208-3.743 66.367 137.488 13.165 80.949 151.664-56.54 138.5-107.638 141.927-80.948 228.261 26.69 86.335 98.359 131.656 181.618 97.376C393.41 442.655 423.775 357.855 429 211.108" />
</g>
</svg>

<h1 class="text-center font-bold text-5xl mt-8 tracking-wide relative">Our Pricing</h1>

<div class="flex flex-row justify-center my-4 text-sm tracking-tight font-medium text-gray-700">
    <p class="mx-3">Annually</p>

    <!-- Toggle Button -->
    <label for="toggle" class="flex items-center cursor-pointer">
        <!-- toggle -->
        <div class="relative">
            <!-- hidden input -->
            <input id="toggle" type="checkbox" class="hidden" onclick="myFunction()" />
            <!-- line -->
            <div class="w-10 h-3 bg-gray-400 rounded-full shadow-inner"></div>
            <!-- dot -->
            <div class="toggle_dot absolute w-5 h-5 bg-white rounded-full shadow inset-y-0 left-0"></div>
        </div>
    </label>

    <p class="mx-3">Monthly</p>
</div>

<div class="flex flex-col md:flex-row md:transform md:scale-75 lg:scale-100 justify-center">
    <div class="border rounded-lg md:rounded-r-none text-center p-5 mx-auto md:mx-0 my-2 md:my-6 bg-gray-100 font-medium z-10 shadow-lg">
        <div class="">Basic</div>
        <div id="month" class="font-bold text-6xl month hidden">&dollar;19.99</div>
        <div id="annual" class="font-bold text-6xl annual">&dollar;199.99</div>
        <hr>
        <div class="text-sm my-3">500 GB Storage</div>
        <hr>
        <div class="text-sm my-3">2 Users Allowed</div>
        <hr>
        <div class="text-sm my-3">Send up to 3 GB</div>
        <hr>
        <a href="#" target="_blank">
            <div class="bg-gradient-base border border-blue-600 hover:bg-white text-white hover:text-blue-600 font-bold uppercase text-xs mt-5 py-2 px-4 rounded cursor-pointer">Learn More</div>
        </a>
    </div>

    <div class="border-transparent rounded-lg text-center p-5 mx-auto md:mx-0 my-2 bg-gradient text-white font-medium z-10 shadow-lg">
        <div class="py-4">Professional
            <div id="month" class="font-bold text-6xl month hidden">&dollar;24.99</div>
            <div id="annual" class="font-bold text-6xl annual">&dollar;249.99</div>
            <hr>
            <div class="text-sm my-3">1 TB Storage</div>
            <hr>
            <div class="text-sm my-3">5 Users Allowed</div>
            <hr>
            <div class="text-sm my-3">Send up to 10 GB</div>
            <hr>
            <a href="#" target="_blank">
                <div class="bg-white border border-white hover:bg-transparent text-blue-600 hover:text-white font-bold uppercase text-xs mt-5 py-2 mpx-4 rounded cursor-pointer">Learn More</div>
            </a>
        </div>
    </div>

    <div class="border rounded-lg  md:rounded-l-none text-center p-5 mx-auto md:mx-0 my-2 md:my-6 bg-gray-100 font-medium z-10 shadow-lg">
        <div class="">Master</div>
        <div id="month" class="font-bold text-6xl month hidden">&dollar;39.99</div>
        <div id="annual" class="font-bold text-6xl annual">&dollar;399.99</div>
        <hr>
        <div class="text-sm my-3">2 TB Storage</div>
        <hr>
        <div class="text-sm my-3">10 Users Allowed</div>
        <hr>
        <div class="text-sm my-3">Send up to 20 GB</div>
        <hr>
        <a href="#" target="_blank">
            <div class="bg-gradient-base border border-blue-600 hover:bg-transparent text-white hover:text-blue-600 font-bold uppercase text-xs mt-5 py-2 px-4 rounded cursor-pointer">Learn More</div>
        </a>
    </div>
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

<!--JS for toggle-->
<script>
    function myFunction() {
        var x = document.querySelectorAll('.annual');
        var y = document.querySelectorAll('.month');
        for (var i = 0; i < x.length; i++) {
            if (document.getElementById("toggle").checked == true) {
                x[i].classList.add('hidden');
                y[i].classList.remove('hidden');
            } else {
                x[i].classList.remove('hidden');
                y[i].classList.add('hidden');
            }
        }
    }
</script>

</body>

</html>