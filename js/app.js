window.addEventListener('load', function () {
  new Glider(document.querySelector('.carrusel_lista'), {
    slidesToShow: 2,
    slidesToScroll: 2,
    draggable: true,
    dots: '.carrusel_indicadores',
    arrows: {
      prev: '.carrusel_anterior',
      next: '.carrusel_siguiente'
    },
    breakpoint: 430,
    settings: {
      // Set to `auto` and provide item width to adjust to viewport
      slidesToShow: '2',
      slidesToScroll: '2',
      itemWidth: 100,
      duration: 0.25
    }
  }, {
    // screens greater than >= 1024px
    breakpoint: 1024,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
      itemWidth: 150,
      duration: 0.25
    }
  }

  )
})
