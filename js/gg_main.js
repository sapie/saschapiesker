jQuery(document).ready(function($) {
    $count=1;

    $('.post-thumbs').each(
        function(){
            if($(this).offset().top-100 <= $(window).scrollTop()+$(window).height()){
                $(this).addClass("loaded");
            }   
            if($count%2==0){
                $(this).addClass("right");
            }
        $count=$count+1;
    });

    $('#flexslider li').each(
        function(){
            $(this).css('height', '100%');
    });

    $('.post .metaslider img, .metaslider, .slider, .post-thumbs').each(
        function(){
            if($(this).offset().top <= $(window).scrollTop()+$(window).height()){
                 $(this).addClass("loaded");  
                 //echo($(this).offset().top-100+" &lt;"+$(window).scrollTop()+$(window).height());
            }
        });

    $('.header-image').each(
    function(){
        if($(this).offset().top-$(this).height() <= $(window).scrollTop()+$(window).height()){
                $(this).addClass("loaded");
        }
    });

	$(window).scroll(function () {
		var $this = $(this),
		$head = $('#head');
		if ($this.scrollTop() != 0) {
			$( '.header-wrapper' ).removeClass( 'ontop');
		} else {
			$( '.header-wrapper' ).addClass( 'ontop' );
		}
        $('.post img, .metaslider, .slider, .post-thumbs').each(
        function(){
            if($(this).offset().top <= $(window).scrollTop()+$(window).height()){
                 $(this).addClass("loaded");
            }
        });
	})
    /*if($(window).innerWidth() <= 658){
            $("#logo").attr("src","/wp-content/themes/GGeffert/images/bildmarke_sw.png");
        }else{
            $("#logo").attr("src","/wp-content/themes/GGeffert/images/wortbildmarke_retina.png");
        }
    $( window ).resize(function() {
        if($(window).innerWidth() <= 658){
            $("#logo").attr("src","/wp-content/themes/GGeffert/images/bildmarke_sw.png");
        }else{
            $("#logo").attr("src","/wp-content/themes/GGeffert/images/wortbildmarke_retina.png");
        }
    });
    if($(window).width() <= 658){
        $("#logo").attr("src","/wp-content/themes/GGeffert/images/bildmarke_sw.png");
    }*/


    $( ".intro-mask" ).click(function(){$( ".intro-mask" ).addClass("fadeout");});
    setTimeout(function(){$( ".intro-mask" ).addClass("fadeout");}, 7000);

    if(detectIE()){
        $('body').addClass('ie');
    }
    setTimeout(function(){$(window).trigger('resize');}, 100);
    setTimeout(function(){$(window).trigger('resize');}, 150);
    setTimeout(function(){$(window).trigger('resize');}, 200);
    //setTimeout(function(){$('.flexslider').flexslider();}, 250);
    //var stateObj = { foo: "bar" };
    //if(window.location.href.split('?').length > 1){window.location.href = window.location.href.split('?')[0];}
    
});// $( document ).ready()

/**
 * detect IE
 * returns version of IE or false, if browser is not Internet Explorer
 */
function detectIE() {
    var ua = window.navigator.userAgent;

    var msie = ua.indexOf('MSIE ');
    if (msie > 0) {
        // IE 10 or older => return version number
        return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
    }

    var trident = ua.indexOf('Trident/');
    if (trident > 0) {
        // IE 11 => return version number
        var rv = ua.indexOf('rv:');
        return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
    }

    var edge = ua.indexOf('Edge/');
    if (edge > 0) {
       // IE 12 => return version number
       return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
    }

    // other browser
    return false;
}

