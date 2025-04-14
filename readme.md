# DinoMatic Docs

Documentation site for [DinoMatic](https://dinomatic.com), built with [Zola](https://www.getzola.org/) and enhanced with [TailwindCSS](https://tailwindcss.com).

## Development

1. Install dependencies:

   ```bash
   npm install
   ```

2. Start the development server:
   ```bash
   npm run dev
   ```

This will start concurrent processes for:

- Zola static site server
- TailwindCSS watcher
- JavaScript bundling
- Search functionality

## Building

To create a production build:

```bash
npm run build
```

The built site will be in the `public` directory.
