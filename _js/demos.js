let demosNav       = null;
let demosNavLinks  = null;
let demosNavToggle = null;
const toggledClass = 'is-visible';

export function initialize() {
  demosNav       = document.querySelector('.js-demos-nav');
  demosNavLinks  = document.querySelectorAll('.js-demos-nav a');
  demosNavToggle = document.querySelector('.js-demos-nav-toggle');

  // Stop everything if any of the above elements do not exist.
  if (!demosNav || !demosNavLinks || !demosNavToggle) {
    return;
  }

  addListeners();
}

export function addListeners() {
  demosNavToggle.addEventListener('click', toggleDemosNav, false);
  for (let i = 0; i < demosNavLinks.length; i++) {
    demosNavLinks[i].addEventListener('click', toggleDemosNav, false);
  }
}

export function toggleDemosNav(event) {
  if (demosNav.classList) {
    demosNav.classList.toggle(toggledClass);
  } else {
    let classes       = demosNav.toggledClass.split(' ');
    let existingIndex = classes.indexOf(toggledClass);
    if (existingIndex >= 0) {
      classes.splice(existingIndex, 1);
    } else {
      classes.push(toggledClass);
    }
    demosNav.toggledClass = classes.join(' ');
  }
}

initialize();
