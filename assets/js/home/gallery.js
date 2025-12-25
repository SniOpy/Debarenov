document.querySelectorAll(".before-after-container").forEach(container => {

  const afterImg = container.querySelector(".after-img");
  const bar = container.querySelector(".slider-bar");
  const handle = container.querySelector(".slider-handle");

  let isDragging = false;

  const moveSlider = (x) => {
    const rect = container.getBoundingClientRect();
    let position = x - rect.left;

    position = Math.max(0, Math.min(position, rect.width));

    const percentRight = 100 - (position / rect.width * 100);

    afterImg.style.clipPath = `inset(0 ${percentRight}% 0 0)`;
    bar.style.left = `${position}px`;
    handle.style.left = `${position - 15}px`;
  };

  handle.addEventListener("mousedown", () => isDragging = true);
  handle.addEventListener("touchstart", () => isDragging = true);

  window.addEventListener("mousemove", e => { if (isDragging) moveSlider(e.clientX); });
  window.addEventListener("touchmove", e => { if (isDragging) moveSlider(e.touches[0].clientX); });

  window.addEventListener("mouseup", () => isDragging = false);
  window.addEventListener("touchend", () => isDragging = false);
});
