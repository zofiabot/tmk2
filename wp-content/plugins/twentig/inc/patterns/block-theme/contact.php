<?php
/**
 * Contact block patterns.
 *
 * @package twentig
 * @phpcs:disable Squiz.Strings.DoubleQuoteUsage.NotRequired
 */

twentig_register_block_pattern(
	'twentig/contact-call-to-action',
	array(
		'title'      => __( 'Contact: Call To Action', 'twentig' ),
		'categories' => array( 'contact' ),
		'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Get in touch', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">' . esc_html_x( 'If you have any questions or just want to say hello, please don’t hesitate to contact us. We’ll get back to you soon.', 'Block pattern content', 'twentig' ) . '</p><!-- /wp:paragraph --><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"30px"}}},"layout":{"type":"flex","justifyContent":"center"}} --><div class="wp-block-buttons" style="margin-top:30px"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link">' . esc_html_x( 'Contact us', 'Block pattern content', 'twentig' ) . '</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/contact-simple',
	array(
		'title'      => __( 'Contact: Simple', 'twentig' ),
		'categories' => array( 'contact' ),
		'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Get in touch', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">' . esc_html_x( 'If you have any questions or just want to say hello, please don’t hesitate to contact us. We’ll get back to you soon.', 'Block pattern content', 'twentig' ) . '</p><!-- /wp:paragraph --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center"><a href="mailto:contact@example.com">contact@example.com</a></p><!-- /wp:paragraph --><!-- wp:social-links {"size":"has-normal-icon-size","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"16px","margin":{"top":"30px"}}}} --><ul class="wp-block-social-links has-normal-icon-size" style="margin-top:30px"><!-- wp:social-link {"url":"#","service":"facebook"} /--><!-- wp:social-link {"url":"#","service":"twitter"} /--><!-- wp:social-link {"url":"#","service":"instagram"} /--></ul><!-- /wp:social-links --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/contact-large-text',
	array(
		'title'      => __( 'Contact: Large Text', 'twentig' ),
		'categories' => array( 'contact' ),
		'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Get in touch', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">16 Thompson Street<br>San Francisco, CA 94102</p><!-- /wp:paragraph --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">(123) 456-7890<br><a href="mailto:contact@example.com">contact@example.com</a></p><!-- /wp:paragraph --><!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(--wp--preset--color--foreground)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"16px","margin":{"top":"30px"}}},"twHover":"opacity"} --><ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only tw-hover-opacity" style="margin-top:30px"><!-- wp:social-link {"url":"#","service":"facebook"} /--><!-- wp:social-link {"url":"#","service":"twitter"} /--><!-- wp:social-link {"url":"#","service":"instagram"} /--></ul><!-- /wp:social-links --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/contact-info-with-small-headings',
	array(
		'title'      => __( 'Contact: Info with Small Headings', 'twentig' ),
		'categories' => array( 'contact' ),
		'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Get in touch', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">' . esc_html_x( 'If you have any questions or just want to say hello, please don’t hesitate to contact us. We’ll get back to you soon.', 'Block pattern content', 'twentig' ) . '</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"}},"textAlign":"center"} --><h3 class="has-text-align-center" style="font-size:1.125em">' . esc_html_x( 'Address', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">16 Thompson Street<br>San Francisco, CA 94102</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"}},"textAlign":"center"} --><h3 class="has-text-align-center" style="font-size:1.125em">' . esc_html_x( 'Opening hours', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">' . esc_html_x( 'Monday - Friday: 9am - 7pm', 'Block pattern content', 'twentig' ) . '<br>' . esc_html_x( 'Saturday: 9am - 10pm', 'Block pattern content', 'twentig' ) . '</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"}},"textAlign":"center"} --><h3 class="has-text-align-center" style="font-size:1.125em">' . esc_html_x( 'Contact', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">(123) 456-7890<br><a href="mailto:contact@example.com">contact@example.com</a></p><!-- /wp:paragraph --><!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(--wp--preset--color--foreground)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"16px"}},"twHover":"opacity"} --><ul class="wp-block-social-links aligncenter has-small-icon-size has-icon-color is-style-logos-only tw-hover-opacity"><!-- wp:social-link {"url":"#","service":"facebook"} /--><!-- wp:social-link {"url":"#","service":"twitter"} /--><!-- wp:social-link {"url":"#","service":"instagram"} /--><!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul><!-- /wp:social-links --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/contact-2-columns',
	array(
		'title'      => __( 'Contact: 2 Columns', 'twentig' ),
		'categories' => array( 'contact' ),
		'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} --><div class="wp-block-group alignfull"><!-- wp:heading --><h2>' . esc_html_x( 'Get in touch', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>' . esc_html_x( 'If you have any questions or just want to say hello, please don’t hesitate to contact us. We’ll get back to you soon.', 'Block pattern content', 'twentig' ) . '</p><!-- /wp:paragraph --><!-- wp:columns {"style":{"spacing":{"margin":{"top":"40px"}}}} --><div class="wp-block-columns" style="margin-top:40px"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"}}} --><h3 style="font-size:1.125em">' . esc_html_x( 'Contact', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph {"className":"tw-link-hover-underline"} --><p class="tw-link-hover-underline"><a href="mailto:contact@example.com">contact@example.com</a><br>(123) 456-7890</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"}}} --><h3 style="font-size:1.125em">' . esc_html_x( 'Follow us', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:list {"className":"is-style-tw-arrow tw-link-hover-underline"} --><ul class="is-style-tw-arrow tw-link-hover-underline"><li><a href="#">Facebook</a></li><li><a href="#">Twitter</a></li><li><a href="#">Instagram</a></li></ul><!-- /wp:list --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/contact-emphasized-info',
	array(
		'title'      => __( 'Contact: Emphasized Info', 'twentig' ),
		'categories' => array( 'contact' ),
		'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} --><div class="wp-block-group alignfull"><!-- wp:columns {"verticalAlignment":"center","align":"wide","twGutter":"large","twStack":"md"} --><div class="wp-block-columns alignwide are-vertically-aligned-center tw-gutter-large tw-cols-stack-md"><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading --><h2>' . esc_html_x( 'Get in touch', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>' . esc_html_x( 'If you have any questions or just want to say hello, please don’t hesitate to contact us. We’ll get back to you soon.', 'Block pattern content', 'twentig' ) . '</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"backgroundColor":"white","textColor":"black","twDecoration":"shadow"} --><div class="wp-block-group has-black-color has-white-background-color has-text-color has-background tw-shadow"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1em"}}} --><h3 style="font-size:1em">' . esc_html_x( 'Address', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>16 Thompson Street <br>San Francisco, CA 94102</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1em"},"spacing":{"margin":{"top":"24px"}}}} --><h3 style="font-size:1em;margin-top:24px">' . esc_html_x( 'Phone', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>(123) 456-7890</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1em"},"spacing":{"margin":{"top":"24px"}}}} --><h3 style="font-size:1em;margin-top:24px">' . esc_html_x( 'Email', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph {"className":"tw-link-hover-underline"} --><p class="tw-link-hover-underline"><a href="mailto:contact@example.com">contact@example.com</a></p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/contact-heading-on-left',
	array(
		'title'      => __( 'Contact: Heading on Left', 'twentig' ),
		'categories' => array( 'contact' ),
		'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} --><div class="wp-block-group alignfull"><!-- wp:columns {"align":"wide","twGutter":"large","twStack":"md"} --><div class="wp-block-columns alignwide tw-gutter-large tw-cols-stack-md"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading --><h2>' . esc_html_x( 'Get in touch', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph --><p>' . esc_html_x( 'If you have any questions or just want to say hello, please don’t hesitate to contact us. We’ll get back to you soon.', 'Block pattern content', 'twentig' ) . '</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"},"spacing":{"margin":{"top":"30px"}}}} --><h3 style="font-size:1.125em;margin-top:30px">' . esc_html_x( 'Address', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>16 Thompson Street<br>San Francisco, CA 94102</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"},"spacing":{"margin":{"top":"30px"}}}} -->	<h3 style="font-size:1.125em;margin-top:30px">' . esc_html_x( 'Contact', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>(123) 456-7890<br><a href="mailto:contact@example.com">contact@example.com</a></p><!-- /wp:paragraph --><!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(--wp--preset--color--foreground)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex"},"style":{"spacing":{"blockGap":"16px"}},"twHover":"opacity"} --><ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only tw-hover-opacity"><!-- wp:social-link {"url":"#","service":"facebook"} /--><!-- wp:social-link {"url":"#","service":"twitter"} /--><!-- wp:social-link {"url":"#","service":"instagram"} /--><!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul><!-- /wp:social-links --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/contact-image-on-right',
	array(
		'title'      => __( 'Contact: Image on Right', 'twentig' ),
		'categories' => array( 'contact' ),
		'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} --><div class="wp-block-group alignfull"><!-- wp:media-text {"mediaPosition":"right","mediaType":"image","twStackedMd":true} --><div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile tw-stack-md"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'square1.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading --><h2>' . esc_html_x( 'Get in touch', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>' . esc_html_x( 'If you have any questions or just want to say hello, please don’t hesitate to contact us. We’ll get back to you soon.', 'Block pattern content', 'twentig' ) . '</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"},"spacing":{"margin":{"top":"30px"}}}} --><h3 style="font-size:1.125em;margin-top:30px">' . esc_html_x( 'Contact', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph {"className":"tw-link-hover-underline"} --><p class="tw-link-hover-underline">(123) 456-7890<br><a href="mailto:contact@example.com">contact@example.com</a></p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"},"spacing":{"margin":{"top":"30px"}}}} --><h3 style="font-size:1.125em;margin-top:30px">' . esc_html_x( 'Social', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:list {"className":"is-style-tw-no-bullet tw-link-hover-underline"} --><ul class="is-style-tw-no-bullet tw-link-hover-underline"><li><a href="#">Instagram</a></li><li><a href="#">Twitter</a></li><li><a href="#">Linkedin</a></li></ul><!-- /wp:list --></div></div><!-- /wp:media-text --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/contact-3-columns',
	array(
		'title'      => __( 'Contact: 3 Columns', 'twentig' ),
		'categories' => array( 'contact' ),
		'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Get in touch', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide","twGutter":"large","twStack":"md","twTextAlign":"center"} --><div class="wp-block-columns alignwide tw-gutter-large tw-cols-stack-md has-text-align-center"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"}}} --><h3 style="font-size:1.125em">' . esc_html_x( 'Address', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>16 Thompson Street<br>San Francisco, CA 94102</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"}}} --><h3 style="font-size:1.125em">' . esc_html_x( 'Opening hours', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>' . esc_html_x( 'Monday - Friday: 9am - 7pm', 'Block pattern content', 'twentig' ) . '<br>' . esc_html_x( 'Saturday: 9am - 10pm', 'Block pattern content', 'twentig' ) . '</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"}}} --><h3 style="font-size:1.125em">' . esc_html_x( 'Contact', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>(123) 456-7890<br><a href="mailto:contact@example.com">contact@example.com</a></p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/contact-4-columns',
	array(
		'title'      => __( 'Contact: 4 Columns', 'twentig' ),
		'categories' => array( 'contact' ),
		'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Get in touch', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide"} --><div class="wp-block-columns alignwide"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"}}} --><h3 style="font-size:1.125em">' . esc_html_x( 'General', 'Block pattern contact content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph {"className":"tw-link-hover-underline"} --><p class="tw-link-hover-underline"><a href="mailto:contact@example.com">contact@example.com</a></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"}}} --><h3 style="font-size:1.125em">' . esc_html_x( 'Careers', 'Block pattern contact content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph {"className":"tw-link-hover-underline"} --><p class="tw-link-hover-underline"><a href="mailto:careers@example.com">careers@example.com</a></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"}}} --><h3 style="font-size:1.125em">' . esc_html_x( 'Press', 'Block pattern contact content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph {"className":"tw-link-hover-underline"} --><p class="tw-link-hover-underline"><a href="mailto:press@example.com">press@example.com</a></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"}}} --><h3 style="font-size:1.125em">' . esc_html_x( 'Social', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(--wp--preset--color--foreground)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex"},"style":{"spacing":{"blockGap":"16px"}},"twHover":"opacity"} --><ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only tw-hover-opacity"><!-- wp:social-link {"url":"#","service":"facebook"} /--><!-- wp:social-link {"url":"#","service":"instagram"} /--><!-- wp:social-link {"url":"#","service":"twitter"} /--><!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul><!-- /wp:social-links --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/contact-cover-with-inline-links',
	array(
		'title'      => __( 'Contact: Cover with Inline Links', 'twentig' ),
		'categories' => array( 'contact' ),
		'content'    => '<!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'wide.jpg' ) . '","dimRatio":60,"align":"full"} --><div class="wp-block-cover alignfull"><span aria-hidden="true" class="has-background-dim-60 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . twentig_get_pattern_asset( 'wide.jpg' ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"layout":{"inherit":true}} -->
		<div class="wp-block-group has-link-color"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Get in touch', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:list {"className":"is-style-tw-inline has-text-align-center tw-link-hover-underline has-large-font-size"} --><ul class="is-style-tw-inline has-text-align-center tw-link-hover-underline has-large-font-size"><li><a href="#">' . esc_html_x( 'Email', 'Block pattern content', 'twentig' ) . '</a></li><li><a href="#">Instagram</a></li><li><a href="#">Twitter</a></li></ul><!-- /wp:list --></div><!-- /wp:group --></div></div><!-- /wp:cover -->',
	)
);

twentig_register_block_pattern(
	'twentig/contact-cover',
	array(
		'title'      => __( 'Contact: Cover', 'twentig' ),
		'categories' => array( 'contact' ),
		'content'    => '<!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'wide.jpg' ) . '","dimRatio":60,"minHeight":500,"align":"full"} -->
		<div class="wp-block-cover alignfull" style="min-height:500px"><span aria-hidden="true" class="has-background-dim-60 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . twentig_get_pattern_asset( 'wide.jpg' ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} --><div class="wp-block-group"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Get in touch', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125em"}}} --><p class="has-text-align-center" style="font-size:1.125em">16 Thompson Street<br>San Francisco, CA 94102</p><!-- /wp:paragraph --><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125em"}}} --><p class="has-text-align-center" style="font-size:1.125em">(123) 456-7890<br>contact@example.com</p><!-- /wp:paragraph --><!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(--wp--preset--color--foreground)","iconBackgroundColor":"background","iconBackgroundColorValue":"#ffffff","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"16px","margin":{"top":"30px"}}}} --><ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:30px"><!-- wp:social-link {"url":"#","service":"facebook"} /--><!-- wp:social-link {"url":"#","service":"instagram"} /--><!-- wp:social-link {"url":"#","service":"twitter"} /--></ul><!-- /wp:social-links --></div><!-- /wp:group --></div></div><!-- /wp:cover -->',
	)
);

twentig_register_block_pattern(
	'twentig/contact-cover-with-3-columns',
	array(
		'title'      => __( 'Contact: Cover with 3 Columns', 'twentig' ),
		'categories' => array( 'contact' ),
		'content'    => '<!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'wide.jpg' ) . '","dimRatio":60,"minHeight":500,"align":"full"} --><div class="wp-block-cover alignfull" style="min-height:500px"><span aria-hidden="true" class="has-background-dim-60 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . twentig_get_pattern_asset( 'wide.jpg' ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"layout":{"inherit":true}} --><div class="wp-block-group alignwide has-link-color"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Get in touch', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide","className":"tw-justify-center","twColumnStyle":"card-border","twTextAlign":"center"} --><div class="wp-block-columns alignwide tw-justify-center tw-cols-card tw-cols-card-border has-text-align-center"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"}}} --><h3 style="font-size:1.125em">' . esc_html_x( 'Address', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>16 Thompson Street<br>San Francisco, CA 94102</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"}}} --><h3 style="font-size:1.125em">' . esc_html_x( 'Opening hours', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>' . esc_html_x( 'Monday - Friday: 9am - 7pm', 'Block pattern content', 'twentig' ) . '<br>' . esc_html_x( 'Saturday: 9am - 10pm', 'Block pattern content', 'twentig' ) . '</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"}}} --><h3 style="font-size:1.125em">' . esc_html_x( 'Contact', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph {"className":"tw-link-hover-underline"} --><p class="tw-link-hover-underline">(123) 456-7890<br><a href="mailto:contact@example.com">contact@example.com</a></p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group --></div></div><!-- /wp:cover -->',
	)
);

twentig_register_block_pattern(
	'twentig/contact-opening-hours',
	array(
		'title'      => __( 'Contact: Opening Hours', 'twentig' ),
		'categories' => array( 'contact' ),
		'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} --><div class="wp-block-group alignfull"><!-- wp:columns {"verticalAlignment":"center","align":"wide","twGutter":"large","twStack":"md"} --><div class="wp-block-columns alignwide are-vertically-aligned-center tw-gutter-large tw-cols-stack-md"><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading --><h2>' . esc_html_x( 'Get in touch', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>' . esc_html_x( 'If you have any questions or just want to say hello, please don’t hesitate to contact us. We’ll get back to you soon.', 'Block pattern content', 'twentig' ) . '</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"},"spacing":{"margin":{"top":"30px"}}}} --><h3 style="font-size:1.125em;margin-top:30px">' . esc_html_x( 'Address', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>16 Thompson Street<br>San Francisco, CA 94102</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"},"spacing":{"margin":{"top":"30px"}}}} --><h3 style="font-size:1.125em;margin-top:30px">' . esc_html_x( 'Contact', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>(123) 456-7890<br><a href="mailto:contact@example.com">contact@example.com</a></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"backgroundColor":"tertiary"} --><div class="wp-block-group has-tertiary-background-color has-background"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125em"}}} --><h3 style="font-size:1.125em">' . esc_html_x( 'Opening hours', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:table {"className":"is-style-tw-border-h-inner tw-row-valign-top"} --><figure class="wp-block-table is-style-tw-border-h-inner tw-row-valign-top"><table><tbody><tr><td>' . esc_html_x( 'Monday', 'Block pattern content', 'twentig' ) . '</td><td>' . esc_html_x( '9am - 7pm', 'Block pattern content', 'twentig' ) . '</td></tr><tr><td>' . esc_html_x( 'Tuesday', 'Block pattern content', 'twentig' ) . '</td><td>' . esc_html_x( '9am - 7pm', 'Block pattern content', 'twentig' ) . '</td></tr><tr><td>' . esc_html_x( 'Wednesday', 'Block pattern content', 'twentig' ) . '</td><td>' . esc_html_x( '9am - 4pm', 'Block pattern content', 'twentig' ) . '</td></tr><tr><td>' . esc_html_x( 'Thursday', 'Block pattern content', 'twentig' ) . '</td><td>' . esc_html_x( '9am - 7pm', 'Block pattern content', 'twentig' ) . '</td></tr><tr><td>Friday</td><td>' . esc_html_x( '9am - 7pm', 'Block pattern content', 'twentig' ) . '</td></tr><tr><td>' . esc_html_x( 'Saturday', 'Block pattern content', 'twentig' ) . '</td><td>' . esc_html_x( '9am - 4pm', 'Block pattern content', 'twentig' ) . '</td></tr><tr><td>' . esc_html_x( 'Sunday', 'Block pattern content', 'twentig' ) . '</td><td>' . esc_html_x( 'Closed', 'Block pattern content', 'twentig' ) . '</td></tr></tbody></table></figure><!-- /wp:table --></div><!-- /wp:group --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/contact-map',
	array(
		'title'      => __( 'Contact: Map', 'twentig' ),
		'categories' => array( 'contact' ),
		'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} --><div class="wp-block-group alignfull"><!-- wp:columns {"verticalAlignment":"center","align":"wide","twGutter":"large","twStack":"md"} --><div class="wp-block-columns alignwide are-vertically-aligned-center tw-gutter-large tw-cols-stack-md"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} --><div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:heading --><h2>' . esc_html_x( 'Get in touch', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"30px"}},"typography":{"fontSize":"1.125em"}}} --><h3 style="font-size:1.125em;margin-top:30px">' . esc_html_x( 'Address', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>123 Place Saint-Germain<br>Paris, 75006</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"30px"}},"typography":{"fontSize":"1.125em"}}} --><h3 style="font-size:1.125em;margin-top:30px">' . esc_html_x( 'Opening hours', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>' . esc_html_x( 'Monday - Friday: 9am - 7pm', 'Block pattern content', 'twentig' ) . '<br>' . esc_html_x( 'Saturday: 9am - 10pm', 'Block pattern content', 'twentig' ) . '</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"30px"}},"typography":{"fontSize":"1.125em"}}} --><h3 style="font-size:1.125em;margin-top:30px">' . esc_html_x( 'Contact us', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>(123)-456-789<br><a href="mailto:contact@example.com">contact@example.com</a></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} --><div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:html --><figure><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d569.3655735126287!2d2.3334466500376423!3d48.854408123419994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671d82c6eae27%3A0xaadded11c11376c!2sPlace%20Saint-Germain%20des%20Pr%C3%A9s%2C%2075006%20Paris!5e0!3m2!1sen!2sfr!4v1590676152077!5m2!1sen!2sfr" width="800" height="540" frameborder="0" allowfullscreen=""></iframe></figure><!-- /wp:html --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->'
		)
);
