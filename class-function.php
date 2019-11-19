<?php
/**
 * Registro i plugin necessari
 */

function mb_register_required_plugins() {
	$plugins = array(
		array(
			'name' 				=> 'Advanced Custom Fields',
			'slug' 				=> 'advanced-custom-fields',
			'required' 			=> true,
			'force_activation'	=> true
		),
		array(
			'name' 				=> 'Contact Form 7',
			'slug' 				=> 'contact-form-7',
			'required' 			=> true,
			'force_activation'	=> true
		),
		array(
			'name' 				=> 'Contact Form 7 Database Addon – CFDB7',
			'slug' 				=> 'contact-form-cfdb7',
			'required' 			=> true,
			'force_activation'	=> true
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

    );
    tgmpa( $plugins );
}
