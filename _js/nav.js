let isVisible   = false
let wrapEl      = null
let allDesc     = null
let openBtn     = null
let closeBtn    = null


export function initialize() {
  openBtn  = document.querySelector('[data-open-nav]')
  closeBtn = document.querySelector('[data-close-nav]')
  wrapEl   = document.querySelector('[data-nav-wrap]')

  // Stop everything if any of the above elements do not exist.
  if (!openBtn || !closeBtn || !wrapEl) {
    return
  }

  allDesc = wrapEl.getElementsByTagName('*')
  addListeners()
}


export function addListeners() {
  openBtn.addEventListener('click', toggleNav, false)
  closeBtn.addEventListener('click', toggleNav, false)
  document.addEventListener('touchend', determineEventLoc, false)
  document.addEventListener('click', determineEventLoc, false)
  document.addEventListener('keyup', handleKeyPresses, false)
}


export function determineEventLoc(event) {
  if (isVisible) {
    if (event.target === wrapEl) {
      return
    } else {
      for (let i = 0; i < allDesc.length; i++) {
        if (event.target === allDesc[i]) {
          return
        }
      }
    }
    toggleNav(event)
  } else {
    return
  }
}


export function handleKeyPresses(event) {
  if (isVisible && (event.keyCode === 27)) {
    toggleNav(event)
  }
}


export function toggleNav(event) {
  wrapEl.classList.toggle('is-visible')
  isVisible = !isVisible
  event.stopPropagation()
}
