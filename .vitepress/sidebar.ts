import fs from 'fs'
import path from 'path'
import yaml from 'js-yaml'
import { fileURLToPath } from 'url'

const __dirname = fileURLToPath(new URL('.', import.meta.url))

export const products = [
  {
    slug: 'akurai',
    name: 'Akurai',
    version: '4.4.0',
    description: 'A versatile WordPress theme for creating and managing awesome sports betting affiliate websites.',
  },
  {
    slug: 'spinoko',
    name: 'Spinoko',
    version: '2.9.2',
    description: 'A modern WordPress theme for creating and managing awesome casino affiliate websites.',
  },
  {
    slug: 'fxt',
    name: 'FXT',
    version: '1.5.0',
    description:
      'A specialized WordPress theme for Forex affiliate websites, featuring built-in broker reviews, comparison tables, and listing blocks.',
  },
  {
    slug: 'kemoku',
    name: 'Kemoku',
    version: '2.3.0',
    description:
      'A WordPress plugin for gambling affiliate websites to manage and promote sportsbook and casino reviews.',
  },
  {
    slug: 'dinodds',
    name: 'DinOdds',
    version: '1.5.0',
    description: 'Display odds comparison tables for major leagues on your website with just a couple of clicks.',
  },
  {
    slug: 'akurai-geo',
    name: 'Akurai Geo',
    version: '2.0.0',
    description:
      'A WordPress plugin built specifically for Akurai Theme to add powerful geo-targeting functionalities.',
  },
  {
    slug: 'spinoko-geo',
    name: 'Spinoko Geo',
    version: '1.1.5',
    description: 'A WordPress plugin built specifically for Spinoko Theme to add geo-targeting functionalities.',
  },
  {
    slug: 'nonaki',
    name: 'Nonaki',
    version: '2.0.0',
    description: 'A WordPress link management plugin for creating clean redirects and tracking audience performance.',
  },
  {
    slug: 'sikika',
    name: 'Sikika',
    version: '2.1.0',
    description: 'A simple and clean WordPress theme built to work with the Kemoku Reviews plugin, or standalone.',
  },
  {
    slug: 'hello-cookie',
    name: 'Hello Cookie',
    version: '1.0.2',
    description: 'A simple and lightweight cookie consent notice plugin for WordPress websites.',
  },
]

const sidebarCache = new Map<string, ReturnType<typeof readSidebarItems>>()

function getSidebarItems(product: string) {
  if (!sidebarCache.has(product)) {
    sidebarCache.set(product, readSidebarItems(product))
  }
  return sidebarCache.get(product)!
}

function readSidebarItems(product: string) {
  const dir = path.resolve(__dirname, `../docs/docs/${product}`)
  if (!fs.existsSync(dir)) return []

  return fs
    .readdirSync(dir)
    .filter((file) => file.endsWith('.md') && file !== 'index.md')
    .map((file) => {
      const content = fs.readFileSync(path.join(dir, file), 'utf-8')
      const match = content.match(/^---\s*\n([\s\S]*?)\n---\s*\n/)
      let title = file.replace('.md', '')
      let order = 999
      if (match) {
        try {
          const frontmatter = yaml.load(match[1]) as any
          title = frontmatter.title || title
          order = frontmatter.extra?.order || frontmatter.weight || order
        } catch (e) {}
      }
      return {
        text: title,
        link: `/docs/${product}/${file.replace('.md', '')}`,
        order,
      }
    })
    .sort((a, b) => a.order - b.order)
}

export function generateSidebar() {
  const sidebar: any = {}

  products.forEach((activeProduct) => {
    const items = products.map((p) => ({
      text: p.name,
      collapsed: activeProduct.slug !== p.slug,
      items: getSidebarItems(p.slug),
      link: `/docs/${p.slug}/`,
    }))

    const activeIndex = products.indexOf(activeProduct)
    const [activeItem] = items.splice(activeIndex, 1)
    items.unshift(activeItem)

    sidebar[`/docs/${activeProduct.slug}/`] = items
  })

  const defaultSidebar = products.map((p) => ({
    text: p.name,
    collapsed: true,
    items: getSidebarItems(p.slug),
    link: `/docs/${p.slug}/`,
  }))

  sidebar['/docs/'] = defaultSidebar
  sidebar['/'] = defaultSidebar

  return sidebar
}
