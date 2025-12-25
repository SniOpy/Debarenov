const reviews = document.querySelectorAll('.review');

const observerRv = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
      }
    });
  },
  { threshold: 0.2 }
);

reviews.forEach((r) => observerRv.observe(r));
