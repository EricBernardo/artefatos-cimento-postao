

(function () {
  var carousels = document.querySelectorAll(".js-product-carousel");
  [].forEach.call(carousels, function (carousel) {
      carouselize(carousel);
  });
})();

function carouselize(carousel) {
  var productList = carousel.querySelector(".js-product-list");
  var productListWidth = 0;
  var productListSteps = 0;
  var products = carousel.querySelectorAll(".product");
  var productAmount = 0;
  var productAmountVisible = 4;
  var time = 1000;

  //Count all the products
  [].forEach.call(products, function (product) {
      productAmount++;
      productListWidth += 250;
      productList.style.width = productListWidth + "px";
  });

  // This is a bit hacky, let me know if you find a better way to do this!
  // Move the carousels product-list
  function moveProductList() {
      productList.style.transform =
          "translateX(-" + 205 * productListSteps + "px)";
  }

  let intervalNextSlide = null;
  let intervalPrevSlide = null;

  let nextSlide = function () {
      if (productListSteps < productAmountVisible) {
          productListSteps++;
          moveProductList();
      } else {
          clearInterval(intervalNextSlide);
          intervalPrevSlide = setInterval(prevSlide, time);
      }
  };

  let prevSlide = function () {      
      if (productListSteps > 0) {
          productListSteps--;
          moveProductList();
      } else {
          clearInterval(intervalPrevSlide);
          intervalNextSlide = setInterval(nextSlide, time);
      }
  };

  carousel.addEventListener('mouseleave', function() {
    clearInterval(intervalNextSlide);
    clearInterval(intervalPrevSlide);
  });

  carousel.addEventListener('mouseenter', function() {
    intervalNextSlide = setInterval(nextSlide, time);
  });

  carousel.querySelector(".carousel__view").style.display = "block";

}
