// $('#menuContainer').hide();
$('.logContainer').hide();


$('#menuContainer').on('click', (function(){
  $('#menuContainer').removeClass('menuContainerAni');
  if ($('.logContainer').is(':visible')){
      $('.logContainer').hide(100);
      $('#menuContainer').addClass('menuContainerAni');
    }else{
      $('.logContainer').show(100);
      $('#menuContainer').addClass('menuContainerAni');
    }
  }));
