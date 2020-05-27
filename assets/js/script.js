$(document).ready(function(){
    $('.contentWrapper').fadeIn(400);
    $('a').click(function(){
      $('.contentWrapper').fadeOut(200);
    });
    if ($('#paintingPostImg').hasClass('portrait')) {
          console.log('hello world');
      $('#prevNavTag').css('margin-left', '10%');
      // $('.paintingPostPrevNext').css('width', '30%');
    }
});
