// This is the script for Janes Site

$(document).ready(function(){

  // Fades the content when going throught the site
    $('.contentWrapper').fadeIn(400);
    $('a').click(function(){
      $('.contentWrapper').fadeOut(200);
    });
  // base width of nav bar on the width of the img
    var $imgWidth = $('#paintingPostImg').width();
    console.log($imgWidth);
    var $imgHeight = $('#paintingPostImg').height();
    console.log($imgHeight);
    $('.paintingPostPrevNext').css('width', $imgWidth);
    var mq = window.matchMedia( "(max-width: 1000px)" );
    if (mq.matches) {
      console.log("helllllo there");
      $('.leftContent').css('margin-top', $imgHeight + 50);
    }
});

//check window load works. Not sure yet as to why this is important
$(window).on('load', function() {
  console.log('hello window');
});
