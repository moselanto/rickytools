# Ricky WebP Optimizer

One-click WebP for WordPress and WooCommerce. Install, activate, done.

| | |
| --- | --- |
| Version | 1.0.0 |
| Requires | WordPress 5.5+, PHP 7.2+, GD with WebP or Imagick with WebP |
| License | GPLv2 or later |

## What it does
- Converts every JPEG and PNG in the Media Library to WebP, stored next to the original (`photo.jpg.webp`).
- Auto-converts new uploads, including every thumbnail size.
- Serves WebP to supporting browsers through auto-managed `.htaccess` rules. URLs stay `.jpg`/`.png`.
- Never deletes originals. Deactivating removes the rules and stops conversion.

## Use
1. Zip this folder, upload under **Plugins > Add New > Upload Plugin**, activate.
2. Go to **Media > WebP Optimizer** and click **Optimize all images now**. It also runs in the background in batches of 10.

Quality is 82 (`RICKY_WEBP_QUALITY`). Requires Apache/LiteSpeed for automatic serving; on Nginx add an equivalent rewrite.
