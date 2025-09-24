"use strict";

document.addEventListener("DOMContentLoaded", function () {
  var sel = document.getElementById("js-news-category");
  if (!sel) return;

  sel.addEventListener("change", function (e) {
    var url = e.target.value;
    if (url) {
      window.location.href = url;
    }
  });
});
