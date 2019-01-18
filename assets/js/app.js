/* JS */

$('#menu').click(function() {
  $('#nav').toggleClass('shown');
  return false;
});

$( function(){

  $('.liensfooter1').hover( function(){

      $('.separator1').addClass("rotate");
      $('.separator2').addClass("rotate");

      $('.separator1').removeClass("rotateout");
      $('.separator2').removeClass("rotateout");

  $('.liensfooter1').mouseout( function(){

      $('.separator1').removeClass("rotate");
      $('.separator2').removeClass("rotate");

      $('.separator1').addClass("rotateout");
      $('.separator2').addClass("rotateout");

      });
  });
});


$( function(){
      $('.liensfooter2').hover( function(){

          $('.separator2').addClass("rotate");
          $('.separator3').addClass("rotate");
  
          $('.separator2').removeClass("rotateout");
          $('.separator3').removeClass("rotateout");
  
      $('.liensfooter2').mouseout( function(){
  
          $('.separator2').removeClass("rotate");
          $('.separator3').removeClass("rotate");
  
          $('.separator2').addClass("rotateout");
          $('.separator3').addClass("rotateout");

      });
  });
});

$( function(){
      $('.liensfooter3').hover( function(){

          $('.separator3').addClass("rotate");
          $('.separator4').addClass("rotate");
  
          $('.separator3').removeClass("rotateout");
          $('.separator4').removeClass("rotateout");
  
      $('.liensfooter3').mouseout( function(){
  
          $('.separator3').removeClass("rotate");
          $('.separator4').removeClass("rotate");
  
          $('.separator3').addClass("rotateout");
          $('.separator4').addClass("rotateout");
      });
  });
});

              
      

      




  