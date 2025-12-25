document.addEventListener('DOMContentLoaded', () => {
  const cards = document.querySelectorAll('.service-card');

  const reveal = () => {
    cards.forEach((card) => {
      const rect = card.getBoundingClientRect();
      if (rect.top < window.innerHeight - 80) {
        card.classList.add('visible');
      }
    });
  };

  window.addEventListener('scroll', reveal);
  reveal();
});
