const sliderResult = document.querySelector('#slider1');
const sliderMedics = document.querySelector('#slider2');


var slider = function (itemId, controls) {
  console.log(itemId);
  var slideNow = 1;
  var slideCount = $(itemId).children().length;
  var slideInterval = 3000;
  var navBtnId = 0;
  var translateWidth = 0;


      var switchInterval = setInterval(nextSlide, slideInterval);

      $(itemId).parent().hover(function() {
          clearInterval(switchInterval);
      }, function() {
          switchInterval = setInterval(nextSlide, slideInterval);
      });

      $(controls + ' .slider__next-btn').hover(function() {
          clearInterval(switchInterval);
      }, function() {
          switchInterval = setInterval(nextSlide, slideInterval);
      });

      $(controls +' .slider__prev-btn').hover(function() {
          clearInterval(switchInterval);
      }, function() {
          switchInterval = setInterval(nextSlide, slideInterval);
      });

      $(controls + ' .slider__next-btn').click(function() {
          nextSlide();
      });

      $(controls + ' .slider__prev-btn').click(function() {
          prevSlide();
      });

      $(controls + '_.slide-nav-btn').click(function() {
          navBtnId = $(this).index();

          if (navBtnId + 1 != slideNow) {
              translateWidth = -$(itemId).parent().width() * (navBtnId);
              $(itemId).css({
                  'transform': 'translate(' + translateWidth + 'px, 0)',
                  '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                  '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
              });
              slideNow = navBtnId + 1;
          }
      });

  function nextSlide() {
      if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
          $(itemId).css('transform', 'translate(0, 0)');
          slideNow = 1;
      } else {
          translateWidth = -$(itemId).parent().width() * (slideNow);
          $(itemId).css({
              'transform': 'translate(' + translateWidth + 'px, 0)',
              '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
              '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
          });
          slideNow++;
      }
  }

  function prevSlide() {
      if (slideNow == 1 || slideNow <= 0 || slideNow > slideCount) {
          translateWidth = -$(itemId).parent().width() * (slideCount - 1);
          $(itemId).css({
              'transform': 'translate(' + translateWidth + 'px, 0)',
              '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
              '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
          });
          slideNow = slideCount;
      } else {
          translateWidth = -$(itemId).parent().width() * (slideNow - 2);
          $(itemId).css({
              'transform': 'translate(' + translateWidth + 'px, 0)',
              '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
              '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
          });
          slideNow--;
      }
    }
}
window.addEventListener(`resize`, event => {
  let viewPort = window.innerWidth;
  if(viewPort < 1440)  {
    if(!sliderResult.classList.contains('slider1')){
      sliderResult.classList.add('slider1');
    }
    if(!sliderMedics.classList.contains('slider2')){
      sliderMedics.classList.add('slider2');
    }

  }
  if(viewPort >= 1440)  {
    if(sliderResult.classList.contains('slider1')){
      sliderResult.classList.remove('slider1');
      sliderResult.style.transform = 'translate(0)';
    }
    if(sliderMedics.classList.contains('slider2')){
      sliderMedics.classList.remove('slider2');
      sliderMedics.style.transform = 'translate(0)';
    }
  }
}, false);

$(document).ready(function() {
  slider('.slider1', '#controls1');
  slider('.slider2', '#controls2');
  slider('#slider3', '#controls3');
}
);
