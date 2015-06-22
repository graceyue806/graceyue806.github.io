<?php
// Insert a menu item in the admin menu called "Advertisements"
add_action('admin_menu', 'create_theme_options_page');
function create_theme_options_page() {
  add_options_page('Advertisements', 'Advertisements', 'administrator', __FILE__, 'build_options_page');
}

// Builds the Advertisements page
function build_options_page() {
	?>
  <div id="theme-options-wrap">
    <div class="icon32" id="icon-tools"> <br /> </div>
    <h2>Advertisements</h2>
    <p>Set the number of ads in the sidebar.</p>
    <form method="post" action="options.php">
      <?php settings_fields('plugin_options'); ?>
	  <?php do_settings_sections(__FILE__); ?>
      <p class="submit">
        <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
      </p>
    </form>
  </div>
<?php
}

// Initializes the sections of the page when the Dashboard boots up
add_action('admin_init', 'register_and_build_fields');
function register_and_build_fields() {
  register_setting('plugin_options', 'plugin_options', 'validate_setting');
  add_settings_section('main_section', '', 'section_cb', __FILE__);
  add_settings_field('home_page_ads', 'Page Ads:', 'home_page_ads_setting', __FILE__, 'main_section');
}

// Ensures that the correct options are chosen
function validate_setting($plugin_options) {
  return $plugin_options;
}
function section_cb() {}

// Sets up the select menus
function home_page_ads_setting() {
  $options = get_option('plugin_options');
  $items = array('0','1','2','3');
  echo "<select name='plugin_options[home_page_ads]' style='width:50px;' />";
  	foreach($items as $item) {
		$selected = ( $options['home_page_ads'] === $item ) ? 'selected="selected"' : ''	;
		echo "<option value='$item' $selected > $item </option>";
	};
  echo '</select>';
}

// Adds new sidebar widget
	if (function_exists('register_sidebar')) {
		$options = get_option('plugin_options');
		if($options['home_page_ads'] >= 1) {
			register_sidebar(array(
				'name' => 'Home Ad Space 1',
				'id'   => 'home_ad_1',
				'description'   => 'Drop in widget for ad area.',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>'
			));
		}
				if($options['home_page_ads'] >= 2) {
			register_sidebar(array(
				'name' => 'Home Ad Space 2',
				'id'   => 'home_ad_2',
				'description'   => 'Drop in widget for ad area.',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>'
			));
		}
				if($options['home_page_ads'] >= 3) {
			register_sidebar(array(
				'name' => 'Home Ad Space 3',
				'id'   => 'home_ad_3',
				'description'   => 'Drop in widget for ad area.',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>'
			));
		}
    }

function siteRoot($theFolder) {
	$home = get_home_url();
	// strpos(string, substring)
	$thePosition = strpos($home,$theFolder);
	// substr (string, start, length)
	$thePath = substr($home, 0, $thePosition);
	return $thePath;
}

function my_search_form($text) {
     $text = str_replace('id="s"', 'id="s" placeholder="Enter keyword(s)"', $text);
     $text = str_replace('value="Search"', 'value=""', $text);
     return $text;
}
add_filter('get_search_form','my_search_form');

// Remove unwanted widgets from Dashboard
function remove_dashboard_widgets() {
	global$wp_meta_boxes; 
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');


// Add a new widget to the Dashboard
function contact_help() {
   echo 'If you have questions about working with the Roux Academy WordPress system, contact Kim Neue at kn@rouxacademy.com or 674-555-1212';
} 

function roux_add_dashboard_widgets() {
	wp_add_dashboard_widget(
                 'contact_help_widget',         // Widget slug.
                 'Need Help?',         // Title.
                 'contact_help' // Display function.
        );	
}
add_action( 'wp_dashboard_setup', 'roux_add_dashboard_widgets' );


// Change log-in image
function custom_login_logo() {
  echo '<style type="text/css">
    h1 a { 
	background-image:url('.get_bloginfo('stylesheet_directory').'/_images/ralogo_admin.png) !important;
	background-size: 322px 74px !important;
	width: 322px !important;
	margin-bottom: 14px !important;
	}
    </style>';
}
add_action('login_head', 'custom_login_logo');
?>
