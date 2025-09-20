
var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });


// Get the nav element
const nav = document.getElementById('main-nav');
// Set the scroll threshold in pixels
const scrollThreshold = 700;

// Add a scroll event listener
window.addEventListener('scroll', () => {
  // Check if the user has scrolled past the threshold
  if (window.scrollY > scrollThreshold) {
    // If scrolled, add the 'scrolled' class
    nav.classList.add('scrolled');
  } else {
    // If not, remove the 'scrolled' class
    nav.classList.remove('scrolled');
  }
});

  // Add the event listener for the scroll event
  document.addEventListener('scroll', collapseNavbar);

  // Initial call to set the navbar state on page load
  collapseNavbar();
