<!-- statamic:hide -->
# Multisimplicity
> A Multilingual focused Starter Kit for Statamic 3
<!-- /statamic:hide -->

## Overview

This kit is designed to be a starting (or learning) point for building simple and effective multilingual sites using Statamic's [Multi-site](https://statamic.dev/multi-site) feature.

**Note: multi-site requires Statamic Pro.**

### Statamic Build Details

A few notes on how the site is built.

- Header and Footer content is managed by Globals so it can be translated
- Sites can be added and removed in `config/statamic/sites.php`. Learn more about the steps involved in [renaming or deleting sites](https://statamic.dev/multi-site#renaming-a-site).
- Page components are managed with [Bard](https://statamic.dev/fieldtypes/bard) sets. pre-built sets include:
    - Side-by-side image + text boxes that reverse order through the list
    - Photo gallery that links to full-sized images with an [Alpine.js](https://alpinejs.dev) powered lightbox.
    - Side-by-side text columns with inline-Bard fields
    - Form embeds
- [SEO Pro](https://statamic.com/addons/statamic/seo-pro) support with basic meta and Open Graph fallbacks.
### Frontend Build Details

- Built with [TailwindCSS 3](https://tailwindcss.com) with pre-Purged CSS for 11kb of production CSS (make sure to recompile with `npm run dev/production` if you change the markup)
- Full [static site](https://github.com/statamic/ssg) support
- Multi-site with completely shared views for simplicity
- Only JavaScript is the Bard gallery that links to full-sized images with an [Alpine.js](https://alpinejs.dev) powered lightbox. It uses yield/section tags to push the CDN build into the html `<head>` from the `partials/_photo_gallery.antlers.html` partial.
- Mobile/Responsive friendly
- Lighthouse 100/100/100/100 score
