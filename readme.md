# Getting Started

1. `npm install`
2. `composer update`
3. `npm run start` if you're working with scss/js

## Before final push:

1. Run `composer phpcbf` and `composer phpcs` to check for errors. Cleanup if needed.
2. Run `npm run build`.

## Updating on Live Site

1. Download the repo
2. Zip the theme folder `k1-theme` (not the enclosing file tree (`wp-content/themes/`))
3. Install the zip on WordPress as a Theme upload.

---

# Changelog

## v1.2.3

-   Patched security issues with `@wordpress/scripts`
-   Updated packages
-   Fix display bug on the team swiper on `/about`
-   Fixed `phpcs` errors
-   Added Github Action to check phpcs errors

## v1.2.0

-   Add Archive page for Linktree links

## v1.1.1

-   Update Giving Video Thumbnail

## v1.1.0

-   BUILT: /give page
    -   Move ACF_Image class to a new `/acf` folder
    -   Built API for the ACF Group Field Project and added acf json to the folder

## v1.0.2

-   FIXED: /share-your-story leaf svg was causing overflow issues on mobile
-   FIXED: Testimonials slider images have been standardized and set to not overflow their container

## v1.0.1

-   FIXED: Author names were loading html incorrectly
-   FIXED: default page view now has a wrapper div with classes `container my-5 py-5` for Bootstrap conformity

## v1.0.0

Official First Release!
