$('#menuContainer').on('click', (function(){
    if($(window).width()>768){
      if ($('.navContainer').is(':visible') && $('.logContainer').is(':visible')){
        $('.navContainer').fadeOut(300);
        $('.logContainer').fadeOut(300);
      }else if($(window).width()<768 ){

      }else{
        $('.navContainer').fadeIn(300);
        $('.navContainer').css("display","flex");
        $('.logContainer').fadeIn(300);
        $('.logContainer').css("display","flex");
      }
    }
  }));
