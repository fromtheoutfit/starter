let demosNav          = null
let demosNavAllDesc   = null
let demosNavToggle    = null
let demosNavIsVisible = false


export function initialize() {
  demosNav       = document.querySelector('[data-demos-nav]')
  demosNavToggle = document.querySelector('[data-demos-nav-toggle]')

  // Stop everything if any of the above elements do not exist.
  if (!demosNav || !demosNavToggle) {
    return
  }

  demosNavAllDesc = demosNav.getElementsByTagName('*')
  addListeners()
}


export function addListeners() {
  demosNavToggle.addEventListener('click', toggleDemosNav, false)
  document.addEventListener('touchend', determineEventLoc, false)
  document.addEventListener('click', determineEventLoc, false)
  document.addEventListener('keyup', handleKeyPresses, false)
}


export function determineEventLoc(event) {
  if (demosNavIsVisible) {
    if (event.target === demosNav) {
      return
    } else {
      for (let i = 0; i < demosNavAllDesc.length; i++) {
        if (event.target === demosNavAllDesc[i]) {
          return
        }
      }
    }
    toggleDemosNav(event)
  } else {
    return
  }
}


export function handleKeyPresses(event) {
  if (demosNavIsVisible && (event.keyCode === 27)) {
    toggleDemosNav(event)
  }
}


export function toggleDemosNav() {
  demosNav.classList.toggle('is-visible')
  demosNavIsVisible = !demosNavIsVisible
}
