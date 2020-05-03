$(function() {
    $('.slider__inner').slick({
        nextArrow: '<button type = "button" class = "slick-btn slick-next" >  </button>',
        prevArrow: '<button type = "button" class = "slick-btn slick-prev" >  </button>',
        infinite: false
    });

    $('.slider__order').slick({
        nextArrow: '<button type = "button" class = "slick-btn slick-next" >  </button>',
        prevArrow: '<button type = "button" class = "slick-btn slick-prev" >  </button>',
        infinite: false
    });
});

$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth: true,
        loop: true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        }
    });
});