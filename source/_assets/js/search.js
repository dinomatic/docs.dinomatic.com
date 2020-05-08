/**
 * Algolia docSearch.
 */
(function () {
  const searchInput = document.getElementById('docsearch-input')
  if (!searchInput) return

  window.docsearch = require('docsearch.js')

  document.addEventListener('keydown', function (e) {
    if (e.keyCode === 191) {
      e.preventDefault()
    }
  })

  document.addEventListener('keyup', function (e) {
    if (e.keyCode === 191) {
      e.preventDefault()
      searchInput.focus()
    }
  })

  document.addEventListener('keydown', function (e) {
    if (e.keyCode === 27 && e.target === searchInput) {
      searchInput.blur()
    }
  })
})()
