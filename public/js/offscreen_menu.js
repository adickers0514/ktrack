
console.log('fired up the offscreen menu');

var menustate = false;

//update menu position

$(window).resize(function() {
    updateMenuPos();
});

$('.osm-close-control').on('click', function() {
    toggleMenu();
});


function updateMenuPos() {
    if(menustate==true) {
        $('#offscreenmenu').css({
            left : ($(window).width() - $('#offscreenmenu').width())
        });

    } else {
        $('#offscreenmenu').css({
            left : ($(window).width())
        });
    }
}


updateMenuPos();

function toggleMenu() {
    if(menustate==false) {
        menustate=true;
        console.log('display menu');
        updateMenuPos();
        $('#offscreenmenu').removeClass('hide');


    } else {
        menustate=false;
        console.log('hide menu');
        $('#offscreenmenu').addClass('hide');
    }
}

$('.toggle-menu').on('click', function() {
    toggleMenu();
});

