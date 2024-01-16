$(document).ready(function () {
  //  banner-slider
  $(".banner-slider").slick({
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
  // animation while scrolling
  $(".about-right").waypoint(
    function (direction) {
      $(".about-right").addClass("animate__animated animate__fadeInLeft ");
    },
    {
      offset: "70%",
    }
  );
  $(".about-left").waypoint(
    function (direction) {
      $(".about-left").addClass("animate__animated animate__fadeInRight ");
    },
    {
      offset: "70%",
    }
  );

  $(".trending-section-animated").waypoint(
    function (direction) {
      $(".trending-section-animated").addClass("animate__animated animate__zoomIn");
    },
    {
      offset: "70%",
    }
  );
  $(".bag-animated").waypoint(
    function (direction) {
      $(".bag-animated").addClass("animate__animated animate__fadeInLeft ");
    },
    {
      offset: "70%",
    }
  );
  $(".shoes-animated").waypoint(
    function (direction) {
      $(".shoes-animated").addClass("animate__animated animate__fadeInRight ");
    },
    {
      offset: "70%",
    }
  );
  $(".highlight").waypoint(
    function (direction) {
      $(".highlight").addClass("animate__animated animate__fadeInUp ");
    },
    {
      offset: "70%",
    }
  );
  $(".new-arrivals-animated").waypoint(
    function (direction) {
      $(".new-arrivals-animated").addClass("animate__animated animate__zoomIn ");
    },
    {
      offset: "70%",
    }
  );
  $(".new-feature").waypoint(
    function (direction) {
      $(".new-feature").addClass("animate__animated animate__fadeInUp ");
    },
    {
      offset: "70%",
    }
  );
  $(".men-section").waypoint(
    function (direction) {
      $(".men-section").addClass("animate__animated animate__fadeInTopLeft ");
    },
    {
      offset: "70%",
    }
  );
  $(".kid-section").waypoint(
    function (direction) {
      $(".kid-section").addClass("animate__animated animate__fadeInTopRight");
    },
    {
      offset: "70%",
    }
  );
  $(".women-section").waypoint(
    function (direction) {
      $(".women-section").addClass("animate__animated animate__fadeInBottomRight");
    },
    {
      offset: "70%",
    }
  );
  $(".video-section").waypoint(
    function (direction) {
      $(".video-section").addClass("animate__animated animate__fadeInBottomRight");
    },
    {
      offset: "90%",
    }
  );
  $(".testimonal-animated").waypoint(
    function (direction) {
      $(".testimonal-animated").addClass("animate__animated animate__slideInUp");
    },
    {
      offset: "90%",
    }
  );
  $(".blog-animated").waypoint(
    function (direction) {
      $(".blog-animated").addClass("animate__animated animate__fadeInLeft");
    },
    {
      offset: "70%",
    }
  );
});

// Incrase decrease value button in add to card button
function increaseValue() {
  var value = parseInt(document.getElementById("number").value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById("number").value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById("number").value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? (value = 1) : "";
  value--;
  document.getElementById("number").value = value;
}
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

// var waypoint = new Waypoint({
//   element: document.getElementById('px-offset-waypoint'),
//   handler: function(direction) {
//     notify('I am 20px from the top of the window')
//   },
//   offset: 20
// })
$(document).ready(function () {});
