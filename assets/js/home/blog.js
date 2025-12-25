// Animation au scroll des articles du blog
const blogCards = document.querySelectorAll('.blog-card');

const observerBlog = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
      }
    });
  },
  { threshold: 0.2 }
);

blogCards.forEach((card) => observerBlog.observe(card));
