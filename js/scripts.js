
//Menu HEADER renponsivo INICIO
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
    $('.navContainer').css("display", "flex");
    $('.navContainer').hide();
    if ($('.logoSlogan').is(':visible')){

        $('.logoSlogan').hide();
        $('.navContainer').fadeIn(150);


        $('#menuContainer').addClass('menuContainerAniIn');

      }else{
        $('.navContainer').fadeOut(150);
        $('.logoSlogan').fadeIn(150);

        $('#menuContainer').addClass('menuContainerAniOut');
      }
    }

  if($(window).width()<400){
    $('.navContainer').css("display", "flex");
    $('.navContainer').hide();

      if ($('.logoContainer').is(':visible')){

          $('.logoContainer').hide(1);
          $('.navContainer>ul').css("padding","0 0 0 0");
          $('.navContainer').css("marginRight","1em");
          $('.navContainer').fadeIn(150);

        $('#menuContainer').addClass('menuContainerAniIn');

      }else{
        $('.navContainer').fadeOut(100);
        $('.logoContainer').show(150);

        $('#menuContainer').addClass('menuContainerAniOut');
      }
    }

  }));
//Menu HEADER renponsivo Fim
