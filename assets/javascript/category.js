
// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth'
      });
    }
  });
});

// Navbar scroll effect
window.addEventListener('scroll', function() {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 10) {
    navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
    navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
  } else {
    navbar.style.backgroundColor = 'transparent';
    navbar.style.boxShadow = 'none';
  }
});

// Initialize search functionality
const searchInput = document.querySelector('.search-container input');
const searchBtn = document.querySelector('.search-btn');

searchBtn.addEventListener('click', function() {
  performSearch(searchInput.value);
});

searchInput.addEventListener('keypress', function(e) {
  if (e.key === 'Enter') {
      performSearch(this.value);
  }
});

function performSearch(query) {
  // Add your search logic here
  console.log('Searching for:', query);
}

// Mobile responsiveness
const mobileBreakpoint = 768;

function handleMobileLayout() {
  const width = window.innerWidth;
  const sidebar = document.querySelector('.sidebar');
  const content = document.querySelector('.content');
  
  if (width <= mobileBreakpoint) {
      sidebar.style.display = 'none';
      content.style.marginLeft = '0';
  } else {
      sidebar.style.display = 'block';
      content.style.marginLeft = '250px';
  }
}

window.addEventListener('resize', handleMobileLayout);
handleMobileLayout(); // Initial check

// Add loading animation
window.addEventListener('load', function() {
  document.body.classList.add('loaded');
});

// Initialize animations for cards
const cards = document.querySelectorAll('.initiative-card');
const observerOptions = {
  threshold: 0.1,
  rootMargin: '0px'
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
      if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
      }
  });
}, observerOptions);

cards.forEach(card => {
  observer.observe(card);
});

