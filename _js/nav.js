const swapWidth = 600
let isVisible   = false
let wrapEl      = null
let allDesc     = null
let openBtn     = null
let closeBtn    = null
let vpWidth     = null


export function initialize() {
  openBtn  = document.querySelector('.js-header__open-nav')
  closeBtn = document.querySelector('.js-header__close-nav')
  wrapEl   = document.querySelector('.js-header__nav-wrap')

  // Stop everything if any of the above elements do not exist.
  if (!openBtn || !closeBtn || !wrapEl) {
    return
  }

  allDesc = wrapEl.getElementsByTagName('*')
  addListeners()
  betterResize()
}


export function addListeners() {
  openBtn.addEventListener('click', toggleNav, false)
  closeBtn.addEventListener('click', toggleNav, false)
  document.addEventListener('touchend', determineEventLoc, false)
  document.addEventListener('click', determineEventLoc, false)
  document.addEventListener('keyup', handleKeyPresses, false)
  window.addEventListener('resizeViaRAF', handleResize, false)
}


export function betterResize() {
  let running = false
  function doItViaRAF() {
    if (running) {return}
    running = true
    requestAnimationFrame(function() {
      window.dispatchEvent(new CustomEvent('resizeViaRAF'))
      running = false
    })
  }
  window.addEventListener('resize', doItViaRAF)
}


export function handleResize() {
  vpWidth = window.innerWidth
  if ((vpWidth >= swapWidth) && isVisible) {
    toggleNav(event)
  }
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
