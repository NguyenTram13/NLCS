$(document).ready(function () {
  const filterCate = document.querySelectorAll(".filter_cate");
  const productList = document.querySelector(".product-list");
  const productList2 = document.querySelectorAll(".product-list2");

  const cartCount = document.querySelector(".cart-count");
  const cartCenter = document.querySelector(".model-cart-center");
  const sumMoney = document.querySelector(".cart-footer-total span:last-child");
  console.log(sumMoney);
  const renderProduct = (item, img_path, url) => {
    let template = `
    <div class="col-xs-12 col-sm-6 col-lg-3 ">
    <div class="item new-arrival-item shadow " data-id=" <?php echo $new['id'] ?>">
        <div class="new-arrival-img">
            <img src="${img_path}${item.img} ?>">
            <div class="new-arrival-other">
                <div class="other-icon">
                    <span data-url="${url}" data-id=${item.id} data-pathimg=${img_path} class="other-icon-cart">
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
                <span class="sold-out">${item.views}</span>
            </div>
            <p class="arrival-product-price">
                <span>$</span>
                <span class="product-price ">${item.price}</span>
            </p>
        </div>
    </div>
</div>
    `;
    productList.insertAdjacentHTML("beforeend", template);
  };
  [...filterCate].forEach((item) => {
    item.addEventListener("click", function (e) {
      let id = item.dataset.id;
      let url = item.dataset.url;
      let path_img = item.dataset.pathimg;
      console.log(path_img);
      if (id > 0) {
        $.ajax({
          type: "POST",
          url: url + "/filterPro",
          data: { id },
          dataType: "text",

          success: function (data) {
            let response = JSON.parse(data);
            // console.log(response);
            productList.innerHTML = "";
            response.forEach((item) => renderProduct(item, path_img, url));
          },
          error: function (e) {
            console.log(e);
          },
        });
      }
    });
  });

  // add card
  var formatter = new Intl.NumberFormat("en-US", {
    style: "currency",
    currency: "USD",

    // These options are needed to round to whole numbers if that's what you want.
    //minimumFractionDigits: 0, // (this suffices for whole numbers, but will print 2500.10 as $2,500.1)
    //maximumFractionDigits: 0, // (causes 2500.99 to be printed as $2,501)
  });
  function renderItemCart(item, path_img, url) {
    let template = `
    
    <div class="cart-center-item">
                    <div class="cart-center-left">
                        <p class="title">${item.name}</p>
                        <div class="price-amount">
                            <span class="cart-center-amount">${item.soluong}</span>
                            X
                            <span class="cart-center-price">$ ${item.price}</span>
                        </div>
                    </div>
                    <div class="cart-center-right">
                        <img src="${path_img}${item.img}" alt="">
                        <span data-pathimg=${path_img} data-url="${url}" data-id="${item.id}" class="cart-center-close hover:scale-150" >
                            <i class="fa-solid fa-xmark"></i>
                        </span>
                    </div>
                </div>
    `;
    cartCenter.insertAdjacentHTML("beforeend", template);
  }

  function addCard(e) {
    let id = +e.target.parentElement.dataset.id;
    let url = e.target.parentElement.dataset.url;
    let path_img = e.target.parentElement.dataset.pathimg;
    console.log(path_img);
    // console.log(url);
    if (id > 0) {
      $.ajax({
        type: "POST",
        url: url + "/addCard",
        data: { id },
        dataType: "text",
        success: function (data) {
          let response = JSON.parse(data);
          cartCenter.innerHTML = "";
          let sum = 0;
          let totalLength = 0;
          response.forEach((item) => {
            sum += +item.total;
            totalLength += +item.soluong;
            renderItemCart(item, path_img, url);
          });
          sumMoney.textContent = formatter.format(sum);
          cartCount.textContent = totalLength;

          Swal.fire({
            position: "center-center",
            icon: "success",
            title: "More successful products",
            showConfirmButton: false,
            timer: 1500,
          });
        },
        error: function (e) {
          console.log(e);
        },
      });
    }
  }
  const card = document.querySelectorAll(".other-icon-cart");
  productList2.forEach((item) => {
    item.addEventListener("click", function (e) {
      if (e.target.matches(".other-icon-cart i")) {
        addCard(e);
      }
    });
  });
  productList?.addEventListener("click", function (e) {
    console.log(e.target);
    if (e.target.matches(".other-icon-cart i")) {
      addCard(e);
    }
  });
  toastr.options = {
    closeButton: false,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toast-bottom-left",
    preventDuplicates: false,
    onclick: null,
    showDuration: "300",
    hideDuration: "500",
    timeOut: "2000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
  };
  function deleteItem(e) {
    //xoas
    let id = e.target.parentElement.dataset.id;
    let url = e.target.parentElement.dataset.url;
    let path_img = e.target.parentElement.dataset.pathimg;
    console.log(path_img);
    console.log(url);
    if (id > 0) {
      $.ajax({
        type: "POST",
        url: url + "/removeItem",
        data: { id },
        dataType: "text",
        success: function (data) {
          let response = JSON.parse(data);
          console.log(response);
          cartCenter.innerHTML = "";
          let sum = 0;
          let totalLength = 0;
          response.forEach((item) => {
            sum += +item.total;
            totalLength += +item.soluong;

            renderItemCart(item, path_img, url);
          });
          cartCount.textContent = totalLength;

          sumMoney.textContent = formatter.format(sum);
          subtotal ? (subtotal.textContent = formatter.format(sum)) : "";
          subtotalFinnal
            ? (subtotalFinnal.textContent = formatter.format(sum + 10))
            : "";
        },
        error: function (e) {
          console.log(e);
        },
      });
    }
    toastr.success("Delete item cart success!");
  }
  cartCenter.addEventListener("click", function (e) {
    if (e.target.matches(".cart-center-close i")) {
      deleteItem(e);
    }
  });

  //
  const cartList = document.querySelector(".cf-list");
  const cartList_2 = document.querySelector(".cf-list-2");

  const subtotalFinnal = document.querySelector(".subtotal-final");
  function renderItemPageCart(item, path_img, url) {
    let template = `
    
    <tr class="cft-content   my-[12px] border-b">
    <td class="py-2 mx-[auto] relative"><span data-pathimg="${path_img}" data-url="${url}" data-id="${
      item.id
    }" class="remove-item absolute top-[4px] hover:scale-110 right-[12px] p-1 rounded-full shadow-lg bg-slate-600 cursor-pointer text-slate-50 leading-none"><i class="fa-solid fa-xmark"></i></span> <img src="${path_img}${
      item.img
    }" alt="" class="center w-20"></td>
    <td><a href ="${url}" class="hover:text-[#98cb50]  cursor-pointer">${
      item.name
    }</a></td>
    <td class="text-[#888888]">${formatter.format(item.price)}</td>
    <td > 
        <span data-id="${
          item.id
        }" data-url="${url}" data-pathimg="${path_img}" class="down-pro hover:bg-[#98cb50] transition-all  hover:text-white border inline-block leading-none p-[4px] w-[30px] text-center cursor-pointer min-w-[30px] text-center cursor-pointer max-w-[30px] text-center cursor-pointer h-[30px] text-center cursor-pointer">-</span>
        <span class="  transition-all hover:text-[#98cb50] font-bold inline-block leading-none p-[4px] w-[30px] text-center cursor-pointer min-w-[30px] text-center cursor-pointer max-w-[30px] text-center cursor-pointer h-[30px] text-center cursor-pointer">${
          item.soluong
        }</span>
        <span data-id="${
          item.id
        }" data-url="${url}" data-pathimg="${path_img}" class="up-pro hover:bg-[#98cb50] transition-all hover:text-white border inline-block leading-none p-[4px] w-[30px] text-center cursor-pointer min-w-[30px] text-center cursor-pointer max-w-[30px] text-center cursor-pointer h-[30px] text-center cursor-pointer">+</span>


    </td>
    <td class="font-bold">${formatter.format(item.total)}</td>
    
</tr>
    `;

    cartList.insertAdjacentHTML("beforeend", template);
  }
  const subtotal = document.querySelector(".subtotal");
  cartList?.addEventListener("click", function (e) {
    console.log("sdfsd");
    if (e.target.matches(".down-pro")) {
      let id = +e.target.dataset.id;
      let url = e.target.dataset.url;
      let path_img = e.target.dataset.pathimg;
      let number = e.target.nextElementSibling.textContent;
      if (+number > 1) {
        e.target.nextElementSibling.textContent = +number - 1;

        $.ajax({
          type: "POST",
          url: url + "/addCard2",
          data: { id, number: -1 },
          dataType: "text",
          success: function (data) {
            let response = JSON.parse(data);
            console.log(response);
            cartList.innerHTML = "";
            cartCenter.innerHTML = "";

            let sum = 0;
            let totalLength = 0;
            response.forEach((item) => {
              sum += +item.total;
              totalLength += +item.soluong;

              renderItemPageCart(item, path_img, url);
              renderItemCart(item, path_img, url);
            });
            cartCount.textContent = totalLength;

            subtotal.textContent = formatter.format(sum);
            subtotalFinnal.textContent = formatter.format(sum + 10);
          },
          error: function (e) {
            console.log(e);
          },
        });
      }
    }
    if (e.target.matches(".up-pro")) {
      let id = +e.target.dataset.id;
      let url = e.target.dataset.url;
      let path_img = e.target.dataset.pathimg;
      let number = e.target.previousElementSibling.textContent;
      e.target.previousElementSibling.textContent = +number + 1;

      $.ajax({
        type: "POST",
        url: url + "/addCard2",
        data: { id, number: 1 },
        dataType: "text",
        success: function (data) {
          let response = JSON.parse(data);
          console.log(response);
          cartList.innerHTML = "";
          cartCenter.innerHTML = "";

          let sum = 0;
          let totalLength = 0;
          response.forEach((item) => {
            sum += +item.total;
            totalLength += +item.soluong;

            renderItemPageCart(item, path_img, url);
            renderItemCart(item, path_img, url);
          });
          cartCount.textContent = totalLength;

          subtotal.textContent = formatter.format(sum);
          subtotalFinnal.textContent = formatter.format(sum + 10);
        },
        error: function (e) {
          console.log(e);
        },
      });
    }
    if (e.target.matches(".remove-item i")) {
      deleteItem(e);
      e.target.parentElement.parentElement.parentElement.remove();
    }
  });
  cartList_2?.addEventListener("click", function (e) {
    if (e.target.matches(".down-pro")) {
      let number = e.target.nextElementSibling.textContent;
      if (+number > 1) {
        e.target.nextElementSibling.textContent = +number - 1;
      }
    }
    if (e.target.matches(".up-pro")) {
      let number = e.target.previousElementSibling.textContent;
      e.target.previousElementSibling.textContent = +number + 1;
    }
  });
  //add cart page detail product
  const btnAddCart = document.querySelector(".add_cart_detail");
  btnAddCart?.addEventListener("click", function (e) {
    const id = this.dataset.id;
    const url = this.dataset.url;
    const pathImg = this.dataset.pathimg;
    const number =
      +this.previousElementSibling.querySelector(".number_detail").textContent;
    console.log(id, url, pathImg, number);
    $.ajax({
      type: "POST",
      url: url + "/addCard2",
      data: { id, number },
      dataType: "text",
      success: function (data) {
        let response = JSON.parse(data);
        console.log(response);
        cartCenter.innerHTML = "";

        let sum = 0;
        let totalLength = 0;
        response.forEach((item) => {
          sum += +item.total;
          totalLength += +item.soluong;

          renderItemCart(item, pathImg, url);
        });
        cartCount.textContent = totalLength;

        sumMoney.textContent = formatter.format(sum);
        Swal.fire({
          position: "center-center",
          icon: "success",
          title: "More successful products",
          showConfirmButton: false,
          timer: 1500,
        });
      },
      error: function (e) {
        console.log(e);
      },
    });
  });
  // productList.addEventListener("click", function (e) {});
});
