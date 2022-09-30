const header = document.querySelector(".header");
const heightHeader = header && header.offsetHeight;

const modelDetail = document.querySelector(".model-detail");
console.log(modelDetail);
function scroll(e) {
  let scroll = window.pageYOffset;
  if (scroll >= heightHeader) {
    header.classList.add("bg_header");
  } else {
    header.classList.remove("bg_header");
  }
}
window.addEventListener(
  "scroll",
  function () {
    scroll();
  },
  false
);

window.addEventListener("load", function () {
  const cart = document.querySelector(".cart");
  const modelCart = document.querySelector(".model-cart");
  const modelClose = document.querySelector(".model-close");
  let modelContaner = document.querySelector(".model-cart-content");
  console.log(modelCart);
  cart.addEventListener("click", function () {
    modelCart.classList.add("active");
  });

  modelClose.addEventListener("click", function (e) {
    modelCart.classList.remove("active");
  });
  modelCart.addEventListener("click", function (e) {
    // if(!e.target.matches(".model-cart-content")){
    //     console.log(e.target.matches(".model-cart-content"))
    //     modelCart.classList.remove("active");
    // }
    if (!modelContaner.contains(e.target)) {
      modelCart.classList.remove("active");
    }
  });

  const productList = document.querySelector(".product-list");
  const productList2 = document.querySelector(".product-list2");

  // const productItem= document.querySelectorAll(".new-arrival-item")
  // console.log(product,productList);
  // loadItem(product,productList,4);

  // loadItem(product,productList2,4,4);
});

//sclick  slider
$(document).ready(function () {
  $(".main-background").slick({
    // autoplay:true,
    Swipe: true,
    slidesToShow: 1,
    infinity: true,
    arrows: true,
    draggable: false,
    autoplaySpeed: 3000,
    prevArrow: `<button type='button' class='slick-prev pull-left sclick-arrow'><i  class="fa-solid fa-arrow-left-long"></i></button>`,
    nextArrow: `<button type='button' class='slick-next pull-right sclick-arrow'><i class="fa-solid fa-arrow-right-long"></i></button>`,
  });
  $(".ac-content-list").slick({
    autoplay: true,
    slidesToShow: 1,
    infinity: true,
    arrows: true,
    autoplaySpeed: 5000,
    prevArrow: `<button type='button' class='slick-prev pull-left sclick-arrow'><i  class="fa-solid fa-arrow-left-long"></i></button>`,
    nextArrow: `<button type='button' class='slick-next pull-right sclick-arrow'><i class="fa-solid fa-arrow-right-long"></i></button>`,
  });
});
