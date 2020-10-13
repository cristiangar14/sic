// menu de navegacion - localizacion
const currentLocation = location.href;
const menuItem = document.querySelectorAll('.nav-x');
const menulenght = menuItem.length

for(let i =0; i<menulenght; i++){
  if(menuItem[i].href === currentLocation){
    menuItem[i].className = "active";
  }
}



//carrusel del home seccion 1
$('.carrusel-home-seccion1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    animateOut: 'fadeOut',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
//carrusel del home seccion 2
$('.carrusel-home-seccion2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

//carrusel del home seccion 4
$('.carrusel-home-seccion4').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

//carrusel del home seccion 5
$('.carrusel-home-seccion5').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

//carrusel del nosotros seccion 3
$('.carrusel-nosotros-seccion3').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    animateOut: 'fadeOut',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
//carrusel de servicios seccion2
$('.carrusel-servicios-s2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:15000,
    animateOut: 'fadeOut',
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
//carrusel de servicios seccion2 imagenes
$('.carrusel-servicios-s2-imagenes').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoHeight: false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})