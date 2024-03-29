# SSWS Yoast User Meta Data to WP REST API
## (ssws-yoast-user-meta-2-api)

### Requirments:
**[Yoast SEO](https://en-ca.wordpress.org/plugins/wordpress-seo/)** plugin by [Team Yoast](https://yoast.com/wordpress/plugins/seo/)

### Notes from the developer:
The plugin [WP REST Yoast Meta](https://wordpress.org/plugins/wp-rest-yoast-meta/) does a great job in adding the meta tags generated by the Yoast SEO plugin to the WP REST API output.

The only problem is that the user dataset is not implemented and right now, December 2019, there is no clear ETA when this feature will be implemented and released.

See support thread here: [User Yoast Social Links not available in REST API](https://wordpress.org/support/topic/user-yoast-social-links-not-available-in-rest-api/)

So this rough plugin implementes those endopoints for the user object in WP REST:

`/wp-json/wp/v2/users`

**https://your-site.com/wp-json/wp/v2/users**