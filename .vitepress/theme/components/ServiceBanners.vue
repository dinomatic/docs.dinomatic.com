<template>
  <div class="service-banners">
    <a href="https://dinomatic.com/web-development" target="_blank" rel="noopener" class="service-banner">
      <span class="service-title">WordPress Services</span>
      <span class="service-desc">Professional WP development</span>
    </a>
    <a href="https://dinomatic.com/turbo-core" target="_blank" rel="noopener" class="service-banner">
      <span class="service-title">WordPress Performance</span>
      <span class="service-desc">Optimization for Affiliate Websites</span>
    </a>
  </div>
</template>

<style scoped>
.service-banners {
  margin-top: 1.5rem;
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.service-banner {
  display: block;
  padding: 1rem;
  border: 1px solid var(--vp-c-brand-soft);
  background-color: var(--vp-c-bg-soft);
  transition:
    border-color 0.25s,
    background-color 0.25s;
  text-decoration: none !important;
}

.service-banner:hover {
  border-color: var(--vp-c-brand-1);
  background-color: var(--vp-c-bg-mute);
}

.service-title {
  display: block;
  font-size: 0.9rem;
  font-weight: 600;
  color: var(--vp-c-text-1);
  line-height: 1.2;
}

.service-desc {
  display: block;
  margin-top: 0.25rem;
  font-size: 0.8rem;
  color: var(--vp-c-text-2);
  line-height: 1.4;
}
</style>
