<script setup>
import { useData, useRoute } from 'vitepress'
import { computed } from 'vue'

const { theme } = useData()
const route = useRoute()

const product = computed(() => {
  const pathParts = route.path.split('/')
  if (pathParts[1] === 'docs' && pathParts[2]) {
    return theme.value.products.find((p) => p.slug === pathParts[2]) ?? null
  }
  return null
})
</script>

<template>
  <div v-if="product" class="product-version">
    <span class="product-name">{{ product.name }}</span>
    <span class="version-badge">v{{ product.version }}</span>
  </div>
</template>

<style scoped>
.product-version {
  margin-bottom: 1.5rem;
  padding: 1rem;
  border: 2px solid var(--vp-c-brand-soft);
  background-color: var(--vp-c-bg-soft);
  text-align: center;
  font-size: 1.25rem;
  font-weight: 500;
}

.product-name {
  display: block;
  margin-bottom: 0.5rem;
}

.version-badge {
  color: var(--vp-c-brand-1);
}
</style>
