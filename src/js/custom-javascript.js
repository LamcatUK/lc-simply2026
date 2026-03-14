// Add your custom JS here.
import Collapse from "bootstrap/js/dist/collapse";

var applyResponsiveAosStagger = function () {
  var cards = document.querySelectorAll("[data-aos][data-stagger-index]");

  if (!cards.length) return;

  var isMobile = window.matchMedia("(max-width: 767.98px)").matches;

  cards.forEach(function (card) {
    var staggerIndex = Number(card.getAttribute("data-stagger-index") || 0);
    var delay = isMobile ? 0 : 150 * staggerIndex;
    card.setAttribute("data-aos-delay", String(delay));
  });
};

applyResponsiveAosStagger();

AOS.init({
  easing: "ease-out",
  once: true,
  duration: 500,
});

window.addEventListener("resize", function () {
  applyResponsiveAosStagger();

  if (typeof AOS !== "undefined" && typeof AOS.refreshHard === "function") {
    AOS.refreshHard();
  }
});

// Add background to navbar on scroll
(function () {
  var navbar = document.getElementById("wrapper-navbar");

  var addNavbarBackground = function () {
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  };

  window.addEventListener("scroll", addNavbarBackground);
})();

// Add background to navbar when mobile menu is opened
(function () {
  var navbar = document.getElementById("wrapper-navbar");
  var mobileToggle = document.querySelector(".navbar-toggler");
  var mobileMenu = document.getElementById("navbar");

  if (!mobileToggle || !mobileMenu) return;

  var handleMobileMenuToggle = function () {
    // Check if the mobile menu is shown (Bootstrap 5 uses 'show' class)
    if (mobileMenu.classList.contains("show")) {
      navbar.classList.add("mobile-menu-open");
    } else {
      navbar.classList.remove("mobile-menu-open");
    }
  };

  // Listen for Bootstrap collapse events
  mobileMenu.addEventListener("shown.bs.collapse", function () {
    navbar.classList.add("mobile-menu-open");
  });

  mobileMenu.addEventListener("hidden.bs.collapse", function () {
    navbar.classList.remove("mobile-menu-open");
  });

  // Fallback: Listen for click events on toggle button
  mobileToggle.addEventListener("click", function () {
    // Use a small delay to let Bootstrap finish the toggle
    setTimeout(handleMobileMenuToggle, 50);
  });
})();
