// @ts-check
import { defineConfig } from 'astro/config';

import tailwindcss from '@tailwindcss/vite';

// https://astro.build/config
export default defineConfig({
  base: '/subsidy',
  outDir: '../subsidy',

  build: {
    assets: '_assets'
  },

  vite: {
    plugins: [tailwindcss()]
  }
});