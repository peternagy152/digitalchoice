document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");
  const closeMenu = document.getElementById("close-menu");
  console.log("working Script!!");
  menuToggle.addEventListener("click", function () {
    mobileMenu.style.right = "0";
  });

  closeMenu.addEventListener("click", function () {
    mobileMenu.style.right = "-100%";
  });

  // Close menu when clicking outside of it
  window.addEventListener("click", function (event) {
    if (
      event.target !== mobileMenu &&
      !mobileMenu.contains(event.target) &&
      event.target !== menuToggle
    ) {
      mobileMenu.style.right = "-100%";
    }
  });
});
