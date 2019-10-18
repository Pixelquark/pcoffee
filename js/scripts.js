$('.logContainer').hide();



if($(window).width()<505){$('.navContainer').hide();  };

$('#menuContainer').on('click', (function(){
  $('#menuContainer').removeClass('menuContainerAniIn');
  $('#menuContainer').removeClass('menuContainerAniOut');

  if($(window).width()>875){
    if ($('.logContainer').is(':visible')){
        $('.logContainer').hide(150);
        $('#menuContainer').addClass('menuContainerAniOut');
      }else{
        $('.logContainer').show(150);
        $('.navContainer').show(150);
        $('#menuContainer').addClass('menuContainerAniIn');
      }
    }

  if($(window).width()<875){

    if ($('.navContainer').is(':visible')){
        $('.navContainer').hide(150);
        $('#menuContainer').addClass('menuContainerAniOut');
      }else{

        $('.navContainer').show(150);
        $('#menuContainer').addClass('menuContainerAniIn');
      }
    }

  if($(window).width()<505){
    $('.navContainer').css("display","flex");
    if ($('.logoSlogan').is(':visible')){

        $('.logoSlogan').fadeOut(150);
        $('.navContainer').fadeIn(150);
        $('#menuContainer').addClass('menuContainerAniIn');

      }else{
        $('.navContainer').fadeOut(150);
        $('.logoSlogan').fadeIn(150);
        $('#menuContainer').addClass('menuContainerAniOut');
      }
    }

  if($(window).width()<400){

      if ($('.logoContainer').is(':visible')){

          $('.logoContainer').hide(1);

          $('.navContainer').fadeIn(150);
        $('#menuContainer').addClass('menuContainerAniIn');

      }else{
        $('.navContainer').fadeOut(100);
        $('.logoContainer').delay(300).fadeIn(150);
        $('#menuContainer').addClass('menuContainerAniOut');
      }
    }

  }));
