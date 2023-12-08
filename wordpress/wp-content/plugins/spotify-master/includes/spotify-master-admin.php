<?php
function menu_single_spotify_master_admin(){
if ( is_admin() )
add_menu_page( 'Music Master', 'Music Master', 'manage_options', 'spotify-master', 'spotify_master_admin', plugins_url( 'spotify-master/images/techgasp-minilogo-16.png' ) );
}
		///////////////////////
		// WORDPRESS ACTIONS //
		///////////////////////
		if( is_multisite() ) {
		add_action( 'network_admin_menu', 'menu_single_spotify_master_admin' );
		add_action( 'admin_menu', 'menu_single_spotify_master_admin' );
		}
		else {
		add_action( 'admin_menu', 'menu_single_spotify_master_admin' );
		}

function spotify_master_admin(){
$plugin_master_name = constant('SPOTIFY_MASTER_NAME');
?>
<div class="wrap">
<h1>TechGasp</h1>
<?php
if(!class_exists('spotify_master_admin_table_header')){
	require_once( WP_PLUGIN_DIR . '/spotify-master/includes/spotify-master-admin-table-header.php');
}
//Prepare Table of elements
$wp_list_table = new spotify_master_admin_table_header();
//Table of elements
$wp_list_table->display();
?>
</br>
<div style="background: url(<?php echo plugins_url('images/techgasp-hr.png', dirname(__FILE__)); ?>) repeat-x; height: 10px"></div>
</br>
<?php
if(!class_exists('spotify_master_admin_table_news')){
	require_once( WP_PLUGIN_DIR . '/spotify-master/includes/spotify-master-admin-table-news.php');
}
//Prepare Table of elements
$wp_list_table = new spotify_master_admin_table_news();
//Table of elements
$wp_list_table->display();
?>
</br>

<h2>IMPORTANT: Makes no use of Javascript or Ajax to keep your website fast and conflicts free</h2>

<div style="background: url(<?php echo plugins_url('images/techgasp-hr.png', dirname(__FILE__)); ?>) repeat-x; height: 10px"></div>

<br>

<p>
<a class="button-secondary" href="https://wordpress.techgasp.com" target="_blank" title="Visit Website">More TechGasp Plugins</a>
<a class="button-secondary" href="https://www.techgasp.com/support/" target="_blank" title="TechGasp Support">TechGasp Support</a>
<a class="button-primary" href="https://wordpress.techgasp.com/spotify-master/" target="_blank" title="Visit Website"><?php echo $plugin_master_name; ?> Info</a>
<a class="button-primary" href="https://wordpress.techgasp.com/spotify-master-documentation/" target="_blank" title="Visit Website"><?php echo $plugin_master_name; ?> Documentation</a>
</p>
<?php
}
