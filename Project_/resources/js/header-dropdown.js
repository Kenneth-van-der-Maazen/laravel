document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector(".klm-header");
  const dropdowns = document.querySelectorAll("[data-dropdown]");

  dropdowns.forEach((dd) => {
    const btn = dd.querySelector(".klm-dropdown-trigger");

    const close = () => {
      dd.classList.remove("is-open");
      btn?.setAttribute("aria-expanded", "false");
      header?.classList.remove("has-open-dropdown");
    };

    const open = () => {
      dd.classList.add("is-open");
      btn?.setAttribute("aria-expanded", "true");
      header?.classList.add("has-open-dropdown");
    };

    btn?.addEventListener("click", (e) => {
      e.stopPropagation();
      dd.classList.contains("is-open") ? close() : open();
    });

    document.addEventListener("click", () => close());
    document.addEventListener("keydown", (e) => { if (e.key === "Escape") close(); });
  });
});
