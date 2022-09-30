import {product,loadItem} from './data.js';
window.addEventListener("load", function () {
    const productList =document.querySelector(".product-list")
    const productItem= document.querySelectorAll(".new-arrival-item")
    console.log(product,productList);
    loadItem(product,productList);
 
    
});
