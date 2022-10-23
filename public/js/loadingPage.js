let loading = document.querySelector(".coffee");
document.onreadystatechange = function () {
  if (document.readyState !== "complete") {
    console.log(document.readyState);
    document.querySelector("body").style.visibility = "hidden";
    loading.classList.remove("invisible");
  } else {
    console.log("asdasd");
    loading.classList.add("invisible");

    document.querySelector("body").style.visibility = "visible";
  }
};
