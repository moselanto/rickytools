# Ricky Tools Child

Update-safe layer for [rickytools.com](https://rickytools.com/). Activate this theme (not the parent) on the live site.

## Install
1. Install and keep the parent theme **`ricky-tools/`** in `wp-content/themes/`.
2. Zip this folder as `ricky-tools-child.zip`, upload it under **Appearance > Themes > Add New > Upload Theme**, then **Activate**.
3. Customizer settings (colours, phone, WhatsApp, address) are stored per theme. After switching to the child, re-check **Appearance > Customize > Ricky Tools**.

## What goes here
| Change | Where |
| --- | --- |
| Custom CSS | `style.css` (loads after the parent stylesheet) |
| PHP snippets and filters | `functions.php` |
| Template overrides | Copy the parent file to the same path here, e.g. `template-parts/hero.php` |
| WooCommerce overrides | `woocommerce/<template>.php` |

Available filter: `ricky_homepage_categories` (array of product category slugs shown as homepage rows).
