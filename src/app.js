;(() => {
  const navMenu = document.querySelector('.nav-menu')
  const navToggle = document.querySelector('.nav-toggle')
  const themeToggle = document.querySelector('#theme-toggle')

  initTheme()

  if (themeToggle) {
    themeToggle.addEventListener('click', () => {
      const isDark = document.documentElement.classList.toggle('dark')
      localStorage.setItem('theme', isDark ? 'dark' : 'light')
    })
  }

  if (navMenu) {
    const navSections = document.querySelectorAll('li[data-product]')
    if (navSections.length > 0) {
      reorderNavSections(navSections)
    }

    if (navToggle) {
      navToggle.addEventListener('click', () => toggleNavMenu())
    }
  } else {
    if (navToggle) {
      navToggle.parentElement.removeChild(navToggle)
    }
  }

  function toggleNavMenu() {
    navMenu.classList.toggle('hidden')
    navToggle.querySelectorAll('path').forEach((path) => {
      path.classList.toggle('opacity-0')
      path.classList.toggle('opacity-100')
    })
  }

  function reorderNavSections(navSections) {
    let pagePath = window.location.pathname
    pagePath = pagePath.startsWith('/') ? pagePath.slice(1) : pagePath
    pagePath = pagePath.endsWith('/') ? pagePath.slice(0, -1) : pagePath
    const paths = pagePath.split('/')
    let product = paths.length > 1 && paths[0] === 'docs' ? paths[1] : null

    if (!product) {
      return
    }

    const navParent = navSections[0].parentElement
    let section = Array.from(navSections).find((section) => section.dataset.product === product)
    if (section) {
      section.parentElement.removeChild(section)
      navParent.insertBefore(section, navParent.children[0])
    }
  }

  function initTheme() {
    const stored = localStorage.getItem('theme')
    if (stored === 'dark' || stored === 'light') {
      stored === 'dark'
        ? document.documentElement.classList.add('dark')
        : document.documentElement.classList.remove('dark')
    } else if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
      document.documentElement.classList.add('dark')
    }
  }
})()
