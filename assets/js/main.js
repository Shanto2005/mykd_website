// $(window).scroll(function(){
//     var scrollPosition = $(this).scroll();
//     if(scrollPosition >=90){
//         $('#header').addClass('scrolles');
//     } else{
//         $('#header').removeClass('scrolled')
//     }
// })

// var cursor = document.getElementById("cursor");
//   document.onmousemove = function(e){
//     cursor.style.left = (e.pageX - 25) + "px";
//     cursor.style.top = (e.pageY - 25) + "px";
//     cursor.style.display = "block";
//     cursor.style.display = "block";

//   }

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

var swiper = new Swiper('.about_services', {
    slidesPerView: 1,
    loop: 'true',
    keyboard: {
      enabled: true,
      slidesPerView: 3,
    },
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });


// tournament_js Start
// (function () {
//   const second = 1000,
//     minute = second * 60,
//     hour = minute * 60,
//     day = hour * 24;

//   let today = new Date(),
//     dd = String(today.getDate()).padStart(2, "0"),
//     mm = String(today.getMonth() + 1).padStart(2, "0"),
//     yyyy = today.getFullYear(),
//     nextYear = yyyy + 1,
//     dayMonth = "09/30/",
//     birthday = dayMonth + yyyy;

//   today = mm + "/" + dd + "/" + yyyy;
//   if (today > birthday) {
//     birthday = dayMonth + nextYear;
//   }

//   const countDown = new Date(birthday).getTime(),
//     x = setInterval(function () {

//       const now = new Date().getTime(),
//         distance = countDown - now;

//       const setInnerText = (elementId, value) => {
//         const element = document.getElementById(elementId);
//         if (element) {
//           element.innerText = value;
//         }
//       };

//       setInnerText("days", Math.floor(distance / day));
//       setInnerText("hours", Math.floor((distance % day) / hour));
//       setInnerText("minutes", Math.floor((distance % hour) / minute));
//       setInnerText("seconds", Math.floor((distance % minute) / second));

//       setInnerText("daysscnd", Math.floor(distance / day));
//       setInnerText("hoursscnd", Math.floor((distance % day) / hour));
//       setInnerText("minutesscnd", Math.floor((distance % hour) / minute));
//       setInnerText("secondsscnd", Math.floor((distance % minute) / second));

//       setInnerText("daysthird", Math.floor(distance / day));
//       setInnerText("hoursthird", Math.floor((distance % day) / hour));
//       setInnerText("minutesthird", Math.floor((distance % hour) / minute));
//       setInnerText("secondsthird", Math.floor((distance % minute) / second));

//       if (distance < 0) {
//         document.getElementById("headline").innerText = "It's my birthday!";
//         document.getElementById("countdown").style.display = "none";
//         document.getElementById("content").style.display = "block";
//         clearInterval(x);
//       }
//     }, 0);
// })();

  // tournament_js End