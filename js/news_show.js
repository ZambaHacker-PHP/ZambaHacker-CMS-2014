 var $j = jQuery.noConflict();
     
     $j(document).ready(function() {
     setInterval(slide_news, 6000);
     });
     
    function slide_news() {
    var nextidx = (parseInt($j('#slideshow .current').index() + 1) == $j('#slideshow .slide').length) ? 0 : parseInt($j('#slideshow .current').index() + 1);
    $j('#slideshow .current').fadeOut('slow', function() {
        $j(this).removeClass('current');
        $j('#slideshow .slide').eq(nextidx).fadeIn('slow', function() {
            $j(this).addClass('current');
        });
    });
    }

    