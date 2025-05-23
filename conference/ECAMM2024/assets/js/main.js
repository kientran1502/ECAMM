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
  } else {
    $("#site-nav").removeClass("navbar-solid");
  }
}

/*
 * Registration Form
 */

$("#registration-form").submit(function (e) {
  e.preventDefault();

  var postForm = {
    //Fetch form data
    fname: $("#registration-form #fname").val(),
    lname: $("#registration-form #lname").val(),
    email: $("#registration-form #email").val(),
    cell: $("#registration-form #cell").val(),
    address: $("#registration-form #address").val(),
    zip: $("#registration-form #zip").val(),
    city: $("#registration-form #city").val(),
    program: $("#registration-form #program").val(),
  };

  $.ajax({
    type: "POST",
    url: "./assets/php/contact.php",
    data: postForm,
    dataType: "json",
    success: function (data) {
      if (data.success) {
        $("#registration-msg .alert").html("Registration Successful");
        $("#registration-msg .alert").removeClass("alert-danger");
        $("#registration-msg .alert").addClass("alert-success");
        $("#registration-msg").show();
      } else {
        $("#registration-msg .alert").html("Registration Failed");
        $("#registration-msg .alert").removeClass("alert-success");
        $("#registration-msg .alert").addClass("alert-danger");
        $("#registration-msg").show();
      }
    },
  });
});

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
