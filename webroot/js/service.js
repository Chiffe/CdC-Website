/**
 * Created by Jr on 20/04/2015.
 */

var cdcService = {
    init: function(){
        this.initBandeau();
        this.initShortcut();
    },
    initBandeau: function(){
        $(window).on('scroll', function(){
            if(cdcMain.widthQuery('min', 767)){
                if($(this).scrollTop() > 220){
                    $('.block_opa.pos_top').removeClass('pos_top');
                }else{
                    $('.block_opa').addClass('pos_top');
                }
            }
        });
    },
    initShortcut: function(){
        //Lors d'un click sur un raccourci étape
        $('.nav_step li:not(.separate)').on('click', function(){
            //Id de l'étape cible
            var id = $(this).attr('id');
            id = id.replace('nav_', '');
            //Hauteur de la div
            var targetScroll = $('#'+id).offset().top;
            //On se déplace jusqu'à la div
            $('html, body').animate({scrollTop: targetScroll}, 900);
        });

        //Pour l'init
        if(cdcMain.widthQuery('min', 768)){
            cdcService.checkStep();
        }

        //Lors du scroll
        $(window).on('scroll', function(){
            if(cdcMain.widthQuery('min', 768)) {
                cdcService.checkStep();
            }
        });
    },
    checkStep: function(){
        //Sur les block steps non active
        $('.block_step:not(.active)').each(function(){
            var offTop = $(this).offset().top;
            //Si le block est dans la zone d'activation
            var diff = offTop - $(window).scrollTop();
            if(diff >= 0 && diff <= 300){
                //On désactive les activate des autres block
                $('.block_step.active').removeClass('active');
                $('.nav_step li.active').removeClass('active');
                //On active les éléments qu'il faut
                $(this).addClass('active');
                $('#nav_'+($(this).attr('id'))).addClass('active');
            }
        });
    }
};

$(document).ready(function(){cdcService.init();});