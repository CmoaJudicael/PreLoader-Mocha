<?php 
/**
 * @package Preloader-Mocha
 */

//Ajoute les menus à la navigation du back end
 function addNavMenuBack()
 {
     add_menu_page
     (
         'Plugin Mocha', 
         'Preloader Mocha',
         'manage_options',
         'Mocha_Prod_Preloader_main_page',
         'menu_page',
         plugin_dir_url(__FILE__) . 'img/M_mocha.png'
     );
     add_submenu_page
     (
        'Mocha_Prod_Preloader_main_page', 
        'personnaliser',
        'Personnaliser',
        'manage_options',
        'Mocha_Prod_Preloader_personnaliser_page',
        'personnaliser_page',
        1
     );
     add_submenu_page
     (
        'Mocha_Prod_Preloader_main_page', 
        'Aide & Contact',
        'Aide & Contact',
        'manage_options',
        'Mocha_Prod_Preloader_contact_page',
        'contact_page',
        2
     );
 }
 function menu_page()
 {
     include 'menu_page.php';
 }
 function personnaliser_page()
 {
     include 'menu_personnaliser.php';
 }
 function contact_page()
 {
     include 'menu_contact.php';
 }
//Mise en place des éléments des options
    function mocha_plugin_settings() 
    { // whitelist options
        include 'option.php';
    }

//hook d'action pour mettre en place le menu et les options
    if ( is_admin() )
    { // admin actions
        add_action( 'admin_menu', 'addNavMenuBack' );
        add_action( 'admin_init', 'mocha_plugin_settings' );

      //initialisation type animation
    }
    if (! get_option('type_animation')=='')
    {
        // affiche le preloader
            add_action( 'wp_body_open', 'lunch_mocha_preloader', 1 );
     
            function lunch_mocha_preloader() 
            {
                include 'view.php';
            }
            function hook_javascript() {
                ?>
                    <SCRIPT LANGUAGE="JavaScript">
		                var date = new Date;
		                var charg_bef = date.getTime();	
	                </SCRIPT>
                <?php
            }
            add_action('wp_head', 'hook_javascript');

    }
?>