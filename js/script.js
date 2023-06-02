const accordion = document.querySelector(".cards-container");

accordion.addEventListener("click", (e) => {
  const activePanel = e.target.closest(".card-container");
  if (!activePanel) return;
  toggleAccordion(activePanel);
});

function toggleAccordion(panelToActivate) {
  const activeButton = panelToActivate.querySelector(".accordion-trigger");
  const activePanel = panelToActivate.querySelector(".content-card-container");
  const activePanelIsOpened = activeButton.getAttribute("aria-expanded");

  if (activePanelIsOpened === "true") {
    panelToActivate
      .querySelector(".accordion-trigger")
      .setAttribute("aria-expanded", false);

    panelToActivate
      .querySelector(".content-card-container")
      .setAttribute("aria-hidden", true);
  } else {
    panelToActivate.querySelector(".accordion-trigger").setAttribute("aria-expanded", true);

    panelToActivate
      .querySelector(".content-card-container")
      .setAttribute("aria-hidden", false);
  }
}
