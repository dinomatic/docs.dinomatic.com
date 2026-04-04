import DefaultTheme from 'vitepress/theme'
import { h, type App } from 'vue'
import './custom.css'
import ProductVersion from './components/ProductVersion.vue'
import ProductList from './components/ProductList.vue'
import ServiceBanners from './components/ServiceBanners.vue'

export default {
  ...DefaultTheme,
  Layout() {
    return h(DefaultTheme.Layout, null, {
      'aside-top': () => h(ProductVersion),
      'aside-bottom': () => h(ServiceBanners),
    })
  },
  enhanceApp({ app }: { app: App }) {
    app.component('ProductVersion', ProductVersion)
    app.component('ProductList', ProductList)
    app.component('ServiceBanners', ServiceBanners)
  },
}
