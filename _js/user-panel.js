let isVisible   = false
let wrapEl      = null
let allDesc     = null
let toggleBtn   = null


export function initialize() {
  toggleBtn = document.querySelector('[data-user-toggle]')
  wrapEl    = document.querySelector('[data-user-panel]')

  // Stop everything if any of the above elements do not exist.
  if (!toggleBtn || !wrapEl) {
    return
  }

  allDesc = wrapEl.getElementsByTagName('*')
  addListeners()
}


export function addListeners() {
  toggleBtn.addEventListener('click', toggleUserPanel, false)
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
    toggleUserPanel(event)
  } else {
    return
  }
}


export function handleKeyPresses(event) {
  if (isVisible && (event.keyCode === 27)) {
    toggleUserPanel(event)
  }
}


export function toggleUserPanel(event) {
  wrapEl.classList.toggle('is-visible')
  isVisible = !isVisible
  event.stopPropagation()
}
