// header
jQuery(document).ready(function ($) {
    $('.stellarnav').stellarNav({
        breakpoint: 991,
        position: 'right',
        // phoneBtn: '18009997788',
        // locationBtn: 'https://www.google.com/maps'
    });

    // backto-top btn script
var btn = jQuery('#backto-top');
jQuery(window).scroll(function() {
  if (jQuery(window).scrollTop() > 300) {
	btn.addClass('show');
  } else {
	btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  jQuery('html, body').animate({scrollTop:0}, '1000');
});
// backto-top btn script end

    // banner slider
    $('.banner-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        animateIn: 'zoomOutUp',
        autoplay: true,
        infinity: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false,
            },
            1000: {
                items: 1,
                nav: false,
                loop: true
            }
        }
    });

    // proerties slider
    $('.proerties-carousel').owlCarousel({
        loop:true,
        responsiveClass:true,
        autoplay: true,
        margin:20,
        autoplayTimeout: 2000,
        dots: true,
        dotsEach: 1, 
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:4,
                nav:false,
                loop:true
            }
        }
    });

    // testimonial slider
    $('.testimonials-carousel').owlCarousel({
        loop:true,
        responsiveClass:true,
        autoplay: true,
        margin:30,
        autoplayTimeout: 2000,
        dots: true,
        nav:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:1,
                nav:true
            },
            850:{
                items:2,
                nav:true
            },
            1000:{
                items:3,
                nav:true,
                loop:true
            }
        }
    });

    // blog slider
    $('.blog-carousel').owlCarousel({
        loop:true,
        responsiveClass:true,
        autoplay: true,
        margin:30,
        autoplayTimeout: 2000,
        dots: true,
        nav:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:true
            },
            1000:{
                items:3,
                nav:true,
                loop:true
            }
        }
    });


});

// counter section
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".counter");

    counters.forEach((counter) => {
        const updateCount = (target) => {
            let count = 0;
            const duration = 10000;
            const increment = target / (duration / 100);
            const step = () => {
                count = Math.ceil(count + increment);
                counter.textContent = count;

                if (count < target) {
                    requestAnimationFrame(step);
                } else {
                    counter.textContent = target;
                }
            };

            requestAnimationFrame(step);
        };

        const targetValue = parseInt(counter.textContent, 10);
        updateCount(targetValue);
    });
});

window.addEventListener('load', function() {
    const preloader = document.getElementById('preloader');
    
    // Hide preloader after the page is fully loaded
    preloader.style.opacity = '0';
    preloader.style.transition = 'opacity 0.5s ease';

    setTimeout(() => {
        preloader.style.visibility = 'hidden'; // Prevents interaction with the preloader
    }, 500); // Match this duration with the transition duration
});



// Select all links with hashes
jQuery('a[href*="#"].hash')
// Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                    &&
                    location.hostname == this.hostname
                    ) {
                // Figure out element to scroll to
                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    jQuery('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function () {
                        // Callback after animation
                        // Must change focus!
                        var $target = jQuery(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        }
                        ;
                    });
                }
            }
        });

$('.hash_area a.hash').on('click', function (e) {
    e.preventDefault();

    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top - 170
    }, 500, 'linear');
});