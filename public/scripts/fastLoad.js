window.onload = function () {
  const lazyImages = document.querySelectorAll("img[data-src]");
  if (lazyImages.length > 0) {
    for (let i = 0; i < lazyImages.length - 1; i++) {
      lazyImages[i].setAttribute("src", lazyImages[i].getAttribute("data-src"));
    }
  }
};
