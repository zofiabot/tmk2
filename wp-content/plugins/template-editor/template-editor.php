<?php
/*
 * Plugin Name: Template Editor
 * Version: 1.0.6
 * Plugin URI: https://webd.uk/support/
 * Description: Create new templates for Full Site Editing themes without a child theme!
 * Author: Webd Ltd
 * Author URI: https://webd.uk
 * Text Domain: template-editor
 */



if (!defined('ABSPATH')) {
    exit('This isn\'t the page you\'re looking for. Move along, move along.');
}



if (!class_exists('template_editor_class')) {

	class template_editor_class {

        public static $version = '1.0.6';
        public $is_block_theme = false;

		function __construct() {

        	register_activation_hook(__FILE__, array($this, 'activation_hook'));
            add_action('after_setup_theme', array($this, 'after_setup_theme'), 11);
            add_action('customize_register', '__return_true');

            if (is_admin()) {

    	        add_action('admin_menu', 'template_editor_class::admin_menu');
	            add_action('admin_init', array($this, 'admin_init'));
                add_action('wp_ajax_te_save', 'template_editor_class::te_save');
                add_action('wp_ajax_te_delete', 'template_editor_class::te_delete');
                add_action('wp_ajax_te_download_wp_template', 'template_editor_class::te_download_wp_template');
                add_action('wp_ajax_te_upload_wp_template', 'template_editor_class::te_upload_wp_template');
                add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'template_editor_class::add_plugin_action_links');
                add_action('admin_notices', 'teCommon::admin_notices');
                add_action('wp_ajax_dismiss_te_notice_handler', 'teCommon::ajax_notice_handler');

            } else {

                add_action('wp_head' , array($this, 'wp_head'), 11);

            }

		}

		public static function add_plugin_action_links($links) {

			$settings_links = teCommon::plugin_action_links(add_query_arg('page', 'template_editor', admin_url('themes.php')));

			return array_merge($settings_links, $links);

		}

        public function after_setup_theme() {

            global $_wp_theme_features;

            if (!isset($_wp_theme_features['block-templates'])) {

            	$options = get_option('te_options');

                if (isset($options['enable_template_editor']) && $options['enable_template_editor']) {

                    add_theme_support('block-templates');

                }

            } else {

                $this->is_block_theme = true;

            }

        }

        public function wp_head() {

        	$options = get_option('te_options');

            if (isset($options['enable_sticky_header']) && $options['enable_sticky_header']) {

                add_action('wp_footer', 'template_editor_class::wp_footer');

?>
<!--Template Editor CSS--> 
<style type="text/css">

.wp-site-blocks>header {
	position: fixed;
	z-index: 401;
	left: 0;
	right: 0;
	top: 0;
	padding-left: var(--wp--custom--spacing--outer);
	padding-right: var(--wp--custom--spacing--outer);
}

.wp-site-blocks>main,
.wp-site-blocks>.wp-block-group {
	margin-top: 0;
}

.admin-bar .wp-site-blocks>header {
	top: 32px;
}

.admin-bar .wp-site-blocks>main, .admin-bar .wp-site-blocks>div {
	margin-top: -32px;
}

@media screen and (max-width: 782px) {

	.admin-bar .wp-site-blocks>header {
		top: 46px;
}

	.admin-bar .wp-site-blocks>main {
		margin-top: -46px;
	}

}

</style> 
<!--/Template Editor CSS-->
<?php

            }

        }

        public static function admin_menu() {

            global $submenu;

            if (
                isset($submenu['themes.php'][6][2]) && 'site-editor.php' === $submenu['themes.php'][6][2] &&
                isset($submenu['themes.php'][7][2]) && 'widgets.php' === $submenu['themes.php'][7][2]
            ) {

                $submenu['themes.php'][8] = $submenu['themes.php'][7];
                $customize_url = add_query_arg( 'return', urlencode( remove_query_arg( wp_removable_query_args(), wp_unslash( $_SERVER['REQUEST_URI'] ) ) ), 'customize.php' );
                $submenu['themes.php'][7] = array( __( 'Customize' ), 'customize', esc_url( $customize_url ), '', 'hide-if-no-customize' );

            }

		    add_theme_page(__('Manage Templates', 'template-editor'), __('Manage Templates', 'template-editor'), 'manage_options', 'template_editor', 'template_editor_class::settings_page', 2);
            $submenu['themes.php'][] = array(__('Theme Options', 'template-editor'), 'customize', add_query_arg(array('page' => 'template_editor', 'tab' => 'theme_options'), admin_url('themes.php')), '', 'theme_options');

        }

        public function activation_hook() {

            if (!$this->is_block_theme) {

            	$options = get_option('te_options');

                if (!is_array($options)) {

                    $options = array();

                }

                $options['enable_template_editor'] = '1';
                update_option('te_options', $options);

            }

        }

        public static function settings_page() {

            if (isset($_GET['tab']) && 'theme_options' === $_GET['tab']) {

                $current_tab = 'theme_options';

            } else {

                $current_tab = 'manage_templates';

            }

            $tabs = array(
                'manage_templates' => 'Manage Templates',
                'theme_options' => 'Theme Options'
            );

?>
<h2 class="nav-tab-wrapper">
<?php

            foreach ($tabs as $tab => $title) {

                $class = ($current_tab === $tab) ? ' nav-tab-active' : '';

?>
<a id="<?php echo esc_attr($tab); ?>" class="nav-tab<?php echo $class; ?>" href="#" title="<?php echo esc_attr($title); ?>"><?php echo esc_html($title); ?></a>
<?php

            }

?>
</h2>
<script type="text/javascript">
(function($) {
    $('#adminmenu li.current').addClass('manage_templates');
    $('#adminmenu .current').removeClass('current');
    $('#adminmenu .<?php echo $current_tab; ?>').addClass('current');
    $('.nav-tab-wrapper .nav-tab').click(function() {
        $('.tab_content').hide();
        $('.tab_content.' + $(this).attr('id')).show();
        $('.nav-tab-active').removeClass('nav-tab-active');
        $(this).addClass('nav-tab-active');
        $('#adminmenu .current').removeClass('current');
        $('#adminmenu .' + $(this).attr('id')).addClass('current');
    });
})(jQuery);
</script>
<?php

            $active_theme = get_stylesheet();

?>
<div class="wrap tab_content manage_templates"<?php echo ('manage_templates' === $current_tab ? '' : ' style="display: none;"'); ?>>
<h1><?php _e('Manage Templates', 'template-editor'); ?></h1>
<p><?php _e('Every theme default template you have edited is listed here ...', 'template-editor'); ?></p>
<p><?php _e('Here\'s how this works. When you use the Full Screen Editor and save your changes to a template, the changes are saved to the database and will be listed here.', 'template-editor'); ?></p>
<p><?php _e('You can then rename the slug (and title / description) of the edited template to whatever you require and either save it or save it as a copy if you want to keep the original.', 'template-editor'); ?></p>
<p><?php _e('Using this plugin you can create new templates outside of those that are available by default <strong>without</strong> having to create a child them! :).', 'template-editor'); ?></p>
<h2><?php printf(__('Active Theme (%s) Templates', 'template-editor'), $active_theme); ?></h2>
<?php

            $templates = get_posts(array(
                'numberposts' => -1,
                'post_type' => 'wp_template',
                'tax_query' =>  array(
                    array(
                        'taxonomy' => 'wp_theme',
                        'field' => 'slug',
                        'terms' => array($active_theme),
                        'operator' => 'IN'
                    )
                 )
            ));

            if ($templates) {

?>
<table class="wp-list-table widefat striped">
<thead>
<tr>
<th class="manage-column column-name column-primary"><?php _e('Template', 'template-editor'); ?></th>
<th class="manage-column column-actions"><?php _e('Actions', 'template-editor'); ?></th>
</tr>
</thead>
<tbody>
<?php

                foreach ($templates as $template) {

                    $template_array = [
                        'ID' => $template->ID,
                        'post_title' => $template->post_title,
                        'post_name' => $template->post_name,
                        'post_excerpt' => $template->post_excerpt
                    ];

?>
<tr class="theme-mods-<?php echo esc_attr($template->ID); ?>">
<td class="plugin-title column-primary">
<strong><?php echo esc_html($template->post_title) . ' (' . esc_html($template->post_name) . '.html)'; ?></strong>
</td>
<td class="column-actions">
<span class="te-download button button-small" data-template="<?php echo esc_attr(json_encode($template_array)); ?>"><?php _e('Download', 'template-editor'); ?></span>
<span class="te-select button button-small" data-template="<?php echo esc_attr(json_encode($template_array)); ?>"><?php _e('Select', 'template-editor'); ?></span>
<span class="te-delete button button-small" data-template="<?php echo esc_attr($template->ID); ?>"><?php _e('Delete', 'template-editor'); ?></span>
</td>
</tr>
<?php

                }

?>
</tbody>
</table>
<?php

            } else {

?>
<p><?php _e('No customized templates can be found for the active theme.', 'template-editor'); ?></p>
<?php

            }

?>
<h2><?php printf(__('Other Theme Templates', 'template-editor'), $active_theme); ?></h2>
<?php

            $templates = get_posts(array(
                'numberposts' => -1,
                'post_type' => 'wp_template',
                'tax_query' =>  array(
                    array(
                        'taxonomy' => 'wp_theme',
                        'field' => 'slug',
                        'terms' => array($active_theme),
                        'operator' => 'NOT IN'
                    )
                 )
            ));

            if ($templates) {

?>
<table class="wp-list-table widefat striped">
<thead>
<tr>
<th class="manage-column column-name column-primary"><?php _e('Theme', 'template-editor'); ?></th>
<th class="manage-column column-name column-primary"><?php _e('Template', 'template-editor'); ?></th>
<th class="manage-column column-actions"><?php _e('Actions', 'template-editor'); ?></th>
</tr>
</thead>
<tbody>
<?php

                foreach ($templates as $template) {

                    $template_array = [
                        'ID' => $template->ID,
                        'post_title' => $template->post_title,
                        'post_name' => $template->post_name,
                        'post_excerpt' => $template->post_excerpt
                    ];

?>
<tr class="theme-mods-<?php echo esc_attr($template->ID); ?>">
<td class="plugin-title column-primary">
<strong><?php echo esc_html(get_the_terms($template, 'wp_theme')[0]->slug); ?></strong>
</td>
<td class="plugin-title column-primary">
<strong><?php echo esc_html($template->post_title) . ' (' . esc_html($template->post_name) . '.html)'; ?></strong>
</td>
<td class="column-actions">
<span class="te-download button button-small" data-template="<?php echo esc_attr(json_encode($template_array)); ?>"><?php _e('Download', 'template-editor'); ?></span>
<span class="te-select button button-small" data-template="<?php echo esc_attr(json_encode($template_array)); ?>"><?php _e('Select', 'template-editor'); ?></span>
<span class="te-delete button button-small" data-template="<?php echo esc_attr($template->ID); ?>"><?php _e('Delete', 'template-editor'); ?></span>
</td>
</tr>
<?php

                }

?>
</tbody>
</table>
<?php

            } else {

?>
<p><?php _e('No customized templates can be found for any other themes.', 'template-editor'); ?></p>
<?php

            }

?>
<input name="te_post_id" type="hidden" id="te_post_id" value="">
<table class="form-table" role="presentation">
<tbody>
<tr>
<th scope="row"><label for="te_post_title">Template Title</label></th>
<td><input name="te_post_title" type="text" id="te_post_title" value="" class="regular-text"></td>
</tr>
<tr>
<th scope="row"><label for="te_post_name">Template Name</label></th>
<td><input name="te_post_name" type="text" id="te_post_name" value="" class="regular-text">.html<br />
<strong>This is the important bit!</strong> The template name <i>has</i> to match the slug that you would expect WordPress to look for in the <a href="https://developer.wordpress.org/themes/basics/template-hierarchy/" title="Template Heirachy">Template Heirachy</a></td>
</tr>
<tr>
<th scope="row"><label for="te_post_excerpt">Template Description</label></th>
<td><input name="te_post_excerpt" type="text" id="te_post_excerpt" value="" class="regular-text"></td>
</tr>
</tbody>
</table>
<p><span id="te_save" class="button button-small disabled"><?php _e('Save', 'template-editor'); ?></span> - Retains association with the origin theme.</p>
<p><span id="te_save_as_copy" class="button button-small disabled"><?php _e('Save as copy', 'template-editor'); ?></span> - Saves a copy of the template to the active theme.</p>
<h2>Upload Template</h2>
<p>Upload a template .json file to the active theme.</p>
<input type="file" id="te-json-file" accept=".json" style="display: none;" />
<p><span class="te-upload button button-small"><?php _e('Upload', 'template-editor'); ?></span></p>
<script type="text/javascript">
(function($) {
    $('.te-select').click(function() {
        var template = $(this).data('template');
        $('#te_post_id').val(template.ID);
        $('#te_post_title').val(template.post_title);
        $('#te_post_name').val(template.post_name);
        $('#te_post_excerpt').val(template.post_excerpt);
        if ($('#te_save').hasClass('disabled')) { $('#te_save').removeClass('disabled'); }
        if ($('#te_save_as_copy').hasClass('disabled')) { $('#te_save_as_copy').removeClass('disabled'); }
	});
    $('#te_save').click(function() { save_template(0); });
    $('#te_save_as_copy').click(function() { save_template(1); });
    function save_template(saveAsCopy) {
        if (confirm('<?php _e('Are you sure you want to save your changes to the template?', 'template-editor'); ?>')) {
            $('#te_save').unbind('click')
            var data = {
            	action: 'te_save',
            	_ajax_nonce: '<?php echo wp_create_nonce('template-editor-save'); ?>',
            	post_id: $('#te_post_id').val(),
            	post_title: $('#te_post_title').val(),
            	post_name: $('#te_post_name').val(),
            	post_excerpt: $('#te_post_excerpt').val(),
            	save_as_copy: saveAsCopy
            };
    	    $.ajax({
        	    url: ajaxurl,
        	    data: data,
                type: 'POST',
                success: function(response) {
                    if ('success' in response && response.success) {
                        window.location.href = '<?php echo add_query_arg('page', 'template_editor', admin_url('themes.php')); ?>';
                    } else {
                        alert('<?php _e('Something went wrong!', 'template-editor'); ?>');
                        window.location.href = '<?php echo add_query_arg('page', 'template_editor', admin_url('themes.php')); ?>';
                    }
                },
                error: function() {
                    alert('<?php _e('Something went wrong!', 'template-editor'); ?>');
                    window.location.href = '<?php echo add_query_arg('page', 'template_editor', admin_url('themes.php')); ?>';
                }
    	    });
        }
    }
    $('.te-download').click(function() {
        var data = {
        	action: 'te_download_wp_template',
        	_ajax_nonce: '<?php echo wp_create_nonce('download-wp-template'); ?>',
        	post_id: $(this).data('template').ID,
        	post_name: $(this).data('template').post_name
        };
	    $.ajax({
    	    url: ajaxurl,
    	    dataType: 'text',
    	    data: data,
            type: 'POST',
            success: function(wpTemplateJson) {
                var wpTemplateFile = new Blob(
                    [wpTemplateJson], {
                        type : "application/json;charset=utf-8"
                    }
                );
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth() + 1;
                var yyyy = today.getFullYear();
                if (dd < 10) {
                    dd = '0' + dd;
                }
                if (mm < 10) {
                    mm = '0' + mm;
                }
                today = yyyy + '_' + mm + '_' + dd;
                var downloadLink = document.createElement('a');
                var downloadURL = window.URL.createObjectURL(wpTemplateFile);
                downloadLink.href = downloadURL;
                downloadLink.download = data.post_name + '_' + today + '.json';
                document.body.append(downloadLink);
                downloadLink.click();
                downloadLink.remove();
                window.URL.revokeObjectURL(downloadURL);
            },
            error: function() {
                alert('<?php _e('Something went wrong!', 'template-editor'); ?>');
            }
	    });
    });
    $('.te-delete').click(function() {
        if (confirm('<?php _e('Are you sure you want to delete the template?', 'template-editor'); ?>')) {
            $('#te-delete').unbind('click')
            var data = {
            	action: 'te_delete',
            	_ajax_nonce: '<?php echo wp_create_nonce('template-editor-delete'); ?>',
            	post_id: $(this).data('template')
            };
    	    $.ajax({
        	    url: ajaxurl,
        	    data: data,
                type: 'POST',
                success: function(response) {
                    if ('success' in response && response.success) {
                        window.location.href = '<?php echo add_query_arg('page', 'template_editor', admin_url('themes.php')); ?>';
                    } else {
                        alert('<?php _e('Something went wrong!', 'template-editor'); ?>');
                        window.location.href = '<?php echo add_query_arg('page', 'template_editor', admin_url('themes.php')); ?>';
                    }
                },
                error: function() {
                    alert('<?php _e('Something went wrong!', 'template-editor'); ?>');
                    window.location.href = '<?php echo add_query_arg('page', 'template_editor', admin_url('themes.php')); ?>';
                }
    	    });
        }
    });
    $('.te-upload').click(function() {
        document.getElementById('te-json-file').click();
    });
    $('#te-json-file').change(function() {
        var confirmText = '<?php _e('Are you sure you want to upload %s as an active theme template?', 'template-editor'); ?>';
        if (confirm(confirmText.replace('%s', $('#te-json-file').prop('files')[0].name))) {
            var data = new FormData();
            data.append('action', 'te_upload_wp_template');
            data.append('_ajax_nonce', '<?php echo wp_create_nonce('upload-wp-template'); ?>');
            data.append('file', $('#te-json-file').prop('files')[0]);
    	    $.ajax({
        	    url: ajaxurl,
        	    data: data,
                type: 'POST',
                contentType: false,
                processData: false,
                success: function(response) {
                    if ('success' in response && response.success) {
                        window.location.href = '<?php echo add_query_arg('page', 'template_editor', admin_url('themes.php')); ?>';
                    } else {
                        alert('<?php _e('Something went wrong!', 'template-editor'); ?>');
                        window.location.href = '<?php echo add_query_arg('page', 'template_editor', admin_url('themes.php')); ?>';
                    }
                },
                error: function() {
                    alert('<?php _e('Something went wrong!', 'template-editor'); ?>');
                    window.location.href = '<?php echo add_query_arg('page', 'template_editor', admin_url('themes.php')); ?>';
                }
    	    });
        }
	});
})(jQuery);
</script>
</div>
<div class="wrap tab_content theme_options"<?php echo ('theme_options' === $current_tab ? '' : ' style="display: none;"'); ?>>
<h1><?php _e('Theme Options', 'template-editor'); ?></h1>
<form action="options.php" method="post">
<?php settings_fields('te_options'); ?>
<?php do_settings_sections('te_general_options'); ?>
<input name="submit" type="submit" value="<?php _e('Save Options', 'template-editor'); ?>" class="button" />
</form>
</div>
<?php

        }

        public static function te_save() {

            check_ajax_referer('template-editor-save');

            if (
                current_user_can('manage_options') &&
                isset($_POST['post_id']) && absint($_POST['post_id']) &&
                isset($_POST['post_title']) && sanitize_text_field($_POST['post_title']) &&
                isset($_POST['post_name']) && sanitize_title($_POST['post_name']) &&
                isset($_POST['post_excerpt']) && sanitize_text_field($_POST['post_excerpt']) &&
                isset($_POST['save_as_copy']) && in_array($_POST['save_as_copy'], ['0', '1'], true)
            ) {

                $post_id = absint($_POST['post_id']);
                $post_title = sanitize_text_field($_POST['post_title']);
                $post_name = sanitize_title($_POST['post_name']);
                $post_excerpt = sanitize_text_field($_POST['post_excerpt']);
                $save_as_copy = absint($_POST['save_as_copy']);

                if ($save_as_copy) {

                    $current_user = wp_get_current_user();
                    $post = get_post($post_id);

		            $new_post_id = wp_insert_post([
                        'comment_status' => 'closed',
                        'ping_status'    => 'closed',
                        'post_author'    => $current_user->ID,
                        'post_content'   => $post->post_content,
                        'post_excerpt'   => $post_excerpt,
                        'post_name'      => $post_name,
                        'post_status'    => 'publish',
                        'post_title'     => $post_title,
                        'post_type'      => 'wp_template'
                    ]);

                    if ($new_post_id && !is_wp_error($new_post_id)) {

        				wp_set_object_terms($new_post_id, get_stylesheet(), 'wp_theme', false);
                        update_post_meta($new_post_id, 'origin', 'theme');

                    } else {

                        wp_send_json_error();

                    }

                } else {

                    wp_update_post([
                        'ID' => $post_id,
                        'post_title' => $post_title,
                        'post_name' => $post_name,
                        'post_excerpt' => $post_excerpt
                    ]);

                }

                wp_send_json_success();

            } else {

                wp_send_json_error();

            }

        }

        public static function te_delete() {

            check_ajax_referer('template-editor-delete');

            if (
                current_user_can('manage_options') &&
                isset($_POST['post_id']) && absint($_POST['post_id'])
            ) {

                wp_delete_post(absint($_POST['post_id']), true);

                wp_send_json_success();

            } else {

                wp_send_json_error();

            }

        }

        public static function te_download_wp_template() {

            check_ajax_referer('download-wp-template');

            if (
                current_user_can('manage_options') &&
                isset($_POST['post_id']) && absint($_POST['post_id'])
            ) {

                $template = get_post(absint($_POST['post_id']));

                if ($template) {

                    wp_send_json(array(
                        'post_content'   => $template->post_content,
                        'post_excerpt'   => $template->post_excerpt,
                        'post_name'      => $template->post_name,
                        'post_title'     => $template->post_title,
                    ));

                } else {

                    wp_send_json_error();

                }

            } else {

                wp_send_json_error();

            }

        }

        public static function te_upload_wp_template() {

            check_ajax_referer('upload-wp-template');

            if (
                current_user_can('manage_options') &&
                isset($_FILES['file']['tmp_name']) &&
                isset($_FILES['file']['type']) && $_FILES['file']['type'] == 'application/json'
            ) {

                $json_data = file_get_contents($_FILES['file']['tmp_name']);
                $template = false;

                if ($json_data) {

                    $template = json_decode($json_data, true);

                    if (json_last_error() !== JSON_ERROR_NONE) {

                        $template = false;

                    }

                }

                if (!(
                    isset($template['post_content']) && $template['post_content'] &&
                    isset($template['post_excerpt']) && sanitize_text_field($template['post_excerpt']) &&
                    isset($template['post_name']) && sanitize_title($template['post_name']) &&
                    isset($template['post_title']) && sanitize_text_field($template['post_title'])
                )) {

                    $template = false;

                }

                if ($template) {

                    $current_user = wp_get_current_user();

		            $new_post_id = wp_insert_post([
                        'comment_status' => 'closed',
                        'ping_status'    => 'closed',
                        'post_author'    => $current_user->ID,
                        'post_content'   => $template['post_content'],
                        'post_excerpt'   => sanitize_text_field($template['post_excerpt']),
                        'post_name'      => sanitize_title($template['post_name']),
                        'post_status'    => 'publish',
                        'post_title'     => sanitize_text_field($template['post_title']),
                        'post_type'      => 'wp_template'
                    ]);

                    if ($new_post_id && !is_wp_error($new_post_id)) {

        				wp_set_object_terms($new_post_id, get_stylesheet(), 'wp_theme', false);
                        update_post_meta($new_post_id, 'origin', 'theme');

                    } else {

                        wp_send_json_error();

                    }

                    wp_send_json_success();

                } else {

                    wp_send_json_error();

                }

            } else {

                wp_send_json_error();

            }

        }

        public function admin_init() {

	        register_setting('te_options', 'te_options', 'template_editor_class::validate_options');
	        add_settings_section('te_options', 'General Options', 'template_editor_class::general_options_text', 'te_general_options');

            if (!$this->is_block_theme) {

    	        add_settings_field('enable_template_editor', 'Template Editor', 'template_editor_class::enable_template_editor_string', 'te_general_options', 'te_options');

            }

	        add_settings_field('enable_sticky_header', 'Sticky Header', 'template_editor_class::enable_sticky_header_string', 'te_general_options', 'te_options');

        }

        public static function general_options_text() {

?>
<p><?echo sprintf(wp_kses(__('Here are some options for Full Site Editor themes. If you\'d like to see more options here, <a href="%s">let us know in the support forum</a>.', 'template-editor'), array('a' => array('href' => array(), 'class' => array()))), esc_url('https://wordpress.org/support/plugin/template-editor/')); ?></p>
<?php

        }

        public static function enable_template_editor_string() {

        	$options = get_option('te_options');

?>
<p><input type="checkbox" id="enable_template_editor" name="te_options[enable_template_editor]" value="1"<?php checked('1', ((isset($options['enable_template_editor'])) ? $options['enable_template_editor'] : '')); ?> /> <?php _e('Enable the template editor for this theme.'); ?></p>
<?php

        }

        public static function enable_sticky_header_string() {

        	$options = get_option('te_options');

?>
<p><input type="checkbox" id="enable_sticky_header" name="te_options[enable_sticky_header]" value="1"<?php checked('1', ((isset($options['enable_sticky_header'])) ? $options['enable_sticky_header'] : '')); ?> /> <?php _e('Enable sticky header.'); ?></p>
<?php

        }

        public static function validate_options($input) {

            if (current_user_can('manage_options')) {

            	$options = get_option('te_options');

                if (isset($input['enable_template_editor']) && '1' === $input['enable_template_editor']) {

                    $options['enable_template_editor'] = '1';

                } else {

                    unset($options['enable_template_editor']);

                }

                if (isset($input['enable_sticky_header']) && '1' === $input['enable_sticky_header']) {

                    $options['enable_sticky_header'] = '1';

                } else {

                    unset($options['enable_sticky_header']);

                }

            	return $options;

            }

        }

        public static function wp_footer() {

            if (is_admin_bar_showing()) {

?>
<script type="text/javascript">
    'scroll resize'.split(' ').forEach(function(e){
        window.addEventListener(e, function() {
            var $header = document.querySelectorAll('.admin-bar .wp-site-blocks>header')[0],
            $main = document.querySelectorAll('.admin-bar .wp-site-blocks>main, .admin-bar .wp-site-blocks>div')[0];
            if (window.innerWidth < 601) {
                if (document.documentElement.scrollTop > 46) {
                    $header.style.top = '0';
                    $main.style.marginTop = '0';
                } else {
                    $header.style.top = (46 - document.documentElement.scrollTop) + 'px';
                    $main.style.marginTop = '-' + (46 - document.documentElement.scrollTop) + 'px';
                }
            } else if (window.innerWidth < 783) {
                $header.style.top = '46px';
                $main.style.marginTop = '-46px';
            } else {
                $header.style.top = '32px';
                $main.style.marginTop = '-32px';
            }
        });
    });
</script>
<?php

            }

        }

	}

    if (!class_exists('teCommon')) {

        require_once(dirname(__FILE__) . '/includes/class-te-common.php');

    }

    if (version_compare(get_bloginfo('version'), '5.8', '>=')) {

	    $template_editor_object = new template_editor_class();

    } else {

        global $pagenow;

        if ('update-core.php' !== $pagenow) {

            add_action('admin_notices', 'template_editor_upgrade_wordpress_notice');

        }

    }

    function template_editor_upgrade_wordpress_notice() {

?>

<div class="notice notice-error">

<p><strong><?php _e('Template Editor Plugin Error', 'template-editor'); ?></strong><br />
<?php

        printf(
            __('This plugin requires at least Wordpress v5.8 to be installed in order to function. Your Wordpress version "%s" is not compatible.', 'template-editor'),
            get_bloginfo('version')
        );

?></p>

<p><a class="button" href="<?php echo esc_url(admin_url('update-core.php')); ?>" title="<?php _e('WordPress Updates', 'template-editor'); ?>"><?php
        _e('WordPress Updates', 'template-editor');
?></a>.</p>

</div>

<?php

    }

}

?>
