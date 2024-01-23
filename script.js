const changeText = function () {
  setTimeout((document.querySelector(".logout").innerHTML = "Login"), 1000);
};

document.querySelector("span").addEventListener("click", function () {
  changeText();
});
