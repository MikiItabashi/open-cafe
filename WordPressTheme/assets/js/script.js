// ローディング判定
jQuery(function($) {
    jQuery(window).on("load", function() {
        jQuery("body").attr("data-loading", "true");
    });

    jQuery(function() {
        // スクロール判定
        jQuery(window).on("scroll", function() {
            if (100 < jQuery(this).scrollTop()) {
                jQuery("body").attr("data-scroll", "true");
            } else {
                jQuery("body").attr("data-scroll", "false");
            }
        });


        // ドロワーアイコンの表示設定
        var drawer = $('.js-drawer-fade');

        $(window).on('load', function() {
            if ($(window).width() > 767) {
                drawer.hide();
            };
        });
        $(window).on('scroll', function() {
            drawerFade();
        });
        $(window).on('resize', function() {
            drawerFade();
        });


        function drawerFade() {
            var windowSize = $(window).width();

            if (windowSize > 767) {
                if ($(this).scrollTop() > 700) {
                    // 指定px以上のスクロールでボタンを表示
                    drawer.fadeIn();
                } else {
                    // 画面が指定pxより上ならボタンを非表示
                    drawer.fadeOut();
                };
            } else {
                drawer.show();
            }
        };

        /* ドロワー */
        jQuery('.p-drawer-icon').on('click', function(e) {
            e.preventDefault();
            jQuery('.p-drawer-icon').toggleClass('is-active');
            jQuery('.p-drawer-content').toggleClass('is-active');
            jQuery('.p-drawer-background').toggleClass('is-active');
            return false;
        });
        jQuery('.p-drawer-content__item').on('click', function(e) {
            jQuery('.p-drawer-icon').trigger('click');
        });
        jQuery('.p-drawer-background').on('click', function(e) {
            jQuery('.p-drawer-icon').trigger('click');
        });

        /* スムーススクロール */
        jQuery('a[href^="#"]').click(function() {
            let header = jQuery(".js-header").height();
            let speed = 300;
            let id = jQuery(this).attr("href");
            let target = jQuery("#" == id ? "html" : id);
            let position = jQuery(target).offset().top - header;
            if ("fixed" !== jQuery("#header").css("position")) {
                position = jQuery(target).offset().top;
            }
            if (0 > position) {
                position = 0;
            }
            jQuery("html, body").animate({
                    scrollTop: position
                },
                speed
            );
            return false;
        });

        // swiper
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            effect: 'fade',
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            speed: 2000,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

    });
});