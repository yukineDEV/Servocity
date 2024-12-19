// Add smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});

// Navbar scroll effect
window.addEventListener('scroll', function() {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 50) {
    navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
    navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
  } else {
    navbar.style.backgroundColor = 'transparent';
    navbar.style.boxShadow = 'none';
  }
});



// Search functionality
const searchBtn = document.querySelector('.search-btn');
const searchInput = document.querySelector('.search-container input');

searchBtn.addEventListener('click', () => {
  const searchTerm = searchInput.value.trim();
  if (searchTerm) {
      // Implement search functionality here
      console.log('Searching for:', searchTerm);
      alert(`You searched for: ${searchTerm}`);
      // In a real application, you would typically send this search term to a server
      // or filter local content based on the search term
  }
});

// Mobile menu toggle
const mobileMenuBtn = document.createElement('button');
mobileMenuBtn.classList.add('mobile-menu-btn');
mobileMenuBtn.innerHTML = '☰';
document.querySelector('.navbar').appendChild(mobileMenuBtn);

mobileMenuBtn.addEventListener('click', () => {
  const navLinks = document.querySelector('.nav-links');
  navLinks.classList.toggle('show');
  if (navLinks.classList.contains('show')) {
      navLinks.style.display = 'flex';
  } else {
      navLinks.style.display = 'none';
  }
});

// Add loading animation
window.addEventListener('load', () => {
  document.body.classList.add('loaded');
});

// Animate elements on scroll
const observerOptions = {
  threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
      if (entry.isIntersecting) {
          entry.target.classList.add('animate');
      }
  });
}, observerOptions);

document.querySelectorAll('.about-content, .hero-content').forEach((el) => {
  observer.observe(el);
});

// Sign Up button functionality
const signUpBtn = document.querySelector('.signup-btn');
signUpBtn.addEventListener('click', () => {
  alert('Sign Up functionality would be implemented here.');
  // In a real application, this would typically open a sign-up form or redirect to a sign-up page
});

// Add hover effect to navigation links
const navLinks = document.querySelectorAll('.nav-links a');
navLinks.forEach(link => {
  link.addEventListener('mouseenter', () => {
      link.style.color = '#e63946';
  });
  link.addEventListener('mouseleave', () => {
      if (!link.classList.contains('active')) {
          link.style.color = '#293241';
      }
  });
});