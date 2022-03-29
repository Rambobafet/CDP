jQuery(function ($) {
    $('.navigation__mobileBtn').on('click', function(){
        const newState = $(this).attr('aria-expanded') === 'false';
        $('.mainNavigation').toggle(newState);
        $(this).attr('aria-expanded', newState.toString() );
    })

    $('.closeMobileMenu').on('click', function(){
        $('.navigation__mobileBtn').attr('aria-expanded', 'false');
        $('.mainNavigation').toggle(false);
    });
});