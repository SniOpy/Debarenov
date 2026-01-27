// =============================
// ANIM CTA
// =============================

const ctaBox = document.querySelector('.cta-box');
const contactBox = document.querySelector('.contact-box');

if (ctaBox && contactBox) {
  const observerCTA = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) entry.target.classList.add('show');
      });
    },
    { threshold: 0.2 }
  );

  observerCTA.observe(ctaBox);
  observerCTA.observe(contactBox);
}


// =============================
// FORMULAIRE DE CONTACT — AJAX
// =============================

const form = document.querySelector(".contact-form");
const responseBox = document.getElementById("form-response");

if (form) {
  const submitBtn = form.querySelector("button[type='submit']");

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    if (!submitBtn) return;

    submitBtn.disabled = true;
    submitBtn.textContent = "Envoi…";

    const formData = new FormData(form);

    try {
      const response = await fetch("api/send.php", {
        method: "POST",
        body: formData,
      });

      const result = await response.json();

      if (responseBox) {
        responseBox.textContent = result.message || "Réponse serveur.";
        responseBox.style.color = result.success ? "green" : "red";
      }
    } catch (err) {
      if (responseBox) {
        responseBox.textContent = "Erreur serveur. Merci de réessayer.";
        responseBox.style.color = "red";
      }
    }

    submitBtn.disabled = false;
    submitBtn.textContent = "Envoyer";
  });
}
