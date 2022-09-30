let loading = document.querySelector(".coffee");
window.addEventListener("load", function () {
  setTimeout(() => {
    loading.classList.add("hidden");
  }, 2000);
});
