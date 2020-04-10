<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta name="keywords" content="おきなわ和牛,国産野菜,自家製ダレ,自家製スープ,自家製キムチ,ランチ,ディナー,那覇市,小禄,焼肉工房「團」">
    <meta name="description" content="お客様が「家庭では食べられない味」「安心して食べられる」 そして、なによりも「美味しい」と言って頂けるように「おきなわ和牛」とその肉に合うタレや野菜にまでこだわり提供いたします。">
    <title>YAKINIKU STUDIO DAN</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/slick_sp.css">
    <link rel="stylesheet" href="./css/slick-theme_sp.css">
    <link rel="stylesheet" href="./css/style_sp.css">
    <!-- <link rel="stylesheet" href="./css/english.css"> -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700|Noto+Serif+JP:700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./image/top/favicon.png">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5SJQPDF');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SJQPDF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155095088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-155095088-1');
    </script>
</head>
<body>
    <div class="container">
        <!-- header -->
        <header>
            <div class="header_inner">
                <div class="header-logo">
                    <a href="/index.html">
                        <img src="./image/top/logo.png" alt="焼肉工房「團」">
                    </a>
                </div>
                <nav>
                    <ul class="header-nav__list">
                        <li class="header-nav__list-item">
                            <a href="#menu" class="header-nav__list-item__text">Menu</a>
                        </li>
                        <li class="header-nav__list-item">
                            <a href="#introduction" class="header-nav__list-item__text">Store information</a>
                        </li>
                        <li class="header-nav__list-item">
                            <a href="#info" class="header-nav__list-item__text">Notice</a>
                        </li>
                        <li class="header-nav__list-item">
                            <a href="#store" class="header-nav__list-item__text">Contact</a>
                        </li>
                        <li class="header-nav__list-item dropdown-menu">
                            <a class="header-nav__list-item__text dropdown-menu__title"><i class="fas fa-globe"></i>Language</a>
                            <ul class="dropdown-menu__list">
                                <li class="dropdown-menu__list-item">
                                    <a href="../index-en.php" class="dropdown-menu__list-item__link">
                                        English
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                                <li class="dropdown-menu__list-item">
                                    <a href="../index.php" class="dropdown-menu__list-item__link">
                                        Japanese
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="reservation reservation-en">
                            <a href="#" class="reservation-text">Booking</a>
                        </li>
                        <li>
                            <div class="header-nav__language-button language-button_en">
                                <p class="header-nav__language-button__image"><img src="./image/top/language.png" alt=""></p>
                                <span>language</span>
                            </div>
                        </li>
                        <li>
                            <!-- ドロワーメニュー -->
                            <div class="header-nav__menu-button">
                                <span></span>
                                <span></span>
                                <span></span>
                                <small>MENU</small>
                            </div> 
                        </li>
                    </ul>
                </nav>  
            </div>
            <div class="header-nav__menu">
                <ul class="header-nav__menu-list">
                    <li class="header-nav__menu-item">
                        <a href="#commit" class="header-nav__menu-item__text">Our Commitment</a>
                    </li>
                    <li class="header-nav__menu-item">
                        <a href="#part" class="header-nav__menu-item__text">Japanese Beef Chart</a>
                    </li>
                    <li class="header-nav__menu-item">
                        <a href="#difference" class="header-nav__menu-item__text">About "wagyu" and "domestic beef"</a>
                    </li>
                    <li class="header-nav__menu-item">
                        <a href="#menu" class="header-nav__menu-item__text">MENU</a>
                    </li>
                    <li class="header-nav__menu-item">
                        <a href="#allergy" class="header-nav__menu-item__text">About food allergies</a>
                    </li>
                    <li class="header-nav__menu-item">
                        <a href="#introduction" class="header-nav__menu-item__text">About us</a>
                    </li>
                    <li class="header-nav__menu-item">
                        <a href="#info" class="header-nav__menu-item__text">News</a>
                    </li>
                    <li class="header-nav__menu-item">
                        <a href="#thought" class="header-nav__menu-item__text">Our hope</a>
                    </li>
                    <li class="header-nav__menu-item">
                        <a href="#access" class="header-nav__menu-item__text">Access</a>
                    </li>
                    <li class="header-nav__menu-item">
                        <a href="#store" class="header-nav__menu-item__text">Information</a>
                    </li>
                </ul>
            </div>
            <div class="header-nav__language">
                <ul class="header-nav__language-list">
                    <li class="header-nav__language-item">
                        <a href="#" class="header-nav__language-item__text">English</a>
                    </li>
                    <li class="header-nav__language-item">
                        <a href="./index_sp.html" class="header-nav__language-item__text">Japanese</a>
                    </li>
                    <li class="header-nav__language-item">
                        <a href="./" class="header-nav__language-item__text">Chinese</a>
                    </li>
                </ul>
            </div>
    
        </header>
        <!-- header end -->

        <div class="slider">
            <ul class="slide_list">
                <li>
                    <img src="./image/main/slider-1-sp.jpg" alt="" class="slide_top">
                </li>
                <li> 
                    <img src="./image/main/slider-2.jpg" alt="" class="slide_top">
                </li>
                <li>
                    <img src="./image/main/slider-3-sp.jpg" alt="" class="slide_top">
                </li>
            </ul>
        </div>
    </div>
                    
    <!-- main -->
    <main>

        <div class="wrap">

            <!-- commit -->
            <section id="commit" class="commit">
                <div class="inner">
                    <div class="commit-title">
                        <h1>
                            <img src="./image/english/top/commit-title_en-sp.jpg" alt="焼肉工房「團」 こだわり">
                        </h1>
                    </div>
                    <ul class="commit-list">
                        <li class="commit-list_item">
                            <h3 class="commit-item__title">Provide Okinawa Wagyu and other high quality Wagyu beef</h3>
                            <p>
                                We provide carefully selected beef, mainly A4 or higher rank of "Japanese Black Beef" 
                                with a good balance of lean and fat, that were grown in a good production environment 
                                in both production history and hygiene management.
                            </p>
                        </li>
                        <li class="commit-list_item">
                            <h3 class="commit-item__title">Extra fresh domestic vegetables</h3>
                            <p>Vegetables such as Sangchu, which goes well with meat, and Chinese cabbage used for homemade kimchi, are carefully selected for their taste and safety. We exclusively use domestic fresh vegetables.</p>
                        </li>
                        <li class="commit-list_item">
                            <h3 class="commit-item__title">Homemade sauce that brings out Umami</h3>
                            <p>
                                We bring out the Umami of Wagyu by separately using 6 kinds of homemade sauces 
                                depending on the part of meat and its cooking style.
                            </p>
                        </li>
                        <li class="commit-list_item">
                            <h3 class="commit-item__title">Homemade soup of Okinawa Wagyu stock</h3>
                            <p>Our soup made from beef tendon, chicken and mackerel stock and our rich cold noodle soup are made from plenty of beef tendon, chicken and fresh vegetables and by simmering them for a long time.</p>
                        </li>
                        <li class="commit-list_item">
                            <h3 class="commit-item__title">Rich-flavor homemade Kimchi</h3>
                            <p>It is seasoned with homemade Yangnyeon (Kimchi base) based on several kinds of shrimps. We control temperature and calculate fermentation period to have Umami to realize mild taste.</p>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- commit end -->


            <!-- part -->
            <section id="part" class="part">
                <h2 class="section-title">Japanese Beef Chart</h2>
                <figure class="part-img">
                    <img src="./image/english/part-img_en.jpg" alt="焼肉工房「團」 牛肉 部位　部位ごとの旨み">
                </figure>
                <ul class="part-list flex_box"> 
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en style-effect_2column">
                            <a class="js-modal-open" href="" data-target="part_1">Loin <span class="difference-title_sub">(shoulder)</span></a>
                        </h4>
                        <div id="part_1" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/ro-su_en.jpg" alt="焼肉工房「團」 ロース肩肉">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en style-effect_2column">
                            <a class="js-modal-open" href="" data-target="part_2">Misuji <span class="difference-title_sub">(Top blade muscle)</span></a>
                        </h4>
                        <div id="part_2" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/misuji_en.jpg" alt="焼肉工房「團」 ミスジ">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en">
                            <a class="js-modal-open" href="" data-target="part_3">Upper loin</a>
                        </h4>
                        <div id="part_3" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/jouro-su_en.jpg" alt="焼肉工房「團」 上ロース">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en">
                            <a class="js-modal-open" href="" data-target="part_4">Sirloin</a>
                        </h4>
                        <div id="part_4" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/sa-roin_en.jpg" alt="焼肉工房「團」 サーロイン">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en">
                            <a class="js-modal-open" href="" data-target="part_5">Special loin</a>
                        </h4>
                        <div id="part_5" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/tokujouro-su_en.jpg" alt="焼肉工房「團」 特上ロース">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en">
                            <a class="js-modal-open" href="" data-target="part_6">Regular tongue</a>
                        </h4>
                        <div id="part_6" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/namitan_en.jpg" alt="焼肉工房「團」 並タン">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en">
                            <a class="js-modal-open" href="" data-target="part_7">Short rib</a>
                        </h4>
                        <div id="part_7" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/karubi_en.jpg" alt="焼肉工房「團」 カルビ">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en">
                            <a class="js-modal-open" href="" data-target="part_8">Upper tongue</a>
                        </h4>
                        <div id="part_8" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/joutan_en.jpg" alt="焼肉工房「團」 上タン">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en">
                            <a class="js-modal-open" href="" data-target="part_9">Upper rib</a>
                        </h4>
                        <div id="part_9" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/joukarubi_en.jpg" alt="焼肉工房「團」 上カルビ">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en style-effect_2column">
                            <a class="js-modal-open" href="" data-target="part_10">Round intestine <span class="difference-title_sub">(small intestine)</span></a>
                        </h4>
                        <div id="part_10" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/marutyou_en.jpg" alt="焼肉工房「團」 丸腸(小腸)">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en">
                            <a class="js-modal-open" href="" data-target="part_11">Special rib</a>
                        </h4>
                        <div id="part_11" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/tokujoukarubi_en.jpg" alt="焼肉工房「團」 特上カルビ">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en style-effect_2column">
                            <a class="js-modal-open" href="" data-target="part_12">Hormones <span class="difference-title_sub">(colon)</span></a>
                        </h4>
                        <div id="part_12" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/horumon_en.jpg" alt="焼肉工房「團」 ホルモン(大腸)">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en">
                            <a class="js-modal-open" href="" data-target="part_13">Flame ribs</a>
                        </h4>
                        <div id="part_13" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/h-karubi_en.jpg" alt="焼肉工房「團」 炎のカルビ">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en">
                            <a class="js-modal-open" href="" data-target="part_14">Liver</a>
                        </h4>
                        <div id="part_14" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/reba_en.jpg" alt="焼肉工房「團」 レバー">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en style-effect_2column">
                            <a class="js-modal-open" href="" data-target="part_15">Ichibo <span class="difference-title_sub">(last half of the rump)</span></a>
                        </h4>
                        <div id="part_15" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/ichibo_en.jpg" alt="焼肉工房「團」 イチボ">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en style-effect_2column">
                            <a class="js-modal-open" href="" data-target="part_16">Hatsu <span class="difference-title_sub">(Beef heart)</span></a>
                        </h4>
                        <div id="part_16" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/hatu_en.jpg" alt="焼肉工房「團」 ハツ">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en style-effect_2column">
                            <a class="js-modal-open" href="" data-target="part_17">Tsurami <span class="difference-title_sub">(Cheek meat)</span></a>
                        </h4>
                        <div id="part_17" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/turami_en.jpg" alt="焼肉工房「團」 ツラミ">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en style-effect_2column">
                            <a class="js-modal-open" href="" data-target="part_18">Senmai <span class="difference-title_sub">(the third stomach)</span></a>
                        </h4>
                        <div id="part_18" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/senmai_en.jpg" alt="焼肉工房「團」 センマイ">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en style-effect_2column">
                            <a class="js-modal-open" href="" data-target="part_19">Rump <span class="difference-title_sub">(top sirloin butt)</span></a>
                        </h4>
                        <div id="part_19" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/ranpu_en.jpg" alt="焼肉工房「團」 ランプ">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                    <li class="part-list__item">
                        <h4 class="difference-title difference-title_en style-effect_2column">
                            <a class="js-modal-open" href="" data-target="part_20">Upper Mino <span class="difference-title_sub">(the first stomach)</span></a>
                        </h4>
                        <div id="part_20" class="modal js-modal">
                            <div class="modal__bg js-modal-close"></div>
                            <div class="modal__content">
                                <img src="./image/english/part/joumino_en.jpg" alt="焼肉工房「團」 上ミノ(第一胃)">
                                <a class="js-modal-close" href="">close</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
            <!-- part end -->

            <!-- difference -->
            <section id="difference" class="difference">
                <h2 class="section-title section-en">About "Japanese beef"</h2>
                <div class="difference-block">
                    <ul class="difference-list"> 
                        <li class="difference-list__item">
                            <h4 class="difference-title">Wagyu beef</h4>
                            <p class="difference-text">
                                "Wagyu" refers only to the 4 breeds that was improved by repetitive crossing of Japanese native breeds.
                            </p>
                        </li>
                        <li class="difference-list__item">
                            <h4 class="difference-title">Domestically produced beef</h4>
                            <p class="difference-text">
                                Beef (dressed meat) processed inside Japan that has spent the longest breeding period in Japan is displayed as "Domestically produced beef" regardless of the country of origin or breed.
                            </p>
                        </li>
                    </ul>
                    <div class="difference-img">
                        <img src="./image/english/difference-map_en.jpg" alt="焼肉工房「團」 「和牛」と「国産牛」の違い">
                    </div>
                </div>
            </section>
            <!-- difference end -->


            <!-- menu -->
            <section id="menu" class="menu">
                <h2 class="section-title">MENU</h2>
                <ul class="menu-list flex_box">
                    <li class="menu-list__item">
                        <a href="./menu/dinner_en_sp.html">
                            <img src="./image/top/dinner.jpg" class="dinner" alt="焼肉工房「團」 ディナーメニュー">
                            <h5 class="menu-list__item-title">Dinner</h5>
                            <p class="menu-list__item-title__text">You can enjoy from the rare parts of Wagyu beef, such as loin, ribs, and Ichibo, to the side menu, which we carefully selected from the ingredients.</p>
                        </a>
                    </li>
                    <li class="menu-list__item">
                        <a href="./menu/corse_en_sp.html">
                            <img src="./image/top/matsu_s.png" class="corse" alt="焼肉工房「團」 コース">
                            <h5 class="menu-list__item-title">Course</h5>
                            <p class="menu-list__item-title__text">You can enjoy our course meal from fine meat to popular dish and dessert.</p>
                        </a>
                    </li>
                    <li class="menu-list__item">
                        <a href="./menu/lunch_en_sp.html">
                            <img src="./image/top/lunch.jpg" class="lunch" alt="焼肉工房「團」 ランチ">
                            <h5 class="menu-list__item-title">Lunch</h5>
                            <p class="menu-list__item-title__text">We offer a limited menu for lunch only, such as a beef bowl full of Wagyu beef broth.</p>
                        </a>
                    </li>
                </ul>
                
                <div id="allergy" class="allergy">
                    <a class="allergy-link" href="./image/english/top/allergy_en.pdf" target="_blank">About food allergies▼</a>
                </div>
            </section>
            <!-- menu end -->


            <!-- introduction -->
            <section id="introduction" class="introduction">
                <h2 class="section-title">About us</h2>
                <div class="slider intro_slider">
                    <ul class="slide_list">
                        <li>
                            <img src="./image/introduction/gaikan.jpg" alt="" />
                        </li>
                        <li> 
                            <img src="./image/introduction/tableseki.jpg" alt="" />
                        </li>
                        <li>
                            <img src="./image/introduction/madogawatablesaki.jpg" alt="" />
                        </li>
                        <li>
                            <img src="./image/introduction/horigotatsuseki.jpg" alt="" />
                        </li>
                        <li>
                            <img src="./image/introduction/zashikiseki.jpg" alt="" />
                        </li>
                        <li>
                            <img src="./image/introduction/naikanzentai.jpg" alt="" />
                        </li>
                    </ul>
                    <p class="introduction-text">You can visit us according to the number of people and the scenes, such as table seats for one guest or a small number of guests, up to 30!</p>

                </div>
            </section>
            <!-- introduction end -->


            <!-- info -->
            <!-- <section id="info" class="info">
                <h6 class="info-title">News</h6>
                <ul class="info-list">
                    <li class="info-list__item">
                        <dl>
                            <dt class="info-list__day">2019.12</dt>
                            <dd class="info-list__text">Several kinds of shrimp are seasoned thoroughly with homemade</dd>
                        </dl>
                    </li>
                    <li class="info-list__item">
                        <dl>
                            <dt class="info-list__day">2019.12</dt>
                            <dd class="info-list__text">Several kinds of shrimp are seasoned thoroughly with homemade</dd>
                        </dl>
                    </li>
                    <li class="info-list__item">
                        <dl>
                            <dt class="info-list__day">2019.12</dt>
                            <dd class="info-list__text">Several kinds of shrimp are seasoned thoroughly with homemade</dd>
                        </dl>
                    </li>
                    <li class="info-list__item">
                        <dl>
                            <dt class="info-list__day">2019.12</dt>
                            <dd class="info-list__text">Several kinds of shrimp are seasoned thoroughly with homemade</dd>
                        </dl>
                    </li>
                </ul> -->
            </section>
            <!-- info end -->

            <!-- info -->
            <?php 
            //▼▼ 既存ページヘ埋め込み時はまるっとコピペ下さい （この行も含みページ最上部に）※.phpでかつUTF-8のページのみ可▼▼
            //※このページに対して既存のページのhtmlを記述する形でももちろんOKです。
            //----------------------------------------------------------------------
            // トップページ表示用ページ
            // 設定ファイルの読み込みとページ独自設定
            //----------------------------------------------------------------------
            include_once("./information/pkobo_news/admin/include/config.php");//（必要に応じてパスは適宜変更下さい）
            $img_updir = './information/pkobo_news/upload';//画像保存パス（必要に応じてパスは適宜変更下さい）

            /* ▽オプション設定▽ */

            //表示件数
            $config['dspNum'] = 5;

            //本文の抜粋を表示するかどうか（0=しない、1=する）
            $commentDsp = 0;

            //本文を抜粋表示する場合の表示文字数 （単位はバイト。全角文字は「2バイト」で1文字となります。また末尾の文字「...」も含みます）
            //※htmlタグは削除されます「0」にすれば全文をhtmlもそのままで表示します。（レイアウトに問題が出る可能性があるのでオススメしません）
            $commentNum = 200;

            //サムネイルを表示するか（0=しない、1=する）※アップファイルの1枚目が画像の場合のみ有効
            $dspThumbNail = 0;

            //表示するカテゴリを指定（指定なし（空）の場合は全件表示 ※デフォルト）
            //このページで特定カテゴリのみ表示したい場合、0からの番号を指定下さい。 （1番目が0，2番目が1になるので注意）
            //要するに複数のカテゴリがある場合でそれぞれ別々のファイルで表示したい場合用です
            //このファイルを複製すればOKです（カテゴリごとにデザインを変えたい場合など）
            //例　$category = '1'; ※この場合カテゴリ番号「1」（設定ファイルでの2番目）の記事のみが表示されます
            $category = '';
            //またはURLのパラメータでも指定可能です。番号ルールは↑と同じです。例　URLに ?cat=0 や ?cat=1 を追加するだけです
            //1ファイルでパラメータを変えるだけでそれぞれのカテゴリを表示できるので便利です。（全カテゴリでデザインは共通で良い場合）

            //----------------------------------------------------------------------
            // 設定ファイルの読み込みとページ独自設定
            //----------------------------------------------------------------------
            //▲▲ コピペここまで ▲▲（この行も含む）
            ?>

            <!--▼▼CSSとポップアップ用JS。トップページ埋め込み時　要コピペ（head部分）▼▼-->
            <style type="text/css">
            /* CSSは必要最低限しか指定してませんのでお好みで（もちろん外部化OK） */

            /* clearfix */
            .clearfix:after { content:"."; display:block; clear:both; height:0; visibility:hidden; }
            .clearfix { display:inline-block; }

            /* for macIE \*/
            * html .clearfix { height:1%; }
            .clearfix { display:block; }

            ul#newsList{
                margin:0 0 15px;
                padding:0;
                font-family:"メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
            }
            ul#newsList li{
                color:#666;
                font-size:12px;
                margin:0;
                padding:5px 0;
                margin-bottom:3px;
                border-bottom:1px dotted #ccc;
                line-height:120%;
                list-style-type:none;
            }
            .info-list__text a{color:#36F;text-decoration:underline;}
            .info-list__text a:hover{color:#039;text-decoration:none;}

            .catName{
                display:inline-block;
                padding:3px 8px;
                border:1px solid #ccc;
                border-radius:6px;
                font-size:11px;
                line-height:100%;
                margin:0 2px;
            }
            .newMark{
                display:inline-block;
                border:1px solid #F00;
                padding:1px 4px;
                font-size:11px;
                line-height:100%;
                background:#F00;
                color:#fff;
                box-shadow:1px 1px 1px #999;
                border-radius:8px;
                font-style:italic;
            }
            .comment{
                display:block;
                padding:3px 0;
                float:left;
                overflow:hidden;
                width:500px;/* 本文部分の幅。ここは特に設置ページ合わせて変更下さい */
            }
            .thumbNailWrap{
                display:block;
                width:110px;
                float:left;
                height:80px;
                overflow:hidden;
            }
            #info a:link,
            #info a:visited,
            #info a:hover,
            #info a:active {
                color: #fff;
            }
            </style>

            <script type="text/javascript">
            <!--
            function openwin(url) {//詳細ページ用ポップアップ。ウインドウの幅、高さなど自由に編集できます（ポップアップで開く場合のみコピペ下さい）
                wn = window.open(url, 'win','width=680,height=550,status=no,location=no,scrollbars=yes,directories=no,menubar=no,resizable=no,toolbar=no');
                wn.focus();
            }
            -->
            </script>

            <section id="info" class="info">
                <div class="inner-2">
                    <h6 class="info-title">News</h6>
                    <ul class="info-list">

                        <?php 
                        if(!$copyright){
                            echo $warningMesse;exit;
                        }else{
                            $getFormatDataArr = getLines2DspData($file_path,$img_updir,$config,'',$category);
                            foreach($getFormatDataArr as $key => $data){
                        ?>

                        <li class="info-list__item cat-<?php echo $data['categoryNum'];?>" id="postID_<?php echo $data['id'];?>">
                            <dl>
                                <dt class="info-list__day"><?php echo $data['up_ymd'];//日付表示?></dt>
                                <dd class="info-list__text"><?php echo $data['title'];//タイトル表示?></dd>
                            </dl>
                        </li>

                        <?php } ?>
                        <?php echo $copyright;}//著作権表記削除不可?>
                    </ul>
                </div>
            </section>
            <!-- /info end -->

            <!-- though -->
            <section id="thought" class="thought">
                <h2 class="section-title section-en">Our hope</h2>
                <p class="thought-text">
                    Yukio Oyakawa, our founder, strictly selected "Okinawa Wagyu beef" 
                    as well as sauce and vegetables that matches it perfectly
                    in order for our customers to be able to enjoy "safe, premium taste" and be satisfied.
                    We observe the will of the predecessor and devote ourselves to become 
                    the restaurant in which our customers can spend happy time over delicious meat
                    regardless of era and just like the name of the restaurant 
                    "Dan" which has the meaning of "calm / gather".
                </p>
                <div class="thought-img">
                    <p><img src="./image/top/logo-2.png" alt="焼肉工房「團」"></p> 
                </div>
            </section>
            <!-- though -->


            <!-- access -->
            <section id="access" class="access">
                <h2 class="section-title">Access</h2>
                <!-- <p>〒901-0152 沖縄県那覇市小禄2-3-16</p> -->
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.1879408011764!2d127.67298401495562!3d26.19056389710831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e569ac90946769%3A0xb7da3f88df348203!2z54S86IKJ5bel5oi_IOWcmA!5e0!3m2!1sja!2sjp!4v1576981483388!5m2!1sja!2sjp" width="100%" height="260" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </section>
            <!-- access -->


            <!-- store -->
            <section id="store" class="store">
                <h2  class="section-title">Information</h2>
                <div class="store-inner">
                    <div class="store-details">
                        <dl class="store-details__item">
                            <dt class="store-details__item-title style-effect">Address</dt>
                            <dd class="store-details__item-text">
                                2-3-16, Oroku, Naha City,
                                <br>
                                Okinawa, Japan
                            </dd>
                        </dl>
                        <dl class="store-details__item">
                            <dt class="store-details__item-title style-effect_3">Access</dt>
                            <dd class="store-details__item-text style-effect_5">
                                <span class="style-effect_4">8 minutes by car from Naha Airport</span>
                                <br>
                                13 minute walk from Yui Rail
                                <br>
                                Onoyama-koen Station
                            </dd>
                        </dl>
                        <dl class="store-details__item">
                            <dt class="store-details__item-title">Parking Lot</dt>
                            <dd class="store-details__item-text style-effect_2">11</dd>
                        </dl>
                        <dl class="store-details__item">
                            <dt class="store-details__item-title">phone</dt>
                            <dd class="store-details__item-text">
                                <a href="tel:05034764726" class="tel">+81-50-3476-4726</a>
                            </dd>
                        </dl>
                        <dl class="store-details__item">
                            <dt class="store-details__item-title style-effect">Opening Hours</dt>
                            <dd class="store-details__item-text style-effect_se">
                                Lunch 11: 00-15: 00 (Last Call 14: 30)
                                <br>
                                Dinner 17:00-23:00 (Last Call 22:00)
                            </dd>
                        </dl>
                        <dl class="store-details__item">
                            <dt class="store-details__item-title">Number of Seats</dt>
                            <dd class="store-details__item-text style-effect_2 style-effect_se">60</dd>
                        </dl>
                        <dl class="store-details__item">
                            <dt class="store-details__item-title">Regular holiday</dt>
                            <dd class="store-details__item-text style-effect_2 style-effect_se">Tuesday</dd>
                        </dl>
                    </div>
                    <!-- <div class="store-img">
                        <img src="./image/store/store_img.jpg" alt="焼肉工房「團」 店舗情報 外観" class="store_img">
                    </div> -->
                </div>
                <div class="share">
                    <ul class="share-list">
                        <!-- <li>
                            <a href="" class="btn twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a href="" class="btn facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li> -->
                        <li>
                            <a href="https://www.instagram.com/p/BzPHF6vFhh9/?utm_source=ig_web_copy_link" class="btn instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="contact">
                    <a class="contact-btn" href="#">contact</a>
                </div>
            </section>
            <!-- store -->
        </div>
    </main>
    <!-- main end -->



    <!-- footer -->
    <footer>
        <p>Copyright(c)</p>
    </footer>
    <!-- footer end -->


    
    <script src="./js/jquery.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="./js/slick.js"></script>
    <script src="./js/style_sp.js"></script>
</body>
</html>