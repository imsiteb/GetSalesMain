const menu = document.querySelector('.burger__menu')
const btn = document.querySelector('.menu__item-burger')
const body = document.body;

if (menu && btn) {
  btn.addEventListener('click', () => {
    menu.classList.toggle('active')
  })
}

$(document).ready(function () {
  $('.sliders').slick({
    arrows: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    draggable: false,
    centerMode: false
  });

  $('.shop__sliders').slick({
    arrows: true,
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    draggable: false,
    centerMode: true
  });
})  