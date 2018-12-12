$(document).ready(function(){

 $(".fancybox").fancybox();

});


$(document).ready(function(){
    var contador=0;
  $('#btn').hover(function(){
    $('.spn1').css('bottom','7px');
    $('.spn3').css('top','7px');
    $('.spn2').css('margin-top','5px');
    $('.spn2').css('margin-bottom','5px');
    },function(){
        $('.spn1').css('bottom','0px');
        $('.spn3').css('top','0px');
    });
});

$(document).ready(function(){
  var contador=0;
    $('#btn').on('click',function(){
        contador=contador+1;
      if(contador==1){
        $('.spn2').css('background-color','transparent');
        $('.spn1').css('bottom','-10px');
        $('.spn3').css('top','-10px');
        $('.spn1').css('transform','rotate(45deg)');
        $('.spn3').css('transform','rotate(-45deg)');
        $('.spn4').css('opacity','1');
        $('.spn6').css('opacity','1');
        $('.spn1').css('opacity','0');
        $('.spn2').css('opacity','0');
        $('.spn3').css('opacity','0');

        $('.subheader-menu').css('opacity','1');


      }else if(contador==2){
        $('.spn1').css('transform','rotate(0deg)');
        $('.spn3').css('transform','rotate(0deg)');
        $('.spn2').css('background-color','white');
        $('.spn1').css('bottom','0px');
        $('.spn3').css('top','0px');
        $('.spn4').css('opacity','0');
        $('.spn6').css('opacity','0');
        $('.spn1').css('opacity','1');
        $('.spn2').css('opacity','1');
        $('.spn3').css('opacity','1');

          $('.subheader-menu').css('opacity','0');

          contador=0;
          }

      });
});

$(document).ready(function(){
    var contador=0;
  $('#btn2').hover(function(){
    $('.spn12').css('bottom','7px');
    $('.spn32').css('top','7px');
    $('.spn22').css('margin-top','5px');
    $('.spn22').css('margin-bottom','5px');
    },function(){
        $('.spn12').css('bottom','0px');
        $('.spn32').css('top','0px');
    });
});

$(document).ready(function(){
  var contador=0;
    $('#btn2').on('click',function(){
        contador=contador+1;
      if(contador==1){
        $('.spn22').css('background-color','transparent');
        $('.spn12').css('bottom','-10px');
        $('.spn32').css('top','-10px');
        $('.spn12').css('transform','rotate(45deg)');
        $('.spn32').css('transform','rotate(-45deg)');
        $('.spn42').css('opacity','1');
        $('.spn62').css('opacity','1');
        $('.spn12').css('opacity','0');
        $('.spn22').css('opacity','0');
        $('.spn32').css('opacity','0');
        $('.bte2').css('position','relative');
        $('.bte2').css('z-index','99999');
        $('.subheadermovil-menu').css('visibility','visible');

      }else if(contador==2){
        $('.spn12').css('transform','rotate(0deg)');
        $('.spn32').css('transform','rotate(0deg)');
        $('.spn22').css('background-color','white');
        $('.spn12').css('bottom','0px');
        $('.spn32').css('top','0px');
        $('.spn42').css('opacity','0');
        $('.spn62').css('opacity','0');
        $('.spn12').css('opacity','1');
        $('.spn22').css('opacity','1');
        $('.spn32').css('opacity','1');
        $('.bte2').css('position','relative');
        $('.bte2').css('z-index','9');
        $('.subheadermovil-menu').css('visibility','hidden');

          contador=0;
          }

      });
});
