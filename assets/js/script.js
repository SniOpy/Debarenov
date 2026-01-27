// ========== script.js ==========

import './home/blog.js';
import './home/contact.js';
import './home/copro.js';
import './home/gallery.js';
import './home/header.js'; // ✅ LE SEUL RESPONSABLE DU MENU
import './home/reasons.js';
import './home/reviews.js';
import './home/services.js';
import './pages/renovation.js';
import './pages/devis.js';
import './blog/articles.js';
import './cookies.js';
import './scroll-to-top.js';

document.addEventListener('DOMContentLoaded', () => {
  /* ANIMATIONS AU SCROLL */
  const elements = document.querySelectorAll('[data-anim]');

  const revealOnScroll = () => {
    elements.forEach((el) => {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight - 100) {
        el.classList.add('visible');
      }
    });
  };

  revealOnScroll();
  window.addEventListener('scroll', revealOnScroll);
});

// HERO BACKGROUND CONDITIONNEL (simple & one-shot)
document.addEventListener('DOMContentLoaded', () => {
  const hero = document.querySelector('.hero-debarenov');
  if (!hero) return;

  // Si on est sur /blog
  if (window.location.pathname.includes('blog')) {
    hero.style.backgroundImage = "url('./../../img/hero/blog-hero.png')";
  }
});
