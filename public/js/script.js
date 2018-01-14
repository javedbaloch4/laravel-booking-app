$(document).ready(function () {
    $('.wishlist span').text('');
    $('.checklist span').text('');
    $('.user span').text('');
    $('.header-top-links .my_account a').css({'background-color': '#3ac3ff', 'color': '#FFF'});

    // Top nav (Wish list) toggle
    $('.wishlist').hover(function () {
        $('.my_account span').text('');
        $('.wishlist span').text(' My Wish List');
        $('.header-top-links .my_account a').css({'background-color': '#EEE', 'color': '#AAA'});
    }, function () {
        $('.wishlist span').text('');
        $('.my_account span').text(' My Account');
        $('.header-top-links .my_account a').css({'background-color': '#3ac3ff', 'color': '#FFF'});

    });

    // Top nav (Check out) toggle
    $('.checklist').hover(function () {
        $('.my_account span').text('');
        $('.checklist span').text(' Checkout');
        $('.header-top-links .my_account a').css({'background-color': '#EEE', 'color': '#AAA'});
    }, function () {
        $('.checklist span').text('');
        $('.my_account span').text(' My Account');
        $('.header-top-links .my_account a').css({'background-color': '#28abe3', 'color': '#FFF'});
    });

    // Top nav (AdminUser list) toggle
    $('.user').hover(function () {
        $('.my_account span').text('');
        $('.user span').text(' Sign In');
        $('.header-top-links .my_account a').css({'background-color': '#EEE', 'color': '#AAA'});
    }, function () {
        $('.user span').text('');
        $('.my_account span').text(' My Account');
        $('.header-top-links .my_account a').css({'background-color': '#28abe3', 'color': '#FFF'});
    });

    // Top nav (AdminUser list) toggle
    $('.logout').hover(function () {
        $('.my_account span').text('');
        $('.logout span').text(' Logout');
        $('.header-top-links .my_account a').css({'background-color': '#EEE', 'color': '#AAA'});
    }, function () {
        $('.logout span').text('');
        $('.my_account span').text(' My Account');
        $('.header-top-links .my_account a').css({'background-color': '#28abe3', 'color': '#FFF'});
    });

    // Shopping cart effect
    $('#shopping-cart').click(function () {
        $('header #sub-shopping-cart').slideToggle();
    });

    // Responsive menu effect
    $('.menu-switch').click(function () {
        $('header #responsive-menu ul').slideToggle();
    });
    $('.close').click(function () {
        $('header #responsive-menu ul').slideUp();
    });

    // Header bar products slider
    $(".owl-carousel").owlCarousel({
        items: 3,
        autoPlay: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: false,
                loop: false
            }
        }
    });

    // Featured Product Slider


    // Hot Category Slider
    $(".hot-category-slider").owlCarousel({
        items: 1
    });

    // Collection Slider
    $('.collection-slider').owlCarousel({
        items: 1
    });

});

$('.owl-prev').on('click', function () {
    alert('Apna');
});


// =====================


// Sign Up validation