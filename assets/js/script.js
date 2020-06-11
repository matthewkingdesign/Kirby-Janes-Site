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
    $('.paintingPostPrevNext').css('width', $imgWidth);
});

//check window load works. Not sure yet as to why this is important
$(window).on('load', function() {
  console.log('hello window');
});
