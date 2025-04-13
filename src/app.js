;(() => {
  const navMenu = document.querySelector('.nav-menu')
  const navToggle = document.querySelector('.nav-toggle')

  if (navMenu) {
    reorderNavSections()
    highlightActiveLink()

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

  function highlightActiveLink() {
    const getClassList = (link) => {
      const classList = ['text-blue-600']
      if (!link.classList.contains('sticky')) {
        classList.push('-ml-6', 'pl-4', 'border-l-2', 'border-blue-600')
      }
      return classList
    }

    const pageUrl = window.location.href
    navMenu.querySelectorAll('a').forEach((link) => {
      if (link.href === pageUrl) {
        link.classList.add(...getClassList(link))
      }
    })
  }

  function reorderNavSections() {
    let pagePath = window.location.pathname
    pagePath = pagePath.startsWith('/') ? pagePath.slice(1) : pagePath
    pagePath = pagePath.endsWith('/') ? pagePath.slice(0, -1) : pagePath
    const paths = pagePath.split('/')
    let product = paths.length > 1 && paths[0] === 'docs' ? paths[1] : null

    if (!product) {
      return
    }

    const navSections = document.querySelectorAll('li[data-product]')
    if (navSections.length > 0) {
      const navParent = navSections[0].parentElement
      let section = Array.from(navSections).find((section) => section.dataset.product === product)
      if (section) {
        section.parentElement.removeChild(section)
        navParent.insertBefore(section, navParent.children[0])
      }
    }
  }
})()
