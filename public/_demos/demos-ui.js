var demosNav       = document.getElementById('demos-nav');
var demosNavLinks  = document.querySelectorAll('#demos-nav a');
var demosNavToggle = document.getElementById('demos-nav__toggle');
var toggledClass   = 'is-visible';


function toggleDemosNav() {
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


demosNavToggle.addEventListener('click', toggleDemosNav, false);


for (var i = 0; i < demosNavLinks.length; i++) {
  demosNavLinks[i].addEventListener('click', toggleDemosNav, false);
}
