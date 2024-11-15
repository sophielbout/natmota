import { sectionsToAnimate, rotatingElements, titlesToAnimate } from './variables.js';

// Fonction pour ajouter la classe 'visible' aux sections avec un délai progressif
function animateSections(sections) {
  sections.forEach((section, index) => {
    if (section) {
      setTimeout(() => {
        section.classList.add('visible');
      }, index * 1000);  // Délai de 1 seconde entre chaque section
    }
  });
}

// Fonction pour gérer la rotation infinie des éléments
function rotateElements(elements) {
  elements.forEach(element => {
    if (element) {
      element.style.animation = 'rotate 5s infinite linear';
    }
  });
}

// Fonction pour vérifier si un élément est dans la fenêtre visible
function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// Fonction pour ajouter et réinitialiser la classe 'visible' sur les titres H2
function animateTitles(titles) {
  Object.entries(titles).forEach(([key, title], index) => {
    if (isInViewport(title)) {
      if (!title.classList.contains('visible')) {
        title.classList.add('visible');

        // Spécifique à Koukaki avec un délai pour l'apparition après Studio
        if (key === 'studioTitle') {
          setTimeout(() => {
            if (!titles.koukakiTitle.classList.contains('visible')) {
              titles.koukakiTitle.classList.add('visible');
            }
          }, 500);
        }
      }
    } else {
      if (title.classList.contains('visible')) {
        title.classList.remove('visible');
      }

      // Réinitialiser aussi Koukaki si Studio sort de la vue
      if (key === 'studioTitle' && titles.koukakiTitle.classList.contains('visible')) {
        titles.koukakiTitle.classList.remove('visible');
      }
    }
  });
}

// Initialisation des animations au chargement de la page
document.addEventListener('DOMContentLoaded', () => {
  // Animation des sections
  animateSections(sectionsToAnimate);

  // Rotation des éléments
  rotateElements(rotatingElements);

  // Attacher la fonction au scroll pour les titres H2
  window.addEventListener('scroll', () => {
    animateTitles(titlesToAnimate);
  });

  // Lancer une première vérification des titres H2 au chargement
  animateTitles(titlesToAnimate);
});


document.addEventListener("DOMContentLoaded", function() {
    const video = document.querySelector('.background-video');
    const fallbackImage = document.querySelector('.fallback-image');

    if (video) {
      video.addEventListener('canplay', function() {
        fallbackImage.style.display = 'none'; // Cacher l'image de fallback quand la vidéo est prête
      });
    }
  });
