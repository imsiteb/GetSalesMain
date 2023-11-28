$(document).ready(function(){
  $('.items-block__item').click(function(event){
    $(this).toggleClass('liked');
    // let id = '#' + $(this).attr('id');
    // let img_url = '../' + $(id).children().attr('src');
    // let url = 'url("' + img_url + '") no-repeat center';
    // alert(url);
    // $.cookie('cookie_url', 'url');
    // if($.cookie('cookie_url')) alert(test);
    // alert($.cookie('cookie_url'));
  });

  // $(".favorite__items-block__item1").css("background", $.cookie('cookie_url'));



  $('.favorite__items-block__item2').click(function(event){
    $(this).toggleClass('deleted');
    $('.favorite__items-block__item2').css("background", "none");
    $('.favorite__items-block__item2').css("border", "none");
  });

  $('.favorite__items-block__item3').click(function(event){
    $(this).toggleClass('deleted');
    $('.favorite__items-block__item3').css("background", "none");
    $('.favorite__items-block__item3').css("border", "none");
  });

  $('.favorite__items-block__item1').click(function(event){
    $(this).toggleClass('deleted');
    $('.favorite__items-block__item1').css("background", "none");
    $('.favorite__items-block__item1').css("border", "none");
  });
});