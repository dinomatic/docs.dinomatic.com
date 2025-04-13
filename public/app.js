(() => {
  // Nav toggle
  const navToggle = document.querySelector('.nav-toggle')
  const navMenu = document.querySelector('.nav-menu')
  if (!navMenu) {
    navToggle.parentElement.removeChild(navToggle)
  }
  navToggle.addEventListener('click', () => {
    navMenu.classList.toggle('hidden')
    navToggle.querySelectorAll('path').forEach((path) => {
      path.classList.toggle('opacity-0')
      path.classList.toggle('opacity-100')
    })
  })
})()
