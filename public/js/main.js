function onLoad() {
  const ham = document.querySelector(".ham-menu");
  const nav = document.querySelector(".navbar");
  ham.addEventListener("click", () => {
    ham.classList.toggle("active");
    nav.classList.toggle("active");
  });

  const loadder = document.getElementById("preloadder");
  loadder.style.display = "none";
}

window.addEventListener("load", () => {
  onLoad();
});


function showSection(sectionId) {
  window.location.href = `sights-description.html?section=${sectionId}`;
}

