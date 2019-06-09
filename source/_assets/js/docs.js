(() => {
  const docContent = document.getElementById('docs-content')
  if (!docContent) return

  const pageMenu = document.getElementById('page-menu-wrapper')

  const createPageMenuLink = (id, anchor) => {
    const item = document.createElement('a')
    item.setAttribute('href', `#${id}`)
    item.innerText = anchor
    item.classList.add('block', 'mb-2', 'ml-2', 'text-grey', 'nav-menu__item')
    return item
  }

  const createPageMenuHeading = () => {
    const h5 = document.createElement('h5')
    h5.classList.add('font-bold')
    h5.innerText = 'On This Page'
    pageMenu.appendChild(h5)
  }

  const headings = docContent.querySelectorAll('h3')
  if (headings.length > 0) {

    createPageMenuHeading()

    headings.forEach((heading) => {
      const anchor = heading.textContent
      const id = anchor.replace(/\s+/g, '-').toLowerCase()

      heading.classList.add('mt-16')
      heading.id = id
      pageMenu.appendChild(createPageMenuLink(id, anchor))
    })
  }

  const images = docContent.querySelectorAll('img')
  if (images.length > 0) {
    images.forEach((image) => {
      image.src = `${baseUrl}/${image.src}`
      image.classList.add('shadow-lg')
    })
  }

  docContent.querySelectorAll('a')
    .forEach(link => {
      if (!link.href.includes('localhost')) {
        link.setAttribute('target', '_blank')
      }
    })
})()
