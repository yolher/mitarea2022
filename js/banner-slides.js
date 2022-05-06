$(document).on("ready",function(){
	  //================ slide principal ===========
    $('.banner-mitarea').slick({
      dots: true,
      infinite: true,
      speed: 300,
      autoplay: true,
      slidesToShow: 1,
      adaptiveHeight: true,
      arrows: false
    });

    $('.comentarios-mitarea').slick({
      dots: false,
      infinite: true,
      speed: 300,
      autoplay: true,
      slidesToShow: 1,
      adaptiveHeight: true,
      arrows: true
    });
});	