/**
 * Algolia docSearch.
 */
(function () {
  const searchInput = document.getElementById('docsearch-input')
  if (!searchInput) return

  window.docsearch = require('docsearch.js')

  document.addEventListener('keydown', function (e) {
    if (e.code === 'Slash') {
      e.preventDefault()
    }
  })

  document.addEventListener('keyup', function (e) {
    if (e.code === 'Slash') {
      e.preventDefault()
      searchInput.focus()
    }
  })

  searchInput.addEventListener('keydown', function (e) {
    if (e.code === 'Escape') {
      searchInput.blur()
    }
  })

  searchInput.addEventListener('focus', () => {
    toggleZIndex(true)
  })
  searchInput.addEventListener('blur', () => {
    toggleZIndex(false)
  })
  const toggleZIndex = on => document.getElementById('js-page-menu').style.zIndex = on ? -1 : 0
})()
