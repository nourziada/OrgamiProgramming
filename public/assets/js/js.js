// for slider auction
$('.auction-slider').slick({
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 3,
    rtl: true,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

  // for slider auction
$('.auction-slider2').slick({
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 4,
    rtl: true,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
  $(document).ready(function(){

    $('.slick-next').html('<i class="icon icon-right-arrow"></i>');
    $('.slick-next').addClass('fas');
    $('.slick-prev').html('<i class="icon icon-left-arrows"></i>');
  });