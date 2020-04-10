
var sp_nav = $('.header-nav__menu-button');
var nav = $('.header-nav__menu-list');
var link = $('.header-nav__menu-item__text');
var main_cover = $('main');

var sp_nav_lan = $('.header-nav__language-button');
var nav_lan = $('.header-nav__language-list');
var link_lan = $('.header-nav__language-item__text');

// ドロワ-
$(sp_nav).on('click', function() {
    $(nav).slideToggle();
    $(this).toggleClass('active');
    $('header').toggleClass('open');
    $('.header-nav__menu-button > small').fadeToggle();
    if (sp_nav.hasClass('active')) {
        main_cover.on('click', function () {
            sp_nav.removeClass('active');
            main_cover.removeClass('active'); 
            nav.slideUp();
            $('header').removeClass('open');
            $('.header-nav__menu-button > small').fadeToggle();
        });
    }
});

$(link).on('click', function() {
    $(nav).slideUp();
    $(sp_nav).removeClass('active');
    $('header').toggleClass('open');
    $('.header-nav__menu-button > small').fadeToggle();
});

//言語切り替えボタン
$(sp_nav_lan).on('click', function() {
    $(nav_lan).slideToggle();
    $(this).toggleClass('active');
    // $('header').toggleClass('open');
    if (sp_nav_lan.hasClass('active')) {
        main_cover.on('click', function () {
            sp_nav_lan.removeClass('active');
            main_cover.removeClass('active'); 
            nav_lan.slideUp();
            // $('header').removeClass('open');
        });
    }
});

$(link_lan).on('click', function() {
    $(nav_lan).slideUp();
    $(sp_nav_lan).removeClass('active');
    // $('header').toggleClass('open')
});

// ドロップダウン 
$(function(){
    $('.dropdown-menu__title').on('click', function(){
        $(this).next().slideToggle('fast');
        main_cover.on('click', function(){
            $('.dropdown-menu__list').slideUp();
        });
    });
});

// スクロール
$(function(){
    var headerHight = 100;
    // #で始まるアンカーをクリックした場合に処理
    $('a[href^="#"]').click(function() {
       // スクロールの速度
       var speed = 400; // ミリ秒
       // アンカーの値取得
        var href= $(this).attr("href");
       // 移動先を取得
        var target = $(href == "#" || href == "" ? 'html' : href);
       // 移動先を数値で取得
        var position = target.offset().top-headerHight;
       // スムーススクロール
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
    });
});


//スライダー
$(document).ready(function(){
    $('.slide_list').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        centerMode: false,
        // centerPadding: '100px',
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
    });
});

//ポップアップ（複数）
$(function(){
    $('.js-modal-open').each(function(){
        $(this).on('click',function(){
            var target = $(this).data('target');
            var modal = document.getElementById(target);
            $(modal).fadeIn();
            return false;
        });
    });
    $('.js-modal-close').on('click',function(){
        $('.js-modal').fadeOut();
        return false;
    }); 
});


// スライダー(サムネイル付き)
$(function(){
    var setMainId = '#slider_main';
    var setThumbId = '#slider_thumb';
    var slideTime = 1000;
    var delayTime = 5000;

    $(setMainId).each(function(){
        var sliderWidth = $(this).width();
        var sliderHeight = $(this).height();

        var listWidth = parseInt($(this).children('ul').children('li').css('width'));
        var listCount = $(this).children('ul').children('li').length;

        var ulWidth = (listWidth)*(listCount);

        $(setMainId + ' ul').css({
            width: (ulWidth),
            height: (sliderHeight)
        });

        $(setThumbId + ' ul li:first').addClass('active');
        $(setThumbId + ' ul li').css({opacity:'0.7'});

        $(setThumbId + ' ul li').hover(function(){
            clearInterval(setTimer);
            $(this).stop().animate({opacity:'1'},300);
            var connectCont = $(setThumbId + ' ul li').index(this);
            $(setMainId + ' ul').stop().animate({left:(-(sliderWidth)*(connectCont))},slideTime);
            $(setThumbId + ' ul li').removeClass('active');
            $(this).addClass('active');
        },function(){
            $(this).stop().animate({opacity:'0.7'},300);
            timer();
        });

        timer();

        function timer() {
            setTimer = setInterval(function(){
                $(setMainId + ' ul').each(function(){
                    var moveLeft = parseInt($(this).css('left'));
                    var listLengh = $(setThumbId + ' ul li').length;

                    var listWidth = parseInt($(setMainId + ' ul li').css('width'));
                    var moveLengh = -((listWidth)*((listLengh)-1));

                    if(moveLeft == moveLengh){
                        $(setMainId + ' ul').stop().animate({left:'0'},slideTime);
                        $(setThumbId + ' ul li.active').each(function(){
                            $(this).removeClass('active');
                            $(setThumbId + ' ul li:first').addClass('active');
                        });
                    }else{
                        $(setMainId + ' ul').stop().animate({left:'-=' + (sliderWidth)},slideTime);
                        $(setThumbId + ' ul li.active').each(function(){
                            $(this).removeClass('active');
                            $(this).next().addClass('active');
                        });
                    }
                });
            },delayTime);
        };
    });
});
