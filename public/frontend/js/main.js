$(document).ready(function () {
  //  banner-slider
  $(".banner-slider").slick({
    autoplay:true,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    prevArrow:
      " <button type='button' class='slick-prev'><i class='fas fa-angle-left'></i></button>",
    nextArrow:
      " <button type='button' class='slick-next'><i class='fas fa-angle-right'></i></button>",
  });
  // product-slider
  $(".product-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    prevArrow:
      " <button type='button' class='slick-prev'><i class='fas fa-angle-left'></i></button>",
    nextArrow:
      " <button type='button' class='slick-next'><i class='fas fa-angle-right'></i></button>",
    responsive: [
      {
        breakpoint: 1170,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  // testimonials slider
  $(".testimonials-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow:
      " <button type='button' class='slick-prev'><i class='fas fa-angle-left'></i></button>",
    nextArrow:
      " <button type='button' class='slick-next'><i class='fas fa-angle-right'></i></button>",
  });
  // product details preview slider
  $(".products-images-nav").slick({
    slidesToShow: 4,
    arrows: true,
    slidesToScroll: 3,
    prevArrow:
      " <button type='button' class='slick-prev'><i class='fas fa-angle-left'></i></button>",
    nextArrow:
      " <button type='button' class='slick-next'><i class='fas fa-angle-right'></i></button>",
  });

  // Popup Video
  $(".vpop").on("click", function (e) {
    e.preventDefault();
    $(
      "#video-popup-overlay,#video-popup-iframe-container,#video-popup-container,#video-popup-close"
    ).show();
    var srchref = "",
      autoplay = "",
      id = $(this).data("id");
    if ($(this).data("type") == "vimeo")
      var srchref = "//player.vimeo.com/video/";
    else if ($(this).data("type") == "youtube")
      var srchref = "https://www.youtube.com/embed/";
    if ($(this).data("autoplay") == true) autoplay = "?autoplay=1";
    $("#video-popup-iframe").attr("src", srchref + id + autoplay);
    $("#video-popup-iframe").on("load", function () {
      $("#video-popup-container").show();
    });
  });
  $("#video-popup-close, #video-popup-overlay").on("click", function (e) {
    $(
      "#video-popup-iframe-container,#video-popup-container,#video-popup-close,#video-popup-overlay"
    ).hide();
    $("#video-popup-iframe").attr("src", "");
  });
  // tooltip
  const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
  );
  const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
  );
  // toggle search bar
  $(".sticky-search-icon").click(function () {
    $(".search-box").toggle();

    // zoom on hover
    const product = document.getElementById("product-main-images");
    const img = document.getElementById("products-images");
    product.addEventListener("mousemove", (e) => {
      const x = e.clientX - e.target.offsetLeft;
      const y = e.clientY - e.target.offsetTop;
      //   console.log(x,y);
      img.style.transformOrigin = `${x}px ${y}px`;
      img.style.transform = "scale(1.9)";
    });
    product.addEventListener("mouseleave", () => {
      img.style.transformOrigin = "center";
      img.style.transform = "scale(1)";
    });
    //adding active class on product preview images list
    $(document).on("click", ".product-preview-list", function () {
      $(".product-preview-list").removeClass("active");
      $(this).addClass("active");
    });
    //  adding active class on navigation bar
    $(document).on("click", "#navbarSupportedContent ul li a ", function () {
      $("#navbarSupportedContent ul li a").removeClass("active");
      $(this).addClass("active");
    });
    //  Adding active class on sizes of product categories page
    $(document).on("click", ".sizes button", function () {
      $(".sizes button").removeClass("active");
      $(this).addClass("active");
    });
  });
});
// sticky-header
$(window).scroll(function () {
  if ($(window).scrollTop() >= 300) {
    $(".main-header").addClass("sticky-header");
    $(".nav-Search-bar").addClass("nav-sticky-bar");
  } else {
    $(".main-header").removeClass("sticky-header");
    $(".nav-Search-bar").removeClass("nav-sticky-bar");
  }
});
window.onload = function () {
  var imgs = document.getElementsByClassName(" product-preview-list");
  for (var i = 0; i < imgs.length; i++) {
    var img = imgs[i];
    img.onclick = function () {
      newSrc = this.src;
      focus = document.getElementById("products-images");
      focus.src = newSrc;
    };
  }
};

