$('.accordion').accordion({
	heightStyle: 'content',
	header: '.accordion-header',
  active: 0
});

$('.center').slick({
  centerMode: true,
  // autoplay: true,
	dots: true,
	arrows:false,
  centerPadding: '20px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 1190,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '30px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '10px',
        slidesToShow: 1
      }
    }
  ]
});