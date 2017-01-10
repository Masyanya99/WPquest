<?php

	wp_enqueue_script('jquery');
	add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
	add_action( 'admin_enqueue_scripts', 'my_scripts_admin' );
	function my_scripts_method(){
		wp_enqueue_script( 'theme_functions', get_template_directory_uri() . '/js/functions.js');
		wp_enqueue_script( 'theme_main_stripts', get_template_directory_uri() . '/js/main.js');
	}
	function my_scripts_admin(){
		wp_enqueue_script( 'theme_admin_stripts', get_template_directory_uri() . '/js/admin.js');
	}

	
	add_theme_support('post-thumbnails');
	//set_post_thumbnail_size(540, 230, false);
	
	add_theme_support( 'automatic-feed-links' );
	
	register_nav_menus(array(
		'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
		'bottom' => 'Нижнее меню'      //Название другого месторасположения меню в шаблоне
	));
	
	


/// страница настроек
// create custom plugin settings menu
add_action('admin_menu', 'baw_create_menu');

function baw_create_menu() {
	//create new top-level menu
	add_menu_page('Theme Settings', 'Theme Settings', 'administrator', __FILE__, 'baw_settings_page');

	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}


function register_mysettings() {
	//register our settings
	register_setting( 'baw-settings-group', 'times' );
	register_setting( 'baw-settings-group', 'koef' );
	register_setting( 'baw-settings-group', 'option_etc' );
}

function baw_settings_page() {
?>
<div class="wrap">
	<h2>Settings</h2>

	<form method="post" action="options.php">
		<?php settings_fields( 'baw-settings-group' ); ?>
		<table class="form-table">	
			
			<tr valign="top">
				<th scope="row">Options, Etc.</th>
				<td><input type="text" name="option_etc" value="<?php echo get_option('option_etc'); ?>" /></td>
			</tr>
			
		</table>
		
		<p class="submit">
		<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
		</p>

	</form>
</div>

<?php
add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}



}