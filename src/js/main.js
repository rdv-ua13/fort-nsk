document.addEventListener("DOMContentLoaded", () => {
    const app = new application();
    app.init();
});

function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initBasicSlider();
    this.initTeamSlider();
    this.initReviewSlider();
    this.initMaskedInput();
    this.initFancyBehavior();
};

// Initialize basic slider
application.prototype.initBasicSlider = function () {
    if ($('.basic-slider').length) {
        const slider = $('[data-basic-slider]');

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);

            const basicSliderSetting = {
                slidesPerView: 1,
                slidesPerGroup: 1,
                spaceBetween: 20,
                direction: 'horizontal',
                navigation: {
                    nextEl: '.basic-slider-wrap-' + i + ' .swiper-button-next',
                    prevEl: '.basic-slider-wrap-' + i + ' .swiper-button-prev',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    992: {
                        slidesPerView: 3,
                    },
                    1200: {
                        slidesPerView: 4,
                    },
                }
            };
            let basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider', basicSliderSetting);
        });
    }
};

// Initialize team slider
application.prototype.initTeamSlider = function () {
    if ($('.team-slider').length) {
        const teamSliderSetting = {
            slidesPerView: "auto",
            slidesPerGroup: 1,
            spaceBetween: 24,
            centeredSlides: true,
            direction: 'horizontal',
            navigation: {
                nextEl: '.team-slider-wrap .swiper-button-next',
                prevEl: '.team-slider-wrap .swiper-button-prev',
            },
            breakpoints: {
                768: {
                    centeredSlides: false,
                },
            }
        };
        let teamSlider = new Swiper('.team-slider-wrap .team-slider', teamSliderSetting);
    }
};

// Initialize review slider
application.prototype.initReviewSlider = function () {
    if ($('.reviews-info__slider').length) {
        const teamSliderSetting = {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 12,
            direction: 'horizontal',
            navigation: {
                nextEl: '.reviews-info__slider-wrap .swiper-button-next',
                prevEl: '.reviews-info__slider-wrap .swiper-button-prev',
            },
            breakpoints: {
                576: {
                    slidesPerView: "auto",
                    centeredSlides: true,
                },
                992: {
                    slidesPerView: "auto",
                    centeredSlides: false,
                },
            }
        };
        let teamSlider = new Swiper('.reviews-info__slider', teamSliderSetting);
    }
};

// Mobile number mask
application.prototype.initMaskedInput = function () {
    $(".isPhone").mask("+7-(999)-999-99-99", { autoclear: false });
};


// Initialize custom fancy behavior
application.prototype.initFancyBehavior = function () {
    const body = $('body');
    const fancybox = $('[data-fancybox]');

    fancybox.on('click', function () {
        let currentSrc = $(this).data('src');

        $('.modal').not(currentSrc).closest('.fancybox__container.is-animated').click();
    });

    $(document).on('click', function (e) {
        if ($('.fancybox__slide.is-selected.has-inline').is(e.target) || $('.fancybox__slide .carousel__button.is-close').is(e.target)) {
            body.removeClass('overflow-hidden');
        }
    });
};