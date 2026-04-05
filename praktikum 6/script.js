// Active link highlighting based on current page (optional)
// Since this is multi-page, we can just add active class based on current URL
document.addEventListener("DOMContentLoaded", function() {
    const currentPage = window.location.pathname.split("/").pop();
    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
    
    navLinks.forEach(link => {
      const href = link.getAttribute("href");
      if (href === currentPage || (currentPage === "" && href === "index.html")) {
        link.classList.add("active");
      } else {
        link.classList.remove("active");
      }
    });
  });