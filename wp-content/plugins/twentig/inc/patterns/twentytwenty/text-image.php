<?php
/**
 * Text & image block patterns.
 *
 * @package twentig
 * @phpcs:disable Squiz.Strings.DoubleQuoteUsage.NotRequired
 */

twentig_register_block_pattern(
	'twentig/text-and-image-on-left',
	array(
		'title'      => __( 'Text and Image on Left', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:media-text {"mediaType":"image","twStackedMd":true} --><div class="wp-block-media-text alignwide is-stacked-on-mobile tw-stack-md"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'landscape1.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading --><h2>' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus, suscipit eu iaculis sed ullamcorper.</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/text-and-image-on-right',
	array(
		'title'      => __( 'Text and Image on Right', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:media-text {"mediaPosition":"right","mediaType":"image","twStackedMd":true} --><div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile tw-stack-md"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'landscape1.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading --><h2>' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus, suscipit eu iaculis sed ullamcorper.</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/alternating-text-and-image',
	array(
		'title'      => __( 'Alternating Text and Image', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:media-text {"mediaType":"image","mediaWidth":49,"imageFill":false,"twStackedMd":true} --><div class="wp-block-media-text alignwide is-stacked-on-mobile tw-stack-md" style="grid-template-columns:49% auto"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'landscape1.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading --><h2>' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed ullamcorper.</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text --><!-- wp:media-text {"mediaPosition":"right","mediaType":"image","mediaWidth":49,"imageFill":false,"twStackedMd":true} --><div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile tw-stack-md" style="grid-template-columns:auto 49%"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'landscape2.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading --><h2>' . esc_html_x( 'Write another heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus suscipit eu iaculis sed ullamcorper at metus. Venenatis nec convallis magna eu congue velit. Proin varius libero sit amet tortor volutpat diam tincidunt.</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/text-and-image-alternating-colored-backgrounds',
	array(
		'title'      => __( 'Text and Image: Alternating Colored Backgrounds', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"backgroundColor":"background","align":"full"} --><div class="wp-block-group alignfull has-background-background-color has-background"><!-- wp:media-text {"mediaType":"image","mediaWidth":49,"twStackedMd":true} --><div class="wp-block-media-text alignwide is-stacked-on-mobile tw-stack-md" style="grid-template-columns:49% auto"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'landscape1.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading --><h2>' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed ullamcorper.</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text --></div><!-- /wp:group --><!-- wp:group {"backgroundColor":"subtle-background","align":"full"} --><div class="wp-block-group alignfull has-subtle-background-background-color has-background"><!-- wp:media-text {"mediaPosition":"right","mediaType":"image","mediaWidth":49,"twStackedMd":true} --><div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile tw-stack-md" style="grid-template-columns:auto 49%"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'landscape2.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading --><h2>' . esc_html_x( 'Write another heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus suscipit eu iaculis sed ullamcorper at metus. Venenatis nec convallis magna eu congue velit. Proin varius libero sit amet tortor volutpat diam tincidunt.</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/text-and-overlap-image',
	array(
		'title'      => __( 'Text and Overlap Image', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:media-text {"backgroundColor":"subtle-background","mediaType":"image","mediaWidth":56,"className":"is-style-tw-overlap"} --><div class="wp-block-media-text alignwide has-background has-subtle-background-background-color is-stacked-on-mobile is-style-tw-overlap" style="grid-template-columns:56% auto"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'square1.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"fontSize":"h3"} --><h2 class="has-h-3-font-size">' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit iaculis sed ullamcorper metus.</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text --><!-- wp:media-text {"backgroundColor":"subtle-background","mediaPosition":"right","mediaType":"image","mediaWidth":56,"className":"is-style-tw-overlap"} --><div class="wp-block-media-text alignwide has-media-on-the-right has-background has-subtle-background-background-color is-stacked-on-mobile is-style-tw-overlap" style="grid-template-columns:auto 56%"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'square2.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"fontSize":"h3"} --><h2 class="has-h-3-font-size">' . esc_html_x( 'Write another heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit. Morbi fringilla sapien libero. Duis enim elit porttitor id feugiat at blandit at erat.</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/text-and-image-aligned',
	array(
		'title'      => __( 'Text and Image Aligned', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:image --><figure class="wp-block-image"><img src="' . twentig_get_pattern_asset( 'landscape1.jpg' ) . '" alt=""/></figure><!-- /wp:image --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus, suscipit eu iaculis sed, ullamcorper at metus. Venenatis nec convallis magna congue. </p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit. Morbi fringilla sapien libero. Duis enim elit portitor id feugiat erat.</p><!-- /wp:paragraph --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/text-and-wide-image',
	array(
		'title'      => __( 'Text and Wide Image', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus, suscipit eu iaculis sed, ullamcorper at metus. Venenatis nec convallis magna congue. </p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit. Morbi fringilla sapien libero. Duis enim elit portitor id feugiat erat.</p><!-- /wp:paragraph --><!-- wp:image {"align":"wide","className":"tw-mt-8"} --><figure class="wp-block-image alignwide tw-mt-8"><img src="' . twentig_get_pattern_asset( 'wide.jpg' ) . '" alt=""/></figure><!-- /wp:image --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/text-and-circle-image',
	array(
		'title'      => __( 'Text and Circle Image', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:image {"align":"center","width":160,"height":160,"className":"is-style-rounded"} --><div class="wp-block-image is-style-rounded"><figure class="aligncenter is-resized"><img src="' . twentig_get_pattern_asset( 'square1.jpg' ) . '" alt="" width="160" height="160"/></figure></div><!-- /wp:image --><!-- wp:heading {"textAlign":"center","className":"tw-mt-0"} --><h2 class="has-text-align-center tw-mt-0">' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus, suscipit eu iaculis sed, ullamcorper at metus. Venenatis nec convallis magna congue. </p><!-- /wp:paragraph --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit. Morbi fringilla sapien libero. Duis enim elit portitor id feugiat erat.</p><!-- /wp:paragraph --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/heading-cover-and-text',
	array(
		'title'      => __( 'Heading Cover and Text', 'twentig' ),
		'categories' => array( 'text-image', 'cover' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:cover {"url":"' . twentig_get_pattern_asset( 'wide.jpg' ) . '","minHeight":500,"align":"wide","className":"tw-mb-8"} --><div class="wp-block-cover alignwide has-background-dim tw-mb-8" style="min-height:500px"><img class="wp-block-cover__image-background" alt="" src="' . twentig_get_pattern_asset( 'wide.jpg' ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --></div></div><!-- /wp:cover --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra. Venenatis nec convallis magna, eu congue velit. Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit.</p><!-- /wp:paragraph --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/text-columns-and-image-at-the-bottom',
	array(
		'title'      => __( 'Text Columns and Image at the Bottom', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:columns {"align":"wide","className":"tw-mb-8","twGutter":"large","twStack":"md"} --><div class="wp-block-columns alignwide tw-mb-8 tw-gutter-large tw-cols-stack-md"><!-- wp:column {"className":"tw-mb-2"} --><div class="wp-block-column tw-mb-2"><!-- wp:heading --><h2>' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --></div><!-- /wp:column --><!-- wp:column {"className":"tw-mt-2"} --><div class="wp-block-column tw-mt-2"><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus. Class aptent taciti sociosqu ad litora torquent per conubia. Maecenas laoreet sem tellus in fermentum.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:image {"align":"wide","className":"tw-mt-8"} --><figure class="wp-block-image alignwide tw-mt-8"><img src="' . twentig_get_pattern_asset( 'wide.jpg' ) . '" alt=""/></figure><!-- /wp:image --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/text-columns-and-image-at-the-top',
	array(
		'title'      => __( 'Text Columns and Image at the Top', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:image {"align":"wide","className":"tw-mb-8"} --><figure class="wp-block-image alignwide tw-mb-8"><img src="' . twentig_get_pattern_asset( 'wide.jpg' ) . '" alt=""/></figure><!-- /wp:image --><!-- wp:columns {"align":"wide","className":"tw-mt-8","twGutter":"large","twStack":"md"} --><div class="wp-block-columns alignwide tw-mt-8 tw-gutter-large tw-cols-stack-md"><!-- wp:column {"className":"tw-mb-2"} --><div class="wp-block-column tw-mb-2"><!-- wp:heading --><h2>' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --></div><!-- /wp:column --><!-- wp:column {"className":"tw-mt-2"} --><div class="wp-block-column tw-mt-2"><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus. Class aptent taciti sociosqu ad litora torquent per conubia. Maecenas laoreet sem tellus in fermentum.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/text-and-image-full-width',
	array(
		'title'      => __( 'Text and Image: Full Width', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:media-text {"align":"full","backgroundColor":"background","mediaPosition":"right","mediaType":"image","imageFill":true,"className":"tw-content-narrow","twStackedMd":true} --><div class="wp-block-media-text alignfull has-media-on-the-right has-background has-background-background-color is-stacked-on-mobile is-image-fill tw-content-narrow tw-stack-md"><figure class="wp-block-media-text__media" style="background-image:url(' . twentig_get_pattern_asset( 'landscape1.jpg' ) . ');background-position:50% 50%"><img src="' . twentig_get_pattern_asset( 'landscape1.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading --><h2>' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text -->',
	)
);

twentig_register_block_pattern(
	'twentig/alternating-text-and-image-full-width',
	array(
		'title'      => __( 'Alternating Text and Image: Full Width', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:media-text {"align":"full","backgroundColor":"background","mediaType":"image","imageFill":true,"className":"tw-mb-0 tw-content-narrow","twStackedMd":true} --><div class="wp-block-media-text alignfull has-background has-background-background-color is-stacked-on-mobile is-image-fill tw-mb-0 tw-content-narrow tw-stack-md"><figure class="wp-block-media-text__media" style="background-image:url(' . twentig_get_pattern_asset( 'landscape1.jpg' ) . ');background-position:50% 50%"><img src="' . twentig_get_pattern_asset( 'landscape1.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading --><h2>' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed ullamcorper at metus.</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text --><!-- wp:media-text {"align":"full","backgroundColor":"background","mediaPosition":"right","mediaType":"image","imageFill":true,"className":"tw-mt-0 tw-content-narrow","twStackedMd":true} --><div class="wp-block-media-text alignfull has-media-on-the-right has-background has-background-background-color is-stacked-on-mobile is-image-fill tw-mt-0 tw-content-narrow tw-stack-md"><figure class="wp-block-media-text__media" style="background-image:url(' . twentig_get_pattern_asset( 'landscape2.jpg' ) . ');background-position:50% 50%"><img src="' . twentig_get_pattern_asset( 'landscape2.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading --><h2>' . esc_html_x( 'Write another heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus suscipit eu iaculis sed ullamcorper at metus. Venenatis nec convallis magna eu congue velit. Proin varius libero sit amet tortor volutpat diam tincidunt.</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text -->',
	)
);

twentig_register_block_pattern(
	'twentig/text-and-image-fullscreen',
	array(
		'title'      => __( 'Text and Image: Fullscreen', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:media-text {"align":"full","backgroundColor":"background","mediaPosition":"right","mediaType":"image","imageFill":true,"className":"tw-height-full tw-content-narrow","twStackedMd":true} --><div class="wp-block-media-text alignfull has-media-on-the-right has-background has-background-background-color is-stacked-on-mobile is-image-fill tw-height-full tw-content-narrow tw-stack-md"><figure class="wp-block-media-text__media" style="background-image:url(' . twentig_get_pattern_asset( 'square1.jpg' ) . ');background-position:50% 50%"><img src="' . twentig_get_pattern_asset( 'square1.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus, suscipit eu iaculis sed, ullamcorper at metus. Venenatis nec convallis magna congue.</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text -->',
	)
);

twentig_register_block_pattern(
	'twentig/heading-with-alternating-text-and-image',
	array(
		'title'      => __( 'Heading with Alternating Text and Image', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:media-text {"mediaType":"image","mediaWidth":49} --><div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:49% auto"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'landscape1.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3,"fontSize":"h4"} --><h3 class="has-h-4-font-size">' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed ullamcorper at metus.</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text --><!-- wp:media-text {"mediaPosition":"right","mediaType":"image","mediaWidth":49} --><div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile" style="grid-template-columns:auto 49%"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'landscape2.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3,"fontSize":"h4"} --><h3 class="has-h-4-font-size">' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus suscipit eu iaculis sed ullamcorper at metus. Venenatis nec convallis magna eu congue velit. Proin varius libero sit amet tortor volutpat diam tincidunt.</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/horizontal-cards',
	array(
		'title'      => __( 'Horizontal Cards', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:media-text {"mediaType":"image","imageFill":true,"className":"is-style-tw-shadow"} --><div class="wp-block-media-text alignwide is-stacked-on-mobile is-image-fill is-style-tw-shadow"><figure class="wp-block-media-text__media" style="background-image:url(' . twentig_get_pattern_asset( 'landscape1.jpg' ) . ');background-position:50% 50%"><img src="' . twentig_get_pattern_asset( 'landscape1.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3,"fontSize":"h4"} --><h3 class="has-h-4-font-size">' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed ullamcorper metus.</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text --><!-- wp:media-text {"mediaType":"image","imageFill":true,"className":"is-style-tw-shadow"} --><div class="wp-block-media-text alignwide is-stacked-on-mobile is-image-fill is-style-tw-shadow"><figure class="wp-block-media-text__media" style="background-image:url(' . twentig_get_pattern_asset( 'landscape2.jpg' ) . ');background-position:50% 50%"><img src="' . twentig_get_pattern_asset( 'landscape2.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3,"fontSize":"h4"} --><h3 class="has-h-4-font-size">' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus suscipit eu iaculis sed ullamcorper at metus. Venenatis nec convallis magna eu congue velit. Proin varius libero sit amet tortor volutpat diam tincidunt.</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/list-with-text-and-image-on-right',
	array(
		'title'      => __( 'List with Text and Image on Right', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading --><h2>' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"twStack":"sm"} --><div class="wp-block-columns tw-cols-stack-sm"><!-- wp:column {"width":"70%"} --><div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">Lorem ipsum dolor sit amet</h3><!-- /wp:heading --><!-- wp:paragraph {"className":"tw-mb-0"} --><p class="tw-mb-0">Integer enim risus suscipit eu iaculis sed ullamcorper at metus. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"width":"30%"} --><div class="wp-block-column" style="flex-basis:30%"><!-- wp:image --><figure class="wp-block-image"><img src="' . twentig_get_pattern_asset( 'landscape1.jpg' ) . '" alt=""/></figure><!-- /wp:image --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:separator {"className":"tw-mt-6 tw-mb-6"} --><hr class="wp-block-separator tw-mt-6 tw-mb-6"/><!-- /wp:separator --><!-- wp:columns {"twStack":"sm"} --><div class="wp-block-columns tw-cols-stack-sm"><!-- wp:column {"width":"70%"} --><div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">Morbi fringilla sapien erat</h3><!-- /wp:heading --><!-- wp:paragraph {"className":"tw-mb-0"} --><p class="tw-mb-0">Venenatis nec convallis magna, eu congue velit. Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit. Cras eget mi tellus. Sed hendrerit purus.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"width":"30%"} --><div class="wp-block-column" style="flex-basis:30%"><!-- wp:image --><figure class="wp-block-image"><img src="' . twentig_get_pattern_asset( 'landscape2.jpg' ) . '" alt=""/></figure><!-- /wp:image --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:separator {"className":"tw-mt-6 tw-mb-6"} --><hr class="wp-block-separator tw-mt-6 tw-mb-6"/><!-- /wp:separator --><!-- wp:columns {"twStack":"sm"} --><div class="wp-block-columns tw-cols-stack-sm"><!-- wp:column {"width":"70%"} --><div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">Mauris commodo accumsan</h3><!-- /wp:heading --><!-- wp:paragraph {"className":"tw-mb-0"} --><p class="tw-mb-0">Duis enim elit, porttitor id feugiat at, blandit at erat. Proin varius libero sit amet tortor volutpat diam laoreet. Fusce sed magna eu ligula commodo hendrerit fringilla ac purus.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"width":"30%"} --><div class="wp-block-column" style="flex-basis:30%"><!-- wp:image --><figure class="wp-block-image"><img src="' . twentig_get_pattern_asset( 'landscape3.jpg' ) . '" alt=""/></figure><!-- /wp:image --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/list-with-text-and-image-on-left',
	array(
		'title'      => __( 'List with Text and Image on Left', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading --><h2>' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"twStack":"sm"} --><div class="wp-block-columns tw-cols-stack-sm"><!-- wp:column {"width":"20%"} --><div class="wp-block-column" style="flex-basis:20%"><!-- wp:image {"width":120,"height":80} --><figure class="wp-block-image is-resized"><img src="' . twentig_get_pattern_asset( 'illustration1.svg' ) . '" alt="" width="120" height="80"/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column {"width":"80%"} --><div class="wp-block-column" style="flex-basis:80%"><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">Lorem ipsum dolor sit amet</h3><!-- /wp:heading --><!-- wp:paragraph {"className":"tw-mb-0"} --><p class="tw-mb-0">Integer enim risus suscipit eu iaculis sed ullamcorper at metus. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:separator {"className":"tw-mt-6 tw-mb-6"} --><hr class="wp-block-separator tw-mt-6 tw-mb-6"/><!-- /wp:separator --><!-- wp:columns {"twStack":"sm"} --><div class="wp-block-columns tw-cols-stack-sm"><!-- wp:column {"width":"20%"} --><div class="wp-block-column" style="flex-basis:20%"><!-- wp:image {"width":120,"height":80} --><figure class="wp-block-image is-resized"><img src="' . twentig_get_pattern_asset( 'illustration2.svg' ) . '" alt="" width="120" height="80"/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column {"width":"80%"} --><div class="wp-block-column" style="flex-basis:80%"><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">Morbi fringilla sapien erat</h3><!-- /wp:heading --><!-- wp:paragraph {"className":"tw-mb-0"} --><p class="tw-mb-0">Venenatis nec convallis magna, eu congue velit. Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit. Cras eget mi tellus. Sed hendrerit purus quam, vel finibus dui eleifend at.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:separator {"className":"tw-mt-6 tw-mb-6"} --><hr class="wp-block-separator tw-mt-6 tw-mb-6"/><!-- /wp:separator --><!-- wp:columns {"twStack":"sm"} --><div class="wp-block-columns tw-cols-stack-sm"><!-- wp:column {"width":"20%"} --><div class="wp-block-column" style="flex-basis:20%"><!-- wp:image {"width":120,"height":80} --><figure class="wp-block-image is-resized"><img src="' . twentig_get_pattern_asset( 'illustration3.svg' ) . '" alt="" width="120" height="80"/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column {"width":"80%"} --><div class="wp-block-column" style="flex-basis:80%"><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">Mauris commodo accumsan</h3><!-- /wp:heading --><!-- wp:paragraph {"className":"tw-mb-0"} --><p class="tw-mb-0">Duis enim elit, porttitor id feugiat at, blandit at erat. Proin varius libero sit amet tortor volutpat diam laoreet. Fusce sed magna eu ligula commodo hendrerit fringilla ac purus.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/small-headings-and-image-on-left',
	array(
		'title'      => __( 'Small headings and Image on Left', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:media-text {"mediaType":"image","imageFill":false,"className":"tw-mt-8","twStackedMd":true} --><div class="wp-block-media-text alignwide is-stacked-on-mobile tw-mt-8 tw-stack-md"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'square1.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus suscipit eu iaculis sed ullamcorper at metus. Sed do eiusmod ut tempor incididunt ut labore et dolore.</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Venenatis nec convallis magna, eu congue velit. Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit.</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">' . esc_html_x( 'Third item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Duis enim elit, porttitor id feugiat at, blandit at erat. Proin varius libero sit amet tortor volutpat diam laoreet.</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/2-text-columns-and-image',
	array(
		'title'      => __( '2 Text Columns and Image', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:image {"align":"wide","className":"tw-mb-8 tw-mt-8"} --><figure class="wp-block-image alignwide tw-mb-8 tw-mt-8"><img src="' . twentig_get_pattern_asset( 'wide.jpg' ) . '" alt=""/></figure><!-- /wp:image --><!-- wp:columns {"align":"wide","className":"tw-mt-8","twGutter":"large"} --><div class="wp-block-columns alignwide tw-mt-8 tw-gutter-large"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus, suscipit eu iaculis sed ullamcorper at metus. Venenatis nec convallis magna, eu congue velit. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus. Proin varius libero sit amet tortor volutpat.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/3-text-columns-and-image/',
	array(
		'title'      => __( '3 Text Columns and Image', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:image {"align":"wide","className":"tw-mt-8 tw-mb-8"} --><figure class="wp-block-image alignwide tw-mt-8 tw-mb-8"><img src="' . twentig_get_pattern_asset( 'wide.jpg' ) . '" alt=""/></figure><!-- /wp:image --><!-- wp:columns {"align":"wide","className":"tw-mt-8"} --><div class="wp-block-columns alignwide tw-mt-8"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus, suscipit eu iaculis sed, ullamcorper at metus. Venenatis nec convallis magna, eu congue velit.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"h5"} --><h3 class="has-h-5-font-size">' . esc_html_x( 'Third item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit. Morbi fringilla sapien libero.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/2-captioned-images',
	array(
		'title'      => __( '2 Captioned Images', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide","className":"tw-mb-8"} --><div class="wp-block-columns alignwide tw-mb-8"><!-- wp:column --><div class="wp-block-column"><!-- wp:image --><figure class="wp-block-image"><img src="' . twentig_get_pattern_asset( 'square1.jpg' ) . '" alt=""/><figcaption>Aliquam tempus mi nulla</figcaption></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:image --><figure class="wp-block-image"><img src="' . twentig_get_pattern_asset( 'square2.jpg' ) . '" alt=""/><figcaption>Integer enim risus suscipit</figcaption></figure><!-- /wp:image --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p><!-- /wp:paragraph --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/2-offset-images',
	array(
		'title'      => __( '2 Offset Images', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide","className":"tw-mb-8"} --><div class="wp-block-columns alignwide tw-mb-8"><!-- wp:column --><div class="wp-block-column"><!-- wp:image {"className":"tw-mt-0 tw-mb-0"} --><figure class="wp-block-image tw-mt-0 tw-mb-0"><img src="' . twentig_get_pattern_asset( 'square1.jpg' ) . '" alt=""/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:spacer {"height":64,"className":"tw-sm-hidden"} --><div style="height:64px" aria-hidden="true" class="wp-block-spacer tw-sm-hidden"></div><!-- /wp:spacer --><!-- wp:image {"className":"tw-mt-0 tw-mb-0"} --><figure class="wp-block-image tw-mt-0 tw-mb-0"><img src="' . twentig_get_pattern_asset( 'square2.jpg' ) . '" alt=""/></figure><!-- /wp:image --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p><!-- /wp:paragraph --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/3-offset-images',
	array(
		'title'      => __( '3 Offset Images', 'twentig' ),
		'categories' => array( 'text-image' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide","className":"tw-mb-8","twStack":"sm"} --><div class="wp-block-columns alignwide tw-mb-8 tw-cols-stack-sm"><!-- wp:column --><div class="wp-block-column"><!-- wp:image {"className":"tw-mt-0 tw-mb-0"} --><figure class="wp-block-image tw-mt-0 tw-mb-0"><img src="' . twentig_get_pattern_asset( 'square1.jpg' ) . '" alt=""/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:spacer {"height":40,"className":"tw-sm-hidden"} --><div style="height:40px" aria-hidden="true" class="wp-block-spacer tw-sm-hidden"></div><!-- /wp:spacer --><!-- wp:image {"className":"tw-mt-0 tw-mb-0"} --><figure class="wp-block-image tw-mt-0 tw-mb-0"><img src="' . twentig_get_pattern_asset( 'square2.jpg' ) . '" alt=""/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:spacer {"height":80,"className":"tw-sm-hidden"} --><div style="height:80px" aria-hidden="true" class="wp-block-spacer tw-sm-hidden"></div><!-- /wp:spacer --><!-- wp:image {"className":"tw-mt-0 tw-mb-0"} --><figure class="wp-block-image tw-mt-0 tw-mb-0"><img src="' . twentig_get_pattern_asset( 'square3.jpg' ) . '" alt=""/></figure><!-- /wp:image --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p><!-- /wp:paragraph --></div><!-- /wp:group -->',
	)
);
