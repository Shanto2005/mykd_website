// $(window).scroll(function(){
//     var scrollPosition = $(this).scroll();
//     if(scrollPosition >=90){
//         $('#header').addClass('scrolles');
//     } else{
//         $('#header').removeClass('scrolled')
//     }
// })

var cursor = document.getElementById("cursor");
  document.onmousemove = function(e){
    cursor.style.left = (e.pageX - 25) + "px";
    cursor.style.top = (e.pageY - 25) + "px";
    cursor.style.display = "block";
    cursor.style.display = "block";

  }

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

var swiper = new Swiper('.mykd_project', {
    slidesPerView: 1,
    spaceBetween: 10,
    keyboard: {
      enabled: true,
    },
    // autoplay: {
    //   delay: 2000,
    //   disableOnInteraction: false,
    // },
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
      1400: {
        slidesPerView: 4,
      },
      1600: {
        slidesPerView: 5,
      },
    },
  });

var swiper = new Swiper('.sponsor_slide', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: 'true',
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
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1400: {
        slidesPerView: 5,
      },
    },
  });