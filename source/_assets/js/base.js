const createEl = (tag, content = '', classList = [], atts = []) => {
  const el = document.createElement(tag)
  el.innerText = content
  classList.length && classList.forEach(className => el.classList.add(className))
  atts.length && el.setAttribute(atts[0], atts[1])
  return el
}

export { createEl }
