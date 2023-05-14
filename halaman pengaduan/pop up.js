document.addEventListener("DOMContentLoaded", function () {
  var popupContainer = document.querySelector(".popup-container");
  var closeBtn = document.querySelector(".close-btn");

  closeBtn.addEventListener("click", function () {
    popupContainer.style.display = "none";
  });
});
