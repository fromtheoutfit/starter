var nav = {

  swapWidth   : 600,
  isVisible   : false,
  wrapEl      : null,
  allDesc     : null,
  openBtn     : null,
  closeBtn    : null,
  vpWidth     : null,

  initialize: function() {
    nav.selectNodes();
    nav.addListeners();
    nav.betterResize();
  },

  selectNodes: function() {
    nav.openBtn  = document.querySelector('.js-header__open-nav');
    nav.closeBtn = document.querySelector('.js-header__close-nav');
    nav.wrapEl   = document.querySelector('.js-header__nav-wrap');
    nav.allDesc  = nav.wrapEl.getElementsByTagName('*');
  },

  addListeners: function() {
    nav.openBtn.addEventListener('click', nav.toggleNav, false);
    nav.closeBtn.addEventListener('click', nav.toggleNav, false);
    document.addEventListener('touchend', nav.determineEventLoc, false);
    document.addEventListener('click', nav.determineEventLoc, false);
    document.addEventListener('keyup', nav.handleKeyPresses, false);
    window.addEventListener('resizeViaRAF', nav.handleResize, false);
  },

  betterResize: function() {
    var running = false;
    function doItViaRAF() {
      if (running) {return;}
      running = true;
      requestAnimationFrame(function() {
        window.dispatchEvent(new CustomEvent('resizeViaRAF'));
        running = false;
      });
    }
    window.addEventListener('resize', doItViaRAF);
  },

  handleResize: function() {
    nav.vpWidth = window.innerWidth;
    if ((nav.vpWidth >= nav.swapWidth) && nav.isVisible) {
      nav.toggleNav(event);
    }
  },

  determineEventLoc: function(event) {
    if (nav.isVisible) {
      if (event.target === nav.wrapEl) {
        return;
      } else {
        for (var i = 0; i < nav.allDesc.length; i++) {
          if (event.target === nav.allDesc[i]) {
            return;
          }
        }
      }
      nav.toggleNav(event);
    } else {
      return;
    }
  },

  handleKeyPresses: function(event) {
    if (nav.isVisible && (event.keyCode === 27)) {
      nav.toggleNav(event);
    }
  },

  toggleNav: function(event) {
    nav.wrapEl.classList.toggle('is-visible');
    nav.isVisible = !nav.isVisible;
    event.stopPropagation();
  }

}

nav.initialize();
