document.addEventListener('DOMContentLoaded', function () {
    var Shuffle = window.Shuffle;
    var element = document.querySelector('.my-shuffle-container');
    var shuffle = new Shuffle(element, {
        itemSelector: '.grid-item',
    });

    // Add event listeners for filter buttons
    var filterButtons = document.querySelectorAll('.btn-filter');
    filterButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var group = button.getAttribute('data-group');
            shuffle.filter(group);
        });
    });
});



(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Date and time picker
    $('.date').datetimepicker({
        format: 'L'
    });
    $('.time').datetimepicker({
        format: 'LT'
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: false,
        animateOut: 'fadeOutLeft',
        items: 1,
        dots: true,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: false,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
    });



$(document).ready(function() {
  // Change language every 5 seconds
  setInterval(function() {
    var activeElement = $(".brand-name .active");
    var nextElement = activeElement.next();

    // Wrap around to the first element if reaching the end
    if (!nextElement.length) {
      nextElement = $(".brand-name h1").first();
    }

    // Animate slide up and down of elements
    activeElement.animate({ opacity: 0, transform: "translateY(100px)" }, 500);
    nextElement.animate({ opacity: 1, transform: "translateY(0)" }, 500, function() {
      activeElement.removeClass("active");
      nextElement.addClass("active");
    });
  }, 5000);

  // Initially center the active text
  $(".brand-name").css("justify-content", "center");
});


    
})(jQuery);



