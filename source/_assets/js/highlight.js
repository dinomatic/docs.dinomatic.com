import hljs from 'highlight.js/lib/core'

hljs.registerLanguage('bash', require('highlight.js/lib/languages/bash'))
hljs.registerLanguage('php', require('highlight.js/lib/languages/php'))
hljs.registerLanguage('html', require('highlight.js/lib/languages/xml'))
hljs.registerLanguage('css', require('highlight.js/lib/languages/css'))
document.querySelectorAll('pre code').forEach((block) => {
  hljs.highlightBlock(block)
})
