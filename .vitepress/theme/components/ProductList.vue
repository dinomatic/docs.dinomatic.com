<script setup>
import { useData } from 'vitepress'

const { theme } = useData()
</script>

<template>
  <div class="product-list">
    <div v-for="p in theme.products" :key="p.slug" class="product-item">
      <div class="product-header">
        <a :href="`/docs/${p.slug}/`" class="product-name">{{ p.name }}</a>
        <span class="product-version">v{{ p.version }}</span>
      </div>
      <p class="product-description">{{ p.description }}</p>
      <a :href="`/docs/${p.slug}/`" class="product-link">View documentation →</a>
    </div>
  </div>
</template>

<style scoped>
.product-list {
  display: grid;
  grid-template-columns: repeat( auto-fit, minmax(250px, 1fr) );
  gap: 1.5rem;
  margin-top: 2rem;
}

.product-item {
  padding: 1.25rem 1.5rem;
  border: 1px solid var(--vp-c-brand-soft);
  background-color: var(--vp-c-bg-soft);
  &:hover {
    border: 1px solid var(--vp-c-brand-1);
  }
}

.product-header {
  display: flex;
  align-items: baseline;
  gap: 0.75rem;
  margin-bottom: 0.5rem;
}

.product-name {
  font-size: 1.1rem;
  font-weight: 600;
  color: var(--vp-c-text-1);
  text-decoration: none;
}

.product-name:hover {
  color: var(--vp-c-brand-1);
}

.product-version {
  font-size: 0.8rem;
  color: var(--vp-c-brand-1);
  font-weight: 500;
}

.product-description {
  margin: 0 0 0.75rem;
  font-size: 0.9rem;
  color: var(--vp-c-text-2);
  line-height: 1.6;
}

.product-link {
  font-size: 0.875rem;
  font-weight: 500;
  color: var(--vp-c-brand-1);
  text-decoration: none;
}

.product-link:hover {
  text-decoration: underline;
}
</style>
