window.addEventListener("load", function () {
  let loader = document.querySelectorAll(".loader");
  let keyword = JSON.parse(localStorage.getItem("kyw")) || "";

  function setLoading(selector) {
    setTimeout(() => {
      loader.forEach((item) => {
        console.log(item);
        selector.style.visibility = "hidden";

        item.style.display = "block";
      });
    }, 500);
  }
  function searchInput(input, table, form) {
    input?.addEventListener("keyup", function (e) {
      localStorage.setItem("kyw", JSON.stringify(e.target.value));
      setLoading(table);
      setTimeout(() => {
        form.submit();
      }, 1500);
    });
  }
  function formSunbmit(form, table) {
    form?.addEventListener("submit", function (e) {
      e.preventDefault();
      loader.forEach((item) => {
        console.log(item);
        table.style.visibility = "hidden";

        item.style.display = "block";
      });
      setTimeout(() => {
        loader.forEach((item) => {
          console.log(item);
          table.style.visibility = "visible";

          item.style.display = "none";
        });
      }, 1000);
    });
  }

  //search cate
  const formCates = document.querySelector(".form-cate");
  const inputSearchCates = document.querySelector(".cate-input");
  const tableCates = document.querySelector(".table-cate");
  console.log(tableCates);
  inputSearchCates ? (inputSearchCates.value = keyword) : "";

  searchInput(inputSearchCates, tableCates, formCates);
  formSunbmit(formCates, tableCates);

  //end search cate
  //loading Groups page begin
  //product
  const formProduct = document.querySelector(".form-product");
  const inputSearchProduct = document.querySelector(".product-input");
  const selectProduct = document.querySelector(".select-product");
  const tableProduct = this.document.querySelector(".table-products");
  inputSearchProduct ? (inputSearchProduct.value = keyword) : "";

  //end product
  selectProduct?.addEventListener("change", function (e) {
    localStorage.setItem("idSelect", JSON.stringify(e.target.value));
    setLoading(tableProduct);
    setTimeout(() => {
      formProduct.submit();
    }, 1500);
  });
  searchInput(inputSearchProduct, tableProduct, formProduct);
  formSunbmit(formProduct, tableProduct);

  //loading product page end

  //search group
  const formGroups = document.querySelector(".form-groups");
  const inputSearchGroups = document.querySelector(".groups-input");
  const tableGroups = document.querySelector(".table-groups");
  console.log(tableGroups);

  inputSearchGroups ? (inputSearchGroups.value = keyword) : "";
  searchInput(inputSearchGroups, tableGroups, formGroups);
  formSunbmit(formGroups, tableGroups);

  //end search group

  //search users
  const formUsers = document.querySelector(".form-users");
  const inputSearchUsers = document.querySelector(".users-input");
  const tableUsers = document.querySelector(".table-users");
  const selectUsers = document.querySelector(".select-users");
  console.log(inputSearchUsers);

  inputSearchUsers ? (inputSearchUsers.value = keyword) : "";
  selectUsers?.addEventListener("change", function (e) {
    localStorage.setItem("idSelect", JSON.stringify(e.target.value));
    setLoading(tableUsers);
    setTimeout(() => {
      formUsers.submit();
    }, 1500);
  });
  searchInput(inputSearchUsers, tableUsers, formUsers);
  formSunbmit(formUsers, tableUsers);

  //end search users
  //search slider
  const formSlider = document.querySelector(".form-slider");
  const inputSearchSlider = document.querySelector(".slider-input");
  const tableSlider = document.querySelector(".table-slider");
  console.log(tableGroups);

  inputSearchSlider ? (inputSearchSlider.value = keyword) : "";
  searchInput(inputSearchSlider, tableSlider, formSlider);
  formSunbmit(formSlider, tableSlider);

  //end search slider

  //search menu
  const formMenu = document.querySelector(".form-menu");
  const inputSearchMenu = document.querySelector(".menu-input");
  const tableMenu = document.querySelector(".table-menu");
  console.log(tableGroups);

  inputSearchMenu ? (inputSearchMenu.value = keyword) : "";
  searchInput(inputSearchMenu, tableMenu, formMenu);
  formSunbmit(formMenu, tableMenu);

  //end search menu

  //search setting
  const formSetting = document.querySelector(".form-setting");
  const inputSearchSetting = document.querySelector(".setting-input");
  const tableSetting = document.querySelector(".table-setting");
  console.log(inputSearchSetting);

  inputSearchSetting ? (inputSearchSetting.value = keyword) : "";
  searchInput(inputSearchSetting, tableSetting, formSetting);
  formSunbmit(formSetting, tableSetting);

  //end search setting
});
