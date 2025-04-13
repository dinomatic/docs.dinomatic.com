import docsearch from '@docsearch/js';

docsearch({
  container: '#docsearch',
  appId: '53EFS57BTW',
  indexName: 'dinomatic',
  apiKey: '6c7d267826f9b223c86e9233ff8d693d',
})
// styles are copied to /static/docsearch.css
// and included in _head.html

(() => {
  // Nav toggle
  const navToggle = document.querySelector('.nav-toggle')
  const navMenu = document.querySelector('.nav-menu')
  if (!navMenu) {
    navToggle.parentElement.removeChild(navToggle)
  }
  navToggle.addEventListener('click', () => {
    navMenu.classList.toggle('hidden')
    navToggle.querySelectorAll('path').forEach(path => {
      path.classList.toggle('opacity-0')
      path.classList.toggle('opacity-100')
    })
  })
})()
