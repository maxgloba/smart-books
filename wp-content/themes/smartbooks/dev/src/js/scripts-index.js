/* --------------------
  START mini cart
-------------------- */
(function(){

//= miniCart/quantity.js
//= miniCart/cartAction.js
//= miniCart/addToCart.js
//= miniCart/removeFromCart.js
//= miniCart/openCart.js
//= miniCart/closeCart.js
//= miniCart/closeDiscount.js
//= partials/timer.js

})();
/* --------------------
  END mini cart
-------------------- */

//= partials/popup.js
//= partials/faqs.js
//= partials/gs.js

let productScroll = localStorage.getItem('productScroll'),
  productBox = document.getElementsByClassName(`${productScroll}`);
if(productScroll){
  productBox[0].scrollIntoView();
  localStorage.removeItem('productScroll');
}

// document.querySelector('.woocommerce-notices-wrapper').innerHTML = ' ';

//= partials/slider.js
const slider = tns({
  container: '.reviews-slider',
  items: 1,
  autoplay: true,
  nav: false,
  responsive: {
    768: {
      items: 3
    }
  }
});