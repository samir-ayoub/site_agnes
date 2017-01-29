$(document).ready(function(){
  
  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if(scroll > 100 ){
      $('body').addClass("fixed-header");
    }else{
      $('body').removeClass("fixed-header");
    }
  });

  $('.crd-post p').has('iframe').css('text-align', 'center');

  $('.crd-post').each(function(){
    var currentTitle = $(this).find('.title').text();
    var currentUrl = $(this).data('urlshort');
    var shareUrl = "whatsapp://send?text=" + currentTitle + ' em ' + currentUrl;
    $(this).find('.sharedaddy ul').append('<li class="hidden-lg hidden-md share-whatsapp"><a rel="nofollow" class="share-whatsapp sd-button share-icon no-text" href="'+shareUrl+'" target="_blank" title="Click to share on Whatsapp"><span></span><span class="sharing-screen-reader-text">Click to share on Whatsapp (Opens in new window)</span></a></li>');
  });

});