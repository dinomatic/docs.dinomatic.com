import { createEl } from './base'

(() => {
  const CLASSNAME = 'active-section'

  const navWrapper = document.getElementById('js-nav-menu')
  if (!navWrapper) return

  const findParentSection = el => el.parentNode.classList.contains('level-0')
    ? el.parentNode : findParentSection(el.parentNode)

  const findSelectedSection = () => {
    const links = Array.from(document.querySelectorAll('#js-nav-menu a'))
    const selected = [...links].find(link => link.classList.contains('active'))
    const section = findParentSection(selected)
    section.classList.add(CLASSNAME)

    return section
  }

  const findOtherSections = () => {
    const sections = Array.from(document.querySelectorAll('#js-nav-menu > ul > li'))
    return [...sections].filter(li => !li.classList.contains(CLASSNAME))
  }

  const makeUl = () => {
    const ul = createEl('ul')
    const items = [findSelectedSection(), ...findOtherSections()]
    items.forEach(item => ul.appendChild(item))
    return ul
  }

  const rearrangeNav = () => {
    const nav = makeUl()
    navWrapper.removeChild(navWrapper.querySelector('ul:first-of-type'))
    navWrapper.appendChild(nav)
    navWrapper.classList.remove('opacity-0')
  }

  rearrangeNav()
})()
