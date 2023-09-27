// $(window).scroll(function(){
//     var scrollPosition = $(this).scroll();
//     if(scrollPosition >=90){
//         $('#header').addClass('scrolles');
//     } else{
//         $('#header').removeClass('scrolled')
//     }
// })

document.addEventListener(
    "DOMContentLoaded", () => {
        const menu = new MmenuLight(
            document.querySelector( "#mykd_menu" ),
            "(max-width: 1200px)"
        );

        const navigator = menu.navigation();
        const drawer = menu.offcanvas();

        document.querySelector( "a[href='#mykd_menu']" )
            .addEventListener( "click", ( evnt ) => {
                evnt.preventDefault();
                drawer.open();
            });
    }
);