function hideSections() {
    const urlParams = new URLSearchParams(window.location.search);
    const sectionId = urlParams.get('section');

    const sections = document.querySelectorAll('.explore');
    sections.forEach(function(section) {
      section.style.display = 'none';
    });

    if (sectionId) {
      const selectedSection = document.getElementById(sectionId);
      if (selectedSection) {
        selectedSection.style.display = 'block';
      }
    }
  }
  document.addEventListener('DOMContentLoaded', hideSections);