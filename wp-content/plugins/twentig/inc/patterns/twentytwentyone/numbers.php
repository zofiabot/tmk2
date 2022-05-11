<?php
/**
 * Numbers block patterns.
 *
 * @package twentig
 */

twentig_register_block_pattern(
	'twentig/stats-3-columns',
	array(
		'title'      => __( 'Stats: 3 Columns', 'twentig' ),
		'categories' => array( 'numbers' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide","twGutter":"large","twStack":"sm","twTextAlign":"center"} --><div class="wp-block-columns alignwide tw-gutter-large tw-cols-stack-sm has-text-align-center"><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"className":"tw-mb-2","style":{"typography":{"fontSize":"50px","lineHeight":"1.2"}}} --><p class="tw-mb-2" style="font-size:50px;line-height:1.2">12x</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>dolor sit amet commodo erat</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"className":"tw-mb-2","style":{"typography":{"fontSize":"50px","lineHeight":"1.2"}}} --><p class="tw-mb-2" style="font-size:50px;line-height:1.2">480</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>integer enim risus eu iaculis</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"className":"tw-mb-2","style":{"typography":{"fontSize":"50px","lineHeight":"1.2"}}} --><p class="tw-mb-2" style="font-size:50px;line-height:1.2">245+</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>aliquam tempus mi nulla luctus</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/stats-4-columns',
	array(
		'title'      => __( 'Stats: 4 Columns', 'twentig' ),
		'categories' => array( 'numbers' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide","twColumnStyle":"card-border","twTextAlign":"center"} --><div class="wp-block-columns alignwide tw-cols-card tw-cols-card-border has-text-align-center"><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"className":"tw-mb-2","style":{"typography":{"fontSize":"50px","lineHeight":"1.2"}}} --><p class="tw-mb-2" style="font-size:50px;line-height:1.2">12x</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>lorem ipsum dolor sit amet commodo</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"className":"tw-mb-2","style":{"typography":{"fontSize":"50px","lineHeight":"1.2"}}} --><p class="tw-mb-2" style="font-size:50px;line-height:1.2">480</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>integer enim risus suscipit iaculis ullam</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"className":"tw-mb-2","style":{"typography":{"fontSize":"50px","lineHeight":"1.2"}}} --><p class="tw-mb-2" style="font-size:50px;line-height:1.2">245+</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>duis enim elit portitor id feugiat blandit</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"className":"tw-mb-2","style":{"typography":{"fontSize":"50px","lineHeight":"1.2"}}} --><p class="tw-mb-2" style="font-size:50px;line-height:1.2">26</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>aliquam tempus mi nulla porta luctus</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/numbers-list-with-headings',
	array(
		'title'      => __( 'Numbers: List with Headings', 'twentig' ),
		'categories' => array( 'numbers', 'list' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading --><h2>' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:heading {"level":3,"className":"tw-heading-border-bottom","fontSize":"large"} --><h3 class="tw-heading-border-bottom has-large-font-size">01. Lorem ipsum dolor sit amet</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus suscipit eu iaculis sed ullamcorper at metus. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus. Class aptent taciti sociosqu ad litora.</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"className":"tw-heading-border-bottom","fontSize":"large"} --><h3 class="tw-heading-border-bottom has-large-font-size">02. Morbi fringilla sapien erat</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Venenatis nec convallis magna, eu congue velit. Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit. Cras eget mi tellus. Sed hendrerit purus quam, vel finibus dui eleifend at.</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"className":"tw-heading-border-bottom","fontSize":"large"} --><h3 class="tw-heading-border-bottom has-large-font-size">03. Mauris commodo accumsan</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Duis enim elit porttitor id feugiat at blandit at erat. Proin varius libero sit amet, tortor volutpat diam laoreet. Fusce sed magna eu ligula commodo hendrerit fringilla ac purus.</p><!-- /wp:paragraph --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/numbers-3-columns',
	array(
		'title'      => __( 'Numbers: 3 Columns', 'twentig' ),
		'categories' => array( 'numbers' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide","twGutter":"large","twStack":"sm","twTextAlign":"center"} --><div class="wp-block-columns alignwide tw-gutter-large tw-cols-stack-sm has-text-align-center"><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"className":"tw-mb-4","style":{"typography":{"fontSize":"50px","lineHeight":"1.2"}}} --><p class="tw-mb-4" style="font-size:50px;line-height:1.2">01</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="has-large-font-size">' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"className":"tw-mb-4","style":{"typography":{"fontSize":"50px","lineHeight":"1.2"}}} --><p class="tw-mb-4" style="font-size:50px;line-height:1.2">02</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="has-large-font-size">' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus suscipit eu iaculis sed ullamcorper at metus.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"className":"tw-mb-4","style":{"typography":{"fontSize":"50px","lineHeight":"1.2"}}} --><p class="tw-mb-4" style="font-size:50px;line-height:1.2">03</p><!-- /wp:paragraph --><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="has-large-font-size">' . esc_html_x( 'Third item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Aliquam tempus mi nulla luctus. Sed neque at lectus blandit.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/numbers-3-columns-with-top-border',
	array(
		'title'      => __( 'Numbers: 3 Columns with Top Border', 'twentig' ),
		'categories' => array( 'numbers' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide","twGutter":"large","twStack":"sm","twColumnStyle":"border-top"} --><div class="wp-block-columns alignwide tw-gutter-large tw-cols-stack-sm tw-cols-border-top"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">01. ' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">02. ' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus, suscipit eu iaculis sed, ullamcorper at metus. Venenatis nec convallis magna, eu congue velit.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">03. ' . esc_html_x( 'Third item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit. Morbi fringilla sapien libero.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:columns {"align":"wide","twGutter":"large","twStack":"sm","twColumnStyle":"border-top"} --><div class="wp-block-columns alignwide tw-gutter-large tw-cols-stack-sm tw-cols-border-top"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">04. ' . esc_html_x( 'Fourth item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Duis enim elit, porttitor id feugiat at, blandit at erat. Proin varius libero sit amet tortor volutpat diam laoreet.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">05. ' . esc_html_x( 'Fifth item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Fusce sed magna eu ligula commodo hendrerit fringilla ac purus. Integer sagittis efficitur rhoncus justo.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">06. ' . esc_html_x( 'Sixth item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Mauris dui tellus mollis quis varius, sit amet ultrices in leo. Cras et purus sit amet velit congue convallis nec id diam.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/numbers-4-columns',
	array(
		'title'      => __( 'Numbers: 4 Columns', 'twentig' ),
		'categories' => array( 'numbers' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide"} --><div class="wp-block-columns alignwide"><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph --><p><strong>01.</strong></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph --><p><strong>02.</strong></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Integer enim risus, suscipit eu iaculis sed metus.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph --><p><strong>03.</strong></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Aliquam tempus mi nulla porta luctus, ed non neque lectus.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph --><p><strong>04.</strong></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Duis enim elit porttitor id feugiat at blandit varius libero.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

