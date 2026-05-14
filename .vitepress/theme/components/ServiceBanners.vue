<template>
  <div class="banners">
    <a href="https://dinomatic.com/themes/spinoko" target="_blank" rel="noopener"> Casino Affiliate WP Theme </a>
    <a href="https://dinomatic.com/themes/akurai" target="_blank" rel="noopener"> Sports Betting Affiliate Theme </a>
    <a href="https://dinomatic.com/themes/fxt" target="_blank" rel="noopener"> Forex Affiliate WordPress Theme </a>
    <a href="https://dinomatic.com/plugins/kemoku" target="_blank" rel="noopener"> Affiliate Reviews WP Plugin </a>
  </div>
</template>

<style scoped>
.banners {
  margin-top: 1.5rem;
  display: flex;
  flex-direction: column;
  gap: 1rem;

  & > a {
    display: block;
    padding: 0.65rem;
    font-size: 0.8rem;
    font-weight: 400;
    line-height: 1;
    color: var(--vp-c-text-1);
    border: 1px solid var(--vp-c-brand-soft);
    background-color: var(--vp-c-bg-soft);
    transition:
      border-color 0.25s,
      background-color 0.25s;
    text-decoration: none !important;

    &:hover {
      border-color: var(--vp-c-brand-1);
      background-color: var(--vp-c-bg-mute);
    }
  }
}
</style>
