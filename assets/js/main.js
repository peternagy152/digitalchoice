document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");
  const closeMenu = document.getElementById("close-menu");
  const menuOverlay = document.createElement("div");
  menuOverlay.id = "menu-overlay";
  document.body.appendChild(menuOverlay);

  menuToggle.addEventListener("click", function () {
    mobileMenu.style.right = "0";
    menuOverlay.style.display = "block";
    document.body.classList.add("menu-open");
  });

  closeMenu.addEventListener("click", closeMenuHandler);
  menuOverlay.addEventListener("click", closeMenuHandler);

  function closeMenuHandler() {
    mobileMenu.style.right = "-100%";
    menuOverlay.style.display = "none";
    document.body.classList.remove("menu-open");
  }
});
