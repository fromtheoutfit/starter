var demosNav       = null;
var demosNavLinks  = null;
var demosNavToggle = null;
var toggledClass   = 'is-visible';

function initialize() {
  demosNav       = document.getElementById('demos-nav');
  demosNavLinks  = document.querySelectorAll('#demos-nav a');
  demosNavToggle = document.getElementById('demos-nav__toggle');

  // Stop everything if any of the above elements do not exist.
  if (!demosNav || !demosNavLinks || !demosNavToggle) {
    return;
  }

  addListeners();
}

function addListeners() {
  demosNavToggle.addEventListener('click', toggleDemosNav, false);
  for (var i = 0; i < demosNavLinks.length; i++) {
    demosNavLinks[i].addEventListener('click', toggleDemosNav, false);
  }
}

function toggleDemosNav(event) {
  if (demosNav.classList) {
    demosNav.classList.toggle(toggledClass);
  } else {
    var classes       = demosNav.toggledClass.split(' ');
    var existingIndex = classes.indexOf(toggledClass);
    if (existingIndex >= 0) {
      classes.splice(existingIndex, 1);
    } else {
      classes.push(toggledClass);
    }
    demosNav.toggledClass = classes.join(' ');
  }
}

initialize();
