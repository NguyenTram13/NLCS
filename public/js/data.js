const product = [
  {
    id: 1,
    name: "Anxi Tie Guan Yin Tea",
    price: 64.27,
    img: "<?php echo _PATH_ROOT_PUBLIC . '/img/product/Anxi Tie Guan Yin Tea.jpg'?>",
  },
  {
    id: 2,
    name: "Black Unpzessed Tea",
    price: 28.0,
    img: "<?php echo _PATH_ROOT_PUBLIC . '/img/product/Black Unpzessed Tea.jpg'?>",
  },
  {
    id: 3,
    name: "Green Snail Spring Tea",
    price: 95.21,
    img: "<?php echo _PATH_ROOT_PUBLIC.'/img/product/Green Snail Spring Tea.jpg'?>",
  },
  {
    id: 4,
    name: "Hezb Mazzubium Vulgaze",
    price: 45.0,
    img: "<?php echo _PATH_ROOT_PUBLIC . '/img/product/Hezb Mazzubium Vulgaze.jpg'?>",
  },
  {
    id: 5,
    name: "Hezb Mentha Spicata",
    price: 8.0,
    img: "<?php echo _PATH_ROOT_PUBLIC . '/img/product/Hezb Mentha Spicata.jpg'?>",
  },
  {
    id: 6,
    name: "Hezb Oziganum Vulgaze",
    price: 35.9,
    img: "<?php echo _PATH_ROOT_PUBLIC . '/img/product/Hezb Oziganum Vulgaze.jpg'?>",
  },
  {
    id: 7,
    name: "Hibiscus Calyces",
    price: 24.0,
    img: "<?php echo _PATH_ROOT_PUBLIC . '/img/product/Hibiscus Calyces.jpg'?>",
  },
  {
    id: 8,
    name: "Jasmin Flowering Tea",
    price: 30.0,
    img: "<?php echo _PATH_ROOT_PUBLIC . '/img/product/Jasmin Flowering Tea.jpg'?>",
  },
  {
    id: 9,
    name: "Jasmine Scented Green Tea",
    price: 30.0,
    img: "<?php echo _PATH_ROOT_PUBLIC . '/img/product/Jasmine Scented Green Tea.jpg'?>",
  },
  {
    id: 10,
    name: "Jasmine Scented Red Tea",
    price: 110.0,
    img: "<?php echo _PATH_ROOT_PUBLIC . '/img/product/Jasmine Scented Red Tea.jpg'?>",
  },
  {
    id: 11,
    name: "Mate Tea With Monazda",
    price: 123.05,
    img: "<?php echo _PATH_ROOT_PUBLIC . '/img/product/Mate Tea With Monazda.jpg'?>",
  },
  {
    id: 12,
    name: "Oragnic Green Tea",
    price: 90.24,
    img: "<?php echo _PATH_ROOT_PUBLIC . '/img/product/Oragnic Green Tea.jpg'?>",
  },
];
function createitem(item, number = 0) {
  let template = `
    <div class="col-xs-12 col-sm-6 col-lg-3 new-arrival-item data-id="${item.id}">
        <div class="new-arrival-img">
           <img src="${item.img}">
            <div class="new-arrival-other">
                <div class="other-icon">
                    <span class = "other-icon-cart">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </span>
                    <span>
                         <i class="fa-solid fa-heart"></i>
                    </span>
                    <span>
                         <i class="fa-solid fa-scale-balanced"></i>
                    </span>
                </div>
                <div class="other-btn">
                   <button>Quick View</button>
                </div>
            </div>
            
            <div>
                <span class="sale">12% off</span>
            </div>
        </div>
        <div class="arrival-product-content">
            <h3><a href="details-product.html">${item.name}</a></h3>
            <div class="arrival-product-evaluate">
                <span class="raiting">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </span>
                <span class="sold-out">(2)</span>
            </div>
             <p class="arrival-product-price">
                <span>$</span>
                <span class="product-price ">${item.price}</span>
            </p>
        </div>
    </div>
    `;
  return template;
}

function loadItem(arrayItem, itemCart, number = 0, position = 0) {
  let array = 0;
  console.log(position);
  let index = 0;
  for (let i = position; i < arrayItem.length; i++) {
    if (number > 0 && index == number) break;
    let item = arrayItem[i];
    itemCart?.insertAdjacentHTML("beforeend", createitem(item, number));
    index++;
  }
}

export { product, loadItem };
