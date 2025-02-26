# FA-LazyLoad Plugin – Lazy Load Images, Videos, and Iframes #
Contributors: wp_rocket, wp_media
Tags: lazyload, lazy load, images, iframes, thumbnail, thumbnails, smiley, smilies, avatar, gravatar, youtube

Requires at least: 4.9

Tested up to: 6.5

Requires PHP: 7.3

Stable tag: 2.3.9

Tags: lazy load, lazy loading, defer offscreen images, lazy load plugin, lazy load images, image lazy loading, iframe lazy load, video lazy load

The best free lazy load plugin for WordPress. Lazy load images, videos, and iframes to improve performance and Core Web Vitals scores.

## Description ##

LazyLoad is the best free lazy load plugin for WordPress to lazy load images, videos, and iframes on WordPress. In a nutshell, LazyLoad displays images, videos, and iframes on a page only when they are visible to the user – that’s one crucial way to [speed up your WordPress site](https://wp-rocket.me/blog/guide-to-page-speed-optimization-for-wordpress/) and [optimize images for Google PageSpeed](https://imagify.io/blog/optimize-images-page-speed-google/#lazy-loading).

You can lazy load images in post content or widget text, plus thumbnails, avatars, and smilies. LazyLoad takes care of iframe lazy load, too: you’ll easily replace Youtube iframes with a preview thumbnail to further speed up the loading time of your website.

No JavaScript library such as jQuery is used, and the script weight is less than 10KB.

### Why is lazy loading crucial for performance? ###

Lazy loading is a key performance technique to make your site faster. You’ll reduce loading time, [improve your Lighthouse performance score](https://wp-rocket.me/lighthouse-performance-score-wordpress/) and [optimize your Core Web Vitals grades](https://wp-rocket.me/google-core-web-vitals-wordpress/).

[Lazy loading your images on WordPress](https://wp-rocket.me/blog/lazy-loading-wordpress-5-5/) will help you achieve a better PageSpeed Insights score for three main reasons:

* You’ll address a specific PageSpeed Insights recommendation: [Defer offscreen images](https://wp-rocket.me/google-core-web-vitals-wordpress/defer-offscreen-images/, which means image lazy loading.
* You’ll improve the performance of two key metrics: [First Input Delay](https://wp-rocket.me/google-core-web-vitals-wordpress/improve-first-input-delay/) (Core Web Vital) and [Total Blocking Time](https://wp-rocket.me/lighthouse-performance-score-wordpress/reduce-total-blocking-time/) (Lighthouse metric).
* You’ll [make fewer HTTP requests](https://wp-rocket.me/blog/reduce-http-requests-speed-wordpress-site/) – that is another way to boost your site speed and [improve the Largest Contentful Paint score](https://wp-rocket.me/google-core-web-vitals-wordpress/improve-largest-contentful-paint/) (another Core Web Vital).

Take a look at our complete list of reasons [why you should use lazy loading](https://wp-rocket.me/blog/lazyloading/#section-2). Then, turn on LazyLoad and make your WordPress website faster!


## Dependencies ##

FA-LazyLoad script: [WP-rocket-lazy-load-FA](https://github.com/MohammadTG/WP-rocket-lazy-load-FA)

## Installation ##

1. Upload the complete `rocket-lazy-load` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

## Frequently Asked Questions ##

= How can I use native lazyload? =
To use native lazyload on browsers supporting this feature, you need to use the following line:

```add_filter( 'rocket_use_native_lazyload', '__return_true' );```

Browsers that do not support native lazyload will use the JS-based solution as before.

### How can I deactivate Lazy Load on some pages? ###

You can use the `do_rocket_lazyload` filter.

Here is an example to put in functions.php files that disable lazyload on posts:

`
add_action( 'wp', 'deactivate_rocket_lazyload_on_single' );
function deactivate_rocket_lazyload_on_single() {
	if ( is_single() ) {
		add_filter( 'do_rocket_lazyload', '__return_false' );
	}
}
`

### How can I deactivate Lazy Load on some images? ###

Simply add a `data-no-lazy="1"` property in you `img` or `iframe` tag.

You can also use the filters `rocket_lazyload_excluded_attributes` or `rocket_lazyload_excluded_src` to exclude specific patterns.

For iframes, the filter is `rocket_lazyload_iframe_excluded_patterns`.

### How can I change the threshold to trigger the load? ###

You can use the `rocket_lazyload_threshold` filter.

Code sample:

`
function rocket_lazyload_custom_threshold( $threshold ) {
	return 100;
}
add_filter( 'rocket_lazyload_threshold', 'rocket_lazyload_custom_threshold' );
`

### I use plugin X and my images don't show anymore ###

Some plugins are not compatible without lazy loading. Please open a support thread, and we will see how we can solve the issue by excluding lazy loading for this plugin.

### How can I lazy load a background-image? ###

The plugin will automatically lazy load background-images set with a `style` attribute to a `div` element:

`<div style="background-image: url(image.jpg);">`

You can also apply it manually. The element you want to apply lazy load on must have this specific markup:

`<div class="rocket-lazyload" data-bg="url(../img/image.jpg)"></div>`

The element must have the class `rocket-lazyload`, and a `data-bg` attribute, which value is the CSS url for the image.

### Where do I report security bugs found in this plugin? ###

You can report any security bugs found in the source code of the site-reviews plugin through the [Patchstack Vulnerability Disclosure Program](https://patchstack.com/database/vdp/rocket-lazy-load). The Patchstack team will assist you with verification, CVE assignment and take care of notifying the developers of this plugin.

### Related Plugins ###

* [Imagify: The Best image optimizer](https://imagify.io/?utm_source=wordpress.org&utm_medium=referral&utm_campaign=LazyLoadPlugin) to speed up your website with lighter images.
* [WP Rocket: Best performance plugin](https://wp-rocket.me/?utm_source=wordpress.org&utm_medium=referral&utm_campaign=LazyLoadPlugin) to speed up your WordPress website.
* [Heartbeat Control by WP Rocket](https://wordpress.org/plugins/heartbeat-control/): Heartbeat Control by WP Rocket: The best plugin to control the WordPress Heartbeat API and reduce CPU usage.
* [RocketCDN: The best CDN plugin for WordPress](https://rocketcdn.me/wordpress/) to propel your content at the speed of light – no matter where your users are located in the world.
* [Increase Max upload file size](https://wordpress.org/plugins/upload-max-file-size/) is the best plugin to increase the upload file size limit to any value with one click.

## Changelog ##
### 2.3.9 ###
Updated version to fix a mismatch between the tag of the release on Github and the release version which leads to a deployment issue that.

### 2.3.8 ###
Enhancement: Launchpad compatibility (see https://github.com/wp-launchpad)
Enhancement: Raised compatibility with PHP > 7.3
Bug: Removed `wp-media/rocket-lazyload-common` from vendors
Enhancement: Raised `wp-media/rocket-lazyload-common` to 3.0
