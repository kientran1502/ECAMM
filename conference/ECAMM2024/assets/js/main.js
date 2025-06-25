/*
 * Change Navbar color while scrolling
 */

$(window).scroll(function () {
  handleTopNavAnimation();
});


$(window).on('load', function () {
  handleTopNavAnimation();
});

function handleTopNavAnimation() {
  var top = $(window).scrollTop();

  if (top > 300) {
    $("#site-nav").addClass("navbar-solid");
    $("#sologen").addClass("navbar-custom");
    $("#logo").addClass("logo-custom");
  } else {
    $("#site-nav").removeClass("navbar-solid");
    $("#sologen").removeClass("navbar-custom");
    $("#logo").removeClass("logo-custom");
  }
}

/*
 * Registration Form
 */



/*
 * SmoothScroll
 */

smoothScroll.init();

/*
 * button back to top
 */

document.addEventListener("DOMContentLoaded", function () {
  var backToTopButton = document.getElementById("backToTop");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 100) {
      backToTopButton.style.display = "block";
    } else {
      backToTopButton.style.display = "none";
    }
  });

  backToTopButton.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});



