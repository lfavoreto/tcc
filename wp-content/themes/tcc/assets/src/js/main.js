(function($){
    $(document).ready(function() {

        //Mobile Menu
        $('header .mobile').on('click', show);

        function show(){
            $('header .mobile').toggleClass('buttonChangeToClose');
            $('header nav').toggleClass('openMenu');
            $('header .redes-sociais').toggleClass('openMenu');
        }

        $("main.pageHome section.slider .slider-banners").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            fade: true,
            appendDots: $('.banner-dots'),
            customPaging : function(slider, i) {
                return '<span class="dot"></span>'
            },
        });

        $("main.pageSobre section.galeria .slider-principal").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            fade: true,
            prevArrow: "<div class='slick-arrow prev'></div>",
            nextArrow: "<div class='slick-arrow next'></div>",
            asNavFor: "main.pageSobre section.galeria .slider-nav",
        });

        $("main.pageSobre section.galeria .slider-nav").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            focusOnSelect: true,
            asNavFor: "main.pageSobre section.galeria .slider-principal",
            responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }]
          });

          $("main.pageLoja section.banner .content").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            fade: true,
            prevArrow: "<div class='slick-arrow prev'></div>",
            nextArrow: "<div class='slick-arrow next'></div>",
        });
        
        var qt = $('.single-product-page .product.product_cat-guardaria .in-stock').html().replace(/[^0-9]/g,'');
        $('.single-product-page .product.product_cat-guardaria .in-stock').html(qt + ' vagas disponíveis');
    });
})(jQuery);