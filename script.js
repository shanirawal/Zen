
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

