function toggleNav() {
  const body = document.body;
  body.classList.toggle('nav-open');
}

function createParticle() {
  const particle = document.createElement('div');
  particle.classList.add('particle');

  const size = Math.random() * 5 + 2;
  particle.style.width = `${size}px`;
  particle.style.height = `${size}px`;

  const x = Math.random() * window.innerWidth;
  // Set the particle to start 75vh from the bottom
  const y = window.innerHeight * 0.75;
  particle.style.left = `${x}px`;
  particle.style.top = `${y}px`;

  // Array of the specified colors
  const colors = ['#e0e0e0', '#fa4223', '#ffffff'];
  // Randomly select one of the colors
  const randomColor = colors[Math.floor(Math.random() * colors.length)];
  particle.style.backgroundColor = randomColor;

  const duration = Math.random() * 3 + 2;
  particle.style.animation = `float-up ${duration}s linear`;

  document.getElementById('particles').appendChild(particle);

  setTimeout(() => {
      particle.remove();
  }, duration * 1000);
}

setInterval(createParticle, 50);
// Initialize Glide.js
new Glide('.glide', {
  type: 'carousel',
  perView: 4, // Number of slides to show at once
  focusAt: 'center', // Focus the current slide
  gap: 20, // Space between slides
  breakpoints: {
      1024: {
          perView: 3
      },
      768: {
          perView: 2
      },
      480: {
          perView: 1
      }
  }
}).mount();

console.log("Main Js Loaded") ; 