document.addEventListener("DOMContentLoaded", function () {
  var searchButton = document.querySelector(".search-button");

  searchButton.addEventListener("click", function () {
    event.preventDefault();

    var searchHolder = document.querySelector(".search-holder");

    searchHolder.classList.toggle("active");
  });
});
