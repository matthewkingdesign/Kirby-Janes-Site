// This is the script for Janes Site
//VARIABLES


$(document).ready(function(){
    $('.contentWrapper').fadeIn(400);
    $('a').click(function(){
      $('.contentWrapper').fadeOut(200);
    });
    var $imgWidth = $('#paintingPostImg').width();
    console.log($imgWidth);
    $('.paintingPostPrevNext').css('width', $imgWidth);
});

$(window).on('load', function() {
  console.log('hello window');
});

// if ($('#paintingPostImg').hasClass('portrait')) {
//       console.log('hello world');
//   $('#prevNavTag').css('margin-left', '10%');
//   // $('.paintingPostPrevNext').css('width', '30%');
// }


// $('.paintingImg').css({
//   'width':$imgWidth+'px'
// });
