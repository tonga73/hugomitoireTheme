<?php
// Custom settings
function social_add_menu_items() {
    add_menu_page( 'Social Creator', 'Social Creator', 'manage_options', 'social-panel', 'social_settings_page', null, 99);
}
add_action( 'admin_menu', 'social_add_menu_items' );

// Social Menú Customizer
function social_settings_page() { ?>
    <div class="wrap">
        <h1>Creador de Enlaces Sociales</h1>
        <form method="post" action="options.php">
            <?php
                settings_fields( 'section' );
                do_settings_sections( 'theme-options' );
                submit_button();
            ?>
        </form>
    </div>
<?php }

// Twitter
function setting_twitter() { ?>
    <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
  <?php }

// Github
function setting_github() { ?>
    <input type="text" name="github" id="github" value="<?php echo get_option( 'github' ); ?>" />
  <?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
  add_settings_field( 'github', 'Github URL', 'setting_github', 'theme-options', 'section' );

  register_setting('section', 'twitter');
  register_setting('section', 'github');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

