import { createEl } from './base'

(() => {
  const docContent = document.querySelector('[data-docs="true"]')
  if (!docContent) return

  // PAGE NAV
  const pageMenu = document.getElementById('page-menu-wrapper')
  const createOnPageMenuHeading = () => createEl('h5', 'On This Page', ['font-bold'], [])
  const createOnPageMenuLink = (id, anchor) => {
    const classList = ['block', 'mb-2', 'ml-2', 'text-gray-500', 'nav-menu__item']
    return createEl('a', anchor, classList, ['href', `#${id}`])
  }
  const createOnPageMenu = links => {
    pageMenu.appendChild(createOnPageMenuHeading())
    links.forEach(link => pageMenu.appendChild(link))
  }
  const createAnchorLink = id => {
    return createEl('a', '#', ['sub-heading'], ['href', `#${id}`])
  }
  const updateHeading = (heading, id) => {
    heading.id = id
    heading.classList.add('mt-16')
    heading.appendChild(createAnchorLink(id))
  }

  const headings = docContent.querySelectorAll('h3')
  if (headings.length > 0) {
    const pageLinks = []

    headings.forEach((heading) => {
      const anchor = heading.textContent
      const id = anchor.replace(/\s+/g, '-').toLowerCase()

      updateHeading(heading, id)
      pageLinks.push(createOnPageMenuLink(id, anchor))
    })
    createOnPageMenu(pageLinks)
  }

  const h4s = docContent.querySelectorAll('h4')
  if (h4s.length > 0) {
    h4s.forEach((heading) => {
      const anchor = heading.textContent
      const id = anchor.replace(/\s+/g, '-').toLowerCase()

      updateHeading(heading, id)
    })
  }

  // IMAGES
  const images = docContent.querySelectorAll('img')
  if (images.length > 0) {
    images.forEach(image => image.classList.add('shadow-lg'))
  }

  // EXTERNAL LINKS
  docContent.querySelectorAll('a')
    .forEach(link => {
      if (!link.href.includes('docs.dinomatic.com')) {
        link.setAttribute('target', '_blank')
      }
    })
})()
