// Simple reveal animation on scroll
document.addEventListener('DOMContentLoaded', () => {
  const blocks = document.querySelectorAll('.copro-content, .copro-header');

  const reveal = () => {
    blocks.forEach((el) => {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight - 100) {
        el.classList.add('visible');
      }
    });
  };

  window.addEventListener('scroll', reveal);
  reveal();
});
