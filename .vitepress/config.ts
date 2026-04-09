import { defineConfig } from 'vitepress'
import { products, generateSidebar } from './sidebar'

export default defineConfig({
  title: 'DinoMatic Docs',
  description: 'DinoMatic Product Documentation',

  srcDir: 'docs',

  cleanUrls: true,

  ignoreDeadLinks: true,

  sitemap: {
    hostname: 'https://docs.dinomatic.com',
    lastmodDateOnly: false,
  },

  head: [
    ['link', { rel: 'preconnect', href: 'https://media.dinomatic.com', crossorigin: '' }],
    ['link', { rel: 'preconnect', href: 'https://fonts.bunny.net', crossorigin: '' }],
    [
      'script',
      { async: '', defer: '', 'data-domain': 'docs.dinomatic.com', src: 'https://plausible.io/js/plausible.js' },
    ],
    ['meta', { property: 'og:site_name', content: 'DinoMatic Docs' }],
    ['meta', { property: 'og:type', content: 'website' }],
    ['meta', { property: 'og:image', content: 'https://docs.dinomatic.com/images/dinomatic.jpg' }],
    ['meta', { name: 'twitter:card', content: 'summary_large_image' }],
    ['meta', { name: 'twitter:image:alt', content: 'DinoMatic Docs' }],
    ['link', { rel: 'icon', href: '/favicon.jpg' }],
    ['link', { rel: 'home', href: 'https://docs.dinomatic.com' }],
  ],

  transformPageData(pageData) {
    const title = pageData.frontmatter.title || 'DinoMatic Docs'
    const description = pageData.frontmatter.description || 'DinoMatic Product Documentation'
    const canonical = `https://docs.dinomatic.com/${pageData.relativePath.replace(/index\.md$/, '').replace(/\.md$/, '')}`

    pageData.frontmatter.head = [
      ...(pageData.frontmatter.head || []),
      ['link', { rel: 'canonical', href: canonical }],
      ['meta', { property: 'og:url', content: canonical }],
      ['meta', { property: 'og:title', content: title }],
      ['meta', { property: 'og:description', content: description }],
      ['meta', { name: 'twitter:title', content: title }],
      ['meta', { name: 'twitter:description', content: description }],
    ]
  },

  themeConfig: {
    outline: [2, 3],

    search: {
      provider: 'local',
    },

    sidebar: generateSidebar(),

    // @ts-ignore
    products,
    // @ts-ignore
    versions: Object.fromEntries(products.map((p) => [p.slug, p.version])),

    nav: [
      { text: 'Docs Index', link: '/' },
      { text: 'DinoMatic', link: 'https://dinomatic.com' },
    ],

    socialLinks: [
      { icon: 'github', link: 'https://github.com/dinomatic' },
      { icon: 'telegram', link: 'https://t.me/dinomatic' },
    ],
  },
})
