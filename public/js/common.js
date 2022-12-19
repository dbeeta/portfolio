$(document).ready(function() {

    if ( $(window).width() < 480) {   
        $(".img-bg-box").height($('.intro-img img').height());
        $(".project-div .lg-img").height($('.project-div .lg-img').width()/2);

        $('.preview-img').each(function() {
            $(this).removeClass('preview-img');
        });
    }
   
    setTimeout(() => {
        $(".laoding-div").fadeOut();
    }, 400);
});