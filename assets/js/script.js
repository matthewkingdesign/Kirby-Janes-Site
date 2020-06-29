// This is the script for Janes Site
$(document).ready(function(){
    $( ".rightContent, .paintinsGrid, .poemsContainer, .contentWrapper, .paintingsPostWrapper, .homePageImg").animate({
    opacity: 1
  }, 500);
    $( ".leftContent" ).animate({
    opacity: 1
  }, 500);
  $('a').click(function(e) {
  e.preventDefault();
  var linkUrl = $(this).attr('href');
  setTimeout(function(url) { window.location = url; }, 600, linkUrl);
});
  $('a').click(function() {
    $('.contentWrapper, .homePageImg').animate({
      opacity: 0
    }, 600);
  });
});
//check window load works. Not sure yet as to why this is important
$(window).on('load', function() {
  var $imgWidth = $('#paintingPostImg').width();
  console.log($imgWidth);
    // base width of nav bar on the width of the img
  $('.paintingPostPrevNext').css('width', $imgWidth);
  var $imgHeight = $('#paintingPostImg').height();
  console.log($imgHeight);
  var mq = window.matchMedia( "(max-width: 1000px)" );
  if (mq.matches) {
    console.log("helllllo there");
    $('.leftContent').css('margin-top', $imgHeight + 50);
  }
});
