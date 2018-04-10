// Importing ally.js provides accessibility features that aren't yet provided
// by browsers. Learn more: https://allyjs.io/



let dialog            = null
let openDialogBtns    = null
let closeDialogBtn    = null
let handleKey         = null
let handleTab         = null
let handleDisabled    = null
let handleHidden      = null
let initialFocusedEl  = null
let firstTabbableEl   = null



export function initialize() {

  // Grab the dialog.
  dialog = document.querySelector('[data-dialog]')

  // Stop everything if the dialog does not exist / isn't in the document.
  if (!dialog) {
    return
  }

  // Grab all Open Dialog buttons, as well as the one Close Dialog button.
  openDialogBtns = document.querySelectorAll('[data-open-dialog]')
  closeDialogBtn = document.querySelector('[data-close-dialog]')

  // When any of the Open Dialog buttons are clicked, run openDialog.
  Array.prototype.forEach.call(openDialogBtns, function(el){
    el.addEventListener('click', openDialog, false)
  })

}



export function openDialog() {

  // Remember the element that had focus before the dialog was opened.
  initialFocusedEl = document.activeElement

  // Make sure website elements *outside* of the dialog can not be navigated to
  // by screen readers via the document's Accessibility Tree.
  // https://allyjs.io/api/maintain/hidden.html
  handleHidden = ally.maintain.hidden({filter:dialog})

  // Make sure website elements *outside* of the dialog can not be focused.
  // https://allyjs.io/api/maintain/disabled.html
  handleDisabled = ally.maintain.disabled({filter:dialog})

  // Make sure browser chrome/UI can not be focused.
  // https://allyjs.io/api/maintain/tab-focus.html
  handleTab = ally.maintain.tabFocus({context:dialog})

  // Handle keypresses.
  // https://allyjs.io/api/when/key.html
  handleKey = ally.when.key({

    // Pressing Escape runs closeDialog.
    escape: closeDialog

  })

  // When the dialog is visible...
  // https://allyjs.io/api/when/visible-area.html
  ally.when.visibleArea({
    context: dialog,
    callback: function(context) {

      // Find the first tabbable element and give it focus.
      // https://allyjs.io/api/query/first-tabbable.html
      firstTabbableEl = ally.query.firstTabbable({
        context: context,
        defaultToContext: true
      })
      firstTabbableEl.focus()

    }
  })

  // Open the dialog.
  dialog.hidden = false
  dialog.setAttribute('aria-hidden', false)

  // Start listening for
  // - click events on the Close Dialog button, and
  // - the submit event on the dialog.
  closeDialogBtn.addEventListener('click', closeDialog, false)
  dialog.addEventListener('submit', saveDialog, true)

}



export function closeDialog() {

  // UNDO the process of making sure website elements *outside* of the dialog
  // can not be navigated to by screen readers.
  handleHidden.disengage()

  // UNDO the process of making sure website elements *outside* of the dialog
  // can not be focused.
  handleDisabled.disengage()

  // UNDO the process of making sure browser chrome/UI can not be focused.
  handleTab.disengage()

  // UNDO the process of handling keypresses.
  handleKey.disengage()

  // Close the dialog.
  dialog.hidden = true
  dialog.setAttribute('aria-hidden', true)

  // Return focus to the element that had focus *before* opening the dialog.
  initialFocusedEl.focus()

  // Stop listening for
  // - click events on the Close Dialog button, and
  // - the submit event on the dialog.
  closeDialogBtn.removeEventListener('click', closeDialog, false)
  dialog.removeEventListener('submit', saveDialog, true)

}



export function saveDialog(e) {

  // Prevent the default behavior.
  e.preventDefault()

  // **************************************************************************
  // TODO: Do something with the form's data.
  // **************************************************************************

  // Reset the form's values.
  dialog.querySelector('form').reset()

  // Run closeDialog.
  closeDialog()

}
