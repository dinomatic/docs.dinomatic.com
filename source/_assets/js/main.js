import './docs'
import hljs from 'highlight.js/lib/highlight'

hljs.registerLanguage('html', require('highlight.js/lib/languages/xml'));
document.querySelectorAll('pre code').forEach((block) => {
    hljs.highlightBlock(block);
});

// hljs.registerLanguage('bash', require('highlight.js/lib/languages/bash'));
// hljs.registerLanguage('css', require('highlight.js/lib/languages/css'));
// hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'));
// hljs.registerLanguage('markdown', require('highlight.js/lib/languages/markdown'));
// hljs.registerLanguage('php', require('highlight.js/lib/languages/php'));
// hljs.registerLanguage('scss', require('highlight.js/lib/languages/scss'));
// hljs.registerLanguage('json', require('highlight.js/lib/languages/json'));
// hljs.registerLanguage('yaml', require('highlight.js/lib/languages/yaml'));