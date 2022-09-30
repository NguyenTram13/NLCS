window.addEventListener("load", function () {
  const tabs = document.querySelectorAll(".hover-border");
  const detailTab = document.querySelectorAll(".detail-tab");
  const changeTab = function (e) {
    tabs.forEach((tab) => tab.classList.remove("active"));
    detailTab.forEach((tabD) => tabD.classList.remove("active"));

    this.classList.add("active");
    detailTab.forEach((tabD) => {
      if (tabD.dataset.tab === this.dataset.tab) {
        tabD.classList.add("active");
      }
    });
  };
  tabs.forEach((tab) => tab.addEventListener("click", changeTab));

  //fixed start
  const dc_menu = document.querySelector(".dc-menu");
  const average_start = document.querySelector(".average_start");
  console.log(dc_menu.getClientRects()[0].top);
  let h_scroll = dc_menu.getClientRects()[0].top;

  window.addEventListener("scroll", function (e) {
    let scroll = window.pageYOffset;
    console.log(scroll);
    console.log(h_scroll);
    if (scroll >= 1260.921875 && scroll < 500 + 1260.921875) {
      average_start.classList.add("fixed");
      average_start.classList.add("top-[100px]");
    } else {
      average_start.classList.remove("fixed");
      average_start.classList.remove("top-[100px]");
    }
  });
});
