$(document).ready(function() {

  const scripts = [
    "./js/banner-carousel.js",
    "./js/best-sales-carousel.js",
    "./js/filter-products.js",
    "./js/blogs-carousel.js",
    "./js/quantity-input.js"
  ];
  
  for(const script of scripts) {
    const scriptTag = document.createElement("script");
    scriptTag.src = script;
    document.body.appendChild(scriptTag);
  }

});

/** 

const scripts = [
  "./js/banner-carousel.js",
  "./js/best-sales-carousel.js",
  "./js/filter-products.js",
  "./js/blogs-carousel.js",
  "./js/quantity-input.js"
];

window.addEventListener("DOMContentLoaded", () => {
  for(const script of scripts) {
    const scriptTag = document.createElement("script");
    scriptTag.src = script;
    document.body.appendChild(scriptTag);
  }
});

*/
