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
  (function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;
  
    //I'm adding this section so I don't have to keep updating this pen every year :-)
    //remove this if you don't need it
    let today = new Date(),
        dd = String(today.getDate()).padStart(2, "0"),
        mm = String(today.getMonth() + 1).padStart(2, "0"),
        yyyy = today.getFullYear(),
        nextYear = yyyy + 1,
        dayMonth = "09/30/",
        birthday = dayMonth + yyyy;
    
    today = mm + "/" + dd + "/" + yyyy;
    if (today > birthday) {
      birthday = dayMonth + nextYear;
    }
    //end
    
    const countDown = new Date(birthday).getTime(),
        x = setInterval(function() {
  
          const now = new Date().getTime(),
                distance = countDown - now;
  
          document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);


          document.getElementById("daysscnd").innerText = Math.floor(distance / (day)),
          document.getElementById("hoursscnd").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutesscnd").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("secondsscnd").innerText = Math.floor((distance % (minute)) / second);


          document.getElementById("daysthird").innerText = Math.floor(distance / (day)),
          document.getElementById("hoursthird").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutesthird").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("secondsthird").innerText = Math.floor((distance % (minute)) / second);
  
          //do something later when date is reached
          if (distance < 0) {
            document.getElementById("headline").innerText = "It's my birthday!";
            document.getElementById("countdown").style.display = "none";
            document.getElementById("content").style.display = "block";
            clearInterval(x);
          }
          //seconds
        }, 0)
    }());
  // tournament_js End