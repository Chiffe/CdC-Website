/**
 * Created by Jr on 20/04/2015.
 */

var cdcHome = {
    minHeight: 660,

    init: function(){
        this.resizeHome();
        this.initShowEl();
        this.initSlick();
        this.initGoogle();
        this.initSequence();
        if(cdcMain.widthQuery('min', 1451)) {
            this.initParallax();
        }
    },
    initSlick: function(){
        $('.slider').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            dots: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 6000,
            pauseOnHover: true,
            pauseOnFocus: false,
            responsive: [
                {
                    breakpoint: 1600,
                    settings : {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 1100,
                    settings : {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 700,
                    settings : {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        pauseOnHover: false,
                        autoplaySpeed: 4500,
                        fade: true
                    }
                }
            ]
        });
    },
    initSequence: function(){
        // Get the Sequence element
        var sequenceElement = document.getElementById("sequence-home");

        // Change Sequence's default options
        var options = {
            autoPlayInterval: 6000,
            autoPlay: true,
            autoPlayPauseOnHover: false
        };

        // Initiate Sequence
        var sequence1 = sequence(sequenceElement, options);

    },
    resizeHome: function(){
        //Hauteur de la fenetre
        var windowH = $(window).height();

        if(windowH > cdcHome.minHeight){
            $('#home').css('height', windowH);
            $('#home .outter-wrapper').css('padding-top', (windowH-(cdcHome.minHeight))/2);
        }
    },
    initShowEl: function(){
        $('#home .hide_el').addClass('show_el');
        $('#home .hide_el').removeClass('hide_el');
    },
    initGoogle: function(){
        $('#map').on('click', function(){
            $(this).find('iframe').css('pointer-events', 'auto');
            $(this).find('.curtain').addClass('off');
        });

        $('#map').on('mouseleave', function(){
            $(this).find('iframe').css('pointer-events', 'none');
            $(this).find('.curtain').removeClass('off');
        });
    },
    initParallax: function(){
        // init controller
        var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration:'500%'}});

        new ScrollMagic.Scene({triggerElement: ".bd_one"})
            .setTween(".bd_one", {y: "-25%"})
            .addTo(controller);

        new ScrollMagic.Scene({triggerElement: "#pub"})
            .setTween("#pub .outter-wrapper .bd_two", {y: "-25%"})
            .addTo(controller);

        new ScrollMagic.Scene({triggerElement: ".bd_three"})
            .setTween(".bd_three", {y: "-25%"})
            .addTo(controller);

        new ScrollMagic.Scene({triggerElement: "#about"})
            .setTween("#about #sequence-home .scrollmagic", {y: "-15%"})
            .addTo(controller);
    }
};

$(document).ready(function(){cdcHome.init();});