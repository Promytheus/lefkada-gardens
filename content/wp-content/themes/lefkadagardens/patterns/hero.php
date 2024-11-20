<?php
/**
 * Title: Hero
 * Slug: lefkadagardens/hero
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 */
?>

<!-- wp:group -->
<div class="wp-block-group lg-home-page-banner" >

	<!-- wp:post-featured-image /-->
    
	<!-- wp:group -->
	<div class="wp-block-group lg-home-page-hero-logo" style="margin-top:0">
		<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center"} -->
		<figure class="wp-block-image alignwide">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/lefkada-gardens-logo.png"
				alt="<?php esc_attr_e( 'Lefkada Gardens logo', 'lefkadagardens' ); ?>"/>
		</figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->
	
</div>
<!-- /wp:group -->
