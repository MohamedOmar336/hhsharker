// smoth scroll js


var html = document.documentElement;
var body = document.body;

var scroller = {
    target: document.querySelector("#scroll-container"),
    ease: 0.1, // <= scroll speed
    endY: 0,
    y: 0,
    resizeRequest: 1,
    scrollRequest: 0,
};

var requestId = null;

TweenLite.set(scroller.target, {
    rotation: 0.00,
    force3D: true
});

window.addEventListener("load", onLoad);

function onLoad() {
    updateScroller();
    window.focus();
    window.addEventListener("resize", onResize);
    document.addEventListener("scroll", onScroll);
}

function updateScroller() {

    var resized = scroller.resizeRequest > 0;

    if (resized) {
        var height = scroller.target.clientHeight;
        body.style.height = height - 6 + "px";
        scroller.resizeRequest = 0;
    }

    var scrollY = window.pageYOffset || html.scrollTop || body.scrollTop || 0;

    scroller.endY = scrollY;
    scroller.y += (scrollY - scroller.y) * scroller.ease;

    if (Math.abs(scrollY - scroller.y) < 0.05 || resized) {
        scroller.y = scrollY;
        scroller.scrollRequest = 0;
    }

    TweenLite.set(scroller.target, {
        y: -scroller.y
    });

    requestId = scroller.scrollRequest > 0 ? requestAnimationFrame(updateScroller) : null;
}

function onScroll() {
    scroller.scrollRequest++;
    if (!requestId) {
        requestId = requestAnimationFrame(updateScroller);
    }
}

function onResize() {
    scroller.resizeRequest++;
    if (!requestId) {
        requestId = requestAnimationFrame(updateScroller);
    }
}




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

$(document).ready(function() {
    let lastHoveredId = null;
    $('.menu-imge-div').hover(function() {
        const currentId = this.id;
        if (lastHoveredId && lastHoveredId !== currentId) {
            $(".menu-imge-div-" + lastHoveredId).removeClass("menuhovershow");
        }
        $(".menu-imge-div-" + currentId).addClass("menuhovershow");
        lastHoveredId = currentId;
    }, function() {});
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
        duration: 5000,
        easing: 'swing',
        step: function(now) {
            $(this).text(Math.ceil(now));
        }
    });
});

setTimeout(function() {
    $('.numberanimation-home-page').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
}, 4500);


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
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        mouseDrag: false,
        touchDrag: false,
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
            $('.home-commercial-section, .topic-slider-section, .sing-rec-pro-section, .disco-look-section').css('padding-left', (calculatePadding) + "px");
        }
        if (width <= 1280) {
            $('.home-commercial-section, .topic-slider-section, .sing-rec-pro-section, .disco-look-section').css('padding-left', "0px");
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

// $(document).ready(function() {
//     const classes = ['class1', 'class2', 'class3', 'class4'];
//     let index = 0;

//     setInterval(function() {
//         $('.commercial-list-home').removeClass(classes.join(' '));
//         $('.commercial-list-home').addClass(classes[index]);
//         index = (index + 1) % classes.length;
//     }, 5000);
// });


$(document).ready(function() {
    const classes = ['class1', 'class2', 'class3', 'class4'];
    let index = 0;
    let dragging = true;

    const cycleClasses = function() {
        $('.commercial-list-home').removeClass(classes.join(' '));
        $('.commercial-list-home').addClass(classes[index]);
        index = (index + 1) % classes.length;
    };

    const intervalId = setInterval(cycleClasses, 5000);

    $('.commercial-list-home').on('mousedown', function() {
        dragging = true;
        $(document).on('mousemove', onMouseMove);
    });
    $(document).on('mouseup', function() {
        dragging = true;
        $(document).off('mousemove', onMouseMove);
    });

    function onMouseMove(event) {
        if (dragging) {
            const mouseX = event.pageX;
            const mouseY = event.pageY;
            const classIndex = Math.floor(mouseX / 100) % classes.length;
            $('.commercial-list-home').removeClass(classes.join(' ')).addClass(classes[classIndex]);
        }
    }
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




// product main page single-gallery-image slider 
$('#single-gallery-image').owlCarousel({
    loop: true,
    margin: 0,
    dots: false,
    nav: true,
    center: true,
    items: 1,
    navText: ["<i class='fa-regular fa-arrow-left-long'></i>", "<i class='fa-regular fa-arrow-right-long'></i>"]
});


// product main page product type slider 
$('#pro-type-slider').owlCarousel({
    loop: false,
    margin: 0,
    dots: true,
    nav: true,
    center: true,
    items: 1,
    navText: ["<i class='fa-regular fa-arrow-left-long'></i>", "<i class='fa-regular fa-arrow-right-long'></i>"]
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





// residentials ac page last slider
jQuery(document).ready(function($) {
    var carousel = $("#image-cross-slider");
    carousel.owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        nav: true,
        center: true,
        items: 5,
        navText: ["<i class='fa-regular fa-arrow-left-long'></i>", "<i class='fa-regular fa-arrow-right-long'></i>"],
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
        var total = $('#image-cross-slider .owl-stage .owl-item.active').length;

        $('#image-cross-slider .owl-stage .owl-item').removeClass('one two tree four five');

        $('#image-cross-slider .owl-stage .owl-item.active').each(function(index) {
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






// single-product page slider
jQuery(document).ready(function($) {
    var carousel = $("#sign-cross-slider");
    carousel.owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        nav: false,
        center: true,
        items: 5,
        responsive: {
            0: {
                items: 1
            },
            575: {
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
        var total = $('#sign-cross-slider .owl-stage .owl-item.active').length;

        $('#sign-cross-slider .owl-stage .owl-item').removeClass('one two tree four five');

        $('#sign-cross-slider .owl-stage .owl-item.active').each(function(index) {
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




// commercial-ac-vrf page hover class add remove and sty one div
$(document).ready(function() {
    var lastHoveredBox = null;
    $(".col-vrf").on("mouseenter", function() {
        $(".col-vrf").removeClass("hovered");
        $(this).addClass("hovered");
    });
    $(".col-vrf").on("mouseleave", function() {
        lastHoveredBox = this;
    });
    $(".col-vrf").on("mouseleave", function() {
        $(lastHoveredBox).addClass("hovered");
    });
});



// Recommended Products slider 
$('#recommend-product').owlCarousel({
    loop: true,
    margin: 20,
    dots: true,
    nav: true,
    navText: ["<i class='fa-regular fa-arrow-left-long'></i>", "<i class='fa-regular fa-arrow-right-long'></i>"],
    responsive: {
        0: {
            items: 1.2,
        },
        480: {
            items: 1.2,
        },
        768: {
            items: 2.2,
        },
        992: {
            items: 3.2,
        }
    }
});


// Recommended Products slider 
$('#look-future-sldier').owlCarousel({
    loop: true,
    margin: 20,
    dots: false,
    nav: false,
    responsive: {
        0: {
            items: 1.15,
        },
        580: {
            items: 2.15,
        },
        768: {
            items: 2.15,
        },
        992: {
            items: 3.15,
        },
        2200: {
            items: 5.15,
        }
    }
});



// Recommended Products slider 
$('#view-all-slider').owlCarousel({
    loop: true,
    margin: 25,
    dots: false,
    nav: true,
    navText: ["<i class='fa-regular fa-arrow-left-long'></i>", "<i class='fa-regular fa-arrow-right-long'></i>"],
    responsive: {
        0: {
            items: 1,
        },
        480: {
            items: 1,
        },
        768: {
            items: 2,
        },
        992: {
            items: 2,
        },
        1099: {
            items: 3,
        }
    }
});






// home banner text animation
$('#home-text-animation').owlCarousel({
    animateOut: 'fadeOutDown',
    animateIn: 'fadeInDown',
    items: 1,
    loop: true,
    margin: 0,
    dots: false,
    nav: false,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: false,
    mouseDrag: false,
});

// home banner text animation
// var words = document.getElementsByClassName('word');
// var wordArray = [];
// var currentWord = 0;
// words[currentWord].style.opacity = 1;
// for (var i = 0; i < words.length; i++) {
//     splitLetters(words[i]);
// }

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
// changeWord();
// setInterval(changeWord, 4000);