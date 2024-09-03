// video stop on modal close
$("#videomodal").on('hidden.bs.modal', function(e) {
    $("#videomodal iframe, #videomodal video").attr("src", $("#videomodal iframe, #videomodal video").attr("src"));
});


// page logo loader
$('.page-loader').delay(1000).queue(function() {
    $(this).addClass("hide-loader");
});


// header scroll class add remove
$(window).scroll(function() {
    if ($(this).scrollTop() > 150) {
        $('.header').addClass('sticky-header');
    } else {
        $('.header').removeClass('sticky-header');
    }
});


// dark and light mod icon
$(function() {
    $('.moon-icon').on('click', function() {
        $('.dark-ligh-btn').addClass('dark-active');
    });
    $('.sun-icon').on('click', function() {
        $('.dark-ligh-btn').removeClass('dark-active');
    });
});


// megamenu hover class add remove
$(document).ready(function() {
    if ($(window).width() > 1199) {
        $('.megamenu').hover(function() {
            $(this).addClass("megamenu-active");
        }, function() {
            $(this).removeClass("megamenu-active");
        });
    } else {
        $('.megamenu').on('click', function() {
            $(this).toggleClass('megamenu-active');
        });
    }
});


// banner green line
$(document).ready(function() {
    $('#banner-green-line').owlCarousel({
        autoWidth: true,
        loop: true,
        margin: 0,
        dots: false,
        nav: false,
        autoplay: true,
        touchDrag: false,
        mouseDrag: false,
        autoplaySpeed: 4000,
        smartSpeed: 4000,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        slideTransition: 'linear',
    });
});


// number animation
$('.numberanimation').each(function() {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: 3000,
        easing: 'swing',
        step: function(now) {
            $(this).text(Math.ceil(now));
        }
    });
});



// home product slider
// $('#home-product-slider').owlCarousel({
//     loop: true,
//     margin: 30,
//     dots: false,
//     nav: false,
//     items: 5,
//     responsive: {
//         0: {
//             items: 1
//         },
//         480: {
//             items: 3
//         },
//         769: {
//             items: 5
//         }
//     }
// })


jQuery(document).ready(function($) {
    var carousel = $("#home-product-slider");
    carousel.owlCarousel({
        loop: true,
        margin: 30,
        dots: false,
        nav: false,
        items: 5,
        responsive: {
            0: {
                items: 1
            },
            575: {
                items: 3
            },
            992: {
                items: 5
            }
        }
    });

    checkClasses();
    carousel.on('translated.owl.carousel', function(event) {
        checkClasses();
    });

    function checkClasses() {
        var total = $('#home-product-slider .owl-stage .owl-item.active').length;

        $('#home-product-slider .owl-stage .owl-item').removeClass('one two tree four five');

        $('#home-product-slider .owl-stage .owl-item.active').each(function(index) {
            if (index === 0) {
                $(this).addClass('one');
            }
            if (index === 1) {
                $(this).addClass('two');
            }
            if (index === 2) {
                $(this).addClass('tree');
            }
            if (index === 3) {
                $(this).addClass('four');
            }
            if (index === 4) {
                $(this).addClass('five');
            }
        });
    }
});



// css add according to screen size
function setWindowWH() {
    var windowWidth = $(window).width(),
        windowHeight = $(window).height();
    var calculatePadding = (windowWidth - "1420") / 2;
    $(document).ready(function() {
        width = $(window).width();
        if ($(window).width() > 1280) {
            $('.home-commercial-section, .topic-slider-section').css('padding-left', (calculatePadding) + "px");
        }
        if (width <= 1280) {
            $('.home-commercial-section, .topic-slider-section').css('padding-left', "0px");
        }
    });
}
$(window).on("load resize", function() {
    setWindowWH();
});



// home-commercial-slider 
$('#home-commercial-slider').owlCarousel({
    loop: false,
    margin: 20,
    dots: false,
    nav: false,
    items: 1.5,
    autoplay: true,
    autoplaySpeed: 3000,
    smartSpeed: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {

        },
        480: {

        },
        769: {
            items: 2.5,
        },
        992: {
            items: 1.5,
        }
    }
});

$(document).ready(function() {
    const classes = ['class1', 'class2', 'class3', 'class4'];
    let index = 0;

    setInterval(function() {
        $('.commercial-list-home').removeClass(classes.join(' '));
        $('.commercial-list-home').addClass(classes[index]);
        index = (index + 1) % classes.length;
    }, 5000);
});





// cursor Move element animation
var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    friction = 1 / 30;

function moveBackground() {
    x += (lFollowX - x) * friction;
    y += (lFollowY - y) * friction;
    //  translate = 'translateX(' + x + 'px, ' + y + 'px)';
    translate = 'translateX(' + x + 'px) translateY(' + y + 'px)';

    $('.animate-this').css({
        '-webit-transform': translate,
        '-moz-transform': translate,
        'transform': translate
    });
    window.requestAnimationFrame(moveBackground);
}
$(window).on('mousemove click', function(e) {
    var isHovered = $('.animate-this:hover').length > 0;
    // console.log(isHovered);
    //if(!$(e.target).hasClass('animate-this')) {
    if (!isHovered) {
        var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX)),
            lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
        lFollowX = (25 * lMouseX) / 100;
        lFollowY = (15 * lMouseY) / 100;
    }
});
moveBackground();






// news page banner slider
// $(document).ready(function() {
//     $('#news-banner-slider').owlCarousel({
//         loop: true,
//         margin: 30,
//         dots: false,
//         nav: false,
//         stagePadding: 200,
//         responsive: {
//             0: {
//                 items: 1
//             },
//             480: {
//                 items: 1
//             },
//             769: {
//                 items: 3
//             }
//         }
//     });
// });



jQuery(document).ready(function($) {
    var carousel = $("#news-banner-slider");
    carousel.owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        nav: false,
        stagePadding: 100,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: 50,
            },
            480: {
                items: 1
            },
            992: {
                items: 3
            }
        }
    });

    checkClasses();
    carousel.on('translated.owl.carousel', function(event) {
        checkClasses();
    });

    function checkClasses() {
        var total = $('#news-banner-slider .owl-stage .owl-item.active').length;

        $('#news-banner-slider .owl-stage .owl-item').removeClass('one two tree four five');

        $('#news-banner-slider .owl-stage .owl-item.active').each(function(index) {
            if (index === 0) {
                $(this).addClass('one');
            }
            if (index === 1) {
                $(this).addClass('two');
            }
            if (index === 2) {
                $(this).addClass('tree');
            }
            if (index === 3) {
                $(this).addClass('four');
            }
            if (index === 4) {
                $(this).addClass('five');
            }
        });
    }
});



// industry-insights topics slider 
$('#indu-topic-slider').owlCarousel({
    loop: true,
    margin: 20,
    dots: false,
    nav: false,
    items: 1.5,
    autoplay: true,
    autoplaySpeed: 3000,
    autoplayHoverPause: true,
    responsive: {
        0: {

        },
        480: {

        },
        768: {
            items: 2.7,
        },
        992: {
            items: 2.7,
        }
    }
});



// // industry-insights last section slider 
$(document).ready(function() {
    $('#indu-last-slider-1').owlCarousel({
        autoWidth: true,
        loop: true,
        margin: 30,
        dots: false,
        nav: false,
        autoplay: true,
        touchDrag: false,
        mouseDrag: false,
        autoplaySpeed: 6000,
        smartSpeed: 6000,
        autoplayTimeout: 6000,
        autoplayHoverPause: false,
        slideTransition: 'linear',
    });
});

$(document).ready(function() {
    $('#indu-last-slider-2').owlCarousel({
        autoWidth: true,
        rtl: true,
        loop: true,
        margin: 30,
        dots: false,
        nav: false,
        autoplay: true,
        touchDrag: false,
        mouseDrag: false,
        autoplaySpeed: 6000,
        smartSpeed: 6000,
        autoplayTimeout: 6000,
        autoplayHoverPause: false,
        slideTransition: 'linear',
    });
});




// home banner text animation
var words = document.getElementsByClassName('word');
var wordArray = [];
var currentWord = 0;
words[currentWord].style.opacity = 1;
for (var i = 0; i < words.length; i++) {
    splitLetters(words[i]);
}

function changeWord() {
    var cw = wordArray[currentWord];
    var nw = currentWord == words.length - 1 ? wordArray[0] : wordArray[currentWord + 1];
    for (var i = 0; i < cw.length; i++) {
        animateLetterOut(cw, i);
    }
    for (var i = 0; i < nw.length; i++) {
        nw[i].className = 'letter behind';
        nw[0].parentElement.style.opacity = 1;
        animateLetterIn(nw, i);
    }
    currentWord = (currentWord == wordArray.length - 1) ? 0 : currentWord + 1;
}

function animateLetterOut(cw, i) {
    setTimeout(function() {
        cw[i].className = 'letter out';
    }, i * 80);
}

function animateLetterIn(nw, i) {
    setTimeout(function() {
        nw[i].className = 'letter in';
    }, 340 + (i * 80));
}

function splitLetters(word) {
    var content = word.innerHTML;
    word.innerHTML = '';
    var letters = [];
    for (var i = 0; i < content.length; i++) {
        var letter = document.createElement('span');
        letter.className = 'letter';
        letter.innerHTML = content.charAt(i);
        word.appendChild(letter);
        letters.push(letter);
    }
    wordArray.push(letters);
}
changeWord();
setInterval(changeWord, 4000);