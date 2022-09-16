$(function(){
  $('#dHokkaido, #dTohoku, #dKanto, #dChubu, #dKinki, #dChugoku-Shikoku, #dKyushu-Okinawa').hide();
   
  $('#aHokkaido').click(function(){
    $('#all').hide();
    $('#dHokkaido').show();
  });
  
  $('#cHokkaido_1').hide();
  $('#pHokkaido_1').click(function(){
    $('#cHokkaido_1').toggle();
  });
  
  
  $('#aTohoku').click(function(){
    $('#all').hide();
    $('#dTohoku').show();
  });
  
  
  $('#aKanto').click(function(){
    $('#all').hide();
    $('#dKanto').show();
  });
  
  $('#aChubu').click(function(){
    $('#all').hide();
    $('#dChubu').show();
  });
  
  
  $('#aKinki').click(function(){
    $('#all').hide();
    $('#dKinki').show();
  });
  
  
  $('#aChugoku-Shikoku').click(function(){
    $('#all').hide();
    $('#dChugoku-Shikoku').show();
  });
  
  
  $('#aKyushu-Okinawa').click(function(){
    $('#all').hide();
    $('#dKyushu-Okinawa').show();
  });
  
  
  
  $('.back_map').click(function(){
    $('#dHokkaido, #dTohoku, #dKanto, #dChubu, #dKinki, #dChugoku-Shikoku, #dKyushu-Okinawa').hide();
    $('#all').show();
  });
  
});

$(function(){
  
});