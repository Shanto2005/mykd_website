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

var swiper = new Swiper('.streamers_slid', {
    slidesPerView: 1,
    spaceBetween: 10,
    keyboard: {
      enabled: true,
    },
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      576: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 4,
      },
      1400: {
        slidesPerView: 5,
      },
    },
  });

// var swiper = new Swiper('.mykd_project', {
//     slidesPerView: 1,
//     spaceBetween: 10,
//     keyboard: {
//       enabled: true,
//     },
//     // autoplay: {
//     //   delay: 2000,
//     //   disableOnInteraction: false,
//     // },
//     pagination: {
//       el: '.swiper-pagination',
//       clickable: true,
//     },
//     breakpoints: {
//       576: {
//         slidesPerView: 2,
//       },
//       768: {
//         slidesPerView: 3,
//       },
//       992: {
//         slidesPerView: 4,
//       },
//       1400: {
//         slidesPerView: 5,
//       },
//     },
//   });