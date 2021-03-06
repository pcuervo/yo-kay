var $=jQuery.noConflict();

(function($){
    "use strict";
    $(function(){

        /*------------------------------------*\
            #GLOBAL
        \*------------------------------------*/
        $(window).ready(function(){
            footerBottom();
            $('.carousel').carousel({
                interval:false
            });
            //finalConcurso();
            if ( $("#concurso-terminado").length > 0 ) {
               $('#concurso-terminado').modal('show');
            }
            if(window.location.href.indexOf("album/?cat=") > -1) {
                $( ".carousel-control" ).addClass('hidden');
            };

            if ( $('.box-raking').length > 0 && $('.js-current-user').length > 0 ){
                $('.box-raking').scrollTo(".js-current-user", 2000);
            }

        });

        $(window).on('resize', function(){
            footerBottom();
        });

        $('.image-perfil').on('click', function(event){
            event.preventDefault();

            //Cuando ya hay un perfil seleccionado previamente
            $( ".image-perfil div.perfil-selected" ).removeClass('perfil-selected');
            $( ".image-perfil div.perfil-selected" ).addClass('perfil-unselected');

            $(this).find('div').addClass('perfil-selected');
            //console.log('perfil seleccionado');

            if( $('.image-perfil div.perfil-selected').hasClass('perfil-unselected') ){
                $( ".image-perfil div.perfil-selected" ).removeClass('perfil-unselected');
            }

            var id = $(this).data('id');
            $('#avatar-participante').val(id);
        });

        // CARGAR MEDALLA
        if (document.getElementById('gifCargando')) {

            var $img = $('#gifCargando');
            $img.show(0);
            $('#imgMedalla').hide(0);
            setTimeout(function() {
                $img.attr('src', $img.attr('src'));
            }, 0);
            setTimeout(function() {
                $('#imgMedalla').show(0);
            }, 3200);
            setTimeout(function() {
                $img.hide(0);
                $('.formCargaMedalla').addClass('hidden');
                $('#textoCargaExitosa').removeClass('hidden');
            }, 3700);

        }

    });
})(jQuery);

//Footer fixed

function footerBottom(){
    var alturaFooter = getFooterHeight();
    $('.main').css('padding-bottom', alturaFooter );
}

function getHeaderHeight(){
    return $('.js-header').outerHeight();
}

function getFooterHeight(){
    return $('footer').outerHeight();
}

//Show controls video
$('video').hover(function toggleControls() {
    if (this.hasAttribute("controls")) {
        this.removeAttribute("controls")
    } else {
        this.setAttribute("controls", "controls")
    }
});

//Display de medalla cargada
$("#medalla-cargada").delay(3000).queue(function(){
    $(this).removeClass("hidden").dequeue();
    $(this).addClass("block").dequeue();
});


function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    alert(d);
    d.setTime(d.getTime() + (exdays*1*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}


function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


//Open Modal
function finalConcurso(){

    $today = new Date().getTime();
    $endDate = new Date('5 Jan 2017 19:00:00 GMT').getTime() //5hrs. de diferencia

    if ( $endDate > $today ){
        //console.log('aún no pasa');
    } else{
        //console.log('ya pasó');
        var $limiteCookie = getCookie("Concurso");
        //console.log( $limiteCookie );

        if ($limiteCookie == '') {
            $('#concurso-terminado').modal('show');
            $('#ranking-cerrado').removeClass('hidden');
            $('#ranking-abierto').addClass('hidden');
            document.cookie="Concurso=acabo; expires=Thu, 30 Sep 2018 00:06:40 GMT";
        }
    }
}

jQuery.fn.scrollTo = function(elem, speed) {
    $(this).animate({
        scrollTop:  $(this).scrollTop() - $(this).offset().top + $(elem).offset().top
    }, speed == undefined ? 1000 : speed);
    return this;
};