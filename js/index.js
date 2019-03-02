$(document).ready(function() {
  // Change color on scroll
  // $(window).scroll(function() {
  //   $("nav").toggleClass("scrolled", $(this).scrollTop() >= 40);
  // });
});
//back-to-top
$(window).on("scroll", function() {
  if ($(this).scrollTop() > 500) {
    $("#scroll-top").fadeIn();
  } else {
    $("#scroll-top").fadeOut();
  }
});
// scroll body to 0px on click
// $("#scroll-top").on("click", function() {
//   $("#scroll-top").tooltip("hide");
//   $("body,html").animate(
//     {
//       scrollTop: 0
//     },
//     50
//   );
//   return false;
// });
// $(".scroll-how").on("click", function() {
//   $("body,html").animate(
//     {
//       scrollTop: 470
//     },
//     1500
//   );
//   return false;
// });
