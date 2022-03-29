// https://github.com/proteusthemes/WAI-ARIA-Walker_Nav_Menu
jQuery( function ( $ ) {
    // Focus styles for menus when using keyboard navigation

    // Properly update the ARIA states on focus (keyboard) and mouse over events
    $( '.mainNavigation > ul' ).on( 'focus  mouseenter', '[aria-haspopup="true"]', function ( ev ) {
        $( ev.currentTarget ).attr( 'aria-expanded', true );
    } );

    // Properly update the ARIA states on blur (keyboard) and mouse out events
    $( '.mainNavigation > ul' ).on( 'focusout mouseleave', '[aria-haspopup="true"]', function ( ev ) {
        $( ev.currentTarget ).attr( 'aria-expanded', false );
    } );
} );