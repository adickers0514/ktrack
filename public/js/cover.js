$(document).ready(function() {


//Configure ScotchPanel




$(window).scroll(function() {
    var windowTop =  $(window).scrollTop();

    //updateCoverImagePos(windowTop);

    if (windowTop > 70) {
        //console.log();
        $('nav').addClass('follow');
        $('.followBarLight').addClass('hide');
        $('.followBarDark').removeClass('hide');

    } else {
        $('nav').removeClass('follow');
        $('.followBarLight').removeClass('hide');
        $('.followBarDark').addClass('hide');
    }
});




//place the logo image correctly:
updateLogoPos();


 $(window).resize(function() {
       updateLogoPos();
    });


function updateLogoPos() {
$('#logo').css({
        top : ($(window).height() - $('#logo').outerHeight()) / 2,
        left : ($(window).width() - $('#logo').outerWidth()) / 2
    });

}


function play() {
    setInterval(function(){
        var next = $(".slideshow .active").removeClass("active").next(".image");
        if (!next.length) {
            next = $(".slideshow .image:first");
        }
        console.log('next image');
        next.addClass("active");
    }, 5000);
}
    console.log('playing...');
play();
});

/*THIS IS WHERE SCRIPT FOR NAV BAR BEGINS*/

function updateCoverImagePos(wTop) {
    var imagePos =  Math.round(wTop/1.7);
    $("li.image").offset({ top: imagePos});
}


$(window).scroll(function() {

    var windowTop =  $(window).scrollTop();

    updateCoverImagePos(windowTop);
    
    if (windowTop > 50) {
        //console.log();
    $('nav').addClass('follow');

        
        

        //console.log('top: ' + windowTop + ', imagePos: ' + imagePos);

        //

        

        

        //var p = $( ".image" );
        //var position = p.position();
        //console.log('window.top pos: ' + $(window).scrollTop() + '/' + 'top: ' + position.top );

        
    } else {
        $('nav').removeClass('follow');
        $(".image").offset({ top: 0});
    }

});

