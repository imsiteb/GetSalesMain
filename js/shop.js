$(document).ready(function () {

  $('.shop__sliders').slick({
    arrows: true,
    infinite: true,
    centerMode: true,
    slidesToShow: 3,
    // responsive: [
    //   {
    //     breakpoint: 768,
    //     settings: {
    //       arrows: false,
    //       centerMode: true,
    //       centerPadding: '40px',
    //       slidesToShow: 3
    //     }
    //   },
    //   {
    //     breakpoint: 480,
    //     settings: {
    //       arrows: false,
    //       centerMode: true,
    //       centerPadding: '40px',
    //       slidesToShow: 1
    //     }
    //   }
    // ]
  });

  $('#liked-img').on({
    'click': function () {
      var src = ($(this).attr('src') === 'img/liked_br.png')
        ? 'img/to_like.png'
        : 'img/liked_br.png';
      $(this).attr('src',src);
    }
  });

})