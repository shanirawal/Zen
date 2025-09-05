
// Star animation code
const STAR_COUNT = 60;
const starfield = document.getElementById('starfield');
const stars = [];

function randomBetween(a, b) {
  return a + Math.random() * (b - a);
}

function createStar() {
  const star = document.createElement('div');
  star.className = 'star';
  star.style.left = `${randomBetween(0, 100)}vw`;
  star.style.top = `${randomBetween(0, 100)}vh`;
  star.speedX = randomBetween(-0.05, 0.05);
  star.speedY = randomBetween(0.02, 0.15);
  star.size = randomBetween(1, 2.5);
  star.style.width = `${star.size}px`;
  star.style.height = `${star.size}px`;
  star.opacity = randomBetween(0.5, 1);
  star.style.opacity = star.opacity;
  starfield.appendChild(star);
  return star;
}

function animateStars() {
  for (const star of stars) {
    let left = parseFloat(star.style.left);
    let top = parseFloat(star.style.top);
    left += star.speedX;
    top += star.speedY;
    if (top > 100 || left < 0 || left > 100) {
      // Reset to top with new random X
      star.style.left = `${randomBetween(0, 100)}vw`;
      star.style.top = `-2vh`;
      star.speedX = randomBetween(-0.05, 0.05);
      star.speedY = randomBetween(0.02, 0.15);
      star.size = randomBetween(1, 2.5);
      star.style.width = `${star.size}px`;
      star.style.height = `${star.size}px`;
      star.opacity = randomBetween(0.5, 1);
      star.style.opacity = star.opacity;
    } else {
      star.style.left = `${left}vw`;
      star.style.top = `${top}vh`;
    }
  }
  requestAnimationFrame(animateStars);
}

// Initialize stars
if (starfield) {
  for (let i = 0; i < STAR_COUNT; i++) {
    stars.push(createStar());
  }
  animateStars();
}

// Professional navigation functionality
document.addEventListener('DOMContentLoaded', function() {
    // Navigation buttons
    const navGetStartedBtn = document.getElementById('nav-get-started');
    const heroGetStartedBtn = document.getElementById('hero-get-started');
    
    // Navigation function
    function navigateToLogin() {
        window.location.href = 'login.php';
    }
    
    // Add event listeners
    if (navGetStartedBtn) {
        navGetStartedBtn.addEventListener('click', navigateToLogin);
    }
    
    if (heroGetStartedBtn) {
        heroGetStartedBtn.addEventListener('click', navigateToLogin);
    }
});


 // Create floating particles
    const particles = document.getElementById('particles');
    const numParticles = 30;

    for (let i = 0; i < numParticles; i++) {
      const particle = document.createElement('div');
      particle.classList.add('particle');

      // Random size
      const size = Math.random() * 4 + 1;
      particle.style.width = `${size}px`;
      particle.style.height = `${size}px`;

      // Random position
      particle.style.left = `${Math.random() * 100}%`;
      particle.style.top = `${Math.random() * 100}%`;

      // Random animation delay
      particle.style.animationDelay = `${Math.random() * 10}s`;

      // Random animation duration
      particle.style.animationDuration = `${Math.random() * 15 + 10}s`;

      particles.appendChild(particle);
    }


    
