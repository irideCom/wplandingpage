<?php
/*
Plugin Name: Landing Plugin
Plugin URI: http://www.iridecomunicazione.it
Description: Landing Plugin
Version: 1.0
Author: Iride Comunicazione
Author URI: http://www.iridecomunicazioneit
 */



 require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
 require_once dirname( __FILE__ ) . '/pagetemplater.php';
 //require_once dirname( __FILE__ ) . '/lib/metaboxs.php';

 /* Richiesta Plugin */

 add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );

 function my_theme_register_required_plugins() {
	/*
	 * Array Plugin settiamo i dati
	 */
	$plugins = array(
    array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => true,
		),
    array(
			'name'      => 'Contact Form 7 Database Addon – CFDB7',
			'slug'      => 'contact-form-cfdb7',
			'required'  => true,
		),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'iridecomunicazione',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'iridecomunicazione-installa-plugins', // Menu slug.
		'parent_slug'  => 'plugins.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
		'strings'      => array(
			'page_title'                      => __( 'Installa i Plugins richiesti', 'plugin-slug' ),
			'menu_title'                      => __( 'Installa Plugins', 'plugin-slug' ),
			// <snip>...</snip>
			'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
		)
	);

	tgmpa( $plugins, $config );

}

 // Registro il post type
 function custom_post_type() {

 	$labels = array(
 		'name'                  => _x( 'Landing', 'Post Type General Name', 'text_domain' ),
 		'singular_name'         => _x( 'Landing', 'Post Type Singular Name', 'text_domain' ),
 		'menu_name'             => __( 'Landing Page', 'text_domain' ),
 		'name_admin_bar'        => __( 'Landing Page', 'text_domain' ),
 		'archives'              => __( 'Landing Archivio', 'text_domain' ),
 		'attributes'            => __( 'Attributi Landing', 'text_domain' ),
 		'parent_item_colon'     => __( 'Landing Parente:', 'text_domain' ),
 		'all_items'             => __( 'Tutte le Landing', 'text_domain' ),
 		'add_new_item'          => __( 'Aggiungi Landin', 'text_domain' ),
 		'add_new'               => __( 'Nuova Landing', 'text_domain' ),
 		'new_item'              => __( 'Nuova Landing', 'text_domain' ),
 		'edit_item'             => __( 'Modifica Landing', 'text_domain' ),
 		'update_item'           => __( 'Aggiorna Landing', 'text_domain' ),
 		'view_item'             => __( 'Guarda Landing', 'text_domain' ),
 		'view_items'            => __( 'Guarda Landing', 'text_domain' ),
 		'search_items'          => __( 'Cerca Landing', 'text_domain' ),
 		'not_found'             => __( 'Landing non trovata', 'text_domain' ),
 		'not_found_in_trash'    => __( 'Non trata nel cestino', 'text_domain' ),
 		'featured_image'        => __( 'Immagine', 'text_domain' ),
 		'set_featured_image'    => __( 'Aggiungi un Immagine', 'text_domain' ),
 		'remove_featured_image' => __( 'Rimuovi immagine', 'text_domain' ),
 		'use_featured_image'    => __( 'Usa Immagine', 'text_domain' ),
 		'insert_into_item'      => __( 'Inserisci', 'text_domain' ),
 		'uploaded_to_this_item' => __( 'Aggiorna su questa Landing', 'text_domain' ),
 		'items_list'            => __( 'Lista Landing', 'text_domain' ),
 		'items_list_navigation' => __( 'Landing lista navigazione', 'text_domain' ),
 		'filter_items_list'     => __( 'Filtri landing', 'text_domain' ),
 	);
 	$args = array(
 		'label'                 => __( 'Landing', 'text_domain' ),
 		'description'           => __( 'Landing Page Iride Comunicazione', 'text_domain' ),
 		'labels'                => $labels,
 		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'custom-fields', 'page-attributes', 'post-formats', 'revisions' ),
 		'taxonomies'            => array( 'categorie_landing' ),
 		'hierarchical'          => true,
 		'public'                => true,
 		'show_ui'               => true,
 		'show_in_menu'          => true,
 		'menu_position'         => 5,
 		'menu_icon'             => 'dashicons-media-document',
 		'show_in_admin_bar'     => true,
 		'show_in_nav_menus'     => true,
 		'can_export'            => true,
 		'has_archive'           => false,
    'rewrite' => array('slug' => 'landingpage'),
 		'exclude_from_search'   => false,
 		'publicly_queryable'    => true,
 		'capability_type'       => 'page',
 	);
 	register_post_type( 'landingpage', $args );

    function include_template_function( $template_path ) {
      if ( get_post_type() == 'landingpage' ) {
          if ( is_single() ) {
              // checks if the file exists in the theme first,
              // otherwise serve the file from the plugin
              if ( $theme_file = locate_template( array ( 'single-landingpage.php' ) ) ) {
                  $template_path = $theme_file;
              } else {
                  $template_path = plugin_dir_path( __FILE__ ) . '/single-landingpage.php';
              }
          }
      }
      return $template_path;
  }

  add_filter( 'template_include', 'include_template_function', 1 );

 }

 add_action( 'init', 'custom_post_type', 0 );

/* Insert Contact Form */

function mod_contact7_form_content( $template, $prop ) {
  if ( 'form' == $prop ) {
    return implode( '', array(
          '[text* your-name placeholder"Nome.."]',
          '[text* your-cognome placeholder"Cognome.."]',
          '[email* your-email placeholder"Email.."]',
          '[text* your-telefono placeholder"Telefono.."]',
          '[text* your-citta placeholder"Città.."]',
          '[textarea* your-message placeholder"Messaggio.."]',
      '<div class="text-center">',
        '[submit class:btn-primary "Invia"]',
      '</div>'
    ) );
  } else {
    return $template;
  }
}
add_filter(
  'wpcf7_default_template',
  'mod_contact7_form_content',
  10,
  2
);

function mod_contact7_form_title( $template ) {
  $template->set_title( 'Form Landing Page' );
  return $template;
}
add_filter(
  'wpcf7_contact_form_default_pack',
  'mod_contact7_form_title'
);

/** Metabox **/

/* Creazione Metabox */

/** INIZIO ADWORDS **/

function codice_adwords_box() {

    add_meta_box(
        'codice-adwords',
        __( 'Codice Adwords', 'iridecomunicazione' ),
        'codice_adwords__meta_box_callback',
        'landingpage',
        'normal',
        'high'
    );
}

add_action( 'add_meta_boxes', 'codice_adwords_box' );

function codice_adwords__meta_box_callback( $post ) {

   // Add a nonce field so we can check for it later.
   wp_nonce_field( 'codice_adwords_nonce', 'codice_adwords_nonce' );

   $value1 = get_post_meta( $post->ID, '_codice_adwords', true );

   echo '<textarea style="width:100%" id="codice_adwords" name="codice_adwords">' . esc_attr( $value1 ) . '</textarea>';
}

/**
* When the post is saved, saves our custom data.
*
* @param int $post_id
*/
function save_codice_adwords_meta_box_data( $post_id ) {

   // Check if our nonce is set.
   if ( ! isset( $_POST['codice_adwords_nonce'] ) ) {
       return;
   }

   // Verify that the nonce is valid.
   if ( ! wp_verify_nonce( $_POST['codice_adwords_nonce'], 'codice_adwords_nonce' ) ) {
       return;
   }

   // If this is an autosave, our form has not been submitted, so we don't want to do anything.
   if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
       return;
   }

   // Check the user's permissions.
   if ( isset( $_POST['post_type'] ) && 'landingpage' == $_POST['post_type'] ) {

       if ( ! current_user_can( 'edit_page', $post_id ) ) {
           return;
       }

   }
   else {

       if ( ! current_user_can( 'edit_post', $post_id ) ) {
           return;
       }
   }

   /* OK, it's safe for us to save the data now. */

   // Make sure that it is set.
   if ( ! isset( $_POST['codice_adwords'] ) ) {
       return;
   }

   // Sanitize user input.
   $my_data1 = sanitize_text_field( $_POST['codice_adwords'] );

   // Update the meta field in the database.
   update_post_meta( $post_id, '_codice_adwords', $my_data1 );
}

add_action( 'save_post', 'save_codice_adwords_meta_box_data' );

/** FINE CODICE ADWORDS **/

/** INIZIO ANALYTICS **/

function codice_analytics_box() {

    add_meta_box(
        'codice-analytics',
        __( 'Codice Analytics', 'iridecomunicazione' ),
        'codice_analytics__meta_box_callback',
        'landingpage',
        'normal',
        'high'
    );
}

add_action( 'add_meta_boxes', 'codice_analytics_box' );

function codice_analytics__meta_box_callback( $post ) {

   // Add a nonce field so we can check for it later.
   wp_nonce_field( 'codice_analytics_nonce', 'codice_analytics_nonce' );

   $value2 = get_post_meta( $post->ID, '_codice_analytics', true );

   echo '<textarea style="width:100%" id="codice_analytics" name="codice_analytics">' . esc_attr( $value2 ) . '</textarea>';
}

/**
* When the post is saved, saves our custom data.
*
* @param int $post_id
*/
function save_codice_analytics_meta_box_data( $post_id ) {

   // Check if our nonce is set.
   if ( ! isset( $_POST['codice_analytics_nonce'] ) ) {
       return;
   }

   // Verify that the nonce is valid.
   if ( ! wp_verify_nonce( $_POST['codice_analytics_nonce'], 'codice_analytics_nonce' ) ) {
       return;
   }

   // If this is an autosave, our form has not been submitted, so we don't want to do anything.
   if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
       return;
   }

   // Check the user's permissions.
   if ( isset( $_POST['post_type'] ) && 'landingpage' == $_POST['post_type'] ) {

       if ( ! current_user_can( 'edit_page', $post_id ) ) {
           return;
       }

   }
   else {

       if ( ! current_user_can( 'edit_post', $post_id ) ) {
           return;
       }
   }

   /* OK, it's safe for us to save the data now. */

   // Make sure that it is set.
   if ( ! isset( $_POST['codice_analytics'] ) ) {
       return;
   }

   // Sanitize user input.
   $my_data2 = sanitize_text_field( $_POST['codice_analytics'] );

   // Update the meta field in the database.
   update_post_meta( $post_id, '_codice_analytics', $my_data2 );
}

add_action( 'save_post', 'save_codice_analytics_meta_box_data' );

/** FINE CODICE ANALYTICS **/

/** INIZIO Pixel Facebook **/

function codice_pixel_facebook_box() {

    add_meta_box(
        'codice-pixel-facebook',
        __( 'Codice Pixel Facebook', 'iridecomunicazione' ),
        'codice_pixel_facebook__meta_box_callback',
        'landingpage',
        'normal',
        'high'
    );
}

add_action( 'add_meta_boxes', 'codice_pixel_facebook_box' );

function codice_pixel_facebook__meta_box_callback( $post ) {

   // Add a nonce field so we can check for it later.
   wp_nonce_field( 'codice_pixel_facebook_nonce', 'codice_pixel_facebook_nonce' );

   $value3 = get_post_meta( $post->ID, '_codice_pixel_facebook', true );

   echo '<textarea style="width:100%" id="codice_pixel_facebook" name="codice_pixel_facebook">' . esc_attr( $value3 ) . '</textarea>';
}

/**
* When the post is saved, saves our custom data.
*
* @param int $post_id
*/
function save_codice_pixel_facebook_meta_box_data( $post_id ) {

   // Check if our nonce is set.
   if ( ! isset( $_POST['codice_pixel_facebook_nonce'] ) ) {
       return;
   }

   // Verify that the nonce is valid.
   if ( ! wp_verify_nonce( $_POST['codice_pixel_facebook_nonce'], 'codice_pixel_facebook_nonce' ) ) {
       return;
   }

   // If this is an autosave, our form has not been submitted, so we don't want to do anything.
   if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
       return;
   }

   // Check the user's permissions.
   if ( isset( $_POST['post_type'] ) && 'landingpage' == $_POST['post_type'] ) {

       if ( ! current_user_can( 'edit_page', $post_id ) ) {
           return;
       }

   }
   else {

       if ( ! current_user_can( 'edit_post', $post_id ) ) {
           return;
       }
   }

   /* OK, it's safe for us to save the data now. */

   // Make sure that it is set.
   if ( ! isset( $_POST['codice_pixel_facebook'] ) ) {
       return;
   }

   // Sanitize user input.
   $my_data3 = sanitize_text_field( $_POST['codice_pixel_facebook'] );

   // Update the meta field in the database.
   update_post_meta( $post_id, '_codice_pixel_facebook', $my_data3 );
}

add_action( 'save_post', 'save_codice_pixel_facebook_meta_box_data' );

/** FINE CODICE Pixel Facebook **/

/** INIZIO CODICE Google Tag Manager **/

function codice_tag_manager_box() {

    add_meta_box(
        'codice-tag-manager',
        __( 'Google Tag Manager', 'iridecomunicazione' ),
        'codice_tag_manager__meta_box_callback',
        'landingpage',
        'normal',
        'high'
    );
}

add_action( 'add_meta_boxes', 'codice_tag_manager_box' );

function codice_tag_manager__meta_box_callback( $post ) {

   // Add a nonce field so we can check for it later.
   wp_nonce_field( 'codice_tag_manager_nonce', 'codice_tag_manager_nonce' );

   $value4 = get_post_meta( $post->ID, '_codice_tag_manager', true );

   echo '<textarea style="width:100%" id="codice_tag_manager" name="codice_tag_manager">' . esc_attr( $value4 ) . '</textarea>';
}

/**
* When the post is saved, saves our custom data.
*
* @param int $post_id
*/
function save_codice_tag_manager_meta_box_data( $post_id ) {

   // Check if our nonce is set.
   if ( ! isset( $_POST['codice_tag_manager_nonce'] ) ) {
       return;
   }

   // Verify that the nonce is valid.
   if ( ! wp_verify_nonce( $_POST['codice_tag_manager_nonce'], 'codice_tag_manager_nonce' ) ) {
       return;
   }

   // If this is an autosave, our form has not been submitted, so we don't want to do anything.
   if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
       return;
   }

   // Check the user's permissions.
   if ( isset( $_POST['post_type'] ) && 'landingpage' == $_POST['post_type'] ) {

       if ( ! current_user_can( 'edit_page', $post_id ) ) {
           return;
       }

   }
   else {

       if ( ! current_user_can( 'edit_post', $post_id ) ) {
           return;
       }
   }

   /* OK, it's safe for us to save the data now. */

   // Make sure that it is set.
   if ( ! isset( $_POST['codice_tag_manager'] ) ) {
       return;
   }

   // Sanitize user input.
   $my_data4 = sanitize_text_field( $_POST['codice_tag_manager'] );

   // Update the meta field in the database.
   update_post_meta( $post_id, '_codice_tag_manager', $my_data4 );
}

add_action( 'save_post', 'save_codice_tag_manager_meta_box_data' );

/** FINE CODICE Google Tag Manager **/

/** INIZIO CODICE Hotjar Tracking Code  **/

function codice_tracking_code_box() {

    add_meta_box(
        'codice-tracking-code',
        __( 'Tracking Code', 'iridecomunicazione' ),
        'codice_tracking_code__meta_box_callback',
        'landingpage',
        'normal',
        'high'
    );
}

add_action( 'add_meta_boxes', 'codice_tracking_code_box' );

function codice_tracking_code__meta_box_callback( $post ) {

   // Add a nonce field so we can check for it later.
   wp_nonce_field( 'codice_codice_tracking_nonce', 'codice_codice_tracking_nonce' );

   $value5 = get_post_meta( $post->ID, '_codice_codice_tracking', true );

   echo '<textarea style="width:100%" id="codice_codice_tracking" name="codice_codice_tracking">' . esc_attr( $value5 ) . '</textarea>';
}

/**
* When the post is saved, saves our custom data.
*
* @param int $post_id
*/
function save_codice_codice_tracking_meta_box_data( $post_id ) {

   // Check if our nonce is set.
   if ( ! isset( $_POST['codice_codice_tracking_nonce'] ) ) {
       return;
   }

   // Verify that the nonce is valid.
   if ( ! wp_verify_nonce( $_POST['codice_codice_tracking_nonce'], 'codice_codice_tracking_nonce' ) ) {
       return;
   }

   // If this is an autosave, our form has not been submitted, so we don't want to do anything.
   if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
       return;
   }

   // Check the user's permissions.
   if ( isset( $_POST['post_type'] ) && 'landingpage' == $_POST['post_type'] ) {

       if ( ! current_user_can( 'edit_page', $post_id ) ) {
           return;
       }

   }
   else {

       if ( ! current_user_can( 'edit_post', $post_id ) ) {
           return;
       }
   }

   /* OK, it's safe for us to save the data now. */

   // Make sure that it is set.
   if ( ! isset( $_POST['codice_codice_tracking'] ) ) {
       return;
   }

   // Sanitize user input.
   $my_data5 = sanitize_text_field( $_POST['codice_codice_tracking'] );

   // Update the meta field in the database.
   update_post_meta( $post_id, '_codice_codice_tracking', $my_data5 );
}

add_action( 'save_post', 'save_codice_codice_tracking_meta_box_data' );

/** FINE CODICE Hotjar Tracking Code **/

/** INIZIO CODICE Shortcode Contact Form  **/

function codice_contact_form_box() {

    add_meta_box(
        'codice-contact-form',
        __( 'Shortcode Contact Form', 'iridecomunicazione' ),
        'codice_contact_form__meta_box_callback',
        'landingpage',
        'normal',
        'high'
    );
}

add_action( 'add_meta_boxes', 'codice_contact_form_box' );

function codice_contact_form__meta_box_callback( $post ) {

   // Add a nonce field so we can check for it later.
   wp_nonce_field( 'codice_contact_form_nonce', 'codice_contact_form_nonce' );

   $value6 = get_post_meta( $post->ID, '_codice_contact_form', true );

   echo '<textarea style="width:100%" id="codice_contact_form" name="codice_contact_form">' . esc_attr( $value6 ) . '</textarea>';
}

/**
* When the post is saved, saves our custom data.
*
* @param int $post_id
*/
function save_codice_contact_form_meta_box_data( $post_id ) {

   // Check if our nonce is set.
   if ( ! isset( $_POST['codice_contact_form_nonce'] ) ) {
       return;
   }

   // Verify that the nonce is valid.
   if ( ! wp_verify_nonce( $_POST['codice_contact_form_nonce'], 'codice_contact_form_nonce' ) ) {
       return;
   }

   // If this is an autosave, our form has not been submitted, so we don't want to do anything.
   if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
       return;
   }

   // Check the user's permissions.
   if ( isset( $_POST['post_type'] ) && 'landingpage' == $_POST['post_type'] ) {

       if ( ! current_user_can( 'edit_page', $post_id ) ) {
           return;
       }

   }
   else {

       if ( ! current_user_can( 'edit_post', $post_id ) ) {
           return;
       }
   }

   /* OK, it's safe for us to save the data now. */

   // Make sure that it is set.
   if ( ! isset( $_POST['codice_contact_form'] ) ) {
       return;
   }

   // Sanitize user input.
   $my_data5 = sanitize_text_field( $_POST['codice_contact_form'] );

   // Update the meta field in the database.
   update_post_meta( $post_id, '_codice_contact_form', $my_data5 );
}

add_action( 'save_post', 'save_codice_contact_form_meta_box_data' );

/** FINE CODICE Shortcode Contact Form **/


/** Fine Metabox **/



