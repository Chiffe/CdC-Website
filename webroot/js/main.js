/**
 * Created by Jr on 20/04/2015.
 */

/**
 * Fonction qui submit le form, une fois le captcha google ok
 *
 * @param token
 */
function formSubmit(token){
    document.getElementById('contact_form').submit();
}

/**
 * Charge le widget de recaptcha de Google au chargement de la page.
 */
var onloadCaptcha = function() {
    cdcMain.renderCaptcha();
};

var cdcMain = {

    init: function(){
        //Affichage de l'adresse mail contact
        $('.email_contact').html('contact<span class="color">@</span>comdechef.fr');

        //Init SmoothScroll
        jQuery.scrollSpeed(100, 1500);

        /*Cacher les messages alertes*/
        setTimeout(function(){
            $('div.alert:not(.great)').hide('slow', function() {$('div.alert:not(.great)').remove();});
        }, 20000);

        //Click sur les boutons contact
        $('#block_contact, #menu_contact').on('click', function(){
            var target = $('#footer').offset().top;
            $('html, body').animate({scrollTop: target}, 900, function(){
                //On focus le form
                $('#footer form #msg').attr('placeholder', 'C\'est à vous...');
                $('#footer form #msg').focus();
            });
            //On rabat le menu, s'il est ouvert
            if($('#menu_button').hasClass('active')){
                $('#menu_button').removeClass('active');
                $('#menu').removeClass('active');
            }
        });

        //Click sur le bouton Top
        $('#to_top').on('click', function(){
            cdcMain.scrollTop();
        });

        //Init tooltip
        $('[data-toggle="tooltip"]').tooltip();

        this.initShowEl();
        this.initMenu();
        this.hoveredFunc('#footer .rs span.sprite_main');
        this.hoveredFunc('#menu .rs span.sprite_main');
        this.submitGoogle();
    },
    /**
     * Génère le captcha de google
     */
    renderCaptcha: function(){
        grecaptcha.render('cont_captcha', {
            'sitekey': '6LcJBR8UAAAAAGuQZgns3MAUXyDdonhqgsHLlTPj',
            'size': 'invisible',
            'callback' : formSubmit
        });
    },
    /**
     * Vérifie que l'utilisateur n'est pas un robot, après validation du formulaire
     */
    submitGoogle: function(){
        $('#contact_form').on('submit', function(){
            event.preventDefault();
            grecaptcha.execute();
        });
    },
    initMenu: function(){
        //Apparition du bouton
        $('#menu_button.menu_hide').removeClass('menu_hide');

        //Lors du click sur le menu button
        $('#menu_button').on('click', function(){
            if($(this).hasClass('active')){
                $(this).removeClass('active');
                $('#menu').removeClass('active');
            }else{
                $(this).addClass('active');
                $('#menu').addClass('active');
            }
        });

        //Click extérieur au menu
        $('#menu').on('click touchstart', function(event){
            if($(this).is(event.target)){
                $(this).removeClass('active');
                $('#menu_button').removeClass('active');
            }
        });
    },
    hoveredFunc: function(selector, target){
        $(selector).hover(
            function(){
                if(target == undefined){
                    var nameClass = $(this).attr('class');
                    $(this).attr('class', nameClass+'_hover');
                }else{
                    var nameClass = $(this).find(target).attr('class');
                    $(this).find(target).attr('class', nameClass+'_hover');
                }
            },
            function(){
                if(target == undefined){
                    var nameClass = $(this).attr('class');
                    nameClass = nameClass.replace('_hover', '');
                    $(this).attr('class', nameClass);
                }else{
                    var nameClass = $(this).find(target).attr('class');
                    nameClass = nameClass.replace('_hover', '');
                    $(this).find(target).attr('class', nameClass);
                }
            }
        );
    },
    scrollTop: function(top){
        if(top === undefined)
            top = 0;
        //On remonte en haut de la page
        $('html, body').animate({scrollTop: top}, {duration:900, queue:false});
    },
    widthQuery: function(type, width) {
        if (jQuery.inArray(type, ["min", "max"]) == -1)
            return undefined;

        return window.matchMedia("(" + type + "-width: " + width + "px)").matches;
    },
    initShowEl: function(){
        $(window).on('scroll', function(){
            $('.hide_el').each(function(){
                if(cdcMain.checkvisible($(this))){
                    $(this).addClass('show_el');
                    $(this).removeClass('hide_el');
                }
            });
        });
    },
    checkvisible: function(el){
        var vpH = $( window ).height(), // Viewport Height
            st = $( window ).scrollTop(), // Scroll Top
            y = $(el).offset().top, // element top
            h = $(el).outerHeight(); // element height

        y = y+300;

        return ( ( y + h > st ) && ( y - st < vpH ) );
    },
    getCookie: function(cname){
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
        }
        return "";
    },
    ajaxRequest: function(url, postVars, callback, dataType){
        //Token csrf
        if(cdcMain.getCookie('csrfToken') !== '' && (typeof postVars == 'object')&& postVars['_csrfToken'] == undefined){
            postVars['_csrfToken'] = cdcMain.getCookie('csrfToken');
        }
        //Si dataType non défini, alors json
        if (dataType == undefined)
            dataType = 'json';
        $.ajax({
            type: 'POST',
            dataType: dataType,
            url: url,
            data: postVars,
            success: function(datas){
                if (callback != undefined)
                    callback(datas);
            }
        });
    }
};

$(document).ready(function(){cdcMain.init();});