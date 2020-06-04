// This is the script for Janes Site

$(document).ready(function(){
  //Variables

  // log the Variable to the console - check it is working

  // Fades the content when going throught the site
    $('.contentWrapper').fadeIn(400);
    $('a').click(function(){
      $('.contentWrapper').fadeOut(200);
    });
  // base width of nav bar on the width of the img
    var $imgWidth = $('#paintingPostImg').width();
    console.log($imgWidth);
    $('.paintingPostPrevNext').css('width', $imgWidth);
});

//check window load works. Not sure yet as to why this is important
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
